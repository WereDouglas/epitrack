<?php require_once(APPPATH . 'views/css-page.php'); ?>
<script>
    // This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.

    var placeSearch, autocomplete;
    var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };

    function initialize() {
        // Create the autocomplete object, restricting the search
        // to geographical location types.
        autocomplete = new google.maps.places.Autocomplete(
                /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
                {types: ['geocode']});
        // When the user selects an address from the dropdown,
        // populate the address fields in the form.
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            fillInAddress();
        });
    }

// [START region_fillform]
    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    }

    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var geolocation = new google.maps.LatLng(
                        position.coords.latitude, position.coords.longitude);
                var circle = new google.maps.Circle({
                    center: geolocation,
                    radius: position.coords.accuracy
                });
                autocomplete.setBounds(circle.getBounds());
            });
        }
    }
// [END region_geolocation]

</script>
<body onload="initialize()">

    <div class="col-xs-12">

        <h2>Students</h2>
        <a href="javascript:void(0);" class="add_user" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus-square"></i> <span> New student</span> </a>

        <?php echo $this->session->flashdata('msg'); ?>
        <div class="row-fluid">
            <div class="span12 widget-container-span">

                <div class="row span12">
                    <table  id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="center">
                                    <label>
                                        <input type="checkbox" />
                                        <span class="lbl"></span>
                                    </label>
                                </th>
                                <th>Approve/activate</th>
                                <th></th>
                                <th>First name</th>
                                <th>last name</th>
                                <th>Other</th>   
                                <th>email</th> 

                                <th>Country</th>  
                                <th>Contact</th> 
                                <th>Cohort</th>
                                <th>Completed</th>
                                <th>Date of completion</th>
                                <th>Comments</th>
                                <th>password reset</th>
                                <th></th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            if (is_array($students) && count($students)) {
                                foreach ($students as $loop) {
                                    $fname = $loop->fname;
                                    $lname = $loop->lname;
                                    $other = $loop->other;
                                    $email = $loop->email;
                                    $contact = $loop->contact;

                                    $id = $loop->id;
                                    ?>  

                                    <tr id="<?php echo $id; ?>" class="edit_tr">
                                        <td class="center ">
                                            <label>
                                                <input type="checkbox" />
                                                <span class="lbl"></span>
                                            </label>
                                        </td>
                                        <td >

                                            <?php
                                            if ($loop->status == "false") {
                                                ?>
                                                <div class="btn-group" data-toggle="buttons" data-toggle-default-class="btn-default">
                                                    <label class="btn btn-xs btn-default" data-toggle-class="btn-success" value="<?= $loop->id; ?>">
                                                        <input type="radio" name="status" id="<?= $loop->status; ?>" value="<?= $loop->id; ?>" />
                                                        Active
                                                    </label>
                                                    <label class="btn btn-xs btn-danger active" data-toggle-class="btn-danger" value="<?= $loop->id; ?>">
                                                        <input type="radio" name="status" id="<?= $loop->status; ?>" value="<?= $loop->id; ?>" checked />
                                                        Off
                                                    </label>
                                                </div> 
                                            <?php } ?>

                                            <?php
                                            if ($loop->status == "active") {
                                                ?>
                                                <div class="btn-group" data-toggle="buttons" data-toggle-default-class="btn-default">
                                                    <label class="btn btn-xs btn-success active" data-toggle-class="btn-success">
                                                        <input type="radio" name="status" id="<?= $loop->status; ?>" value="<?= $loop->id; ?>" checked />
                                                        Active
                                                    </label>
                                                    <label class="btn btn-xs btn-default " data-toggle-class="btn-danger">
                                                        <input type="radio" name="status" id="<?= $loop->status; ?>" value="<?= $loop->id; ?>"  />
                                                        Off
                                                    </label>
                                                </div> 
                                            <?php } ?>

                                        </td>
                                        <td>
                                            <div class="profile-activity">
                                                <a href="<?php echo base_url() . "index.php/student/details/" . $loop->id; ?>" target="frame">    <img class="nav-user-photo"  src="<?= base_url(); ?>uploads/<?= $loop->image ?>" height="70px" width="70px"  alt="<?php echo $fname; ?>" /></a>
                                            </div>
                                        </td>
                                        <td class="edit_td">
                                            <span id="fname_<?php echo $id; ?>" class="text"><?php echo $fname; ?></span>
                                            <input type="text" value="<?php echo $fname; ?>" class="editbox" id="fname_input_<?php echo $id; ?>"
                                        </td>
                                        <td class="edit_td">
                                            <span id="lname_<?php echo $id; ?>" class="text"><?php echo $lname; ?></span>
                                            <input type="text" value="<?php echo $lname; ?>" class="editbox" id="lname_input_<?php echo $id; ?>"
                                        </td>
                                        <td class="edit_td">
                                            <span id="other_<?php echo $id; ?>" class="text"><?php echo $other; ?></span>
                                            <input type="text" value="<?php echo $other; ?>" class="editbox" id="other_input_<?php echo $id; ?>"
                                        </td>
                                        <td class="edit_td">
                                            <span id="email_<?php echo $id; ?>" class="text"><?php echo $email; ?></span>
                                            <input type="text" value="<?php echo $email; ?>" class="editbox" id="email_input_<?php echo $id; ?>"
                                        </td>



                                        <td><?= $loop->country ?></td>

                                        <td class="edit_td">
                                            <span id="contact_<?php echo $id; ?>" class="text"><?php echo $contact; ?></span>
                                            <input type="text" value="<?php echo $contact; ?>" class="editbox" id="contact_input_<?php echo $id; ?>"
                                        </td>
                                        <td><?= $loop->cohort ?></td>
                                        <td id="complete:<?php echo $loop->id; ?>" contenteditable="true"><span class="red"><?php echo $loop->complete; ?></span></td>
                                        <td id="date_complete:<?php echo $loop->id; ?>" contenteditable="true"><span class="red"><?php echo $loop->date_complete; ?></span></td>
                                        <td id="comments:<?php echo $loop->id; ?>" contenteditable="true"><span class="red"><?php echo $loop->comments; ?></span></td>
                                        <td>

                                            <a href="<?php echo base_url() . "index.php/student/reset/" . $loop->id; ?>" class="tooltip-info qualification" data-rel="tooltip" title="verify">
                                                <span class="red">
                                                    <i class="icon-lock bigger-120 text-danger"></i>Reset   </span>
                                            </a>


                                        </td>
                                        <td class="td-actions">

                                            <a href="<?php echo base_url() . "index.php/management/student/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                <span class="red">
                                                    <i class="icon-trash bigger-120"></i>
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
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade  col-md-12" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">NEW STUDENT</h4>
                </div>
                <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/management/country_student/'  method="post">

                    <div class="control-group form">
                        <div class="row">
                            <div class=" col-md-6">
                                <div class="controls">
                                    <div class="form-group">
                                        <label>Upload profile picture</label>
                                        <input multiple=""  class="form-control" type="file" name="userfile" id="id-input-file-3" />                                                       
                                    </div>
                                    <div class="form-group">
                                        <label>   Select track :</label><br>
                                        <select id="cohort"  class="form-control" name="cohort" >                                                            
                                            <?php
                                            if (is_array($cohorts) && count($cohorts)) {
                                                foreach ($cohorts as $loop) {
                                                    ?>                        
                                                    <option value="<?= $loop->name ?>" /><?= $loop->name ?>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Course Completion:</label>                           
                                        <select class="form-control"  data-placeholder="Date" name="complete" id="complete">
                                            <option value="false" />false</option>
                                            <option value="true" />true</option>

                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label>  Year of completion:  </label>
                                        <input class="date-picker form-control" id="date_complete" name="date_complete" type="text" value="<?php echo date('d-m-Y');?>" data-date-format="dd-mm-yyyy" /></span>

                                    </div>
                                    <div class="form-group">
                                        <label>Comments</label>

                                        <input type="text" class="form-control"  id="comment" name="comment" placeholder="Comment"  /></span>
                                    </div>
                                    <div class="form-group">

                                        <label>First name</label>
                                        <input type="text" class="form-control" required="true"  id="fname" name="fname" placeholder="First name"  />

                                    </div>
                                    <div class="form-group">
                                        <label>Last name:</label>
                                        <input class="input-small form-control" required="true"   type="text" id="lname" name="lname" placeholder="Last Name"  />

                                    </div>
                                    <div class="form-group">
                                        <label> Other name:</label>
                                        <input class="input-small form-control"  type="text" id="other" name="other" placeholder="Other name"  />

                                    </div>
                                    <div class="form-group">
                                        <label>Primary e-mail:</label>
                                        <input type="email" class="input-small form-control" required="true"  id="email" name="email"  placeholder="Email" />
                                    </div>


                                </div>
                            </div>
                            <div class=" col-md-6"> 

                                <div class="form-group">
                                    <label>  Primary contact</label> 
                                    <input type="text" class="input-small form-control"  id="contact" name="contact"  placeholder="+2567893213394" />

                                </div>
                                <div class="form-group">
                                    <label>  Gender:  </label>
                                    <select  data-placeholder="Choose a sex..." name="gender" id="gender" class="form-control">

                                        <option value="male" />male</option>
                                        <option value="female" />female</option>
                                    </select>
                                </div>
                                <div class="control-group">                           
                                    <label>Date of Birth:  </label>    
                                    <input class="easyui-datebox form-control" name="dob" id="dob" style="width:100%;height:26px">
                                </div>
                                <div class="form-group">
                                    <div class="controls" id="locationField">
                                        <label> Location: </label> 
                                        <input class="form-control"  id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text"></input>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <label> Supervisor email: </label>   
                                    <input class="form-control" required="true"  id="supervisor" name="supervisor" placeholder="Enter your supervisor's email" type="email"></input>

                                </div>

                                <div class="form-group">
                                    <div class="controls">
                                        <div class="controls " id="address">

                                            <div class="form-group">
                                                <label> Country :</label>  
                                                <input class="field form-control" name="country" id="country" type="text" value="<?php echo $this->session->userdata('country'); ?>" ></input>

                                            </div>        
                                            <input class="field" id="street_number" type="hidden" disabled="true"></input>
                                            <input class="field" id="route"type="hidden"  disabled="true"></input>
                                            <input class="field" id="locality" type="hidden"     disabled="true"></input>
                                            <input class="field" type="hidden" id="administrative_area_level_1" disabled="true"></input>
                                            <input class="field" type="hidden" id="postal_code"></input>


                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">                   
                                    <label> Password: </label> 
                                    <input type="password" id="password1" class="form-control" name="password1" />                   
                                </div>

                                <div class="form-group">                      
                                    <label>Confirm Password:  </label>  
                                    <input type="password" class="form-control" id="password2" name="password2" />

                                </div>

                                <div class="form-group">
                                    <button class="btn btn-info" type="submit">
                                        <i class="icon-ok bigger-110"></i>
                                        Submit
                                    </button>

                                    <button class="btn" type="reset">
                                        <i class="icon-undo bigger-110"></i>
                                        Reset
                                    </button>
                                </div>
                            </div>

                        </div>  
                    </div>                   
                </form>

            </div>
        </div>
    </div>
</div>



<!--<![endif]-->

<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

<!--[if !IE]>-->

<script type="text/javascript">
    window.jQuery || document.write("<script src='<?= base_url(); ?>assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
</script>

<!--<![endif]-->

<!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
    if ("ontouchend" in document)
        document.write("<script src='<?= base_url(); ?>assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

<!--page specific plugin scripts-->

<!--[if lte IE 8]>
  <script src="assets/js/excanvas.min.js"></script>
<![endif]-->

<!--inline scripts related to this page-->
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

            $("#contact" + ID).hide();
            $("#contact_input_" + ID).show();


            $("#email" + ID).hide();
            $("#email_input_" + ID).show();

            $("#other" + ID).hide();
            $("#other_input_" + ID).show();




        }).change(function ()
        {
            var ID = $(this).attr('id');
            var fname = $("#fname_input_" + ID).val();
            var lname = $("#lname_input_" + ID).val();
            var contact = $("#contact_input_" + ID).val();
            var email = $("#email_input_" + ID).val();
            var other = $("#other_input_" + ID).val();

            var dataString = 'id=' + ID + '&fname=' + fname + '&lname=' + lname + '&contact=' + contact + '&email=' + email + '&other=' + other;
            $("#fname_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
            $("#lname_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
            $("#contact_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
            $("#email_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
            $("#other_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image

            if (fname.length > 0 && lname.length > 0)
            {

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() . "index.php/management/student/update/"; ?>",
                    data: dataString,
                    cache: false,
                    success: function (html)
                    {
                        $("#fname_" + ID).html(fname);
                        $("#lname_" + ID).html(lname);
                        $("#contact_" + ID).html(contact);
                        $("#email_" + ID).html(email);
                        $("#other_" + ID).html(other);

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

    });
</script>

<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>


<script>


    $('.btn-group[data-toggle=buttons]').each(function (i, e) {
        var default_class = $(e).data('toggle-default-class') || 'btn-default';

        $(e).find('label')
                .click(function (event) {
                    $(e).find('label')
                            .each(function (i, e) {
                                if (!(e == event.target)) {
                                    $(e).removeClass($(e).data('toggle-class'))
                                            .addClass(default_class);

                                    $(e).find('input').removeAttr('checked');
                                    console.log($(e).find("input").attr("id"));


                                    $.post("<?php echo base_url() ?>index.php/management/activate_student", {
                                        id: $(e).find("input").val(),
                                        actives: $(e).find("input").attr("id")

                                    }, function (response) {
                                        // console.log(response);
                                    });
                                    // alert("active");

                                } else {
                                    $(e).removeClass(default_class)
                                            .addClass($(e).data('toggle-class'));

                                    $(e).find('input')
                                            .attr('checked', 1);

                                }
                            });
                });
    });

</script>
<script src="<?= base_url(); ?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $("#example1").DataTable();

    });
</script>
<script>
    $(document).ready(function () {
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
                        }, 4000);
                    }
                });
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
