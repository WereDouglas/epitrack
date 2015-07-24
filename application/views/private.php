<?php require_once(APPPATH . 'views/header-private.php'); ?>
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/fullcalendar.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/select2.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-editable.css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/mine.css" />

<style>
    html, body, #map-canvas {
        height: 100%;
        margin: 0;
        padding: 0;
    }

</style>

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
// [END region_fillform]

// [START region_geolocation]
// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
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


</head>

<body onload="initialize()">



    <div class="main-content">


        <div class="page-content">

            <div class="row-fluid">
                <div class="span12">
                    <!--PAGE CONTENT BEGINS-->

                    <div class="alert alert-block alert-success">
                        <button type="button" class="close" data-dismiss="alert">
                            <i class="icon-remove"></i>
                        </button>

                        <i class="icon-ok green"></i>

                        Welcome to
                        <strong class="green">
                            Epi-track
                            <small>(v1.1.2)</small>
                        </strong>
                        ,
                        your events are as follows 
                    </div>
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="accordion-group">


                                <div class="accordion-body collapse" id="collapseBio">
                                    <div class="accordion-inner">
                                        <div class="profile-user-info profile-user-info-striped">
                                            <div class="widget-main">
                                                <input type="file" id="id-input-file-2" />
                                                <input multiple="" type="file" id="id-input-file-3" />
                                                <label>
                                                    <input type="checkbox" name="file-format" id="id-file-format" />
                                                    <span class="lbl"> Allow only images</span>
                                                </label>
                                            </div>
                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> First name </div>

                                                <div class="profile-info-value">
                                                    <span class="editable" id="username">Dennis</span>
                                                </div>
                                            </div>
                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Last name </div>

                                                <div class="profile-info-value">
                                                    <span class="editable" id="username">Wokorach</span>
                                                </div>
                                            </div>
                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Primary E-mail </div>

                                                <div class="profile-info-value">
                                                    <span class="editable" id="username">Info@epitrack.com</span>
                                                </div>
                                            </div>
                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Gender</div>

                                                <div class="profile-info-value">
                                                    <span class="editable" id="username">Female</span>
                                                </div>
                                            </div>
                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Country</div>

                                                <div class="profile-info-value">
                                                    <span class="editable" id="username">Kenya</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Location </div>

                                                <div class="profile-info-value">
                                                    <i class="icon-map-marker light-orange bigger-110"></i>
                                                    <span class="editable" id="country">Kenya</span>
                                                    <span class="editable" id="city">Kenya</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Age </div>

                                                <div class="profile-info-value">
                                                    <span class="editable" id="age">38</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Joined </div>

                                                <div class="profile-info-value">
                                                    <span class="editable" id="signup">20/06/2010</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Last Online </div>

                                                <div class="profile-info-value">
                                                    <span class="editable" id="login">3 hours ago</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> About Me </div>

                                                <div class="profile-info-value">
                                                    <span class="editable" id="about">Editable as WYSIWYG</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div id="accordion2" class="accordion">
                                    <div class="accordion-group">


                                        <div class="accordion-body collapse" id="collapseOne">
                                            <div class="accordion-inner">
                                                <div class="row-fluid">
                                                    <div class="span9">
                                                        <div class="space"></div>

                                                        <div id="calendar"></div>
                                                    </div>

                                                    <div class="span3">
                                                        <div class="widget-box transparent">
                                                            <div class="widget-header">
                                                                <h4>Your programnes</h4>
                                                            </div>

                                                            <div class="row-fluid">
                                                                <div class="span7 infobox-container">
                                                                    <div class="infobox infobox-green  ">
                                                                        <div class="infobox-icon">
                                                                            <i class="icon-comments"></i>
                                                                        </div>

                                                                        <div class="infobox-data">
                                                                            <span class="infobox-data-number">32</span>
                                                                            <div class="infobox-content">comments + 2 reviews</div>
                                                                        </div>
                                                                        <div class="stat stat-success">8%</div>
                                                                    </div>

                                                                    <div class="infobox infobox-blue  ">
                                                                        <div class="infobox-icon">
                                                                            <i class="icon-twitter"></i>
                                                                        </div>

                                                                        <div class="infobox-data">
                                                                            <span class="infobox-data-number">11</span>
                                                                            <div class="infobox-content">new followers</div>
                                                                        </div>

                                                                        <div class="badge badge-success">
                                                                            +32%
                                                                            <i class="icon-arrow-up"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="infobox infobox-pink  ">
                                                                        <div class="infobox-icon">
                                                                            <i class="icon-shopping-cart"></i>
                                                                        </div>

                                                                        <div class="infobox-data">
                                                                            <span class="infobox-data-number">8</span>
                                                                            <div class="infobox-content">new orders</div>
                                                                        </div>
                                                                        <div class="stat stat-important">+4%</div>
                                                                    </div>

                                                                    <div class="infobox infobox-red  ">
                                                                        <div class="infobox-icon">
                                                                            <i class="icon-beaker"></i>
                                                                        </div>

                                                                        <div class="infobox-data">
                                                                            <span class="infobox-data-number">7</span>
                                                                            <div class="infobox-content">experiments</div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="infobox infobox-orange2  ">
                                                                        <div class="infobox-chart">
                                                                            <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
                                                                        </div>

                                                                        <div class="infobox-data">
                                                                            <span class="infobox-data-number">6,251</span>
                                                                            <div class="infobox-content">pageviews</div>
                                                                        </div>

                                                                        <div class="badge badge-success">
                                                                            7.2%
                                                                            <i class="icon-arrow-up"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="infobox infobox-blue2  ">
                                                                        <div class="infobox-progress">
                                                                            <div class="easy-pie-chart percentage" data-percent="42" data-size="46">
                                                                                <span class="percent">42</span>
                                                                                %
                                                                            </div>
                                                                        </div>

                                                                        <div class="infobox-data">
                                                                            <span class="infobox-text">traffic used</span>

                                                                            <div class="infobox-content">
                                                                                <span class="bigger-110">~</span>
                                                                                58GB remaining
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="space-6"></div>


                                                                </div>

                                                                <div class="vspace"></div>

                                                            </div><!--/row-->
                                                        </div>
                                                    </div>
                                                </div>            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-group">


                                        <div class="accordion-body collapse" id="collapseContact">
                                            <div class="accordion-inner">
                                                <div class="profile-user-info profile-user-info-striped">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Username </div>

                                                        <div class="profile-info-value">
                                                            <span class="editable" id="username">alexdoe</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Location </div>

                                                        <div class="profile-info-value">
                                                            <i class="icon-map-marker light-orange bigger-110"></i>
                                                            <span class="editable" id="country">Netherlands</span>
                                                            <span class="editable" id="city">Amsterdam</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Age </div>

                                                        <div class="profile-info-value">
                                                            <span class="editable" id="age">38</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Joined </div>

                                                        <div class="profile-info-value">
                                                            <span class="editable" id="signup">20/06/2010</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Last Online </div>

                                                        <div class="profile-info-value">
                                                            <span class="editable" id="login">3 hours ago</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> About Me </div>

                                                        <div class="profile-info-value">
                                                            <span class="editable" id="about">Editable as WYSIWYG</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form class="form-horizontal" >
                                                    <div id="edit-basic" class="tab-pane in active">
                                                        <div class="row-fluid">

                                                            <div class="span8">
                                                                <div class="control-group">
                                                                    <label class="control-label" for="form-field-username">Primary email</label>

                                                                    <div class="controls">
                                                                        <input type="text" id="form-field-username" placeholder="Primary email" value="<?php echo 'name'; ?>" />
                                                                    </div>
                                                                </div>

                                                                <div class="control-group">
                                                                    <label class="control-label" for="form-field-first">Secondary email</label>

                                                                    <div class="controls">
                                                                        <input type="text" id="form-field-username" placeholder="Secondary email" value="<?php echo 'name'; ?>" />
                                                                    </div>
                                                                </div>
                                                                <div class="control-group">
                                                                    <label class="control-label" for="form-field-username">Primary Mobile Phone</label>

                                                                    <div class="controls">
                                                                        <input type="text" id="form-field-username" placeholder="contact"  />
                                                                    </div>
                                                                </div>
                                                                <div class="control-group">
                                                                    <label class="control-label" for="form-field-username">Secondary mobile Phone</label>

                                                                    <div class="controls">
                                                                        <input type="text" id="form-field-username" placeholder="contact"  />
                                                                    </div>
                                                                </div>



                                                                <div class="control-group">
                                                                    <label class="control-label" for="form-field-username">Office contact</label>

                                                                    <div class="controls">
                                                                        <input type="text" id="form-field-username" placeholder="contact"  />
                                                                    </div>
                                                                </div>
                                                                <div class="control-group">
                                                                    <label class="control-label" for="form-field-username">Home Landline Phone</label>

                                                                    <div class="controls">
                                                                        <input type="text" id="form-field-username" placeholder="contact"  />
                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>

                                                        <hr />                                              

                                                    </div>

                                                </form>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-group">


                                    <div class="accordion-body collapse" id="collapseRecords">
                                        <div class="accordion-inner">
                                            <div class="tabbable">
                                                <ul class="nav nav-tabs" id="myTab">
                                                    <li class="active">
                                                        <a data-toggle="tab" href="#home">
                                                            <i class="green icon-home bigger-110"></i>
                                                            Add employment record
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a data-toggle="tab" href="#profile">
                                                            List of records
                                                            <span class="badge badge-important">4</span>
                                                        </a>
                                                    </li>


                                                </ul>

                                                <div class="tab-content">
                                                    <div id="home" class="tab-pane in active">
                                                        <form class="form-horizontal" >
                                                            <div id="edit-basic" class="tab-pane in active">
                                                                <div class="row-fluid">

                                                                    <div class="span8">
                                                                        <div class="control-group">
                                                                            <label class="control-label" for="form-field-username">Organisation</label>

                                                                            <div class="controls">
                                                                                <input type="text" id="form-field-username" placeholder="Primary email" value="<?php echo 'name'; ?>" />
                                                                            </div>
                                                                        </div>

                                                                        <div class="control-group">
                                                                            <label class="control-label" for="form-field-first">Position</label>

                                                                            <div class="controls">
                                                                                <input type="text" id="form-field-username" placeholder="Secondary email" value="<?php echo 'name'; ?>" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="control-group">
                                                                            <label class="control-label" for="form-field-username">Country</label>

                                                                            <div class="controls">
                                                                                <input type="text" id="form-field-username" placeholder="contact"  />
                                                                            </div>
                                                                        </div>
                                                                        <div class="control-group">
                                                                            <label class="control-label" for="form-field-username">Location(City or District)</label>

                                                                            <div class="controls">
                                                                                <input type="text" id="form-field-username" placeholder="contact"  />
                                                                            </div>
                                                                        </div>



                                                                        <div class="control-group">
                                                                            <label class="control-label" for="form-field-username">Sector</label>

                                                                            <div class="controls">
                                                                                <input type="text" id="form-field-username" placeholder="contact"  />
                                                                            </div>
                                                                        </div>
                                                                        <div class="control-group">
                                                                            <label class="control-label" for="form-field-username">Home Landline Phone</label>

                                                                            <div class="controls">
                                                                                <input type="text" id="form-field-username" placeholder="contact"  />
                                                                            </div>
                                                                        </div>



                                                                    </div>
                                                                </div>

                                                                <hr />                                              

                                                            </div>

                                                        </form>
                                                    </div>

                                                    <div id="profile" class="tab-pane">
                                                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
                                                    </div>

                                                    <div id="dropdown1" class="tab-pane">
                                                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
                                                    </div>

                                                    <div id="dropdown2" class="tab-pane">
                                                        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.</p>
                                                    </div>
                                                </div>
                                            </div>    </div>
                                    </div>
                                </div>
                                <div class="accordion-group">


                                    <div class="accordion-body collapse" id="collapseQualification">
                                        <div class="accordion-inner">
                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="username">alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="icon-map-marker light-orange bigger-110"></i>
                                                        <span class="editable" id="country">Netherlands</span>
                                                        <span class="editable" id="city">Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="age">38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="signup">20/06/2010</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="login">3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="about">Editable as WYSIWYG</span>
                                                    </div>
                                                </div>
                                            </div>    </div>
                                    </div>
                                </div>
                                <div class="accordion-group">


                                    <div class="accordion-body collapse" id="collapsePublication">
                                        <div class="accordion-inner">
                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="username">alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="icon-map-marker light-orange bigger-110"></i>
                                                        <span class="editable" id="country">Netherlands</span>
                                                        <span class="editable" id="city">Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="age">38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="signup">20/06/2010</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="login">3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="about">Editable as WYSIWYG</span>
                                                    </div>
                                                </div>
                                            </div>    </div>
                                    </div>
                                </div>
                                <div class="accordion-group">


                                    <div class="accordion-body collapse" id="collapseStudies">
                                        <div class="accordion-inner">
                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="username">alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="icon-map-marker light-orange bigger-110"></i>
                                                        <span class="editable" id="country">Netherlands</span>
                                                        <span class="editable" id="city">Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="age">38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="signup">20/06/2010</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="login">3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="about">Editable as WYSIWYG</span>
                                                    </div>
                                                </div>
                                            </div>    </div>
                                    </div>
                                </div>

                                <div class="accordion-group">


                                    <div class="accordion-body collapse" id="collapseSurv">
                                        <div class="accordion-inner">
                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="username">alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="icon-map-marker light-orange bigger-110"></i>
                                                        <span class="editable" id="country">Netherlands</span>
                                                        <span class="editable" id="city">Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="age">38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="signup">20/06/2010</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="login">3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="about">Editable as WYSIWYG</span>
                                                    </div>
                                                </div>
                                            </div>    </div>
                                    </div>
                                </div>
                                <div class="accordion-group">


                                    <div class="accordion-body collapse" id="collapseOut">
                                        <div class="accordion-inner">
                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="username">alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="icon-map-marker light-orange bigger-110"></i>
                                                        <span class="editable" id="country">Netherlands</span>
                                                        <span class="editable" id="city">Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="age">38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="signup">20/06/2010</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="login">3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="about">Editable as WYSIWYG</span>
                                                    </div>
                                                </div>
                                            </div>    </div>
                                    </div>
                                </div>
                                <div class="accordion-group">


                                    <div class="accordion-body collapse" id="collapsePresentation">
                                        <div class="accordion-inner">
                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="username">alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="icon-map-marker light-orange bigger-110"></i>
                                                        <span class="editable" id="country">Netherlands</span>
                                                        <span class="editable" id="city">Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="age">38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="signup">20/06/2010</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="login">3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="about">Editable as WYSIWYG</span>
                                                    </div>
                                                </div>
                                            </div>    </div>
                                    </div>
                                </div>
                                <div class="accordion-group">


                                    <div class="accordion-body collapse" id="collapseCourses">
                                        <div class="accordion-inner">
                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="username">alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="icon-map-marker light-orange bigger-110"></i>
                                                        <span class="editable" id="country">Netherlands</span>
                                                        <span class="editable" id="city">Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="age">38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="signup">20/06/2010</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="login">3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="about">Editable as WYSIWYG</span>
                                                    </div>
                                                </div>
                                            </div>    </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--/span-->


                    </div><!--/row-->

                    <div class="hr hr32 hr-dotted"></div>



                    <!--PAGE CONTENT ENDS-->
                </div><!--/.span-->
            </div><!--/.row-fluid-->
        </div><!--/.page-content-->

        <div class="ace-settings-container" id="ace-settings-container">
            <div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
                <i class="icon-cog bigger-150"></i>
            </div>

            <div class="ace-settings-box" id="ace-settings-box">
                <div>
                    <div class="pull-left">
                        <select id="skin-colorpicker" class="hide">
                            <option data-class="default" value="#438EB9" />#438EB9
                            <option data-class="skin-1" value="#222A2D" />#222A2D
                            <option data-class="skin-2" value="#C6487E" />#C6487E
                            <option data-class="skin-3" value="#D0D0D0" />#D0D0D0
                        </select>
                    </div>
                    <span>&nbsp; Choose Skin</span>
                </div>

                <div>
                    <input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" />
                    <label class="lbl" for="ace-settings-header"> Fixed Header</label>
                </div>

                <div>
                    <input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" />
                    <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                </div>

                <div>
                    <input type="checkbox" class="ace-checkbox-2" id="ace-settings-breadcrumbs" />
                    <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                </div>

                <div>
                    <input type="checkbox" class="ace-checkbox-2" id="ace-settings-rtl" />
                    <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                </div>
            </div>
        </div><!--/#ace-settings-container-->
    </div><!--/.main-content-->

    <?php require_once(APPPATH . 'views/footer.php'); ?>
    <script src="<?= base_url(); ?>assets/js/fullcalendar.min.js"></script>
    <script type="text/javascript">
    $(function () {

        /* initialize the external events
         -----------------------------------------------------------------*/

        $('#external-events div.external-event').each(function () {

            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
            };

            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true, // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });

        });




        /* initialize the calendar
         -----------------------------------------------------------------*/

        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();


        var calendar = $('#calendar').fullCalendar({
            buttonText: {
                prev: '<i class="icon-chevron-left"></i>',
                next: '<i class="icon-chevron-right"></i>'
            },
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            events: [
                {
                    title: 'All Day Event',
                    start: new Date(y, m, 1),
                    className: 'label-important'
                },
                {
                    title: 'Long Event',
                    start: new Date(y, m, d - 5),
                    end: new Date(y, m, d - 2),
                    className: 'label-success'
                },
                {
                    title: 'Some Event',
                    start: new Date(y, m, d - 3, 16, 0),
                    allDay: false
                }]
            ,
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function (date, allDay) { // this function is called when something is dropped

                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');
                var $extraEventClass = $(this).attr('data-class');


                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);

                // assign it the date that was reported
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;
                if ($extraEventClass)
                    copiedEventObject['className'] = [$extraEventClass];

                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }

            }
            ,
            selectable: true,
            selectHelper: true,
            select: function (start, end, allDay) {

                bootbox.prompt("New Event Title:", function (title) {
                    if (title !== null) {
                        calendar.fullCalendar('renderEvent',
                                {
                                    title: title,
                                    start: start,
                                    end: end,
                                    allDay: allDay
                                },
                        true // make the event "stick"
                                );
                    }
                });


                calendar.fullCalendar('unselect');

            }
            ,
            eventClick: function (calEvent, jsEvent, view) {

                var form = $("<form class='form-inline'><label>Change event name &nbsp;</label></form>");
                form.append("<input autocomplete=off type=text value='" + calEvent.title + "' /> ");
                form.append("<button type='submit' class='btn btn-small btn-success'><i class='icon-ok'></i> Save</button>");

                var div = bootbox.dialog(form,
                        [
                            {
                                "label": "<i class='icon-trash'></i> Delete Event",
                                "class": "btn-small btn-danger",
                                "callback": function () {
                                    calendar.fullCalendar('removeEvents', function (ev) {
                                        return (ev._id == calEvent._id);
                                    })
                                }
                            }
                            ,
                            {
                                "label": "<i class='icon-remove'></i> Close",
                                "class": "btn-small"
                            }
                        ]
                        ,
                        {
                            // prompts need a few extra options
                            "onEscape": function () {
                                div.modal("hide");
                            }
                        }
                );

                form.on('submit', function () {
                    calEvent.title = form.find("input[type=text]").val();
                    calendar.fullCalendar('updateEvent', calEvent);
                    div.modal("hide");
                    return false;
                });


                //console.log(calEvent.id);
                //console.log(jsEvent);
                //console.log(view);

                // change the border color just for fun
                //$(this).css('border-color', 'red');

            }

        });


    })
    </script>
    <script src="<?= base_url(); ?>assets/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/select2.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/date-time/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/fuelux/fuelux.spinner.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/x-editable/bootstrap-editable.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/x-editable/ace-editable.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript">
    $(function () {

        //editables on first profile page
        $.fn.editable.defaults.mode = 'inline';
        $.fn.editableform.loading = "<div class='editableform-loading'><i class='light-blue icon-2x icon-spinner icon-spin'></i></div>";
        $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="icon-ok icon-white"></i></button>' +
                '<button type="button" class="btn editable-cancel"><i class="icon-remove"></i></button>';

        //editables 
        $('#username').editable({
            type: 'text',
            name: 'username'
        });

        var countries = [];
        $.each({"CA": "Canada", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function (k, v) {
            countries.push({id: k, text: v});
        });

        var cities = [];
        cities["CA"] = [];
        $.each(["Toronto", "Ottawa", "Calgary", "Vancouver"], function (k, v) {
            cities["CA"].push({id: v, text: v});
        });
        cities["IN"] = [];
        $.each(["Delhi", "Mumbai", "Bangalore"], function (k, v) {
            cities["IN"].push({id: v, text: v});
        });
        cities["NL"] = [];
        $.each(["Amsterdam", "Rotterdam", "The Hague"], function (k, v) {
            cities["NL"].push({id: v, text: v});
        });
        cities["TR"] = [];
        $.each(["Ankara", "Istanbul", "Izmir"], function (k, v) {
            cities["TR"].push({id: v, text: v});
        });
        cities["US"] = [];
        $.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"], function (k, v) {
            cities["US"].push({id: v, text: v});
        });

        var currentValue = "NL";
        $('#country').editable({
            type: 'select2',
            value: 'NL',
            source: countries,
            success: function (response, newValue) {
                if (currentValue == newValue)
                    return;
                currentValue = newValue;

                var source = (!newValue || newValue == "") ? [] : cities[newValue];
                $('#city').editable('destroy').editable({
                    type: 'select2',
                    source: source
                }).editable('setValue', null);
            }
        });

        $('#city').editable({
            type: 'select2',
            value: 'Amsterdam',
            source: cities[currentValue]
        });



        $('#signup').editable({
            type: 'date',
            format: 'yyyy-mm-dd',
            viewformat: 'dd/mm/yyyy',
            datepicker: {
                weekStart: 1
            }
        });

        $('#age').editable({
            type: 'spinner',
            name: 'age',
            spinner: {
                min: 16, max: 99, step: 1
            }
        });

        //var $range = document.createElement("INPUT");
        //$range.type = 'range';
        $('#login').editable({
            type: 'slider', //$range.type == 'range' ? 'range' : 'slider',
            name: 'login',
            slider: {
                min: 1, max: 50, width: 100
            },
            success: function (response, newValue) {
                if (parseInt(newValue) == 1)
                    $(this).html(newValue + " hour ago");
                else
                    $(this).html(newValue + " hours ago");
            }
        });

        $('#about').editable({
            mode: 'inline',
            type: 'wysiwyg',
            name: 'about',
            wysiwyg: {
                //css : {'max-width':'300px'}
            },
            success: function (response, newValue) {
            }
        });



        // *** editable avatar *** //
        try {//ie8 throws some harmless exception, so let's catch it

            //it seems that editable plugin calls appendChild, and as Image doesn't have it, it causes errors on IE at unpredicted points
            //so let's have a fake appendChild for it!
            if (/msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()))
                Image.prototype.appendChild = function (el) {
                }

            var last_gritter
            $('#avatar').editable({
                type: 'image',
                name: 'avatar',
                value: null,
                image: {
                    //specify ace file input plugin's options here
                    btn_choose: 'Change Avatar',
                    droppable: true,
                    /**
                     //this will override the default before_change that only accepts image files
                     before_change: function(files, dropped) {
                     return true;
                     },
                     */

                    //and a few extra ones here
                    name: 'avatar', //put the field name here as well, will be used inside the custom plugin
                    max_size: 110000, //~100Kb
                    on_error: function (code) {//on_error function will be called when the selected file has a problem
                        if (last_gritter)
                            $.gritter.remove(last_gritter);
                        if (code == 1) {//file format error
                            last_gritter = $.gritter.add({
                                title: 'File is not an image!',
                                text: 'Please choose a jpg|gif|png image!',
                                class_name: 'gritter-error gritter-center'
                            });
                        } else if (code == 2) {//file size rror
                            last_gritter = $.gritter.add({
                                title: 'File too big!',
                                text: 'Image size should not exceed 100Kb!',
                                class_name: 'gritter-error gritter-center'
                            });
                        }
                        else {//other error
                        }
                    },
                    on_success: function () {
                        $.gritter.removeAll();
                    }
                },
                url: function (params) {
                    // ***UPDATE AVATAR HERE*** //
                    //You can replace the contents of this function with examples/profile-avatar-update.js for actual upload


                    var deferred = new $.Deferred

                    //if value is empty, means no valid files were selected
                    //but it may still be submitted by the plugin, because "" (empty string) is different from previous non-empty value whatever it was
                    //so we return just here to prevent problems
                    var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
                    if (!value || value.length == 0) {
                        deferred.resolve();
                        return deferred.promise();
                    }


                    //dummy upload
                    setTimeout(function () {
                        if ("FileReader" in window) {
                            //for browsers that have a thumbnail of selected image
                            var thumb = $('#avatar').next().find('img').data('thumb');
                            if (thumb)
                                $('#avatar').get(0).src = thumb;
                        }

                        deferred.resolve({'status': 'OK'});

                        if (last_gritter)
                            $.gritter.remove(last_gritter);
                        last_gritter = $.gritter.add({
                            title: 'Avatar Updated!',
                            text: 'Uploading to server can be easily implemented. A working example is included with the template.',
                            class_name: 'gritter-info gritter-center'
                        });

                    }, parseInt(Math.random() * 800 + 800))

                    return deferred.promise();
                },
                success: function (response, newValue) {
                }
            })
        } catch (e) {
        }



        //another option is using modals
        $('#avatar2').on('click', function () {
            var modal =
                    '<div class="modal hide fade">\
                                    <div class="modal-header">\
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>\
                                            <h4 class="blue">Change Avatar</h4>\
                                    </div>\
                                    \
                                    <form class="no-margin">\
                                    <div class="modal-body">\
                                            <div class="space-4"></div>\
                                            <div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
                                    </div>\
                                    \
                                    <div class="modal-footer center">\
                                            <button type="submit" class="btn btn-small btn-success"><i class="icon-ok"></i> Submit</button>\
                                            <button type="button" class="btn btn-small" data-dismiss="modal"><i class="icon-remove"></i> Cancel</button>\
                                    </div>\
                                    </form>\
                            </div>';


            var modal = $(modal);
            modal.modal("show").on("hidden", function () {
                modal.remove();
            });

            var working = false;

            var form = modal.find('form:eq(0)');
            var file = form.find('input[type=file]').eq(0);
            file.ace_file_input({
                style: 'well',
                btn_choose: 'Click to choose new avatar',
                btn_change: null,
                no_icon: 'icon-picture',
                thumbnail: 'small',
                before_remove: function () {
                    //don't remove/reset files while being uploaded
                    return !working;
                },
                before_change: function (files, dropped) {
                    var file = files[0];
                    if (typeof file === "string") {
                        //file is just a file name here (in browsers that don't support FileReader API)
                        if (!(/\.(jpe?g|png|gif)$/i).test(file))
                            return false;
                    }
                    else {//file is a File object
                        var type = $.trim(file.type);
                        if ((type.length > 0 && !(/^image\/(jpe?g|png|gif)$/i).test(type))
                                || (type.length == 0 && !(/\.(jpe?g|png|gif)$/i).test(file.name))//for android default browser!
                                )
                            return false;

                        if (file.size > 110000) {//~100Kb
                            return false;
                        }
                    }

                    return true;
                }
            });

            form.on('submit', function () {
                if (!file.data('ace_input_files'))
                    return false;

                file.ace_file_input('disable');
                form.find('button').attr('disabled', 'disabled');
                form.find('.modal-body').append("<div class='center'><i class='icon-spinner icon-spin bigger-150 orange'></i></div>");

                var deferred = new $.Deferred;
                working = true;
                deferred.done(function () {
                    form.find('button').removeAttr('disabled');
                    form.find('input[type=file]').ace_file_input('enable');
                    form.find('.modal-body > :last-child').remove();

                    modal.modal("hide");

                    var thumb = file.next().find('img').data('thumb');
                    if (thumb)
                        $('#avatar2').get(0).src = thumb;

                    working = false;
                });


                setTimeout(function () {
                    deferred.resolve();
                }, parseInt(Math.random() * 800 + 800));

                return false;
            });

        });



        //////////////////////////////
        $('#profile-feed-1').slimScroll({
            height: '250px',
            alwaysVisible: true
        });

        $('.profile-social-links > a').tooltip();

        $('.easy-pie-chart.percentage').each(function () {
            var barColor = $(this).data('color') || '#555';
            var trackColor = '#E2E2E2';
            var size = parseInt($(this).data('size')) || 72;
            $(this).easyPieChart({
                barColor: barColor,
                trackColor: trackColor,
                scaleColor: false,
                lineCap: 'butt',
                lineWidth: parseInt(size / 10),
                animate: false,
                size: size
            }).css('color', barColor);
        });


        ///////////////////////////////////////////

        //show the user info on right or left depending on its position
        $('#user-profile-2 .memberdiv').on('mouseenter', function () {
            var $this = $(this);
            var $parent = $this.closest('.tab-pane');

            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $this.offset();
            var w2 = $this.width();

            var place = 'left';
            if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                place = 'right';

            $this.find('.popover').removeClass('right left').addClass(place);
        }).on('click', function () {
            return false;
        });


        ///////////////////////////////////////////
        $('#user-profile-3')
                .find('input[type=file]').ace_file_input({
            style: 'well',
            btn_choose: 'Change avatar',
            btn_change: null,
            no_icon: 'icon-picture',
            thumbnail: 'large',
            droppable: true,
            before_change: function (files, dropped) {
                var file = files[0];
                if (typeof file === "string") {//files is just a file name here (in browsers that don't support FileReader API)
                    if (!(/\.(jpe?g|png|gif)$/i).test(file))
                        return false;
                }
                else {//file is a File object
                    var type = $.trim(file.type);
                    if ((type.length > 0 && !(/^image\/(jpe?g|png|gif)$/i).test(type))
                            || (type.length == 0 && !(/\.(jpe?g|png|gif)$/i).test(file.name))//for android default browser!
                            )
                        return false;

                    if (file.size > 110000) {//~100Kb
                        return false;
                    }
                }

                return true;
            }
        })
                .end().find('button[type=reset]').on(ace.click_event, function () {
            $('#user-profile-3 input[type=file]').ace_file_input('reset_input');
        })
                .end().find('.date-picker').datepicker().next().on(ace.click_event, function () {
            $(this).prev().focus();
        })
        $('.input-mask-phone').mask('(999) 999-9999');



        ////////////////////
        //change profile
        $('[data-toggle="buttons-radio"]').on('click', function (e) {
            var target = $(e.target);
            var which = parseInt($.trim(target.text()));
            $('.user-profile').parent().hide();
            $('#user-profile-' + which).parent().show();
        });
    });
    </script>

