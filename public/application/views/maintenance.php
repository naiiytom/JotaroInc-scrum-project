<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Repair Notify Page</title>
</head>

<body>
 

    <!--header-->
    <div class="container fixed">
    <h1 style="background-color:rgba(255, 99, 71, 0.2); text-align:center;">ระบบยืม-คืนครุภัณฑ์</h1><br><br>
    </div>
    <!--header-->
    
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <a class="list-group-item" href="#"><i class="fa fa-users" aria-hidden="true"></i>&nbsp; แจ้งซ่อม</a>
                    
                </div>
            </div>
            <div class="col-9">
                <div class="section-intro">
                    <div class="input-group margin-bottom-sm">
                        <form class="form-inline">
                            <div class="form-group mx-sm-3 mb-2">
                            <label for="inputSearch" class="sr-only">ค้นหา</label>
                            <input type="text" class="form-control" id="inputSearch" placeholder="ค้นหา">
                            </div>
                            <a href="<?php echo base_url();?>showresult" type="button" class="btn btn-primary"> 
                                <i class="fa fa-search"  aria-hidden="true"></i>
                            </a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

   </body>
</html>
