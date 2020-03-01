<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="Print" style="background: white;">
	<table class="table table-borderless" style="width: 100%;">
		<tr>
			<td width="140px"><img
					src="<?=base_url()?>static/img/logo.png"
					draggable="false" height="110px"></td>
			<td>
				<h4><strong>Lazybear Co., Ltd.</strong></h4>
				<p>45 Thanon Mittraphap, Tambon Sila, Amphoe Mueang Khon Kaen, Chang Wat Khon Kaen 40000</p>
				<p>Tel. 081-9438475</p>
			</td>
		</tr>
	</table>

	<table class="table table-borderless" style="width: 100%;">
		<tr>
			<td width="15%"><strong>วันที่สั่งซื้อ</strong></td>
			<td><?=date('d/m/Y H:i:s', strtotime($order[0]['OrderDate']))?>
			</td>
		</tr>
		<tr>
			<td><strong>ชื่อลูกค้า</strong></td>
			<td><?=$order[0]['cusName']?>
			</td>
		</tr>
		<tr>
			<td><strong>ที่อยู่</strong></td>
			<td><?=$order[0]['Address']?>
			</td>
		</tr>
		<tr>
			<td><strong>เบอร์โทร</strong></td>
			<td><?=$order[0]['TelNo']?>
			</td>
		</tr>
		<tr>
			<td><strong>ช่องทางจัดส่ง</strong></td>
			<td><?=$order[0]['ShipName']?>
			</td>
		</tr>
	</table>

	<br />
	<br />

	<table class="table table-bordered" style="width: 100%; text-align: center;">
		<thead>
			<th scope="col" width="15%">รหัสสินค้า</th>
			<th scope="col" width="50%">ชื่อสินค้า</td>
			<th scope="col" width="15%">จำนวน</td>
			<th scope="col" width="20%">ราคา</td>
		</thead>
		<tbody>
			<?php
            foreach ($order_details as $order_detail) {
                echo "<tr>";
                echo "<th>".$order_detail['ProductID']."</th>";
                echo "<td>".$order_detail['Name']." ".$order_detail['Skin']." ".$order_detail['Color']." ".$order_detail['Size']."</td>";
                echo "<td>".$order_detail['Quantity']."</td>";
                echo "<td>".number_format($order_detail['Price']*$order_detail['Quantity'])."</td>";
                echo "</tr>";
            }
        ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="3"><strong>ค่าจัดส่ง</strong></td>
				<td><strong><?=number_format($order[0]['ShipCost'])?></strong>
				</td>
			</tr>
			<tr>
				<td colspan="3"><strong>รวม</strong></td>
				<td><strong><?=number_format($order[0]['ShipCost'] + $order[0]['TotalPrice'])?></strong>
				</td>
			</tr>
			<tr>
				<td colspan="3"><strong>ส่วนลดโปรโมชั่น</strong></td>
				<td><strong><?=number_format($order[0]['PromoCost'])?></strong>
				</td>
			</tr>
			<tr>
				<td colspan="3"><strong>เหลือ</strong></td>
				<td><strong><?=number_format($order[0]['ShipCost'] + $order[0]['TotalPrice'] - $order[0]['PromoCost'])?></strong>
				</td>
			</tr>
		</tfoot>
	</table>
</div>

<script>
	$(() => {
		window.print();
	});
</script>
