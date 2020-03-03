<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class='App home'>
  <div class="card-body">
    <?php foreach ($data as $row) { ?>
      <form enctype="multipart/form-data" method="POST" action="<?= base_url() ?>upload?ItemSN=<?php echo $row->ItemSN ?>">

        <div class="col px-md-5 mt-3">
          <span class="tim-note">
            <H7> รหัสครุภัณฑ์ : <?php echo $row->ItemID; ?> </H7>
          </span>
        </div>
        <div class="col px-md-5 mt-3">
          <span class="tim-note">
            <H7> ชื่อ : <?php echo $row->itemName; ?> </H7>
          </span>
        </div>
        <div class="col px-md-5 mt-3">
          <span class="tim-note">
            <H7> รุ่น : <?php echo $row->ItemModel; ?> </H7>
          </span>
        </div>
        <div class="col px-md-5 mt-3">
          <span class="tim-note">
            <H7> ยี่ห้อ : <?php echo $row->ItemBrand; ?> </H7>
          </span>
        </div>
        <div class="col px-md-5 mt-3">
          <span class="tim-note">
            <H7> คำอธิบาย : <?php echo $row->ItemDescript; ?> </H7>
          </span>
        </div>
        <div class="col px-md-5 mt-3">
          <span class="tim-note">
            <H7> สถานที่ : <?php echo $row->LocalName; ?> </H7>
          </span>
        </div>
        <div class="col px-md-5 mt-3">
          <span class="tim-note">
            <H7> ประเภท : <?php echo $row->CatName; ?> </H7>
          </span>
        </div>
        <div class="col px-md-5 mt-3">
          <span class="tim-note">
            <H7> รหัสประจำเครื่อง : <?php echo $row->ItemSN ?> </H7>
          </span>
        </div>
        <div class="col px-md-5 mt-3">
          <span class="tim-note">
            <H7> รายละเอียด</H7>
          </span>
          <span class="tim-note"> <input type="text" name="MtDetail" class="form-control" id="MtDetail" value="" placeholder="เช่น เสียบปลั๊กแล้วไฟไม่เข้า" required> </span>
        </div>
        <div class="col px-md-5 mt-3">
          <span class="tim-note">
            <H7> ความเร่งด่วน</H7>
          </span>
          <br>
          <select name="priority" id="priority" required>
            <option value="ด่วน">ด่วน</option>
            <option value="ไม่ด่วน">ไม่ด่วน</option>
          </select>
        </div>
        <div class="col px-md-5 mt-3">
          <span class="tim-note">
            <H7> รูปภาพอุปกรณ์</H7>
          </span>
          <input type="file" name="images[]" id="images" multiple="multiple" accept="image/*">
        </div>
        <br>
        <div class="col px-md-5 mt-3">
          <input type="submit" name="Submit" id="btn_submit" class="btn btn-success" value="ยืนยัน การแจ้งซ่อม">
          <a type="button" class="btn btn-danger" id="btn_cancle" name="btn_cancle" href="itemList">ยกเลิก</a>
        </div>

      </form>
    <?php } ?>
  </div>
</div>