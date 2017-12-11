<?php session_start(); ?>
<?php require_once "../../check-login.php"; ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php
  define("URL_IMAGE", "http://localhost:8080/final-course/public/uploads/");
?>
<!DOCTYPE html>

<head>
 
 <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">

  <meta name="author" content="">

  <title>Huỳnh Công Trí - 15CDTH11</title>

  <!-- Bootstrap core CSS-->
  <link href="../../../public/BS/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->

  <link href="../../../public/BS/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->

  <link href="../../../public/BS/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->

  <link href="../../../public/BS/css/sb-admin.css" rel="stylesheet">

</head>


<body class="fixed-nav sticky-footer bg-dark" id="page-top">

  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">

    <a class="navbar-brand" href="http://localhost:8080/final-course/app/index.php">Mega Shop</a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">

      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">

          <a class="nav-link" href="http://localhost:8080/final-course/app/admin/index.php">

            <i class="fa fa-fw fa-home"></i>

            <span class="nav-link-text">Home</span>

          </a>

        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">

          <a class="nav-link" href="http://localhost:8080/final-course/app/login.php">

            <i class="fa fa-fw fa-sign-in"></i>

            <span class="nav-link-text">Page Login</span>

          </a>

        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">

          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">

            <i class="fa fa-fw fa-users"></i>

            <span class="nav-link-text">Users</span>

          </a>

          <ul class="sidenav-second-level collapse" id="collapseComponents">

            <li>

              <a href="http://localhost:8080/final-course/app/admin/users/index.php">Danh Sách Users</a>

            </li>

            <li>

              <a href="http://localhost:8080/final-course/app/admin/users/new.php">Thêm Mới User</a>

            </li>
 
         </ul>

        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">

          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">

            <i class="fa fa-fw fa-shopping-cart"></i>

            <span class="nav-link-text">Products</span>

          </a>

          <ul class="sidenav-second-level collapse" id="collapseExamplePages">

            <li>

              <a href="http://localhost:8080/final-course/app/admin/products/index.php">Danh Sách Products</a>

            </li>

            <li>

              <a href="http://localhost:8080/final-course/app/admin/products/new.php">Thêm Mới Products</a>

            </li>

          </ul>

        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">

          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">

            <i class="fa fa-fw fa-book"></i>

            <span class="nav-link-text">Catalogs</span>

          </a>

          <ul class="sidenav-second-level collapse" id="collapseMulti">

            <li>

              <a href="http://localhost:8080/final-course/app/admin/catalogs/index.php">Danh Sách Catalogs</a>

            </li>

            <li>

              <a href="http://localhost:8080/final-course/app/admin/catalogs/new.php">Thêm Mới Catalogs</a>

            </li>

          </ul>

        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">

          <a class="nav-link" href="#">

            <i class="fa fa-fw fa-link"></i>

            <span class="nav-link-text">Link</span>

          </a>

        </li>

      </ul>

      <ul class="navbar-nav sidenav-toggler">

        <li class="nav-item">

          <a class="nav-link text-center" id="sidenavToggler">

            <i class="fa fa-fw fa-angle-left"></i>

          </a>

        </li>

      </ul>

      <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

            <i class="fa fa-fw fa-envelope"></i>

            <span class="d-lg-none">Messages

              <span class="badge badge-pill badge-primary">12 New</span>

            </span>

            <span class="indicator text-primary d-none d-lg-block">

              <i class="fa fa-fw fa-circle"></i>

            </span>

          </a>

          <div class="dropdown-menu" aria-labelledby="messagesDropdown">

            <h6 class="dropdown-header">New Messages:</h6>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="#">

              <strong>David Miller</strong>

              <span class="small float-right text-muted">11:21 AM</span>

              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>

            </a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="#">

              <strong>Jane Smith</strong>

              <span class="small float-right text-muted">11:21 AM</span>

              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>

            </a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="#">

              <strong>John Doe</strong>

              <span class="small float-right text-muted">11:21 AM</span>

              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>

            </a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item small" href="#">View all messages</a>

          </div>

        </li>

        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

            <i class="fa fa-fw fa-bell"></i>

            <span class="d-lg-none">Alerts

              <span class="badge badge-pill badge-warning">6 New</span>

            </span>

            <span class="indicator text-warning d-none d-lg-block">

              <i class="fa fa-fw fa-circle"></i>

            </span>

          </a>

          <div class="dropdown-menu" aria-labelledby="alertsDropdown">

            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="#">

              <span class="text-success">

                <strong>

                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>

              </span>

              <span class="small float-right text-muted">11:21 AM</span>

              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>

            </a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="#">

              <span class="text-danger">

                <strong>

                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>

              </span>

              <span class="small float-right text-muted">11:21 AM</span>

              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>

            </a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="#">

              <span class="text-success">

                <strong>

                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>

              </span>

              <span class="small float-right text-muted">11:21 AM</span>

              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>

            </a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item small" href="#">View all alerts</a>

          </div>

        </li>

        <li class="nav-item">

          <form class="form-inline my-2 my-lg-0 mr-lg-2">

            <div class="input-group">

              <input class="form-control" type="text" placeholder="Search for...">

              <span class="input-group-btn">

                <button class="btn btn-primary" type="button">

                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item active">New Products</li>
      </ol>
      <!-- Example DataTables Card-->
    </div>
    <div class="wrapper" style="margin-left: 50px; margin-right: 50px; margin-bottom: 50px;">
    <form method="post" action="create.php">
      <div class="row">
        <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
      </div>
      <div>
        <h1>Tao moi san pham</h1>
      </div>
      <div class="row">
        <label>Ten san pham:</label>
        <input class="form-control" type="text" name="name">
      </div>
      <div class="row">
        <label>Anh san pham:</label>
        <input class="form-control"  type="text" name="image">
      </div>
      <div class="row">
        <label>Mo ta san pham:</label>
        <textarea class="form-control" name="description"></textarea>
      </div>
      <div class="row">
        <label>So luong:</label>
        <input class="form-control"  type="text" name="qty">
      </div>
      <div class="row">
        <label>Gia moi san pham:</label>
        <input class="form-control"  type="text" name="price">
      </div>
      <div class="row">
        <label>Danh muc:</label>
        <select class="form-control" name="catalog_id">
          <?php
            $sql = "select * from catalogs";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){ ?>
                  <option value="<?php echo $row['id']; ?>"><?php echo $row["name"]; ?></option>
          <?php    }
            }
          ?>
        </select>
      </div>
      <br>
      <div class="row">
        <button class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">Logout</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="http://localhost:8080/final-course/app/admin/logoutadmin.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->

    <script src="../../../public/BS/vendor/jquery/jquery.min.js"></script>

    <script src="../../../public/BS/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../public/BS/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="../../../public/BS/vendor/datatables/jquery.dataTables.js"></script>

    <script src="../../../public/BS/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->

    <script src="../../../public/BS/js/sb-admin.min.js"></script>

    <!-- Custom scripts for this page-->

    <script src="../../../public/BS/js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
<?php unset($_SESSION["flash"]); ?>