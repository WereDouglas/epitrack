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

<link href="<?= base_url(); ?>dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/mine.css" />
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
    td {
        border-top: 0px;
    }
</style>
<div class="row content">
    <div class="col-md-12">    
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


        <div class="span3">

        </div>
        <div class="col-md-12 col-sm-12 col-xs-12"> <span class=" status col-md-12 col-sm-12 col-xs-12" id="status"></span></div>
    </div>
    <div class="col-md-12">  

        <?php
        if (is_array($bio) && count($bio)) {
            foreach ($bio as $loop) {
                ?>
                <section class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Custom Tabs -->
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_1" data-toggle="tab"><?php echo $fname . ' ' . $lname; ?></a></li>
                                    <li><a href="#tab_2" data-toggle="tab">Edit image</a></li>
                                    <li><a href="#tab_3" data-toggle="tab">Edit profile information</a></li>
                                    <li><a href="#tab_4" data-toggle="tab">Edit password</a></li>

                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">

                                        <div class="row content">
                                            <div class="col-md-6"> 
                                                <img  height="150px" width="200px" class="user-image" alt="<?php echo $fname; ?>" src="<?= base_url(); ?>uploads/<?= $image ?>" />
                                            </div>
                                            <div class="col-md-6">
                                                DATE  OF BIRTH:<font class="blue"><?php echo $dob; ?></font><br>
                                                GENDER :<font class="blue"> <?php echo $gender; ?></font><br>
                                            </div>
                                        </div>

                                    </div><!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_2">
                                        <form  enctype="multipart/form-data" class="form-horizontal form-label-left"  action='<?= base_url(); ?>index.php/user/update_image'  method="post">                                       
                                            <h4>New profile picture</h4>

                                            <div class="form-group">
                                                <input type="file"   name="userfile" id="userfile" />
                                            </div>  
                                            <div class="form-group">
                                                <div id="imagePreview" ></div> 
                                            </div>                
                                            <input type="hidden" class="form-control" name="userID" id="userID" value="<?php echo $id; ?>" />                                                   
                                            <input type="hidden" name="namer" id="namer" value="<?php echo $fname . $lname; ?>" />
                                            <div class=" clearfix"></div>
                                            <button id="send"  class="btn btn-default" type="submit" >Update picture</button>


                                        </form>
                                    </div><!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_3">
                                        <table class="table zebra-style ">

                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td><font class="red">(Editable)</font></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>FIRST NAME:</td>
                                                    <td id="fname:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->fname; ?></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>LAST NAME:</td>
                                                    <td id="lname:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->lname; ?></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>COUNTRY</td>
                                                    <td id="country:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->country; ?></td>

                                                </tr>
                                                <tr>
                                                    <td>CONTACT:</td>
                                                    <td id="contact:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->contact; ?></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>EMAIL:</td>
                                                    <td id="email:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->email; ?></td>

                                                  
                                                </tr>
                                                <tr>
                                                    <td>GENDER:(Male/Female)</td>
                                                     <td id="gender:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->gender; ?></td>
                       
                                                </tr>
                                                <tr>
                                                    <td>DATE OF BIRTH(YYY-MM-DD):</td>
                                                    <td id="dob:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->dob; ?></td>

                                                    
                                                </tr>
                                                   <tr>
                                                    <td>EMAIL:</td>
                                                    <td id="email:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->email; ?></td>

                                                    
                                                </tr>
                                                <tr>
                                                    <td>PASSWORD REST</td>
                                                    <td>

                                                        <a href="<?php echo base_url() . "index.php/user/reset/" . $loop->id; ?>" class="tooltip-info qualification" data-rel="tooltip" title="verify">
                                                            <span class="red">
                                                                <i class="icon-lock bigger-120 text-danger"></i>Reset   </span>
                                                        </a>


                                                    </td>
                                                   
                                                </tr> 
                                                <tr>
                                                    <td></td>
                                                    <td> </td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_4">
                                        <b></b>
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
                                            <div class=" clearfix"></div>
                                            <hr>
                                            <button id="send" class="btn btn-default" type="submit" >Change password</button>


                                        </form>

                                    </div>
                                </div><!-- /.tab-content -->
                            </div><!-- nav-tabs-custom -->
                        </div><!-- /.col -->

                    </div> <!-- /.row -->
                </section>
                <div class="pull-left">

                </div>
                <?php
            }
        }
        ?>
    </div><!--/.main-content-->
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
        $.post('<?php echo base_url() . "index.php/student/updater/"; ?>', field_id + "=" + value, function (data) {
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
<script type="text/javascript">
    $(document).ready(function ()
    {
        $(".editbox").hide();

        $(".edit_tr").click(function ()
        {
            var ID = $(this).attr('id');

            $("#gender" + ID).hide();
            $("#gender_input_" + ID).show();


        }).change(function ()
        {
            var ID = $(this).attr('id');
            var gender = $("#gender_input_" + ID).val();


            var dataString = 'id=' + ID + '&gender=' + gender;

            $("#gender_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image

            if (gender.length > 0)
            {

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() . "index.php/student/updating/"; ?>",
                    data: dataString,
                    cache: false,
                    success: function (html)
                    {
                        $("#gender_" + ID).html(gender);
                    }
                });
            } else
            {
                alert('Enter something.');
            }
            location.reload();
        });

        // Edit input box click action
        $(".editbox").mouseup(function ()
        {
            return false
        });

        // Outside click action
        $(document).mouseup(function ()
        {
            $(".editbox").hide();
            $(".text").show();
        });

    });
</script>

