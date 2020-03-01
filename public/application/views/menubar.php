<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<nav class='menubar'>
    <ul>
        <li style="background: unset">
            <div class='link link-ico-right' style="visibility: hidden"></div>
            <div class='btn-ico' onClick="toggleMenu()">
                <span class='fas fa-bars'></span>
            </div>
        </li>
    </ul>
    <div class='header'>
        <!--<h4>LazyBear</h4>-->
        <img src="<?=base_url()?>static/img/Logo-White.png" style="margin-left: 10px;" width="150px" draggable="false">
    </div>

    <ul>
        <li>
            <div class='btn-ico'><i class='fas fa-home'></i></div>
            <a class='link link-ico-left' href="<?php echo base_url(); ?>">หน้าหลัก</a>
        </li>
        <li>
            <div class='btn-ico'><i class='fas fa-box'></i></div>
            <a class='link link-ico-left' href="<?php echo base_url(); ?>stock">คลังสินค้า</a>
        </li>
        <li>
            <div class='btn-ico'><i class='fas fa-cart-arrow-down'></i></div>
            <a class='link link-ico-left' href="<?php echo base_url(); ?>order">คำสั่งซื้อ</a>
        </li>
        <li>
            <div class='btn-ico'><i class='fas fa-ad'></i></div>
            <a class='link link-ico-left' href="<?php echo base_url(); ?>promotion">โปรโมชั่น</a>
        </li>
        <li>
            <div class='btn-ico'><i class='fas fa-dolly'></i></div>
            <a class='link link-ico-left' href="<?php echo base_url(); ?>shipping">ช่องทางการจัดส่ง</a>
        </li>
        <li>
            <div class='btn-ico'><i class='fas fa-address-book'></i></div>
            <a class='link link-ico-left' href="<?php echo base_url(); ?>customer">ลูกค้า</a>
        </li>
        <li>
            <div class='btn-ico'><i class='fas fa-user-injured'></i></div>
            <a class='link link-ico-left' href="<?php echo base_url(); ?>seller">พนักงาน</a>
        </li>
    </ul>

    <ul class='menu-bot'>
        <p class='hide-on-mini'>รุ่นยังไม่แก้บัคซักตัว</p>
        <li>
            <a class='link link-ico-right hide-on-mini' href="<?php echo base_url(); ?>/" style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
            <?php
            $CI;
            $CI =& get_instance();
            $CI->load->library('session');

            echo $CI->session->name;
            ?></a>
            <div class='btn-ico'>
                <button type='button' class='btn btn-danger logout'><span class='fas fa-sign-out-alt'></span></button>
            </div>
        </li>
    </ul>
</nav>