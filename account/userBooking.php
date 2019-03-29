<?php
  include('connection.php');
//   if($db){
//     echo "true";
//   }
  $query = "SELECT * FROM district";
  $result = $conn->query($query);

  while($row = $result->fetch_assoc()){
    $categories[] = array("dist_id" => $row['dist_id'], "dist_name" => $row['dist_name']);
  }

  $query = "SELECT * FROM village";
  $result = $conn->query($query);

  while($row = $result->fetch_assoc()){
    $subcats[$row['dist_id']][] = array("village_id" => $row['village_id'], "village_name" => $row['village_name']);
  }

  $jsonCats = json_encode($categories);
  $jsonSubCats = json_encode($subcats);



  if(isset($_POST['submit']))
	{
        $name = $_POST['name'];
        // $email = $_POST['email'];
		// $mobile = $_POST['mobile'];
        $district = $_POST['district'];
        $village = $_POST['village'];
        $address = $_POST['address'];
        $date = $_POST['booking_date'];
        
        echo "$name <br>";
        // echo "$email <br>";
        // echo "$mobile<br>";
        echo "$district <br>";
        echo "$village <br>";
        echo "$address <br>";
        echo "$date<br>";
        if(!isset($_POST['tent_service'])) {
            $tent_service = 0;
        }else{
            $tent_service = 1;            
        }
        if(!isset($_POST['caterine_service'])) {
            $caterine_service = 0;            
        }else{
            $caterine_service = 1;
        }
        if(!isset($_POST['dj_service'])) {
            $dj_service = 0;            
        }else{
            $dj_service = 1;            
        }
        $query = "INSERT INTO `booking`(`name`, `village`, `district`, `address`, `booking_date`, `tent_service`, `caterine_service`, `dj_service`) VALUES ('$name', '$village', '$district', '$address', '$date', '$tent_service', '$caterine_service', '$dj_service')";
        echo $query;
        echo $db;
        if(mysqli_query($conn,$query))
        {
            echo "<script>alert('Data has been inserted')</script>";
        }
        else
        {
            echo "<script>alert('Error')</script>";
        }
    }

?>
<?php
//   echo "var categories = $jsonCats; \n";
//   echo "var subcats = $jsonSubCats; \n";
?>

<!docytpe html>
<html>
  <head>
  </head>

  <body onload='loadCategories()'>
  <form action="userBooking.php" method="post">
    Name<input type="text" name="name" require><br>
    District
    <select id='categoriesSelect' name="district">
    </select><br>
    Village
    <select id='subcatsSelect' name="village">
      <option value="NULL">--Select Village--</option>
    </select><br>
    Address<input type="text" name="address" require><br>
    Booking Date<input type="date" name="booking_date" require><br>
    Tent Service <input type="checkbox" name="tent_service" value="tent_service"><br>
    caterine Service <input type="checkbox" name="caterine_service"value="caterine_service"><br>
    DJ Service <input type="checkbox" name="dj_service" value="dj_service"><br>
    <input type="submit" value="SUBMIT" name="submit">
    </form>
  </body>
</html>

<?php

    
?>


<script type='text/javascript'>
      <?php
        echo "var categories = $jsonCats; \n";
        echo "var subcats = $jsonSubCats; \n";
      ?>
      function loadCategories(){

        var list = document.getElementById("categoriesSelect");
        // list.onchange = updateSubCats;
        list.add(new Option("--Select Distict--", "NULL"));
        for(var i in categories) {
            // var id = categories[i].val;
            // var val = categories[i].id;
            list.add(new Option(categories[i].dist_name, categories[i].dist_name));
        }
        list.onchange = updateSubCats;

      }
      function updateSubCats(){
        var catSelect = this;
        var dist_id = this.value;
        
        var index = categories.findIndex(obj => obj.dist_name==dist_id);
        index++;
        
        if (dist_id == "NULL") {
            // alert(dist_id);
            var list = document.getElementById("subcatsSelect");
            list.options.length = 0; //delete all options if any present
            list.add(new Option("--Select Village--", "NULL"));
        }
        else{
            var subcatSelect = document.getElementById("subcatsSelect");
            subcatSelect.options.length = 0; //delete all options if any present
            for(var i = 0; i < subcats[index].length; i++){
                // subcatSelect.add(new Option("--Village--", "NULL"));
                subcatSelect.options[i] = new Option(subcats[index][i].village_name,subcats[index][i].village_name);
            }
        }
      }
    </script>