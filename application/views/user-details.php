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
<style type="text/css" media="screen">

    table{
        border-collapse:collapse;
        border:0px solid #FF0000;
    }

    table td{
        border:0px solid #FF0000;
    }

    table tr{
        border:0px solid #FF0000;
    }
</style>
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
                          <div class="col-md-12 col-sm-12 col-xs-12"> <span class="info-box status col-md-12 col-sm-12 col-xs-12" id="status"></span></div>

          
                        <table class="table zebra-style span8">

                            <tbody>


                                <?php
                                if (is_array($bio) && count($bio)) {
                                    foreach ($bio as $loop) {
                                        ?>  

                                        <tr class="odd">
                        <!--                            <td><?php echo $loop->id; ?></td>-->

                                        </tr>
                                        <tr>
                                            <td>FIRST NAME:</td>
                                            <td id="fname:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->fname; ?></td>

                                            <td>LAST NAME:</td>
                                            <td id="lname:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->lname; ?></td>

                                        </tr>
                                        <tr>
                                            <td>Country</td>
                                            <td id="country:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->country; ?></td>

                                            <td>CONTACT:</td>
                                            <td id="contact:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->contact; ?></td>

                                        </tr>
                                        <tr>
                                            <td>EMAIL:</td>
                                            <td id="email:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->email; ?></td>

                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>PASSWORD REST</td>
                                            <td>

                                                <a href="<?php echo base_url() . "index.php/user/reset/" . $loop->id; ?>" class="tooltip-info qualification" data-rel="tooltip" title="verify">
                                                    <span class="red">
                                                        <i class="icon-lock bigger-120 text-danger"></i>Reset   </span>
                                                </a>


                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr> 
                                        <tr>
                                            <td>
                                                <form id="identicalForm"  enctype="multipart/form-data" class="form-horizontal form-label-left"  action='<?= base_url(); ?>index.php/user/update_password'  method="post">                                       


                                                    <h4>Change password</h4>
                                                    <div class="form-group">
                                                        <label for="email">Password:</label>
                                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="" />                                                   

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pwd">Confirm password:</label>
                                                        <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirm password" value="" />

                                                    </div>  

                                                    <input type="hidden" name="userID" id="userID" value="<?php echo $id; ?>" />     
                                                    <button id="send" class="btn btn-default" type="submit" >Change password</button>


                                                </form>
                                            </td>
                                            <td>

                                            </td>
                                            <td></td>
                                            <td> 
                                                <form  enctype="multipart/form-data" class="form-horizontal form-label-left"  action='<?= base_url(); ?>index.php/user/update_image'  method="post">                                       
                                                    <h4>New profile picture</h4>
                                                    <div class="form-group">
                                                        <input type="file"  class="form-control" name="userfile" id="userfile" />
                                                    </div>  
                                                    <div class="form-group">
                                                        <div id="imagePreview" ></div> 
                                                    </div>                
                                                    <input type="hidden" class="form-control" name="userID" id="userID" value="<?php echo $id; ?>" />                                                   
                                                    <input type="hidden" name="namer" id="namer" value="<?php echo $fname . $lname; ?>" />
                                                    <button id="send"  class="btn btn-default" type="submit" >Update picture</button>


                                                </form></td>
                                        </tr>

                                        <?php
                                    }
                                }
                                ?>

                            </tbody>
                        </table>
                
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
    var message_status = $("#status");
        $("td[contenteditable=true]").blur(function () {
            var field_id = $(this).attr("id");
            var value = $(this).text();
            $.post('<?php echo base_url() . "index.php/user/updater/"; ?>', field_id + "=" + value, function (data) {
                if (data != '')
                {
                    message_status.show();
                    message_status.text(data);
                    //hide the message
                    setTimeout(function () {
                        message_status.hide()
                    }, 1000);
                }
            });
        });


</script>
