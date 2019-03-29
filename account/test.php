<?php
  $db = new mysqli('localhost','root','','rm_event');//set your database handler
  if($db){
    echo "true";
  }
  $query = "SELECT dist_id,dist_name FROM district";
  $result = $db->query($query);

  while($row = $result->fetch_assoc()){
    $categories[] = array("id" => $row['dist_id'], "val" => $row['dist_name']);
  }

  $query = "SELECT village_id, dist_id, village_name FROM village";
  $result = $db->query($query);

  while($row = $result->fetch_assoc()){
    $subcats[$row['dist_id']][] = array("id" => $row['village_id'], "val" => $row['village_name']);
  }

  $jsonCats = json_encode($categories);
  $jsonSubCats = json_encode($subcats);
?>
<?php
  echo "var categories = $jsonCats; \n";
  echo "var subcats = $jsonSubCats; \n";
?>

<!docytpe html>
<html>
  <head>
  <script type='text/javascript'>
      <?php
        echo "var categories = $jsonCats; \n";
        echo "var subcats = $jsonSubCats; \n";
      ?>
      function loadCategories(){
        var select = document.getElementById("categoriesSelect");
        

        select.onchange = updateSubCats;
        for(var i = 0; i < categories.length; i++){
          select.options[i] = new Option(categories[i].val,categories[i].id);
        }
      }
      function updateSubCats(){
        var catSelect = this;
        var catid = this.value;
        var subcatSelect = document.getElementById("subcatsSelect");
        subcatSelect.options.length = 0; //delete all options if any present
        for(var i = 0; i < subcats[catid].length; i++){
          subcatSelect.options[i] = new Option(subcats[catid][i].val,subcats[catid][i].id);
        }
      }
    </script>

  </head>

  <body onload='loadCategories()'>
    <select id='categoriesSelect'>
    </select>

    <select id='subcatsSelect'>
      <option value="NULL">Select Village</option>
    </select>

  </body>
</html>