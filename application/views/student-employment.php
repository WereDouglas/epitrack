<link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css" />

<!--[if IE 7]>
  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
<![endif]-->

<!--page specific plugin styles-->

<!--fonts-->

<!--ace styles-->

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />


<link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery-ui-1.10.3.custom.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/colorpicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/mine.css" />
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
    <div class="main-content">
        <style>
            .form-horizontal .controls {
                margin-left: 2px;
            }
        </style>

        <div class="page-content">


            <?php echo $this->session->flashdata('msg'); ?>
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



                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-small btn-grey dropdown-toggle">
                                        <i class="icon-caret-down icon-only bigger-110"></i>
                                    </button>

                                    <ul class="dropdown-menu pull-right dropdown-purple dropdown-caret dropdown-close">
                                        <li>
                                            <a href="#">Action</a>
                                        </li>

                                        <li>
                                            <a href="#">Another action</a>
                                        </li>

                                        <li>
                                            <a href="#">Something else here</a>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                            <a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div><!--/btn-group-->
                            </div>
                        </div>

                    </div>



                    <div class="widget-main ">
                        <div id="accordion2" class="accordion">              

                            <div class="accordion-group">


                                <div class="accordion-body collapse" id="collapseTwo">
                                    <div class="accordion-inner">
                                        <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/employment'  method="post">            

                                            <div class="alert alert-block alert-info span12">  

                                                <div class="control-group">

                                                    <div class="controls">
                                                        <span class="span6 ">Organisation:<input type="text" class="span6"  id="organisation" name="organisation"   /></span>
                                                        <span class="span6 ">Position:<input class="input-small span6"  type="text" id="position" name="position"   /></span>
                                                        <span class="span6 ">Country:<input class="input-small span6"  type="text" id="country" name="country"  /></span>
                                                        <span class="span6 "> Location:<input type="text" class="input-small span6" id="location" name="location"  /></span>
                                                        <span class="span6 ">Contact: <input type="text" class="input-small span6"  id="contact" name="contact"   /></span>
                                                        <span class="span6 ">Sector: <input type="text" class="input-small span6"  id="sector" name="sector"   /></span>
                                                        
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


                                <div class="accordion-body collapsed" id="collapseThree">
                                    <div class="accordion-inner">
                                        <div class="alert alert-danger">Select a field to edit the content</div>                     


                                        <div class="grid-wrapper pre-scrollable">
                                            <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="center">
                                                            <label>
                                                                <input type="checkbox" />
                                                                <span class="lbl"></span>
                                                            </label>
                                                        </th>

                                                        <th>Organisation</th>
                                                        <th>Position</th>
                                                        <th>Country</th>   
                                                        <th>Location</th>   
                                                        <th>Sector</th>   
                                                        <th>Contact</th>
                                                       
                                                        <th>Created</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    if (is_array($records) && count($records)) {
                                                        foreach ($records as $loop) {
                                                            $organisation = $loop->organisation;
                                                            $position = $loop->position;
                                                            $country = $loop->country;
                                                            $location = $loop->location;
                                                            $sector = $loop->sector;
                                                            $contact = $loop->contact;
                                                            $created = $loop->created;

                                                            $id = $loop->id;
                                                            ?>  

                                                            <tr id="<?php echo $id; ?>" class="edit_tr">
                                                                <td class="center ">
                                                                    <label>
                                                                        <input type="checkbox" />
                                                                        <span class="lbl"></span>
                                                                    </label>
                                                                </td>

                                                                <td class="edit_td">
                                                                    <span id="organisation_<?php echo $id; ?>" class="text"><?php echo $organisation; ?></span>
                                                                    <input type="text" value="<?php echo $organisation; ?>" class="editbox" id="organisation_input_<?php echo $id; ?>"
                                                                </td>
                                                                <td class="edit_td">
                                                                    <span id="position_<?php echo $id; ?>" class="text"><?php echo $position; ?></span>
                                                                    <input type="text" value="<?php echo $position; ?>" class="editbox" id="position_input_<?php echo $id; ?>"
                                                                </td>
                                                                <td class="edit_td">
                                                                    <span id="country_<?php echo $id; ?>" class="text"><?php echo $country; ?></span>
                                                                    <input type="text" value="<?php echo $country; ?>" class="editbox" id="country_input_<?php echo $id; ?>"
                                                                </td>
                                                                <td class="edit_td">
                                                                    <span id="location_<?php echo $id; ?>" class="text"><?php echo $location; ?></span>
                                                                    <input type="text" value="<?php echo $location; ?>" class="editbox" id="location_input_<?php echo $id; ?>"
                                                                </td>
                                                                <td class="edit_td">
                                                                    <span id="sector_<?php echo $id; ?>" class="text"><?php echo $sector; ?></span>
                                                                    <input type="text" value="<?php echo $sector; ?>" class="editbox" id="sector_input_<?php echo $id; ?>"
                                                                </td>
                                                                <td class="edit_td">
                                                                    <span id="contact_<?php echo $id; ?>" class="text"><?php echo $contact; ?></span>
                                                                    <input type="text" value="<?php echo $contact; ?>" class="editbox" id="contact_input_<?php echo $id; ?>"
                                                                </td>

                                                                <td><?= $loop->created ?></td>

                                                                <td class="td-actions">

                                                                    <a href="<?php echo base_url() . "index.php/student/employment/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
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
    $(document).ready(function ()
    {
        $(".editbox").hide();

        $(".edit_tr").click(function ()
        {
            var ID = $(this).attr('id');
            $("#organisation" + ID).hide();
            $("#organisation_input_" + ID).show();

            $("#position" + ID).hide();
            $("#position_input_" + ID).show();

            $("#country" + ID).hide();
            $("#country_input_" + ID).show();


            $("#location" + ID).hide();
            $("#location_input_" + ID).show();

            $("#sector" + ID).hide();
            $("#sector_input_" + ID).show();
            $("#contact" + ID).hide();
            $("#contact_input_" + ID).show();




        }).change(function ()
        {
            var ID = $(this).attr('id');
            var organisation = $("#organisation_input_" + ID).val();
            var position = $("#position_input_" + ID).val();
            var country = $("#country_input_" + ID).val();
            var location = $("#location_input_" + ID).val();
            var sector = $("#sector_input_" + ID).val();
            var contact = $("#contact_input_" + ID).val();

            var dataString = 'id=' + ID + '&organisation=' + organisation + '&position=' + position + '&country=' + country + '&location=' + location + '&sector=' + sector + '&contact=' + contact;
            $("#organisation_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
            $("#position_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
            $("#country_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
            $("#location_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
            $("#sector_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
            $("#contact_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image

            if (organisation.length > 0 && contact.length > 0)
            {

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() . "index.php/student/employment/update/"; ?>",
                    data: dataString,
                    cache: false,
                    success: function (html)
                    {
                        $("#organisation_" + ID).html(organisation);
                        $("#position_" + ID).html(position);
                        $("#country_" + ID).html(country);
                        $("#location_" + ID).html(location);
                        $("#sector_" + ID).html(sector);
                        $("#contact_" + ID).html(contact);

                    }
                });
            }
            else
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
