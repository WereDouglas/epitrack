<link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery-ui-1.10.3.custom.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/colorpicker.css" />

<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/easyui.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/icon.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/demo.css">
<script type="text/javascript" src="<?= base_url(); ?>js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/jquery.easyui.min.js"></script>

<!-- Bootstrap 3.3.4 -->
<link href="<?= base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Font Awesome Icons -->
<!-- DATA TABLES -->
<link href="<?= base_url(); ?>plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->

<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link href="<?= base_url(); ?>dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="<?= base_url(); ?>css/mine.css?mine=<?php echo date('Y-m-d') ?>" />
<link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Ionicons -->
<link href="<?php echo base_url(); ?>css/ionicons.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
<?php

function limit_words($string, $word_limit) {
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
}
?>