<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class='App'>
	<div class='container-fluid'>
		<div class='row cardContainer px-lg-5 justify-content-around'>
			<div class='col-xl-11 mainContainer'>
				<div class='containerHeader'>
					<h4>ช่องทางการจัดส่ง</h4>
				</div>
				<div class='row'>
					<button type="button" class="btn btn-success" style="margin-bottom: 25px;" data-toggle="modal"
						data-target="#addModel">เพิ่มรายการใหม่</button>
					<table class="table" id="enable">
						<thead>
							<tr>
								<th scope="col">เลขที่การจัดส่ง</th>
								<th scope="col">ชื่อช่องทางการจัดส่ง</th>
								<th scope="col">ราคา</th>
								<th scope="col">ยกเลิกการใช้งาน</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<?php
                            foreach ($shippings as $shipping) {
                                echo "<tr>";
                                echo "<th width='15%' scope=\"row\">".$shipping['ShipMeID']."</th>";
                                echo "<td width='50%' scope=\"row\">".$shipping['Name']."</td>";
                                echo "<td width='15%' scope=\"row\">".$shipping['Cost']."</td>";
                                echo "<td width='15%'>".($shipping['Disabled'] == 0 ? "ไม่":"ใช่")."</td>";
                                echo "<td width='5%'><button type=\"button\" class=\"btn btn-warning\"";
                                echo "data-sip-id=\"".$shipping['ShipMeID']."\"";
                                echo "data-sip-name=\"".$shipping['Name']."\"";
                                echo "data-sip-cost=\"".$shipping['Cost']."\"";
                                echo "data-sip-dis=\"".$shipping['Disabled']."\"";
                                echo " data-toggle=\"modal\" data-target=\"#editModel\">แก้ไข</button></td>";
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
				<h5 class="modal-title" id="addModalLabel">เพิ่มรายการใหม่</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="./shipping/add/">
				<div class="modal-body">
					<div class="form-group">
						<label for="name">ชื่อ</label>
						<input type="text" class="form-control" id="name" name="name" maxlength="255"
							placeholder="ชื่อช่องทางการจัดส่ง" required>
					</div>
					<div class="form-group">
						<label for="cost">ราคา</label>
						<input type="number" class="form-control" id="cost" name="cost" placeholder="ราคาของการจัดส่ง"
							required>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
					<button type="submit" class="btn btn-primary">เพิ่มรายการ</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade shipping" id="editModel" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editModalLabel">แก้ไขข้อมูลช่องทางการจัดส่ง</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="./shipping/edit/">
				<div class="modal-body">
					<input type="text" hidden readonly name="id">
					<div class="form-group">
						<label for="name">ชื่อช่องทางการจัดส่ง</label>
						<input type="text" class="form-control" id="name" name="name" maxlength="255"
							placeholder="ชื่อช่องทางการจัดส่ง" required>
					</div>
					<div class="form-group">
						<label for="cost">ราคา</label>
						<input type="number" class="form-control" id="cost" name="cost" placeholder="ราคาของการจัดส่ง"
							required>
					</div>
					<div class="form-group">
						<label for="isdisable">สถานะช่องทางการจัดส่ง</label>
						<select class="form-control" id="isdisable" name="isdisable">
							<option value="0">เปิดการใช้งาน</option>
							<option value="1">ยกเลิกการใช้งาน</option>
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