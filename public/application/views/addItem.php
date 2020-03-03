<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class='App home'>
  <div class="card-body">
    <form action="addItem/add" method="POST">
        <div class="col px-md-5 mt-3">
          <span class="tim-note"> <label for="ItemSN">
              <H7> รหัสประจำเครื่อง</H7>
            </label> </span>
          <span class="tim-note"> <input type="text" name="ItemSN" class="form-control" id="ItemSN" required> </span>
        </div>

        <div class="col px-md-5 mt-3">
          <span class="tim-note"> <label for="ItemID">
              <H7> รหัสครุภัณฑ์</H7>
            </label> </span>
          <span class="tim-note"> <input type="text" name="ItemID" class="form-control" id="ItemID" required> </span>
        </div>
        <div class="col px-md-5 mt-3">
          <span class="tim-note"> <label for="ItemName">
              <H7>ชื่อ</H7>
            </label> </span>
          <span class="tim-note"> <input type="text" name="ItemName" class="form-control" id="ItemName" required> </span>
        </div>
        <div class="col px-md-5 mt-3">
          <span class="tim-note"> <label for="ItemModel">
              <H7> รุ่น</H7>
            </label> </span>
          <span class="tim-note"> <input type="text" name="ItemModel" class="form-control" id="ItemModel" required> </span>
        </div>
        <div class="col px-md-5 mt-3">
          <span class="tim-note"> <label for="ItemBrand">
              <H7> ยี่ห้อ</H7>
            </label> </span>
          <span class="tim-note"> <input type="text" name="ItemBrand" class="form-control" id="ItemBrand" required> </span>
        </div>
        <div class="col px-md-5 mt-3">
          <span class="tim-note"> <label for="ItemDescript">
              <H7> คำอธิบาย</H7>
            </label> </span>
          <span class="tim-note"> <input type="text" name="ItemDescript" class="form-control" id="ItemDescript" required> </span>
        </div>
        <div class="col px-md-5 mt-3">
          <span class="tim-note"> <label for="LocalID">
              <H7> สถานที่</H7>
            </label> </span>
          <span class="tim-note"> <input type="text" name="LocalID" class="form-control" id="LocalID" required> </span>
        </div>
        <div class="col px-md-5 mt-3">
          <span class="tim-note"> <label for="CatID">
              <H7> ประเภท</H7>
            </label> </span>
          <span class="tim-note"> <input type="text" name="CatID" class="form-control" id="CatID"  required> </span>
        </div>
        <div class="col px-md-5 mt-3">
          <span class="tim-note"> <label for="StatusID">
              <H7> สถานะ</H7>
            </label> </span>
          <div class="col-md-6">
            <select id="StatusID" name="StatusID">
              <option value="0">ว่าง</option>
              <option value="1">ถูกยืม</option>
              <option value="2">ซ่อมแซม</option>
              <option value="3.">รอดำเนินการ</option>
              <option value="4.">ซ่อมสำเร็จ</option>
            </select>
          </div>
        </div>
        <div class="col px-md-5 mt-3">
          <span class="tim-note"> <label for="ItemYear">
              <H7> วันที่ซื้อ</H7>
            </label> </span>
          <span class="tim-note"> <input type="text" name="ItemYear" class="form-control" id="ItemYear" required> </span>
        </div>

        <br>
        <div class="col px-md-5 mt-3">
          <input type="submit" name="btn_submit" id="btn_submit" class="btn btn-success" value="สร้างรายการ">
          <a type="button" class="btn btn-danger" id="btn_cancle" name="btn_cancle" href="itemList">ยกเลิก</a>
        </div>
    </form>
  </div>
</div>
