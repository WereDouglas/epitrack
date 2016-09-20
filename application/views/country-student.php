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

        <div class="row-fluid">
            <div class="span12 widget-container-span">

                <div class="">

                    <div class="">
                        <div class="btn-toolbar ">
                            <div class="btn-group">
                                <a href="#collapseTwo" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">

                                    <button class="btn btn-small btn-success">
                                        <i class="icon-save bigger-125"></i>
                                        Add
                                    </button></a>
                                <a href="#collapseThree" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">

                                    <button class="btn btn-small btn-danger">
                                        <i class="icon-list bigger-110"></i>
                                        List
                                    </button>
                                </a>
                            </div>                             
                        </div>
                    </div>

                </div>

                <div class="widget-main ">
                    <div id="accordion2" class="accordion">              
<div class="col-md-12 col-sm-12 col-xs-12"> <span class="info-box status col-md-12 col-sm-12 col-xs-12" id="status"></span></div>
                        <div class="accordion-group container row-fluid">


                            <div class="accordion-body collapse" id="collapseTwo">
                                <div class="accordion-inner">
                                    <?php echo $this->session->flashdata('msg'); ?>
                                    <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/management/country_student/'  method="post">                                            <div class=" span6">
                                            <div class="widget-main">
                                                <label>Upload profile picture</label>
                                                <input multiple="" type="file" name="userfile" id="id-input-file-3" />                                                       
                                            </div>
                                            <div class="control-group">
                                                <label>   Select track :</label><br>
                                                <select id="cohort" name="cohort" >                                                            
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
                                            <span class="span12 align-right"> Complete: <select  data-placeholder="Date" name="complete" id="complete">

                                                    <option value="true" />true
                                                    <option value="false" />false

                                                </select></span>  
                                            <div class="controls">
                                                <span class="span12 align-right">  Date of completion:   <input class="date-picker" id="date_complete" name="date_complete" type="text" data-date-format="dd-mm-yyyy" /></span>

                                            </div>
                                            <label>Comments</label><br>
                                            <span class="span12 "><input type="text" class="span6"  id="comment" name="comment" placeholder="Comment"  /></span>



                                            <div class="control-group">
                                                <div class="controls">
                                                    <label>First name</label><br>
                                                    <span class="span12 "><input type="text" class="span6"  id="fname" name="fname" placeholder="First name"  /></span>
                                                    <label>Last name:</label><br> <span class="span12 "><input class="input-small span6"  type="text" id="lname" name="lname" placeholder="Last Name"  /></span>
                                                    <label> Other name:</label> <br> <span class="span12 "><input class="input-small span6"  type="text" id="other" name="other" placeholder="Other name"  /></span>

                                                </div>
                                            </div>
                                            <label>Primary e-mail:</label><br> <span class="span12 "> <input type="text" class="input-small span6" id="email" name="email"  placeholder="info@gmail.com" /></span>
                                            <label>  Primary contact</label><br>  <span class="span12 ">  <input type="text" class="input-small span6"  id="contact" name="contact"  placeholder="+2567893213394" /></span>


                                        </div>

                                        <div class="span6 padding-10">
                                            <label>  Gender:  </label><br> <span class="span12 ">  <select  data-placeholder="Choose a sex..." name="gender" id="gender">

                                                    <option value="male" />male
                                                    <option value="female" />female

                                                </select></span> 

                                            <div class="control-group">

                                                <div class="controls">
                                                    <label>Date of Birth:  </label>     <span class="span12 ">    <input class="date-picker" id="dob" name="dob" type="text" data-date-format="dd-mm-yyyy" /></span>

                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <div class="controls" id="locationField">
                                                    <label> Location: </label>     <span class="span12 "> <input  id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text"></input></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <div class="controls " id="address">
                                                        <label> Country :</label>    <div class="control-group">
                                                            <input class="field" name="country" id="country" type="text" value="<?php echo $this->session->userdata('country'); ?>" ></input>

                                                        </div>          <input class="field" id="street_number" type="hidden" disabled="true"></input>
                                                        <input class="field" id="route"type="hidden"  disabled="true"></input>
                                                        <input class="field" id="locality" type="hidden"     disabled="true"></input>
                                                        <input class="field" type="hidden" id="administrative_area_level_1" disabled="true"></input>
                                                        <input class="field" type="hidden" id="postal_code"></input>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="control-group">

                                                <div class="controls">
                                                    <label> Password: </label>      <span class="span12">  <input type="password" id="password1" class="span6" name="password1" /></span>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <div class="controls">
                                                    <label>Confirm Password:  </label>      <span class="span12">    <input type="password" class="span6" id="password2" name="password2" /></span>
                                                </div>
                                            </div>

                                            <div class="">
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





                                    </form>	
                                </div>
                            </div>
                        </div>

                        <div class="accordion-group">
                            <div class="col-md-12 col-sm-12 col-xs-12"> <span class="info-box status col-md-12 col-sm-12 col-xs-12" id="status"></span></div>
                            <div class="accordion-body collapsed" id="collapseThree">
                                <div class="accordion-inner">

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
                                                    <th>Comment</th>
                                                    <th>Date of completion</th>
                                                    <th>Comments</th>

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
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row-fluid">



    </div>                

