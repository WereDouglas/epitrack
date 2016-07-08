<?php require_once(APPPATH . 'views/css-page.php'); ?>
<div class="col-xs-12">
    <h3>Short Courses</h3>
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

                    </div>
                </div>

            </div>



            <div class="widget-main ">
                <div id="accordion2" class="accordion">

                    <div class="accordion-group">


                        <div class="accordion-body collapse" id="collapseTwo">
                            <div class="accordion-inner">
                                <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/course'  method="post">

                                    <div class="span12">
                                        <div class="span6">
                                            <div class="control-group">

                                                <div class="controls">
                                                    <label for="id-date-picker-1">Name of course</label><input type="text" class="span12"  id="organisation" name="name"   /></span>

                                                </div>
                                                <label for="form-field-9">Course objective</label>

                                                <textarea class="span12 limited" id="form-field-9" name="findings" data-maxlength="50"></textarea>


                                                <div style="margin-bottom:20px">
                                                    <label class="label-top">Start</label>
                                                    <input name="start" id="start" class="easyui-datebox control-group" >
                                                </div>
                                                <div style="margin-bottom:20px">
                                                    <label class="label-top">End</label>
                                                    <input name="end" id="end" class="easyui-datebox control-group" >
                                                </div>


                                            </div>
                                        </div>
                                        <div class="span6">
                                            <label for="id-date-picker-1"> What's your role</label>
                                            <div class="control-group">
                                                <select id="lab" name="role" >
                                                    <option value="participant" />participant
                                                    <option value="instructor" />instructor

                                                </select>
                                            </div>

                                            <div class="row-fluid">
                                                <label for="form-field-9">Course description</label>

                                                <textarea class="span12 limited" id="form-field-9" name="description" data-maxlength="20"></textarea>

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
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="accordion-group">
                <div class="accordion-body collapsed" id="collapseThree">
                    <div class="accordion-inner">
                        <div class="alert alert-info">Select a field to edit the content</div>

                        <table id="example1" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="center">
                                        <label>
                                            <input type="checkbox" />
                                            <span class="lbl"></span>
                                        </label>
                                    </th>

                                    <th>Name</th>
                                    <th>Start</th>
                                    <th>End</th>
                                    <th>Description</th>
                                    <th>Objective</th>
                                    <th>Role</th>
                                    <th>Date of study</th>

                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                if (is_array($out) && count($out)) {
                                    foreach ($out as $loop) {
                                        $name = $loop->name;
                                        $startDates = $loop->start;
                                        $endDates = $loop->end;
                                        $participants = $loop->participants;
                                        $objective = $loop->objective;
                                        $id = $loop->id;
                                        $role = $loop->role;
                                        $description = $loop->description;
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
                                            <td class="edit_td">

                                                <span id="startDates_<?php echo $id; ?>" class="text"><?php echo $startDates; ?></span>
                                                <input class="span10 date-picker editbox" id="startDates_input_<?php echo $id; ?>" value="<?php echo $startDates; ?>"   type="text" name="date" data-date-format="yyyy-mm-dd" />
                                                <span class="add-on">
                                                    <i class="icon-calendar"></i>
                                                </span>
                                            </td>
                                            <td class="edit_td">
                                                <span id="endDates_<?php echo $id; ?>" class="text"><?php echo $endDates; ?></span>
                                                <input class="span10 date-picker editbox" id="endDates_input_<?php echo $id; ?>" value="<?php echo $endDates; ?>"   type="text" name="date" data-date-format="yyyy-mm-dd" />
                                                <span class="add-on">
                                                    <i class="icon-calendar"></i>
                                                </span>                                                        
                                            </td>

                                            <td class="edit_td">
                                                <span id="description_<?php echo $id; ?>" class="text"><?php echo $description; ?></span>
                                                <input type="text" value="<?php echo $description; ?>" class="editbox" id="description_input_<?php echo $id; ?>"
                                            </td>
                                            <td class="edit_td">
                                                <span id="objective_<?php echo $id; ?>" class="text"><?php echo $objective; ?></span>
                                                <input type="text" value="<?php echo $objective; ?>" class="editbox" id="objective_input_<?php echo $id; ?>"
                                            </td>
                                            <td class="edit_td">

                                                <span id="role_<?php echo $id; ?>" class="text"><?php echo $role; ?></span>                                      
                                                <select  name="type" class="editbox" id="role_input_<?php echo $id; ?>" >
                                                    <option value="<?php echo $role; ?>" title="<?php echo $role; ?>"><?php echo $role; ?></option>
                                                    <option value="participant" />participant
                                                    <option value="instructor" />instructor
                                                </select>
                                            </td>

                                            <td><?= $loop->dos ?></td>

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
            $("#name_" + ID).hide();
            $("#objective_" + ID).hide();
            $("#role_" + ID).hide();
            $("#description_" + ID).hide();
            $("#startDates_" + ID).hide();
            $("#endDates_" + ID).hide();

            $("#name_input_" + ID).show();
            $("#objective_input_" + ID).show();
            $("#role_input_" + ID).show();
            $("#description_input_" + ID).show();
            $("#startDates_input_" + ID).show();
            $("#endDates_input_" + ID).show();



        }).change(function ()
        {
            var ID = $(this).attr('id');
            var name = $("#name_input_" + ID).val();
            var role = $("#role_input_" + ID).val();
            var objective = $("#objective_input_" + ID).val();
            var description = $("#description_input_" + ID).val();
            var startDates = $("#startDates_input_" + ID).val();
            var endDates = $("#endDates_input_" + ID).val();

            var dataString = 'id=' + ID + '&name=' + name + '&description=' + description + '&start=' + startDates + '&end=' + endDates + '&role=' + role + '&objective=' + objective;
            $("#name_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
            $("#description_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
            $("#startDates_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
            $("#endDates_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image

            if (name.length > 0)
            {

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() . "index.php/student/course/update/"; ?>",
                    data: dataString,
                    cache: false,
                    success: function (html)
                    {
                        $("#name_" + ID).html(name);
                        $("#objective_" + ID).html(objective);
                        $("#role_" + ID).html(role);
                        $("#description_" + ID).html(description);
                        $("#startDates_" + ID).html(startDates);
                        $("#endDates_" + ID).html(endDates);

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

<?php require_once(APPPATH . 'views/js-page.php'); ?>