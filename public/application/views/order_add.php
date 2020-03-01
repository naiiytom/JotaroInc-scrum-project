<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class='App'>
  <div class='container-fluid'>
    <div class='row cardContainer px-lg-5 justify-content-around'>
      <div class='col-xl-11 mainContainer'>
        <div class='containerHeader'>
          <h4>แบบฟอร์มคำสั่งซื้อ</h4>
        </div>
        <a class="btn btn-secondary" style="margin-bottom: 25px; margin-right: 15px;"
          href="<?=base_url()?>order">ย้อนกลับ</a>
        <form action="<?=base_url()?>order/addOrder" name="orderForm" method="post">
          <div class='row'>
            <div class="col-sm-6">
              <div class="form-group row">
                <label for="customerID" class="col-sm-3 col-form-label">ลูกค้า</label>
                <div class="col-sm-9">
                  <select name="customerID" id="customerID">
                    <?php
                      foreach ($customers as $customer) {
                          echo "<option value=\"".$customer['UID']."\">".$customer['UID']." : ".$customer['Name']."</option>";
                      }
                    ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group row">
                <label for="shipping" class="col-sm-3 col-form-label">วิธีจัดส่ง</label>
                <div class="col-sm-9">
                  <select name="shipping" id="shipping">
                    <?php
                      foreach ($shipmes as $shipme) {
                          if ($shipme['Disabled'] !== 1) {
                              echo "<option value=\"".$shipme['ShipMeID']."\">".$shipme['Name']." :: ".$shipme['Cost']." บาท</option>";
                          }
                      }
                    ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class='row'>
            <div class="col-sm-6">
              <div class="form-group row">
                <label for="promotionID" class="col-sm-3 col-form-label">โปรโมชั่น</label>
                <div class="col-sm-9">
                  <select name="promotionID" id="promotionID">
                    <option value="-1">ไม่เลือก</option>
                    <?php
                      foreach ($promotions as $promotion) {
                          $curDate = date('Y-m-d');
                          if ($promotion['Disabled'] !== 1
                            && $curDate > $promotion['StartDate']
                            && $curDate < $promotion['EndDate']) {
                              echo "<option value=\"".$promotion['PromoID']."\">".$promotion['Name']."</option>";
                          }
                      }
                    ?>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <br />

          <div class="form-group row">
            <div class="col-sm">
              <select name="product" id="product">
                <?php
                  foreach ($products as $product) {
                      if ($product['Disabled'] == 0) {
                          echo "<option value=\"".$product['ProductID']."\">".$product['ProductID'];
                          echo " : ".$product['Name']." ".$product['Color']." ";
                          echo $product['Size']." :: ".$product['Price']." บาท"."</option>";
                      }
                  }
                ?>
              </select>
            </div>
            <div class="col-sm-auto">
              <input class="form-control" type="number" name="quantity" placeholder="จำนวน">
            </div>
            <div class="col-sm-auto">
              <button type="button" class="btn btn-primary addToCart">เพิ่มสินค้าลงตะกร้า</button>
            </div>
          </div>

          <table class="table order">
            <thead>
              <tr>
                <th width='15%' scope="col">รหัสสินค้า</th>
                <th width='35%' scope="col">ชื่อสินค้า</th>
                <th width='15%' scope="col">จำนวน</th>
                <th width='15%' scope="col">ราคาต่อชิ้น</th>
                <th width='15%' scope="col">ราคารวม</th>
                <th width='5%' scope="col"></th>
              </tr>
            </thead>
            <tbody id="order_details">
            </tbody>
          </table>

          <button type="button" style="margin-top: 50px;" class="btn btn-primary checkout">ยืนยันการสั่งซื้อ</button>
        </form>
      </div>
    </div>

  </div>
</div>

<script type='text/javascript'>
  const products = <?= json_encode($products) ?> ;
  const quantities = <?= json_encode($quantities) ?> ;
  const targetURL = '<?=base_url()?>order/addOrder';
</script>
<script src="<?php echo base_url(); ?>/static/script/order.js"></script>