<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class='App'>
	<div class='container-fluid'>
		<div class='row cardContainer px-lg-5 justify-content-around'>
			<div class='col-xl-11 mainContainer'>
				<div class='containerHeader'>
					<h4><?=$product[0]['Name']?>
						<?=$product[0]['Skin']?>
						<?=$product[0]['Color']?>
						<?=$product[0]['Size']?>
						- <?=$stockDate?>
					</h4>
				</div>
				<div class='row'>
					<a class="btn btn-secondary" style="margin-bottom: 25px; margin-right: 15px;"
						href="<?=base_url()?>stock/product/<?=$product[0]['ProductID']?>">ย้อนกลับ</a>
					<table class="table" id="enable">
						<thead>
							<tr>
								<th scope="col">ลงวันที่</th>
								<th scope="col">จำนวน</th>
								<th scope="col">ลงบันทุกโดย</th>
								<th scope="col">คำอธิบายเพิ่มเติม</th>

							</tr>
						</thead>
						<tbody>
							<?php
                            foreach ($stocks as $stock) {
                                echo "<tr>";
								echo "<td width='15%'>".date('Y-m-d H:i:s', strtotime($stock['AddDate']))."</td>";
                                echo "<td width='15%'>".$stock['Quantity']."</td>";
                                echo "<td width='35%'>".$stock['Name']."</td>";
                                echo "<td width='35%'>".$stock['Description']."</td>";
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