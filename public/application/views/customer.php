  <?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class='App'>
	<div class='container-fluid'>
		<div class='row cardContainer px-lg-5 justify-content-around'>
			<div class='col-xl-11 mainContainer'>
				<div class='containerHeader'>
					<h4>รายชื่อลูกค้า</h4>
				</div>
				<div class='row'>
					<button type="button" class="btn btn-success" style="margin-bottom: 25px;" data-toggle="modal"
						data-target="#addModel">เพิ่มลูกค้าใหม่</button>
					<table class="table" id="enable">
						<thead>
							<tr>
								<th scope="col">รหัสลูกค้า</th>
								<th scope="col">วันที่ลงทะเบียน</th>
								<th scope="col">ชื่อ</th>
								<th scope="col">ที่อยู่</th>
								<th scope="col">เบอร์โทร</th>
								<th scope="col">ยกเลิกการใช้งาน</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<?php
                            foreach ($customers as $customer) {
                                echo "<tr>";
                                echo "<th width='5%' scope=\"row\">".$customer['UID']."</th>";
                                echo "<td width='10%'>".$customer['RegisterDate']."</td>";
                                echo "<td width='25%'>".$customer['Name']."</td>";
                                echo "<td width='30%'>".$customer['Address']."</td>";
                                echo "<td width='12%'>".$customer['TelNo']."</td>";
                                echo "<td width='13%'>".($customer['Disabled'] == 0 ? "No":"Yes")."</td>";
                                echo "<td width='5%'><button type=\"button\" class=\"btn btn-warning\"";
                                echo "data-cus-id=\"".$customer['UID']."\"";
                                echo "data-cus-name=\"".$customer['Name']."\"";
                                echo "data-cus-add=\"".$customer['Address']."\"";
                                echo "data-cus-tel=\"".$customer['TelNo']."\"";
                                echo "data-cus-dis=\"".$customer['Disabled']."\"";
                                echo " data-toggle=\"modal\" data-target=\"#editModel\">Edit</button></td>";
                                echo "</tr>";
                            }
                            ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="addModel" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addModalLabel">แบบฟอร์มเพิ่มรายการ</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="./customer/add/">
				<div class="modal-body">
					<div class="form-group">
						<label for="name">ชื่อ</label>
						<input type="text" class="form-control" id="name" name="name" maxlength="100"
							placeholder="ชื่อลูกค้า" required>
					</div>
					<div class="form-group">
						<label for="address">ที่อยู่</label>
						<textarea class="form-control" id="address" name="address" maxlength="255" rows="3"
							required></textarea>
					</div>
					<div class="form-group">
						<label for="tel">เบอร์โทร</label>
						<input type="text" class="form-control" id="tel" name="tel" maxlength="15"
							placeholder="เบอร์โทร" required>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
					<button type="submit" class="btn btn-primary">เพิ่ม</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade customer" id="editModel" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editModalLabel">แก้ไขข้อมูลลูกค้า</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="./customer/edit/">
				<div class="modal-body">
					<input type="text" name="id" readonly hidden>
					<div class="form-group">
						<label for="name">ชื่อ</label>
						<input type="text" class="form-control" id="name" name="name" maxlength="100"
							placeholder="ชื่อลูกค้า" required>
					</div>
					<div class="form-group">
						<label for="address">ที่อยู่</label>
						<textarea class="form-control" id="address" name="address" maxlength="255" rows="3"
							required></textarea>
					</div>
					<div class="form-group">
						<label for="tel">เบอร์โทร</label>
						<input type="text" class="form-control" id="tel" name="tel" maxlength="15"
							placeholder="เบอร์โทร" required>
					</div>
					<div class="form-group">
						<label for="isdisable">ยกเลิกการใช้งาน</label>
						<select class="form-control" id="isdisable" name="isdisable">
							<option value="1">ใช่</option>
							<option value="0">ไม่</option>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
					<button type="submit" class="btn btn-warning">บันทึก</button>
				</div>
			</form>
		</div>
	</div>
</div>