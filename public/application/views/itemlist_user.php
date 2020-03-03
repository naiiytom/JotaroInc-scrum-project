<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class='App home'>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                    <th>รหัสครุภัณฑ์</th>
                    <th>ชื่อ</th>
                    <th>รุ่น</th>
                    <th>ยี่ห้อ</th>
                    <th>คำอธิบาย</th>
                    <th>สถานที่</th>
                    <th>ประเภท</th>
                    <th>สถานะ</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    <?php foreach($data as $row) { ?>
                    <tr>
                        <td>
                            <?php echo $row->ItemID; ?>
                        </td>
                        <td>
                            <?php echo $row->itemName; ?>
                        </td>
                        <td>
                            <?php echo $row->ItemModel; ?>
                        </td>
                        <td>
                            <?php echo $row->ItemBrand; ?>
                        </td>
                        <td>
                            <?php echo $row->ItemDescript; ?>   
                        </td>
                        <td>
                            <?php echo $row->LocalName; ?>
                        </td>
                        <td>
                            <?php echo $row->CatName; ?>
                        </td>
                        <td>
                            <?php echo $row->StatusName; ?>
                        </td>
                        <td class="text-primary">
							
                        </td>
                        <td class="text-primary">
							<a type="button" class="btn btn-danger" id="btn_maintance" name="btn_maintance" href="<?php echo base_url(); ?>index.php/maintenance?ItemSN=<?=$row->ItemSN?> ">แจ้งซ่อม</a>
                        </td>
                        <td class="text-primary">
							<a type="button" class="btn btn-success" id="btn_detail" name="btn_detail" href="# ">เพิ่มเติม</a>
						</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>