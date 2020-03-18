<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Add new item</title>

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
        <a class="nav-link collapsed active" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
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
            <a class="collapse-item" href="<?php echo base_url(); ?>index.php/Logout">Logout</a>
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $username ?></span>
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
          <h1 class="h3 mb-2 text-gray-800" hidden>Add new item</h1>
          <!-- DataTables Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Item</h6>
            </div>
            <div class="card-body">
              <form id="itemAdd" method="POST" action="<?php echo base_url() ?>index.php/NewItem/add">

                <div class="col px-md-5 mt-3">
                  <span class="tim-note"> <label for="ItemID">
                      <H7> Item ID</H7>
                    </label> </span>
                  <span class="tim-note"> <input type="text" name="ItemID" class="form-control" id="ItemID" placeholder="e.g. 621000002017233" required> </span>
                </div>

                <div class="col px-md-5 mt-3">
                  <span class="tim-note"> <label for="ItemSN">
                      <H7> Serial Number</H7>
                    </label> </span>
                  <span class="tim-note"> <input type="text" name="ItemSN" class="form-control" id="ItemSN" placeholder="e.g. 621000002017233-01" required> </span>
                </div>

                <div class="col px-md-5 mt-3">
                  <span class="tim-note"> <label for="ItemName">
                      <H7> Name</H7>
                    </label> </span>
                  <span class="tim-note"> <input type="text" name="ItemName" class="form-control" id="ItemName" placeholder="e.g. Pointer" required> </span>
                </div>

                <div class="col px-md-5 mt-3">
                  <span class="tim-note"> <label for="ItemModel">
                      <H7> Model</H7>
                    </label> </span>
                  <span class="tim-note"> <input type="text" name="ItemModel" class="form-control" id="ItemModel" placeholder="e.g. KL-01T"> </span>
                </div>

                <div class="col px-md-5 mt-3">
                  <span class="tim-note"> <label for="ItemBrand">
                      <H7> Brand</H7>
                    </label> </span>
                  <span class="tim-note"> <input type="text" name="ItemBrand" class="form-control" id="ItemBrand" placeholder="e.g. Lenovo"> </span>
                </div>

                <div class="col px-md-5 mt-3">
                  <span class="tim-note"> <label for="ItemDescript">
                      <H7> Description</H7>
                    </label> </span>
                  <span class="tim-note"> <input type="text" name="ItemDescript" class="form-control" id="ItemDescript" placeholder="e.g. A laser pointer"> </span>
                </div>

                <div class="col px-md-5 mt-3">
                  <span class="tim-note"> <label for="LocalID">
                      <H7> Location</H7>
                    </label> </span>
                  <div class="col-md-6">
                    <select id="LocalID" name="LocalID" class="form-control">
                      <?php foreach ($this->Query->getLocationAllFromDB() as $item) {
                        echo "<option value='" . $item['LocalID'] . "'>" . $item['LocalName'] . "</option>";
                      } ?>
                    </select>
                  </div>
                </div>

                <div class="col px-md-5 mt-3">
                  <span class="tim-note"> <label for="CatID">
                      <H7> Category</H7>
                    </label> </span>
                  <div class="col-md-6">
                    <select id="CatID" name="CatID" class="form-control">
                      <?php foreach ($this->Query->getCategoryAllFromDB() as $item) {
                        echo "<option value='" . $item['CatID'] . "'>" . $item['CatName'] . "</option>";
                      } ?>
                    </select>
                  </div>
                </div>

                <div class="col px-md-5 mt-3">
                  <span class="tim-note"> <label for="StatusID">
                      <H7> Status</H7>
                    </label> </span>
                  <div class="col-md-6">
                    <select id="StatusID" name="StatusID" class="form-control">
                      <?php foreach ($this->Query->getStatusAllFromDB() as $item) {
                        echo "<option value='" . $item['StatusID'] . "'>" . $item['StatusName'] . "</option>";
                      } ?>
                    </select>
                  </div>
                </div>

                <div class="col px-md-5 mt-3">
                  <span class="tim-note"> <label for="ItemYear">
                      <H7> Bought Year</H7>
                    </label> </span>
                  <span class="tim-note"> <input type="text" name="ItemYear" class="form-control" id="ItemYear" required placeholder="e.g. 2019" pattern="([0-9]{4})"> </span>
                </div>

                <div class="col px-md-5 mt-3">
                  <span class="tim-note"> <label for="ItemImage">
                      <H7> Image</H7>
                    </label> </span>
                  <span class="tim-note"> <input type="file" name="ItemImage" class="form-control" id="ItemImage" accept="image/*"> </span>
                </div>

                <br>
                <div class="col px-md-5 mt-3">
                  <input type="submit" name="btn_submit" id="btn_submit" class="btn btn-success" value="Submit" onclick="return confirm('ARE YOU SURE YOU WANT TO ADD NEW ITEM')">
                  <a type="button" class="btn btn-danger" id="btn_cancle" name="btn_cancle" href="ItemList">Cancel</a>
                  <input type="reset" name="btn_reset" id="btn_reset" class="btn btn-info" value="Reset">
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

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