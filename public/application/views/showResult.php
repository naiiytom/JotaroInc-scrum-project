<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Show Search Result</title>
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
                    <a class="list-group-item" href="<?php echo base_url();?>JotaroInc-scrum-project/public/index.php/maintenance"><i class="fa fa-users" aria-hidden="true"></i>&nbsp; แจ้งซ่อม</a>
                    
                </div>
            </div>
            <div class="col-9">
                <div class="section-intro">
                    <h4>แสดงรายการค้นหา</h4>
                    <a type="button" class="btn btn-success" href="<?php echo base_url();?>JotaroInc-scrum-project/public/index.php/maintenanceForm" >เลือกรายการ</a>
                </div>
            </div>
        </div>
    </div>

   </body>
</html>