</div><!--/.main-content-->


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

<script src="<?= base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?= base_url(); ?>assets/js/chosen.jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/fuelux/fuelux.spinner.min.js"></script>
<script src="<?= base_url(); ?>assets/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url(); ?>assets/js/date-time/bootstrap-timepicker.min.js"></script>
<script src="<?= base_url(); ?>assets/js/date-time/moment.min.js"></script>
<script src="<?= base_url(); ?>assets/js/date-time/daterangepicker.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap-colorpicker.min.js"></script>

<script src="<?= base_url(); ?>assets/js/jquery.autosize-min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap-tag.min.js"></script>

<!--ace scripts-->

<script src="<?= base_url(); ?>assets/js/ace-elements.min.js"></script>
<script src="<?= base_url(); ?>assets/js/ace.min.js"></script>

<!--inline scripts related to this page-->

<script type="text/javascript">
    $(function () {
        $('#id-disable-check').on('click', function () {
            var inp = $('#form-input-readonly').get(0);
            if (inp.hasAttribute('disabled')) {
                inp.setAttribute('readonly', 'true');
                inp.removeAttribute('disabled');
                inp.value = "This text field is readonly!";
            } else {
                inp.setAttribute('disabled', 'disabled');
                inp.removeAttribute('readonly');
                inp.value = "This text field is disabled!";
            }
        });


        $(".chzn-select").chosen();

        $('[data-rel=tooltip]').tooltip({container: 'body'});
        $('[data-rel=popover]').popover({container: 'body'});

        $('textarea[class*=autosize]').autosize({append: "\n"});
        $('textarea[class*=limited]').each(function () {
            var limit = parseInt($(this).attr('data-maxlength')) || 100;
            $(this).inputlimiter({
                "limit": limit,
                remText: '%n character%s remaining...',
                limitText: 'max allowed : %n.'
            });
        });

        $.mask.definitions['~'] = '[+-]';
        $('.input-mask-date').mask('99/99/9999');
        $('.input-mask-phone').mask('(999) 999-9999');
        $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
        $(".input-mask-product").mask("a*-999-a999", {placeholder: " ", completed: function () {
                alert("You typed the following: " + this.val());
            }});



        $("#input-size-slider").css('width', '200px').slider({
            value: 1,
            range: "min",
            min: 1,
            max: 6,
            step: 1,
            slide: function (event, ui) {
                var sizing = ['', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
                var val = parseInt(ui.value);
                $('#form-field-4').attr('class', sizing[val]).val('.' + sizing[val]);
            }
        });

        $("#input-span-slider").slider({
            value: 1,
            range: "min",
            min: 1,
            max: 11,
            step: 1,
            slide: function (event, ui) {
                var val = parseInt(ui.value);
                $('#form-field-5').attr('class', 'span' + val).val('.span' + val).next().attr('class', 'span' + (12 - val)).val('.span' + (12 - val));
            }
        });


        $("#slider-range").css('height', '200px').slider({
            orientation: "vertical",
            range: true,
            min: 0,
            max: 100,
            values: [17, 67],
            slide: function (event, ui) {
                var val = ui.values[$(ui.handle).index() - 1] + "";

                if (!ui.handle.firstChild) {
                    $(ui.handle).append("<div class='tooltip right in' style='display:none;left:15px;top:-8px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
                }
                $(ui.handle.firstChild).show().children().eq(1).text(val);
            }
        }).find('a').on('blur', function () {
            $(this.firstChild).hide();
        });

        $("#slider-range-max").slider({
            range: "max",
            min: 1,
            max: 10,
            value: 2
        });

        $("#eq > span").css({width: '90%', 'float': 'left', margin: '15px'}).each(function () {
            // read initial values from markup and remove that
            var value = parseInt($(this).text(), 10);
            $(this).empty().slider({
                value: value,
                range: "min",
                animate: true

            });
        });


        $('#id-input-file-1 , #id-input-file-2').ace_file_input({
            no_file: 'No File ...',
            btn_choose: 'Choose',
            btn_change: 'Change',
            droppable: false,
            onchange: null,
            thumbnail: false //| true | large
                    //whitelist:'gif|png|jpg|jpeg'
                    //blacklist:'exe|php'
                    //onchange:''
                    //
        });

        $('#id-input-file-3').ace_file_input({
            style: 'well',
            btn_choose: 'Drop files here or click to choose',
            btn_change: null,
            no_icon: 'icon-cloud-upload',
            droppable: true,
            thumbnail: 'small'
                    //,icon_remove:null//set null, to hide remove/reset button
                    /**,before_change:function(files, dropped) {
                     //Check an example below
                     //or examples/file-upload.html
                     return true;
                     }*/
                    /**,before_remove : function() {
                     return true;
                     }*/
            ,
            preview_error: function (filename, error_code) {
                //name of the file that failed
                //error_code values
                //1 = 'FILE_LOAD_FAILED',
                //2 = 'IMAGE_LOAD_FAILED',
                //3 = 'THUMBNAIL_FAILED'
                //alert(error_code);
            }

        }).on('change', function () {
            //console.log($(this).data('ace_input_files'));
            //console.log($(this).data('ace_input_method'));
        });


        //dynamically change allowed formats by changing before_change callback function
        $('#id-file-format').removeAttr('checked').on('change', function () {
            var before_change
            var btn_choose
            var no_icon
            if (this.checked) {
                btn_choose = "Drop images here or click to choose";
                no_icon = "icon-picture";
                before_change = function (files, dropped) {
                    var allowed_files = [];
                    for (var i = 0; i < files.length; i++) {
                        var file = files[i];
                        if (typeof file === "string") {
                            //IE8 and browsers that don't support File Object
                            if (!(/\.(jpe?g|png|gif|bmp)$/i).test(file))
                                return false;
                        } else {
                            var type = $.trim(file.type);
                            if ((type.length > 0 && !(/^image\/(jpe?g|png|gif|bmp)$/i).test(type))
                                    || (type.length == 0 && !(/\.(jpe?g|png|gif|bmp)$/i).test(file.name))//for android's default browser which gives an empty string for file.type
                                    )
                                continue;//not an image so don't keep this file
                        }

                        allowed_files.push(file);
                    }
                    if (allowed_files.length == 0)
                        return false;

                    return allowed_files;
                }
            } else {
                btn_choose = "Drop files here or click to choose";
                no_icon = "icon-cloud-upload";
                before_change = function (files, dropped) {
                    return files;
                }
            }
            var file_input = $('#id-input-file-3');
            file_input.ace_file_input('update_settings', {'before_change': before_change, 'btn_choose': btn_choose, 'no_icon': no_icon})
            file_input.ace_file_input('reset_input');
        });




        $('#spinner1').ace_spinner({value: 0, min: 0, max: 200, step: 10, btn_up_class: 'btn-info', btn_down_class: 'btn-info'})
                .on('change', function () {
                    //alert(this.value)
                });
        $('#spinner2').ace_spinner({value: 0, min: 0, max: 10000, step: 100, icon_up: 'icon-caret-up', icon_down: 'icon-caret-down'});
        $('#spinner3').ace_spinner({value: 0, min: -100, max: 100, step: 10, icon_up: 'icon-plus', icon_down: 'icon-minus', btn_up_class: 'btn-success', btn_down_class: 'btn-danger'});



        $('.date-picker').datepicker().next().on(ace.click_event, function () {
            $(this).prev().focus();
        });
        $('#id-date-range-picker-1').daterangepicker().prev().on(ace.click_event, function () {
            $(this).next().focus();
        });

        $('#timepicker1').timepicker({
            minuteStep: 1,
            showSeconds: true,
            showMeridian: false
        })

        $('#colorpicker1').colorpicker();
        $('#simple-colorpicker-1').ace_colorpicker();





        //we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
        var tag_input = $('#form-field-tags');
        if (!(/msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())))
            tag_input.tag({placeholder: tag_input.attr('placeholder')});
        else {
            //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
            tag_input.after('<textarea id="' + tag_input.attr('id') + '" name="' + tag_input.attr('name') + '" rows="3">' + tag_input.val() + '</textarea>').remove();
            //$('#form-field-tags').autosize({append: "\n"});
        }


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