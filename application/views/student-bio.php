<?php require_once(APPPATH . 'views/css-page.php'); ?>    
<style>
table.zebra-style {
	font-family:"Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
	text-align:left;
	border:1px solid #ccc;
	margin-bottom:25px;
	width:90%
}
table.zebra-style th {
	color: #444;
	font-size: 13px;
	font-weight: normal;
	padding: 10px 8px;
}
table.zebra-style td {
	color: #777;
	padding: 8px;
	font-size:13px;
}
table.zebra-style tr.odd {
	background:#f2f2f2;
}
body {
	background:#fafafa;
}
.container {
	width: 800px;
	border: 1px solid #C4CDE0;
	border-radius: 2px;
	margin: 0 auto;
	height: 1300px;
	background:#fff;
	padding-left:10px;
}
#status { padding:10px; background:#88C4FF; color:#000; font-weight:bold; font-size:12px; margin-bottom:10px; display:none; width:90%; }
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
<!--<a href="#" class="btn btn-default btn-primary">Vertical View</a>-->
<!--        <table id="datatable-buttons" class="table table-striped table-bordered">
            <thead>
                <tr>
                   
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>CONTACT</th>
                    <th>COUNTRY</th>
                    <th>EMAIL</th>
                    <th>RESET PASSWORD</th>
                    <th>CREATED:</th>
                    <th>ACTION</th>
                </tr>
            </thead>


            <tbody>
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
                        <tr id="<?php echo $id; ?>" class="edit_tr">
                            
                            <td class="edit_td">
                                <span id="fname_<?php echo $id; ?>" class="text"><?php echo $fname; ?></span>
                                <input type="text" value="<?php echo $fname; ?>" class="editbox" id="fname_input_<?php echo $id; ?>"
                            </td>
                            <td class="edit_td">
                                <span id="lname_<?php echo $id; ?>" class="text"><?php echo $lname; ?></span>
                                <input type="text" value="<?php echo $lname; ?>" class="editbox" id="lname_input_<?php echo $id; ?>"
                            </td>

                            <td class="edit_td">
                                <span id="contact_<?php echo $id; ?>" class="text"><?php echo $contact; ?></span>
                                <input type="text" value="<?php echo $contact; ?>" class="editbox" id="contact_input_<?php echo $id; ?>"

                            </td>
                            <td class="edit_td">
                                 <?php echo $country; ?>
                            </td>
                            <td >
                                <?php echo $email; ?>
                            </td>      
                            <td>
                                <a href="#"  value="<?php echo $loop->id; ?>"  id="myLink" onclick="NavigateToSite(this)" class="tooltip-error text-danger" data-rel="tooltip" title="reset">
                                    <span class="red">
                                        <i class="icon-lock bigger-120 text-danger"></i>
                                        Reset
                                    </span>
                                </a>
                            </td>

                            <td class="edit_td">
                                 <?php echo $submitted; ?>
                            </td>   

                            <td class="center">
                                <a class="btn-danger btn-small icon-remove" href="<?php echo base_url() . "index.php/user/delete/" . $id; ?>"></a>
                            </td>

                        </tr>
                        <?php
                    }
                }
                ?>

            </tbody>
        </table>-->
<table class="table zebra-style span8">
    <thead>
      <tr>
        <th>#</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Other name</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Date of Birth</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
        
        
         <?php
                if (is_array($bio) && count($bio)) {
                    foreach ($bio as $loop) {
                        
                        ?>  
        
     <tr class="odd">
        <td><?php echo $loop->id;?></td>
        <td id="fname:<?php echo $loop->id;?>" contenteditable="true"><?php echo $loop->fname;?></td>
        <td id="lname:<?php echo $loop->id;?>" contenteditable="true"><?php echo $loop->lname;?></td>
        <td id="other:<?php echo $loop->id;?>" contenteditable="true"><?php echo $loop->other;?></td>
        <td id="contact:<?php echo $loop->id;?>" contenteditable="true"><?php echo $loop->contact;?></td>
         <td id="email:<?php echo $loop->id;?>" contenteditable="true"><?php echo $loop->email;?></td>
         <td id="dob:<?php echo $loop->id;?>" contenteditable="true"><?php echo $loop->dob;?></td>
         <td>
             <a href="#"  value="<?php echo $loop->id; ?>"  id="myLink" onclick="NavigateToSite(this)" class="tooltip-error text-danger" data-rel="tooltip" title="reset">
                                    <span class="red">
                                        <i class="icon-lock bigger-120 text-danger"></i>
                                        Reset
                                    </span>
                                </a>
             
         </td>
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
$(function(){
	//acknowledgement message
    var message_status = $("#status");
    $("td[contenteditable=true]").blur(function(){
        var field_id = $(this).attr("id") ;
        var value = $(this).text() ;
        $.post('<?php echo base_url() . "index.php/student/updater/"; ?>' , field_id + "=" + value, function(data){
            if(data != '')
			{
				message_status.show();
				message_status.text(data);
				//hide the message
				setTimeout(function(){message_status.hide()},1000);
			}
        });
    });
	
	
	 jQuery('.s_download').click(function(){
			var semail = jQuery("#itzurkarthi_email").val();
			if(semail == '')
			{
				alert('Enter Email');
				return false;
			}
			var str = "sub_email="+semail
			jQuery.ajax({
				type: "POST",
				url: "download.php",
				data: str,
				cache: false,
				success: function(htmld){
						jQuery('#down_update').html(htmld);
				}
			});
	  });
	
});
</script>
