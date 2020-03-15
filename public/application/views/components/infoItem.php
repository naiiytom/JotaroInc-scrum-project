
<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Maintence</title>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-torii-gate"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Jotaro Inc <sup>3</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item" href="<?php echo base_url(); ?>index.php/ItemList">Item list</a>
            <a class="collapse-item" href="<?php echo base_url(); ?>index.php/RepairList">Repair list</a>
            <a class="collapse-item" href="<?php echo base_url(); ?>index.php/AccountList">Account list</a>
            <a class="collapse-item" href="<?php echo base_url(); ?>index.php/ApproveRegister">Approve register</a>
            <a class="collapse-item" href="<?php echo base_url(); ?>index.php/ApproveMaintence">Approve maintence</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">User Pages:</h6>
            <a class="collapse-item" href="<?php echo base_url(); ?>index.php/Maintenance">Maintenance</a>
            <a class="collapse-item" href="<?php echo base_url(); ?>index.php/MaintenanceHistory">Maintenance History</a>
            <div class="collapse-divider"></div>
          </div>
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="<?php echo base_url(); ?>index.php/Login">Login</a>
            <a class="collapse-item" href="<?php echo base_url(); ?>index.php/Register">Register</a>
            <a class="collapse-item" href="<?php echo base_url(); ?>">Forgot Password</a>
            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
           <h1 class="h3 mb-4 text-gray-800">Item Infomation</h1>


        </div>
        <!-- /.container-fluid -->
        <div class="card shadow mb-4">
              <div class="card-header py-3">
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <?php foreach ($data as $row) { ?>
                    <thead>
                      <tr><th>Item ID</th><th><?php echo $row->ItemID; ?></th></tr>
                      <tr><th>Item NAME</th><th><?php echo $row->ItemName; ?></th></tr>
                      <tr><th>Item MODEL</th><th><?php echo $row->ItemModel; ?></th></tr>
                      <tr><th>Item S/N</th><th><?php echo $row->ItemSN; ?></th></tr>
                      <tr><th>Item BRAND</th><th><?php echo $row->ItemBrand; ?></th></tr>
                      <tr><th>Item YEAR</th><th><?php echo $row->ItemYear; ?></th></tr>
                      <tr><th>Item DESCRIPTION</th><th><?php echo $row->ItemDescript; ?></th></tr>
                      <tr><th>Item LOCATION</th><th><?php echo $row->LocalName; ?></th></tr>
                      <tr><th>Item STATUS</th><th><?php echo $row->StatusName; ?></th></tr>
                      <tr><th>Item CATEGORY</th><th><?php echo $row->CatName; ?></th></tr>
                      <tr><td valign="top"><b>Item IMAGE</b></th><th><img src="data:image/png;base64,iVBORw0KGgo
                      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
                      DL73t/LCR988MEHH3zwwQcvw/8AqorVV0x9FJcAAAAASUVORK5CYII=" alt="Italian Trulli"></td></tr>
                    </thead>
                  <?php } ?>
                    <tbody> 
                    </tbody>
                  </table>
                </div>
                <td><a class="btn btn-success" href="<?php echo base_url(); ?>index.php/ItemList" role="button">BACK</a></td>
              </div>
            </div>
        </div>
        <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Jotaro Inc. 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/Login">Logout</a>
        </div>
      </div>
    </div>
  </div>

</body>
</html>

