<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class='App'>
	<div class='container-fluid'>
		<div class='row cardContainer px-lg-5 justify-content-around'>
			<div class='col-xl-11 mainContainer'>
				<div class='containerHeader'>
					<h4>โปรโมชั่น</h4>
				</div>
				<div class='row'>
					<button type="button" class="btn btn-success" style="margin-bottom: 25px;" data-toggle="modal"
						data-target="#addModel">เพิ่มโปรโมชั่น</button>
					<table class="table" id="enable">
						<thead>
							<tr>
								<th scope="col">รหัสโปรโมชั่น</th>
								<th scope="col">ชื่อโปรโมชั่น</th>
								<th scope="col">เริ่ม</th>
								<th scope="col">หมดเขต</th>
								<th scope="col">มูลค่า</th>
								<th scope="col">ยกเลิกการใช้งาน</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<?php
                            foreach ($promotions as $promotion) {
                                echo "<tr>";
                                echo "<th width='5%' scope=\"row\">".$promotion['PromoID']."</th>";
                                echo "<td width='15%'>".$promotion['Name']."</td>";
                                echo "<td width='15%'>".date('Y-m-d', strtotime($promotion['StartDate']))."</td>";
                                echo "<td width='15%'>".date('Y-m-d', strtotime($promotion['EndDate']))."</td>";
                                echo "<td width='15%'>".$promotion['Price']."</td>";
                                echo "<td width='5%'>".($promotion['Disabled'] == 0 ? "ไม่":"ใช่")."</td>";
                                echo "<td width='5%'><button type=\"button\" class=\"btn btn-warning\"";
                                echo "data-pro-id=\"".$promotion['PromoID']."\"";
                                echo "data-pro-name=\"".$promotion['Name']."\"";
                                echo "data-pro-start=\"".date('Y-m-d', strtotime($promotion['StartDate']))."\"";
                                echo "data-pro-end=\"".date('Y-m-d', strtotime($promotion['EndDate']))."\"";
                                echo "data-pro-price=\"".$promotion['Price']."\"";
                                echo "data-pro-dis=\"".$promotion['Disabled']."\"";
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
				<h5 class="modal-title" id="addModalLabel">แบบฟอร์มเพิ่มโปรโมชั่น</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="./promotion/addPromotion/">
				<div class="modal-body">
					<div class="form-group">
						<label for="name">ชื่อโปรโมชั่น</label>
						<input type="text" class="form-control" id="name" name="name" maxlength="255"
							placeholder="ชื่อโปรโมชั่น" required>
					</div>
					<div class="form-group">
						<label for="start">เริ่ม</label>
						<input type="date" class="form-control" id="start" name="start" required>
					</div>
					<div class="form-group">
						<label for="end">หมดเขต</label>
						<input type="date" class="form-control" id="end" name="end">
					</div>
					<div class="form-group">
						<label for="price">มูลค่า</label>
						<input type="number" class="form-control" id="price" name="price" value="0" required>
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

<div class="modal fade promotion" id="editModel" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editModalLabel">แก้ไขโปรโมชั่น</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="./promotion/editPromotion/">
				<div class="modal-body">
					<input type="text" hidden readonly name="id">
					<div class="form-group">
						<label for="name">ชื่อโปรโมชั่น</label>
						<input type="text" class="form-control" id="name" name="name" maxlength="255"
							placeholder="ชื่อโปรโมชั่น" required>
					</div>
					<div class="form-group">
						<label for="start">เริ่ม</label>
						<input type="date" class="form-control" id="start" name="start" required>
					</div>
					<div class="form-group">
						<label for="end">หมดเขต</label>
						<input type="date" class="form-control" id="end" name="end">
					</div>
					<div class="form-group">
						<label for="price">มูลค่า</label>
						<input type="number" class="form-control" id="price" name="price" value="0" required>
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