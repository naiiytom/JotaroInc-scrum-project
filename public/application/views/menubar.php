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
        <img src="<?=base_url()?>static/img/CSLOGO5.png" style="margin-left: 10px;" width="150px" draggable="false">
    </div>

    <ul>
        <li>
            <div class='btn-ico'><i class='fas fa-home'></i></div>
            <a class='link link-ico-left' href="<?php echo base_url(); ?>">Home</a>
        </li>
        <li>
            <div class='btn-ico'><i class='fas fa-box'></i></div>
            <a class='link link-ico-left' href="<?php echo base_url(); ?>index.php/itemlist">List</a>
        </li>
        
    </ul>

    <ul class='menu-bot'>
        <li>
            <a class='link link-ico-right hide-on-mini' href="<?php echo base_url(); ?>/" style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
            <?php
            $CI;
            $CI =& get_instance();
            $CI->load->library('session');

            echo $CI->session->name;
            ?></a>
            <div class='btn-ico'>
                <a class='btn btn-danger logout' href="<?php echo base_url(); ?>index.php/Logout"><span class='fas fa-sign-out-alt'></span></a>
                <!--<button type='button' class='btn btn-danger logout'><span class='fas fa-sign-out-alt'></span></button>-->
            </div>
        </li>
    </ul>
</nav>