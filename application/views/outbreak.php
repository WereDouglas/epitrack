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

<body>
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
                                        <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/outbreak'  method="post">            

                                            <div class="alert alert-block alert-info span12">  
 <div class="span6">
                                                <div class="control-group">

                                                    <div class="controls">
                                                        <span class="span12 ">Surveillance name/title:<input type="text" class="span12"  id="organisation" name="name"   /></span>
                                                       
                                                </div>
                                                         <div class="control-group">
                                                             
                                                             
                                                           Choose country of outbreak:
                                                           <select class="span12" id="country" name="country" >                                                            
                                                                <?php
                                                                if (is_array($country) && count($country)) {
                                                                    foreach ($country as $loop) {
                                                                        ?>                        
                                                                        <option value="<?= $loop->name ?>" /><?= $loop->name ?>
                                                                    <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                     <div class="controls">
                                                        <span class="span12 ">Surveillance region:<input type="text" class="span12"  id="region" name="region"   /></span>
                                                       
                                                </div>
                                                     <div class="controls">
                                                        <span class="span12 ">Number of cases:<input type="text" class="span12"  id="max" name="max" /></span>
                                                       
                                                </div>
                                                     <div class="controls">
                                                        <span class="span12 ">Number of deaths:<input type="text" class="span12"  id="max" name="min" /></span>
                                                       
                                                </div>
                                                               <label for="id-date-picker-1">Date of Study Onset</label>
                                                <div class="control-group">
                                                    <div class="row-fluid input-append">
                                                        <input class="span10 date-picker" id="id-date-picker-1" type="text" name="onset" data-date-format="yyyy-mm-dd" />
                                                        <span class="add-on">
                                                            <i class="icon-calendar"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                                    <div class="row-fluid">
                                                    <label for="id-date-picker-1">Date of notification to MOH*</label>
                                                </div>

                                                <div class="control-group">
                                                    <div class="row-fluid input-append">
                                                        <input class="span10 date-picker" id="id-date-picker-1" type="text" name="notification" data-date-format="yyyy-mm-dd" />
                                                        <span class="add-on">
                                                            <i class="icon-calendar"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                         
                                                </div>
 </div>
                                                <div class="span6">
                                                 <div class="row-fluid">
                                          
                                                          <div class="controls">
                                                              <div class="row-fluid">
                                                                  <label for="id-date-range-picker-1">Investigation Dates:</label>
                                                              </div>

                                                              <div class="control-group">
                                                                  <div class="row-fluid input-prepend">
                                                                      <span class="add-on">
                                                                          <i class="icon-calendar"></i>
                                                                      </span>

                                                                      <input class="span10" type="text" name="dates" id="id-date-range-picker-1" />
                                                                  </div>
                                                              </div>
                                                </div>
                                                         <div class="control-group">
                                                           Lab involvement:
                                                            <select id="lab" name="lab" >            
                                                                        <option value="yes" />yes
                                                                         <option value="no" />no
                                                                  
                                                            </select>
                                                        </div>
                                                    <div class="control-group">
                                                          Lab Confirm:
                                                            <select id="confirm" name="confirm" >            
                                                                        <option value="yes" />yes
                                                                         <option value="no" />no
                                                                  
                                                            </select>
                                                        </div>
                                                         <div class="row-fluid">
                                                              <label for="form-field-9">Etiology*</label>

                                                        <textarea class="span12 limited" id="form-field-9" name="etiology" data-maxlength="20"></textarea>
                                                 
                                                        <label for="form-field-9">Findings/Public Health Action*</label>

                                                        <textarea class="span12 limited" id="form-field-9" name="findings" data-maxlength="50"></textarea>
                                                    </div>         
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

                                                        <th>Name</th>
                                                        <th>Onset</th>
                                                        <th>Dissemination</th>   
                                                        <th>Findings</th>   
                                                        <th>Date of study</th> 
                                                        <th>Cases</th> 
                                                        <th>Deaths</th> 
                                                        <th>verified</th> 
                                                      
                                                        <th></th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    if (is_array($out) && count($out)) {
                                                        foreach ($out as $loop) {
                                                            $name = $loop->name;
                                                            $findings = $loop->findings;
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
                                                                    <span id="name_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
                                                                    <input type="text" value="<?php echo $name; ?>" class="editbox" id="name_input_<?php echo $id; ?>"
                                                                </td>
                                                                <td><?= $loop->onset ?></td>
                                                                 <td><?= $loop->dissemination ?></td>

                                                                <td class="edit_td">
                                                                    <span id="findings_<?php echo $id; ?>" class="text"><?php echo $findings; ?></span>
                                                                    <input type="text" value="<?php echo $findings; ?>" class="editbox" id="findings_input_<?php echo $id; ?>"
                                                                </td>                                                          

                                                                <td><?= $loop->dos ?></td>
                                                                  <td><?= $loop->max ?></td>
                                                                    <td><?= $loop->min ?></td>
                                                                      <td><?= $loop->verified ?></td>

                                                                <td class="td-actions">

                                                                    <a href="<?php echo base_url() . "index.php/student/study/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
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
<script type= "text/javascript" src = "<?= base_url(); ?>js/countries.js"></script>

<!--inline scripts related to this page-->
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