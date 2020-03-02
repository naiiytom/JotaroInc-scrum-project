<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class='App home'>
    <div class="card-body">
          <form>
              <div class="col px-md-5 mt-3">
                <span class="tim-note"> <label for="InputDeviceID"><H7> รหัสครุภัณฑ์</H7></label> </span>
                <span class="tim-note"> <input type="text" name="ItemID" class="form-control" id="ItemID" value="" placeholder="เช่น 1"  required> </span>
              </div>
              <div class="col px-md-5 mt-3">
                <span class="tim-note"> <label for="InputDeviceID"><H7> รุ่น</H7></label> </span>  
                <span class="tim-note"> <input type="text" name="ItemModel" class="form-control" id="ItemModel" value="" placeholder="เช่น 1"  required> </span>
              </div>
              <div class="col px-md-5 mt-3">  
                <span class="tim-note"> <label for="InputDeviceID"><H7> ยี่ห้อ</H7></label> </span>  
                <span class="tim-note"> <input type="text" name="ItemBrand" class="form-control" id="ItemBrand" value="" placeholder="เช่น 1"  required> </span>
              </div>
              <div class="col px-md-5 mt-3">  
                <span class="tim-note"> <label for="InputDeviceID"><H7> คำอธิบาย</H7></label> </span>
                <span class="tim-note"> <input type="text" name="ItemDescript" class="form-control" id="ItemDescript" value="" placeholder="เช่น 1"  required> </span>
              </div>
              <div class="col px-md-5 mt-3">  
                <span class="tim-note"> <label for="InputDeviceID"><H7> สถานที่</H7></label> </span>
                <span class="tim-note"> <input type="text" name="LocalName" class="form-control" id="LocalName" value="" placeholder="เช่น 1"  required> </span>
              </div>
              <div class="col px-md-5 mt-3">  
                <span class="tim-note"> <label for="InputDeviceID"><H7> ประเภท</H7></label> </span>
                <span class="tim-note"> <input type="text" name="CatName" class="form-control" id="CatName" value="" placeholder="เช่น 1"  required> </span>
              </div>
              <div class="col px-md-5 mt-3">  
                <span class="tim-note"> <label for="InputDeviceID"><H7> สถานะ</H7></label> </span>
                <span class="tim-note"> <input type="text" name="StatusName" class="form-control" id="StatusName" value="" placeholder="เช่น 1"  required> </span>
              </div>
              <div class="col px-md-5 mt-3">  
                <span class="tim-note"> <label for="InputDeviceID"><H7> วันที่ซื้อ</H7></label> </span>
                <span class="tim-note"> <input type="text" name="ItemDate" class="form-control" id="ItemDate" value="" placeholder="เช่น 1"  required> </span>
              </div>
              <div class="col px-md-5 mt-3">  
                <span class="tim-note"> <label for="InputDeviceID"><H7> รหัสประจำเครื่อง</H7></label> </span>
                <span class="tim-note"> <input type="text" name="ItemSN" class="form-control" id="ItemSN" value="" placeholder="เช่น 1"  required> </span>
              </div>
              <br>
              <div class="col px-md-5 mt-3">
					<input type="submit" name="btn_submit" id="btn_submit" class="btn btn-success" value="ยืนยัน การแก้ไข">
					<a type="button" class="btn btn-danger" id="btn_cancle" name="btn_cancle" href="itemlist">ยกเลิก</a>			
				</div>
          </form>          
    </div>
</div>