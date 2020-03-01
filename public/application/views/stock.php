<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class='App'>
	<div class='container-fluid'>
		<div class='row cardContainer px-lg-5 justify-content-around'>
			<div class='col-xl-11 mainContainer'>
				<div class='containerHeader'>
					<h4>สินค้า</h4>
				</div>
				<div class='row'>
					<button type="button" class="btn btn-success" style="margin-bottom: 25px;" data-toggle="modal"
						data-target="#addModel">เพิ่มสินค้า</button>
					<table class="table" id="enable">
						<thead>
							<tr>
								<th scope="col">รหัสสินค้า</th>
								<th scope="col">ชื่อสินค้า</th>
								<th scope="col">ลาย</th>
								<th scope="col">ขนาด</th>
								<th scope="col">สี</th>
								<th scope="col">ราคา</th>
								<th scope="col">ยกเลิกการขาย</th>
								<th scope="col"></th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<?php
							if(is_array($products)){
								foreach ($products as $product) {
									echo "<tr>";
									echo "<th width='5%' scope=\"row\">".$product['ProductID']."</th>";
									echo "<td width='15%'>".$product['Name']."</td>";
									echo "<td width='15%'>".$product['Skin']."</td>";
									echo "<td width='15%'>".$product['Size']."</td>";
									echo "<td width='15%'>".$product['Color']."</td>";
									echo "<td width='10%'>".$product['Price']."</td>";
									echo "<td width='5%'>".($product['Disabled'] == 0 ? "ไม่":"ใช่")."</td>";
									echo "<td width='5%'><button type=\"button\" class=\"btn btn-warning\"";
									echo "data-pro-id=\"".$product['ProductID']."\"";
									echo "data-pro-name=\"".$product['Name']."\"";
									echo "data-pro-skin=\"".$product['Skin']."\"";
									echo "data-pro-size=\"".$product['Size']."\"";
									echo "data-pro-color=\"".$product['Color']."\"";
									echo "data-pro-price=\"".$product['Price']."\"";
									echo "data-pro-dis=\"".$product['Disabled']."\"";
									echo " data-toggle=\"modal\" data-target=\"#editModel\">แก้ไข</button></td>";
									echo "<td width='5%'><a class=\"btn btn-primary\" href=\"".base_url()."stock/product/".$product['ProductID']."\">คลัง</a></td>";
									echo "</tr>";
								}
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
				<h5 class="modal-title" id="addModalLabel">แบบฟอร์มเพิ่มสินค้า</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="./stock/addProduct/">
				<div class="modal-body">
					<div class="form-group">
						<label for="name">ชื่อสินค้า</label>
						<input type="text" class="form-control" id="name" name="name" maxlength="255"
							placeholder="ชื่อสินค้า" required>
					</div>
					<div class="form-group">
						<label for="skin">ลาย</label>
						<input type="text" class="form-control" id="skin" name="skin" maxlength="50"
							placeholder="ลายของสินค้า" required>
					</div>
					<div class="form-group">
						<label for="size">ขนาด</label>
						<input type="text" class="form-control" id="size" name="size" maxlength="6"
							placeholder="ขนาดของสินค้า" required>
					</div>
					<div class="form-group">
						<label for="color">สี</label>
						<input type="text" class="form-control" id="color" name="color" maxlength="50"
							placeholder="สีของสินค้า" required>
					</div>
					<div class="form-group">
						<label for="price">ราคาขาย</label>
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

<div class="modal fade product" id="editModel" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editModalLabel">แก้ไขรายการสินค้า</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="./stock/editProduct/">
				<div class="modal-body">
					<input type="text" hidden readonly name="id">
					<div class="form-group">
						<label for="name">ชื่อสินค้า</label>
						<input type="text" class="form-control" id="name" name="name" maxlength="255"
							placeholder="ชื่อสินค้า" required>
					</div>
					<div class="form-group">
						<label for="skin">ลาย</label>
						<input type="text" class="form-control" id="skin" name="skin" maxlength="50"
							placeholder="ลาย" required>
					</div>
					<div class="form-group">
						<label for="size">ขนาด</label>
						<input type="text" class="form-control" id="size" name="size" maxlength="6"
							placeholder="ขนาด" required>
					</div>
					<div class="form-group">
						<label for="color">สี</label>
						<input type="text" class="form-control" id="color" name="color" maxlength="50"
							placeholder="สี" required>
					</div>
					<div class="form-group">
						<label for="price">ราคาขาย</label>
						<input type="number" class="form-control" id="price" name="price" value="0" required>
					</div>
					<div class="form-group">
						<label for="isdisable">ยกเลิกการขาย</label>
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