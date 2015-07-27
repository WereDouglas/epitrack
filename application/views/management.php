<?php require_once(APPPATH . 'views/header.php'); ?>
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/fullcalendar.css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/mine.css" />

<style>
    .form-horizontal .controls {
        margin-left: 12px;
    }
</style>
<div class="page-content">

    <div class="row-fluid"> 
        <iframe id="frame" name="frame" frameborder="no" border="0" scrolling="no" height="750" width="450" class="span12" src="<?php echo base_url() . "index.php/management/"; ?>"> </iframe>


        <div class="row-fluid">



            <div id="accordion2" class="accordion">
                <div class="accordion-group">


                    <div class="accordion-body collapse" id="collapseOne">
                        <div class="accordion-inner">
                            <div class="row-fluid">
                                <div class="span12">
                                    <!--PAGE CONTENT BEGINS-->
                                    <form class="form-horizontal" >
                                        <div class="alert alert-block alert-info span6">   


                                            <div class="widget-main">
                                                <input type="file" id="id-input-file-2" />
                                                <input multiple="" type="file" id="id-input-file-3" />
                                                <label>
                                                    <input type="checkbox" name="file-format" id="id-file-format" />
                                                    <span class="lbl"> Allow only images</span>
                                                </label>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label" for="form-field-username">First name</label>

                                                <div class="controls">
                                                    <input type="text" id="form-field-username" placeholder="First name" value="<?php echo 'name'; ?>" />
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label" for="form-field-first">Last name</label>

                                                <div class="controls">
                                                    <input class="input-small" type="text" id="form-field-first" placeholder="First Name"  />
                                                    <input class="input-small" type="text" id="form-field-last" placeholder="Othername"  />
                                                </div>
                                            </div>
                                            <div class="control-group">

                                                <label class="control-label" for="form-field-tags">Please enter your emails one by one</label>

                                                <div class="controls">
                                                    <label class="text-error">enter primary e-mail first</label>
                                                    <input type="text" name="tags" id="form-field-tags"  placeholder="info@gmail.com" />
                                                </div>
                                            </div>
                                            <div class="control-group">

                                                <label class="control-label" for="form-field-tags">Please enter your contacts one by one</label>

                                                <div class="controls">
                                                    <label class="text-error">enter primary contact first</label>
                                                    <input type="text" name="tags" id="form-field-tags"  placeholder="+2567893213394" />
                                                </div>
                                            </div></div>
                                        <div class="alert alert-block alert-info span6">

                                            <div class="control-group">
                                                <label class="control-label" for="form-field-sex">Sex</label>
                                                <div class="controls">
                                                    <select  data-placeholder="Choose a sex...">
                                                        <option value="" />
                                                        <option value="male" />male
                                                        <option value="female" />female

                                                    </select>

                                                </div>
                                            </div>


                                            <div class="control-group">
                                                <label class="control-label" for="id-date-picker-1">Date of Birth</label>

                                                <div class="controls">
                                                    <input class="date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />

                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="form-field-sex">Location</label>
                                                <div class="controls" id="locationField">
                                                    <input  id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text"></input>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="id-date-picker-1">Country</label>

                                                <div class="controls">
                                                    <div class="controls" id="address">
                                                        <input id="country" type="text" />
                                                        <input class="field" id="street_number" type="hidden" disabled="true"></input>
                                                        <input class="field" id="route"type="hidden"  disabled="true"></input>
                                                        <input class="field" id="locality" type="hidden"     disabled="true"></input>
                                                        <input class="field" type="hidden" id="administrative_area_level_1" disabled="true"></input>
                                                        <input class="field" type="hidden" id="postal_code"></input>



                                                    </div>
                                                </div>
                                            </div>



                                            <div class="control-group">
                                                <label class="control-label" for="form-field-pass1">New Password</label>

                                                <div class="controls">
                                                    <input type="password" id="form-field-pass1" />
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label" for="form-field-pass2">Confirm Password</label>

                                                <div class="controls">
                                                    <input type="password" id="form-field-pass2" />
                                                </div>
                                            </div>

                                            <div class="">
                                                <button class="btn btn-info" type="button">
                                                    <i class="icon-ok bigger-110"></i>
                                                    Submit
                                                </button>

                                                &nbsp; &nbsp; &nbsp;
                                                <button class="btn" type="reset">
                                                    <i class="icon-undo bigger-110"></i>
                                                    Reset
                                                </button>
                                            </div>
                                        </div>

                                    </form>

                                </div>


                            </div></div>



                    </div><!--PAGE CONTENT ENDS-->
                </div><!--/.span-->
            </div><!--/.row-fluid-->         
            <div class="accordion-group">


                <div class="accordion-body collapse " id="collapseTwo">
                    <div class="accordion-inner">
                        <div class="widget-box">
                            <div class="widget-header header-color-blue">
                                <h5 class="bigger lighter">
                                    <i class="icon-table"></i>
                                    Users and cohorts
                                </h5>

                                <div class="widget-toolbar widget-toolbar-light no-border">
                                    <select id="simple-colorpicker-1" class="hide">
                                        <option selected="" data-class="blue" value="#307ECC" />#307ECC
                                        <option data-class="blue2" value="#5090C1" />#5090C1
                                        <option data-class="blue3" value="#6379AA" />#6379AA
                                        <option data-class="green" value="#82AF6F" />#82AF6F
                                        <option data-class="green2" value="#2E8965" />#2E8965
                                        <option data-class="green3" value="#5FBC47" />#5FBC47
                                        <option data-class="red" value="#E2755F" />#E2755F
                                        <option data-class="red2" value="#E04141" />#E04141
                                        <option data-class="red3" value="#D15B47" />#D15B47
                                        <option data-class="orange" value="#FFC657" />#FFC657
                                        <option data-class="purple" value="#7E6EB0" />#7E6EB0
                                        <option data-class="pink" value="#CE6F9E" />#CE6F9E
                                        <option data-class="dark" value="#404040" />#404040
                                        <option data-class="grey" value="#848484" />#848484
                                        <option data-class="default" value="#EEE" />#EEE
                                    </select>
                                </div>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main no-padding">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <i class="icon-user"></i>
                                                    User
                                                </th>

                                                <th>
                                                    <i>@</i>
                                                    Email
                                                </th>
                                                <th class="hidden-480">Status</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td class="">Alex</td>

                                                <td>
                                                    <a href="#">alex@email.com</a>
                                                </td>

                                                <td class="hidden-480">
                                                    <span class="label label-warning">Pending</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="">Fred</td>

                                                <td>
                                                    <a href="#">fred@email.com</a>
                                                </td>

                                                <td class="hidden-480">
                                                    <span class="label label-success arrowed-in arrowed-in-right">Approved</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="">Jack</td>

                                                <td>
                                                    <a href="#">jack@email.com</a>
                                                </td>

                                                <td class="hidden-480">
                                                    <span class="label label-warning">Pending</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="">John</td>

                                                <td>
                                                    <a href="#">john@email.com</a>
                                                </td>

                                                <td class="hidden-480">
                                                    <span class="label label-inverse arrowed">Blocked</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="">James</td>

                                                <td>
                                                    <a href="#">james@email.com</a>
                                                </td>

                                                <td class="hidden-480">
                                                    <span class="label label-info arrowed-in arrowed-in-right">Online</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>  </div>
                </div>
            </div>


            <div class="accordion-group">


                <div class="accordion-body collapse" id="collapseTracks">
                    <div class="accordion-inner">
                        <form class="form-horizontal" >
                            <div class="alert alert-block alert-info span6">   




                                <div class="control-group">
                                    <label class="control-label" for="form-field-username">Name</label>

                                    <div class="controls">
                                        <input type="text" id="form-field-username" placeholder="" value="" />
                                    </div>
                                </div>

                                <label for="form-field-8">Details</label>

                                <textarea class="span12" id="form-field-8" placeholder="Default Text"></textarea>

                                <div class="control-group">
                                    <label class="control-label" for="id-date-picker-1">Date of Registration</label>

                                    <div class="controls">
                                        <input class="date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />

                                    </div>
                                </div>
                                <div class="">
                                    <button class="btn btn-info" type="button">
                                        <i class="icon-ok bigger-110"></i>
                                        Submit
                                    </button>

                                    &nbsp; &nbsp; &nbsp;
                                    <button class="btn" type="reset">
                                        <i class="icon-undo bigger-110"></i>
                                        Reset
                                    </button>
                                </div>


                            </div>


                        </form>             </div>
                </div>
            </div>  
            <div class="accordion-group">


                <div class="accordion-body collapse" id="collapseCohorts">
                    <div class="accordion-inner">
                        <form class="form-horizontal" >
                            <div class="alert alert-block alert-info span6">   




                                <div class="control-group">
                                    <label class="control-label" for="form-field-username">Name</label>

                                    <div class="controls">
                                        <input type="text" id="form-field-username" placeholder="" value="" />
                                    </div>
                                </div>

                                <label for="form-field-8">Details</label>

                                <textarea class="span12" id="form-field-8" placeholder="Default Text"></textarea>

                                <div class="control-group">
                                    <label class="control-label" for="id-date-picker-1">Date of Registration</label>

                                    <div class="controls">
                                        <input class="date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />

                                    </div>
                                </div>
                                <div class="">
                                    <button class="btn btn-info" type="button">
                                        <i class="icon-ok bigger-110"></i>
                                        Submit
                                    </button>

                                    &nbsp; &nbsp; &nbsp;
                                    <button class="btn" type="reset">
                                        <i class="icon-undo bigger-110"></i>
                                        Reset
                                    </button>
                                </div>


                            </div>


                        </form>        </div>
                </div>
            </div>  
            <div class="accordion-group">


                <div class="accordion-body collapse" id="collapseAdverts">
                    <div class="accordion-inner">
                        <form class="form-horizontal" >
                            <div class="alert alert-block alert-info span6">   


                                <div class="widget-main">
                                    <input type="file" id="id-input-file-2" />
                                    <input multiple="" type="file" id="id-input-file-3" />
                                    <label>
                                        <input type="checkbox" name="file-format" id="id-file-format" />
                                        <span class="lbl"> Allow only images</span>
                                    </label>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="form-field-username">Title</label>

                                    <div class="controls">
                                        <input type="text" id="form-field-username" placeholder="" value="" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="id-date-picker-1">Date of Display</label>

                                    <div class="controls">
                                        <input class="date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />

                                    </div>
                                </div>
                                <div class="">
                                    <button class="btn btn-info" type="button">
                                        <i class="icon-ok bigger-110"></i>
                                        Submit
                                    </button>

                                    &nbsp; &nbsp; &nbsp;
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

                <div class="accordion-body collapse" id="collapseCountry">
                    <div class="accordion-inner">
                        <form class="form-horizontal" >
                            <div class="alert alert-block alert-success span6">
                                <div class="control-group">
                                    <label class="control-label" for="form-field-tags">Select the country flag</label>

                                    <div class="controls">
                                        <input type="file" id="id-input-file-2" />
                                    </div>
                                </div>


                                <div class="control-group">

                                    <label class="control-label" for="form-field-tags">Country name</label>

                                    <div class="controls">
                                        <input type="text" name="tags" id="form-field-tags"  placeholder="Uganda" />
                                    </div>
                                </div>
                                <div class="">
                                    <button class="btn btn-info" type="button">
                                        <i class="icon-ok bigger-110"></i>
                                        Submit
                                    </button>

                                    &nbsp; &nbsp; &nbsp;
                                    <button class="btn" type="reset">
                                        <i class="icon-undo bigger-110"></i>
                                        Reset
                                    </button>
                                </div>
                            </div>


                        </form>           </div>
                </div>
            </div>  
            <div class="accordion-group">


                <div class="accordion-body collapse" id="collapseUser">
                    <div class="accordion-inner">
                        <form class="form-horizontal" >
                            <div class="alert alert-block alert-success span6">   


                                <div class="control-group">
                                    <label class="control-label" for="form-field-username">First name</label>

                                    <div class="controls">
                                        <input type="text" id="form-field-username" placeholder="First name" value="<?php echo 'name'; ?>" />
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="form-field-first">Last name</label>

                                    <div class="controls">
                                        <input class="input-small" type="text" id="form-field-first" placeholder="First Name"  />
                                        <input class="input-small" type="text" id="form-field-last" placeholder="Othername"  />
                                    </div>
                                </div>
                                <div class="control-group">

                                    <label class="control-label" for="form-field-tags">E-mail</label>

                                    <div class="controls">
                                        <input type="text" name="tags" id="form-field-tags"  placeholder="info@gmail.com" />
                                    </div>
                                </div>
                                <div class="control-group">

                                    <label class="control-label" for="form-field-tags">Contacts</label>

                                    <div class="controls">
                                        <input type="text" name="tags" id="form-field-tags"  placeholder="+2567893213394" />
                                    </div>
                                </div></div>
                            <div class="alert alert-block alert-info span6">


                                <div class="control-group">
                                    <label class="control-label" for="form-field-sex">Location</label>
                                    <div class="controls" id="locationField">
                                        <input  id="autocomplete" placeholder="Select your country" type="text"></input>
                                    </div>
                                </div>




                                <div class="control-group">
                                    <label class="control-label" for="form-field-pass1">New Password</label>

                                    <div class="controls">
                                        <input type="password" id="form-field-pass1" />
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="form-field-pass2">Confirm Password</label>

                                    <div class="controls">
                                        <input type="password" id="form-field-pass2" />
                                    </div>
                                </div>

                                <div class="">
                                    <button class="btn btn-info" type="button">
                                        <i class="icon-ok bigger-110"></i>
                                        Submit
                                    </button>

                                    &nbsp; &nbsp; &nbsp;
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


        </div>

    </div>


