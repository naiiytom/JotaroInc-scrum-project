<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Maintenance Form</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                    <a class="list-group-item" href="<?php echo base_url();?>maintenance"><i class="fa fa-users" aria-hidden="true"></i>&nbsp; แจ้งซ่อม</a>
                    
                </div>
            </div>
            <div class="col-9">
                <div class="section-intro">

                    <div class="form-group">
                        <br>
                        <div class="form-group">
                            <label for="exampleInputPassword1">อาการ</label>
                            <input type="text" name=desc class="form-control" id="exampleInputPassword1" placeholder=""  required>
                        </div>
                        <label for="exampleInputPassword1">อัพโหลดรูปภาพ</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="Img" id="validatedCustomFile" required accept="image/*">
                            <label class="custom-file-label" for="validatedCustomFile">เลือกรูปภาพ...</label>
                        </div>
                        <div>
                        <br>
                        <a type="button" class="btn btn-success" href="<?php echo base_url();?>sweetalert" >แจ้งซ่อม</a>
                        <a type="button" class="btn btn-danger" href="<?php echo base_url();?>showresult" >ยกเลิก</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </body>
</html>
