<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class='App'>
	<div class='container-fluid'>
		<div class='row cardContainer px-lg-5 justify-content-around'>
			<div class='col-xl-11 mainContainer'>
				<div class='containerHeader'>
					<h4>สต๊อกสินค้า - <?=$product[0]['Name']?> <?=$product[0]['Skin']?> <?=$product[0]['Color']?>
						<?=$product[0]['Size']?>
					</h4>
				</div>
				<div class='row'>
					<a class="btn btn-secondary" style="margin-bottom: 25px; margin-right: 15px;"
						href="<?=base_url()?>stock">ย้อนกลับ</a>
					<button type="button" class="btn btn-success" style="margin-bottom: 25px;" data-toggle="modal"
						data-target="#addModel">เพิ่มสต๊อกสินค้า</button>
					<table class="table" id="enable">
						<thead>
							<tr>
								<th scope="col">วันที่</th>
								<th scope="col">ราคาทุน</th>
								<th scope="col">จำนวนที่สั่ง</th>
								<th scope="col">จำนวนที่เข้าจริง</th>
								<th scope="col">จำนวนที่เหลือ</th>
								<th scope="col"></th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<?php
                            foreach ($stocks as $stock) {
                                echo "<tr>";
                                echo "<td width='12%'>".date('Y-m-d', strtotime($stock['Date']))."</td>";
                                echo "<td width='15%'>".$stock['BaseCost']."</td>";
                                echo "<td width='15%'>".$stock['Quantity']."</td>";
								echo "<td width='15%'>".$stock['ActualQuantity']."</td>";
								echo "<td width='15%'>".$stock['LeftQuantity']."</td>";
								echo "<td width='8%'><button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#addModel2\"";
								echo "data-stock-date=\"".date('Y-m-d', strtotime($stock['Date']))."\"";
								echo ">ลงบันทึก</button></td>";
                                echo "<td width='5%'><a class=\"btn btn-primary\" href=\"".base_url()."stock/product/".$stock['ProductID']."/in/".date('Y-m-d', strtotime($stock['Date']))."\">ดู</a></td>";
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
				<h5 class="modal-title" id="addModalLabel">แบบฟอร์มเพิ่มสต๊อกสินค้า</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST"
				action="<?=base_url()?>stock/addStock/">
				<div class="modal-body">
					<input type="text" hidden readonly name="id"
						value="<?=$product[0]['ProductID']?>">
					<div class="form-group">
						<label for="date">วันที่</label>
						<input type="date" class="form-control" id="date" name="date" maxlength="255"
							placeholder="วันที่สั่ง" required>
					</div>
					<div class="form-group">
						<label for="cost">ราคาทุน</label>
						<input type="number" class="form-control" id="cost" name="cost" maxlength="255"
							placeholder="ราคาทุน" required>
					</div>
					<div class="form-group">
						<label for="quantity">จำนวนที่สั่ง</label>
						<input type="number" class="form-control" id="quantity" name="quantity" maxlength="50"
							placeholder="จำนวนที่สั่ง" required>
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

<div class="modal fade stockin" id="addModel2" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addModalLabel">ลงบันทึกสินค้าเข้า</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST"
				action="<?=base_url()?>stock/addStockin/">
				<div class="modal-body">
					<input type="text" hidden readonly name="productid"
						value="<?=$product[0]['ProductID']?>">
					<input type="text" hidden readonly name="date">
					<div class="form-group">
						<label for="quantity">จำนวนที่เข้า</label>
						<input type="number" class="form-control" id="quantity" name="quantity" maxlength="255"
							placeholder="จำนวนของสินค้าที่เข้าในรอบนี้" required>
					</div>
					<div class="form-group">
						<label for="description">คำอธิบาย</label>
						<input type="text" class="form-control" id="description" name="description" maxlength="255"
							placeholder="คำอธิบายเพิ่มเติม">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
					<button type="submit" class="btn btn-primary">บันทึก</button>
				</div>
			</form>
		</div>
	</div>
</div>