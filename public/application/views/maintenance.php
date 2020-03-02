<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class='App home'>
    <div class="card-body">
          <form>
              <div class="col px-md-5 mt-3">
                <span class="tim-note"><H7> รหัสครุภัณฑ์ : </H7></span>
              </div>
              <div class="col px-md-5 mt-3">
                <span class="tim-note"><H7> รุ่น : </H7></span>  
              </div>
              <div class="col px-md-5 mt-3">  
                <span class="tim-note"><H7> ยี่ห้อ :</H7></span>  
              </div>
              <div class="col px-md-5 mt-3">  
                <span class="tim-note"><H7> คำอธิบาย : </H7></span>
              </div>
              <div class="col px-md-5 mt-3">  
                <span class="tim-note"><H7> สถานที่ : </H7></span>
              </div>
              <div class="col px-md-5 mt-3">  
                <span class="tim-note"><H7> ประเภท : </H7></span>
              </div>
              <div class="col px-md-5 mt-3">  
                <span class="tim-note"><H7> รหัสประจำเครื่อง : </H7></span>
              </div>
              <div class="col px-md-5 mt-3">  
                <span class="tim-note"><H7> รายละเอียด</H7></span>
                <span class="tim-note"> <input type="text" name="MtDetail" class="form-control" id="MtDetail" value="" placeholder="เช่น เสียบปลั๊กแล้วไฟไม่เข้า"  required> </span>
              </div>
              <div class="col px-md-5 mt-3" >  
                <span class="tim-note"><H7> ความเร่งด่วน</H7></span>
                <br>
                    <select name="priority" id="priority">
                        <option value="เร่งด่วน">เร่งด่วน</option>
                        <option value="ไม่เร่งด่วน">ไม่เร่งด่วน</option>
                    </select>
              </div>
              <div class="col px-md-5 mt-3">  
                <span class="tim-note"><H7> รูปภาพอุปกรณ์</H7> </span>
                <input type="file" class="form-control " id="fileToUpload"  name="fileToUpload">
              </div>
              <br>
              <div class="col px-md-5 mt-3">
					<input type="submit" name="Submit" id="btn_submit" class="btn btn-success" value="ยืนยัน การแจ้งซ่อม">
					<a type="button" class="btn btn-danger" id="btn_cancle" name="btn_cancle" href="itemlist">ยกเลิก</a>			
				</div>
          </form>          
    </div>
</div>