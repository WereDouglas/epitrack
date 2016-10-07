<?php require_once(APPPATH . 'views/css-page.php'); ?>  
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
</style>
<div class="col-xs-12">
    <section >
        <div class="profile-user-info profile-user-info-striped">

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
                }
            }
            ?>
            <div class="span3 center">
                <span class="profile-picture">
                    <img id="avatar" height="100px" width="120px" class="editable" alt="<?php echo $fname; ?>" src="<?= base_url(); ?>uploads/<?= $image ?>" />
                </span>

            </div>

            <!--PAGE CONTENT ENDS-->
        </div><!--/.span-->

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
                $submitted = $loop->submitted;
                ?>  


                <?php
            }
        }
        ?>

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
                            <td>OTHER NAME:</td>
                            <td id="other:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->other; ?></td>

                            <td>CONTACT:</td>
                            <td id="contact:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->contact; ?></td>

                        </tr>
                        <tr>
                            <td>EMAIL:</td>
                            <td id="email:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->email; ?></td>

                            <td>DATE OF BIRTH:</td>
                            <td id="dob:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->dob; ?></td>

                        </tr>
                        <tr>
                            <td>PASSWORD REST</td>
                            <td>

                                <a href="<?php echo base_url() . "index.php/student/reset/" . $loop->id; ?>" class="tooltip-info qualification" data-rel="tooltip" title="verify">
                                    <span class="red">
                                        <i class="icon-lock bigger-120 text-danger"></i>Reset   </span>
                                </a>


                            </td>
                            <td></td>
                            <td></td>
                        </tr> 
                        <tr>
                            <td>
                                <form id="identicalForm"  enctype="multipart/form-data" class="form-horizontal form-label-left"  action='<?= base_url(); ?>index.php/student/update_password'  method="post">                                       


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
                                <form  enctype="multipart/form-data" class="form-horizontal form-label-left"  action='<?= base_url(); ?>index.php/student/update_image'  method="post">                                       
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
        <br>
        </div>
        </div>
        </div>



        </div>


    </section>
</div><!--/.page-content-->

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
<script src="<?= base_url(); ?>js/validator.js"></script>

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
<script type="text/javascript">
    $(function () {
        $("#userfile").on("change", function ()
        {
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader)
                return; // no file selected, or no FileReader support

            if (/^image/.test(files[0].type)) { // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function () { // set image data as background of div
                    $("#imagePreview").css("background-image", "url(" + this.result + ")");
                }
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
            $("#fname" + ID).hide();
            $("#fname_input_" + ID).show();

            $("#lname" + ID).hide();
            $("#lname_input_" + ID).show();

            $("#country" + ID).hide();
            $("#country_input_" + ID).show();

            $("#contact" + ID).hide();
            $("#contact_input_" + ID).show();

            $("#email" + ID).hide();
            $("#email_input_" + ID).show();

            $("#address" + ID).hide();
            $("#address_input_" + ID).show();


        }).change(function ()
        {
            var ID = $(this).attr('id');
            var lname = $("#lname_input_" + ID).val();
            var fname = $("#fname_input_" + ID).val();
            var name = $("#country_input_" + ID).val();
            var details = $("#details_input_" + ID).val();
            var contact = $("#contact_input_" + ID).val();

            var address = $("#address_input_" + ID).val();



            var dataString = 'id=' + ID + '&fname=' + fname + '&lname=' + lname + '&address=' + address + '&details=' + details + '&contact=' + contact;
            $("#fname_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif"  />'); // Loading image
            $("#lname_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif"  />'); // Loading image
            $("#details_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif"  />'); // Loading image
            $("#email_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif"  />');
            $("#contact_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif"  />');

            $("#country_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif"  />');
            if (name.length > 0)
            {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() . "index.php/student/update/"; ?>",
                    data: dataString,
                    cache: false,
                    success: function (html)
                    {
                        $("#fname_" + ID).html(fname);
                        $("#lname_" + ID).html(lname);
                        $("#details_" + ID).html(details);
                        $("#contact_" + ID).html(contact);




                    }
                });
            } else
            {
                alert('Enter something.');
            }

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

        $('#loading').hide();
        $("#email2").blur(function () {

            var user = $(this).val();
            if (user != null) {

                $('#loading').show();
                $.post("<?php echo base_url() ?>index.php/organisation/exists", {
                    user: $(this).val()
                }, function (response) {
                    // alert(response);
                    $('#loading').hide();
                    setTimeout(finishAjax('loading', escape(response)), 400);
                });
            }
            function finishAjax(id, response) {
                $('#' + id).html(unescape(response));
                $('#' + id).fadeIn();
            }


        });

    });
</script>

<script>

    function NavigateToSite(ele) {
        var selectedVal = $(ele).attr("value");
        //var selectedVal = document.getElementById("myLink").getAttribute('value');
        //href= "index.php/patient/add_user/'
        $.post("<?php echo base_url() ?>index.php/admin/reset", {
            id: selectedVal
        }, function (response) {
            alert(response);
        });

    }

</script>
<script type="text/javascript">

    $("a").click(function () {
        $("table").each(function () {
            var $this = $(this);
            var newrows = [];
            $this.find("tr").each(function () {
                var i = 0;
                $(this).find("td").each(function () {
                    i++;
                    if (newrows[i] === undefined) {
                        newrows[i] = $("<tr></tr>");
                    }
                    newrows[i].append($(this));
                });
            });
            $this.find("tr").remove();
            $.each(newrows, function () {
                $this.append(this);
            });
        });

        return false;
    });
</script>
<script>
    $(function () {
        //acknowledgement message
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


        jQuery('.s_download').click(function () {
            var semail = jQuery("#itzurkarthi_email").val();
            if (semail == '')
            {
                alert('Enter Email');
                return false;
            }
            var str = "sub_email=" + semail
            jQuery.ajax({
                type: "POST",
                url: "download.php",
                data: str,
                cache: false,
                success: function (htmld) {
                    jQuery('#down_update').html(htmld);
                }
            });
        });

    });
</script>
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
                alert('Password reset please check mail for the new password!')
                location.reload();
            }

        });
        alert('Password reset please check mail for the new password!')
        location.reload();
        return false;
    });

</script>
<script>
$(document).ready(function() {
    $('#identicalForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            confirmPassword: {
                validators: {
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            }
        }
    });
});
</script>
