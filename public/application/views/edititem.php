<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class='App home'>
    <div class="card-body">
          <form action="UpdateItem" method="POST">
          <?php foreach($data as $row) { ?>
              <div class="col px-md-5 mt-3">
                <span class="tim-note"> <label for="ItemID"><H7> รหัสครุภัณฑ์</H7></label> </span>
                <span class="tim-note"> <input type="text" name="ItemID" class="form-control" id="ItemID" value="<?php echo $row->ItemID; ?>"  required> </span>
              </div>
              <div class="col px-md-5 mt-3">
                <span class="tim-note"> <label for="ItemName"><H7>ชื่อ</H7></label> </span>
                <span class="tim-note"> <input type="text" name="ItemName" class="form-control" id="ItemName" value="<?php echo $row->itemName; ?>"  required> </span>
              </div>
              <div class="col px-md-5 mt-3">
                <span class="tim-note"> <label for="ItemModel"><H7> รุ่น</H7></label> </span>  
                <span class="tim-note"> <input type="text" name="ItemModel" class="form-control" id="ItemModel" value="<?php echo $row->ItemModel; ?>"  required> </span>
              </div>
              <div class="col px-md-5 mt-3">  
                <span class="tim-note"> <label for="ItemBrand"><H7> ยี่ห้อ</H7></label> </span>  
                <span class="tim-note"> <input type="text" name="ItemBrand" class="form-control" id="ItemBrand" value="<?php echo $row->ItemBrand; ?>" required> </span>
              </div>
              <div class="col px-md-5 mt-3">  
                <span class="tim-note"> <label for="ItemDescript"><H7> คำอธิบาย</H7></label> </span>
                <span class="tim-note"> <input type="text" name="ItemDescript" class="form-control" id="ItemDescript" value="<?php echo $row->ItemDescript; ?>"  required> </span>
              </div>
              <div class="col px-md-5 mt-3">  
                <span class="tim-note"> <label for="LocalName"><H7> สถานที่</H7></label> </span>
                <span class="tim-note"> <input type="text" name="LocalName" class="form-control" id="LocalName" value="<?php echo $row->LocalName; ?>"  required> </span>
              </div>
              <div class="col px-md-5 mt-3">  
                <span class="tim-note"> <label for="CatName"><H7> ประเภท</H7></label> </span>
                <span class="tim-note"> <input type="text" name="CatName" class="form-control" id="CatName" value="<?php echo $row->CatName; ?>"   required> </span>
              </div>
              <div class="col px-md-5 mt-3">  
                <span class="tim-note"> <label for="StatusName"><H7> สถานะ</H7></label> </span>
                <span class="tim-note"> <input type="text" name="StatusName" class="form-control" id="StatusName" value="<?php echo $row->StatusName; ?>"  required> </span>
              </div>
              <div class="col px-md-5 mt-3">  
                <span class="tim-note"> <label for="ItemYear"><H7> วันที่ซื้อ</H7></label> </span>
                <span class="tim-note"> <input type="text" name="ItemYear" class="form-control" id="ItemYear" value="<?php echo $row->ItemYear; ?>"  required> </span>
              </div>
              <div class="col px-md-5 mt-3">  
                <span class="tim-note"> <label for="ItemSN"><H7> รหัสประจำเครื่อง</H7></label> </span>
                <span class="tim-note"> <input type="text" name="ItemSN" class="form-control" id="ItemSN" value="<?php echo $row->ItemSN; ?>"   required> </span>
              </div>
              <br>
              <div class="col px-md-5 mt-3">
					<input type="submit" name="btn_submit" id="btn_submit" class="btn btn-success" value="ยืนยัน การแก้ไข">
					<a type="button" class="btn btn-danger" id="btn_cancle" name="btn_cancle" href="itemlist">ยกเลิก</a>			
        </div>
        <?php } ?>
          </form>          
    </div>
</div>