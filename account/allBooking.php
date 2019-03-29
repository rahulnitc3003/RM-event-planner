<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Tables</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../css/sb-admin.css" rel="stylesheet">
  </head> -->
  <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
  <?php include('../common/metaDescription.php'); ?>
  <body id="page-top">
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <a class="navbar-brand mr-1" href="index.html">RM Event</a>    
        <li class="nav-item active">
          <a class="nav-link" href="allBooking.php">
            <i class="fas fa-fw fa-table"></i>
            <span>All Booking</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="newBooking.php">
            <i class="fas fa-fw fa-folder"></i>
            <span>New Booking</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Past Booking</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>
      </ul>

      <div id="content-wrapper">
        <div class="container-fluid">
          <h2 style="text-align:center;">Admin Panel</h2>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">All Booking List</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead align="center">
                    <tr>
                      <th>Booking Id</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Mobile</th>
                      <th>Booking Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      include('connection.php');

                      $query = "select *from booking order by 1 ASC";
                      $run = mysqli_query($conn,$query);
                      $i = 1;
                      while($row = mysqli_fetch_array($run))
                      {
                        $id = $row[0];
                        $name = $row[1];
                        $address = $row[2];
                        $mobile = $row[3];
                        $booking_date = $row[4];
                        $tent_service = $row[5];
                        $caterine_service = $row[6];
                        $dj_service = $row[7];
                        ?>
                        <tr>
                          <td align="center"><?php echo $id; ?></td>
                          <td align="center"><?php echo $name; ?></td>
                          <td align="center"><i><?php echo $address; ?></i></td>
                          <td align="center"><?php echo $mobile; ?></td>
                          <td align="center"><?php echo $booking_date; ?></td>
                          <!--<td align="center"><?php echo $tent_service == 0 ? "Yes" : "No"; ?></td>
                          <td align="center"><?php echo $caterine_service == 0 ? "Yes" : "No"; ?></td>
                          <td align="center"><?php echo $dj_service == 0 ? "Yes" : "No"; ?></td> -->
                          <td align="center">
                            <button type="button" class="btn btn-default btn-sm" title="Edit Information" data-toggle="modal" data-target="#exampleModal">
                              <span class="glyphicon glyphicon-pencil">View</span>
                            </button>
                            <button type="button" class="btn btn-default btn-sm" title="View Information">
                              <span class="glyphicon glyphicon-eye-open"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-sm" title="Delete">
                              <span class="glyphicon glyphicon-trash"></span>
                            </button>
                          </td>
                        </tr>
                        <?php
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <!-- Button trigger modal -->
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Booking Status</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Booking Id:<br>
                  User Name:<br>
                  Village Name:<br>
                  District Name: <br>
                  Address:<br>
                  Booking Date: <br>
                  <b>Services</b><br>
                  Tent Service: <br>
                  Caterine Service: <br>
                  DJ Service: <br>
                  <b>Accounts</b><br>
                  Tent Service Price: <input type="text" name="tentPrice"><br>
                  Caterine Service Price: <input type="text" name="caterinePrice"><br>
                  DJ Service Price: <input type="text" name="djPrice"><br>
                  Booking Status: Confirmed/Not Confirmed
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Confirm Booking</button>
                </div>
              </div>
            </div>
          </div>


        </div>
      <!-- </div> -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <script src="../jquery/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../datatables/jquery.dataTables.js"></script>
    <script src="../datatables/dataTables.bootstrap4.js"></script>
    <script src="../datatables/datatables-demo.js"></script>
  </body>
</html>
