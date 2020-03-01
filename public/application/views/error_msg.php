<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Error Message -->
<div class="alert <?php echo $color; ?> alert-dismissible fade show fixedAleart" role="alert">
    <strong><?php echo $title; ?></strong> <?php echo $message; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>