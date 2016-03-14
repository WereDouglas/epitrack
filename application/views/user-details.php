<link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery.gritter.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/fullcalendar.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/select2.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-editable.css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/mine.css" />
<link href="<?= base_url(); ?>dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

<div class="main-content">
    <div class="page-content">
        <div class="row-fluid">
            <div class="span12">
                <!--PAGE CONTENT BEGINS-->

                <?php
                if (is_array($bio) && count($bio)) {
                    foreach ($bio as $loop) {
                        $id = $loop->id;
                        $fname = $loop->fname;
                        $lname = $loop->lname;
                        $other = $loop->other;
                        $email = $loop->email;
                        $gender = $loop->gender;
                        $dob = $loop->dob;
                        $country = $loop->country;
                        $image = $loop->image;
                        $password = $loop->password;
                        $cohort = $loop->cohort;
                        $contact = $loop->contact;
                        $status = $loop->status;
                    }
                }
                ?>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="span3">
                            <img  height="100px" width="120px" class="" alt="<?php echo $fname; ?>" src="<?= base_url(); ?>uploads/<?= $image ?>" />

                        </div>
                        <div class="span4">                         
                                    <div class="profile-user-info profile-user-info-striped ">

                                        <div class="profile-info-row">
                                            <div class="profile-info-name">
                                                Name  
                                            </div>
                                            <div class="profile-info-value">
                                                <?= $fname ?>  <?= $lname ?>   <?= $other ?>
                                            </div>
                                        </div>                                

                                        <div class="profile-info-row">
                                            <div class="profile-info-name">Primary email </div>

                                            <div class="profile-info-value">
                                                <?= $email ?>
                                            </div>
                                        </div>
                                        <div class="profile-info-row">
                                            <div class="profile-info-name">Gender </div>

                                            <div class="profile-info-value">
                                                <?= $gender ?>
                                            </div>
                                        </div>
                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Date of Birth</div>

                                            <div class="profile-info-value">
                                                <?php echo $dob; ?>
                                            </div>
                                        </div>
                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Country </div>

                                            <div class="profile-info-value">
                                                <i class="icon-map-marker light-orange bigger-110"></i>
                                                <?= $country ?>

                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name">Primary contact </div>

                                            <div class="profile-info-value">
                                                <?= $contact ?>
                                            </div>
                                        </div>
                                        <div class="profile-info-row">
                                            <div class="profile-info-name">Cohort </div>

                                            <div class="profile-info-value">
                                                <?= $cohort ?>

                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name">Activate /deactivate student </div>

                                            <div class="profile-info-value">

                                                <a href="<?php echo base_url() . "index.php/student/activate/" . $id . "/" . $status; ?>" class="tooltip-info qualification" data-rel="tooltip" title="activat/deativate">
                                                    <span class="blue">
                                                        <i class="icon-archive bigger-120">activate/deactivate</i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div><!--/span-->


                </div><!--/row-->


                <!--PAGE CONTENT ENDS-->
            </div><!--/.span-->
        </div><!--/.row-fluid-->
    </div><!--/.page-content-->


</div><!--/.main-content-->
<script type="text/javascript">
    window.jQuery || document.write("<script src='<?= base_url(); ?>assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");</script>

<!--<![endif]-->

<!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
    if ("ontouchend" in document)
        document.write("<script src='<?= base_url(); ?>assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");</script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

<!--page specific plugin scripts-->

<!--[if lte IE 8]>
  <script src="assets/js/excanvas.min.js"></script>
<![endif]-->

<script src="<?= base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.gritter.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootbox.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.easy-pie-chart.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.hotkeys.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap-wysiwyg.min.js"></script>
<script src="<?= base_url(); ?>assets/js/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url(); ?>assets/js/fuelux/fuelux.spinner.min.js"></script>
<script src="<?= base_url(); ?>assets/js/x-editable/bootstrap-editable.min.js"></script>
<script src="<?= base_url(); ?>assets/js/x-editable/ace-editable.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>

<!--ace scripts-->

<script src="<?= base_url(); ?>assets/js/ace-elements.min.js"></script>
<script src="<?= base_url(); ?>assets/js/ace.min.js"></script>
<script>
    $('.qualification').click(function (e) {
        updateURL = $(this).attr("href");
        e.preventDefault();//in this way you have no redirect
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: updateURL,
            async: false,
            success: function (data) {
                alert('Information updated!')
            }

        });
        alert('Information updated!')
        return false;
    });

</script>
