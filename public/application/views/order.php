<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class='App'>
	<div class='container-fluid'>
		<div class='row cardContainer px-lg-5 justify-content-around'>
			<div class='col-xl-11 mainContainer'>
				<div class='containerHeader'>
					<h4>รายการคำสั่งซื้อ</h4>
				</div>
				<div class='row'>
					<a class="btn btn-success" style="margin-bottom: 25px;"
						href="<?=base_url()?>order/add">เพิ่มรายการใหม่</a>
					<table class="table" id="enable">
						<thead>
							<tr>
								<th scope="col">รหัสคำสั่งซื้อ</th>
								<th scope="col">วันที่สั่ง</th>
								<th scope="col">รหัสพนักงานขาย</th>
								<th scope="col">รหัสลูกค้า</th>
								<th scope="col">โปรโมชั่นที่ใช้</th>
								<th scope="col">ช่องทางการจัดส่ง</th>
								<th scope="col">สถานะ</th>
								<th scope="col">รหัสการจัดส่ง</th>
								<th scope="col"></th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<?php
                            foreach ($orders as $order) {
                                echo "<tr>";
                                echo "<th scope=\"row\">".$order['OrderID']."</th>";
                                echo "<td>".date('Y-m-d', strtotime($order['OrderDate']))."</td>";
                                echo "<td>".$order['SoldBy']."</td>";
                                echo "<td>".$order['SoldTo']."</td>";
                                echo "<td>".($order['PromoName'] ? $order['PromoName'] : "ไม่มี")."</td>";
                                echo "<td>".$order['ShipName']."</td>";
                                echo "<td>".$order['Status']."</td>";
                                echo "<td>".$order['TrackNo']."</td>";
								echo "<td width='5%'>";
								if ($order['Status'] != "Canceled") {
									echo "<button type=\"button\" class=\"btn btn-warning\"";
									echo "data-or-id=\"".$order['OrderID']."\"";
									echo " data-toggle=\"modal\" data-target=\"#editModel\">จัดการ</button>";
								}
								echo "</td>";
                                echo "<td><a class='btn btn-primary' target='_blank' href='".base_url().'order/print/'.$order['OrderID']."'>พิมพ์</a></td>";
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

<div class="modal fade order" id="editModel" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editModalLabel">จัดการคำสั่งซื้อ</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="tracking" action="<?=base_url()?>order/manage/"
				method="post">
				<div class="modal-body">
					<div class="form-group">

						<input type="text" hidden readonly name="id">
						<div class="input-group mb-3">
							<input type="text" name="tracking" class="form-control" placeholder="Tracking Number"
								aria-label="Tracking Number" aria-describedby="button-addon2">
							<div class="input-group-append">
								<button class="btn btn-outline-success" type="submit" id="button-addon2"
									name="sended">จัดส่งแล้ว</button>
							</div>
						</div>

					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success paid" name="paid">ชำระเงินแล้ว</button>
					<button type="submit" class="btn btn-danger cancle" name="cancle">ยกเลิกคำสั่งซื้อ</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
				</div>
			</form>
		</div>
	</div>
</div>