</div>
</div><!--/span-->


</div><!--/row-->
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
<script type="text/javascript">
    $(function () {
        $('#id-disable-check').on('click', function () {
            var inp = $('#form-input-readonly').get(0);
            if (inp.hasAttribute('disabled')) {
                inp.setAttribute('readonly', 'true');
                inp.removeAttribute('disabled');
                inp.value = "This text field is readonly!";
            }
            else {
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
                        }
                        else {
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
            }
            else {
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


        $(".knob").knob();


        //we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
        var tag_input = $('#form-field-tags');
        if (!(/msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())))
            tag_input.tag({placeholder: tag_input.attr('placeholder')});
        else {
            //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
            tag_input.after('<textarea id="' + tag_input.attr('id') + '" name="' + tag_input.attr('name') + '" rows="3">' + tag_input.val() + '</textarea>').remove();
            //$('#form-field-tags').autosize({append: "\n"});
        }


        /////////
        $('#modal-form input[type=file]').ace_file_input({
            style: 'well',
            btn_choose: 'Drop files here or click to choose',
            btn_change: null,
            no_icon: 'icon-cloud-upload',
            droppable: true,
            thumbnail: 'large'
        })

        //chosen plugin inside a modal will have a zero width because the select element is originally hidden
        //and its width cannot be determined.
        //so we set the width after modal is show
        $('#modal-form').on('show', function () {
            $(this).find('.chzn-container').each(function () {
                $(this).find('a:first-child').css('width', '200px');
                $(this).find('.chzn-drop').css('width', '210px');
                $(this).find('.chzn-search input').css('width', '200px');
            });
        })
        /**
         //or you can activate the chosen plugin after modal is shown
         //this way select element has a width now and chosen works as expected
         $('#modal-form').on('shown', function () {
         $(this).find('.modal-chosen').chosen();
         })
         */

    });
</script>          