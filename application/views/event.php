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



<link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery-ui-1.10.3.custom.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/colorpicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/mine.css" />




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
                                        <i class="icon-adn bigger-110"></i>
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
                                    <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/management/event/'  method="post">            

                                        <div class="span6">                                                        


                                            <div class="control-group">

                                                <div class="row-fluid">
                                                    <label>Title</label> <span class="span12 "><input type="text" class="span12"  id="title" name="title" placeholder="Event name"  /></span>

                                                    <label> Country</label> <span class="span12 ">  <input type="text" readonly="true" id="country" class="span12" name="country" value="<?= $this->session->userdata('country') ?>" /></span>
                                                    <label>Venue</label> <span class="span12 "> <input id="venue"  class="span12" name="venue" type="text" /></span>

                                                    <label>start date</label><span class="span12"> <span class="add-on">
                                                            <i class="icon-calendar"></i>
                                                        </span>  <input class="span12 date-picker" id="id-date-picker-1" name="startdate"type="text" data-date-format="dd-mm-yyyy" />
                                                    </span> 
                                                    <div class="input-append bootstrap-timepicker">
                                                        <label>Start time</label><span class="span12 "> <span class="add-on">
                                                                <i class="icon-time"></i>
                                                            </span>    <input id="timepicker1" name="starttime" type="text" class="span12" />
                                                        </span> 
                                                    </div>
                                                    <span class="span12 "> End date<span class="add-on">
                                                            <i class="icon-calendar"></i>
                                                        </span>  <input class="span12 date-picker" id="id-date-picker-1"  name="enddate" type="text" data-date-format="dd-mm-yyyy" />
                                                    </span> 
                                                    <div class="input-append bootstrap-timepicker">
                                                        <span class="span12"> <label>End time:</label><span class="add-on">
                                                                <i class="icon-time"></i>
                                                            </span>    <input id="timepicker1" name="endtime" type="text" class="span12" />
                                                        </span> </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=" span6">                                                   
                                            <div class="widget-box">
                                                <div class="widget-header widget-header-small">
                                                    <div class="widget-toolbar">
                                                        <a href="#" data-action="collapse">
                                                            <i class="icon-chevron-up"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="widget-body">                                                   
                                                    <textarea class="span12" id="form-field-8" name="description" placeholder="Default Text"></textarea>
                                                    <div class="widget-toolbox padding-4 clearfix">
                                                        <div class="btn-group pull-left">
                                                            <button class="btn btn-small btn-grey">
                                                                <i class="icon-remove bigger-125"></i>
                                                                Cancel
                                                            </button>
                                                        </div>

                                                        <div class="btn-group pull-right">
                                                            <button class="btn btn-small btn-danger">
                                                                <i class="icon-save bigger-125"></i>
                                                                Save
                                                            </button>


                                                        </div>
                                                    </div>
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

                                    <table id="example1" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="center">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </th>

                                                <th>Title</th>
                                                <th>Description</th>                                                             
                                                <th>Country</th>                                                                
                                                <th>Start</th>  
                                                <th>End</th>    
                                                <th>Posted by</th>     
                                                <th>Status</th>   
                                                <th>Created</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            if (is_array($events) && count($events)) {
                                                foreach ($events as $loop) {
                                                    ?>  

                                                    <tr id="<?php echo $loop->id; ?>" class="edit_tr">
                                                        <td class="center ">
                                                            <label>
                                                                <input type="checkbox" />
                                                                <span class="lbl"></span>
                                                            </label>
                                                        </td>

                                                        <td ><?php echo $loop->title; ?></td>
                                                        <td ><?php echo $loop->description; ?></td>
                                                        <td ><?php echo $loop->country; ?></td>
                                                        <td ><?php echo $loop->startdate; ?></td>
                                                        <td ><?php echo $loop->enddate; ?></td>


                                                        <td ><?php echo $loop->posted; ?></td>

                                                        <td><?= $loop->status ?></td>
                                                        <td><?= $loop->registered ?></td>

                                                        <td class="td-actions">

                                                            <a href="<?php echo base_url() . "index.php/management/event/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
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
<script src="<?= base_url(); ?>assets/js/bootstrap-wysiwyg.min.js"></script>
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
            $("#fname" + ID).hide();
            $("#fname_input_" + ID).show();

            $("#lname" + ID).hide();
            $("#lname_input_" + ID).show();

            $("#contact" + ID).hide();
            $("#contact_input_" + ID).show();


            $("#email" + ID).hide();
            $("#email_input_" + ID).show();


        }).change(function ()
        {
            var ID = $(this).attr('id');
            var fname = $("#fname_input_" + ID).val();
            var lname = $("#lname_input_" + ID).val();
            var contact = $("#contact_input_" + ID).val();
            var email = $("#email_input_" + ID).val();


            var dataString = 'id=' + ID + '&fname=' + fname + '&lname=' + lname + '&contact=' + contact + '&email=' + email;
            $("#fname_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
            $("#lname_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
            $("#contact_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
            $("#email_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image

            if (fname.length > 0 && lname.length > 0)
            {

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() . "index.php/management/user/update/"; ?>",
                    data: dataString,
                    cache: false,
                    success: function (html)
                    {
                        $("#fname_" + ID).html(fname);
                        $("#lname_" + ID).html(lname);
                        $("#contact_" + ID).html(contact);
                        $("#email_" + ID).html(email);


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

<script type="text/javascript">
    $(function () {

        function showErrorAlert(reason, detail) {
            var msg = '';
            if (reason === 'unsupported-file-type') {
                msg = "Unsupported format " + detail;
            } else {
                console.log("error uploading file", reason, detail);
            }
            $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }

//$('#editor1').ace_wysiwyg();//this will create the default editor will all buttons

//but we want to change a few buttons colors for the third style
        $('#editor1').ace_wysiwyg({
            toolbar:
                    [
                        'font',
                        null,
                        'fontSize',
                        null,
                        {name: 'bold', className: 'btn-info'},
                        {name: 'italic', className: 'btn-info'},
                        {name: 'strikethrough', className: 'btn-info'},
                        {name: 'underline', className: 'btn-info'},
                        null,
                        {name: 'insertunorderedlist', className: 'btn-success'},
                        {name: 'insertorderedlist', className: 'btn-success'},
                        {name: 'outdent', className: 'btn-purple'},
                        {name: 'indent', className: 'btn-purple'},
                        null,
                        {name: 'justifyleft', className: 'btn-primary'},
                        {name: 'justifycenter', className: 'btn-primary'},
                        {name: 'justifyright', className: 'btn-primary'},
                        {name: 'justifyfull', className: 'btn-inverse'},
                        null,
                        {name: 'createLink', className: 'btn-pink'},
                        {name: 'unlink', className: 'btn-pink'},
                        null,
                        {name: 'insertImage', className: 'btn-success'},
                        null,
                        'foreColor',
                        null,
                        {name: 'undo', className: 'btn-grey'},
                        {name: 'redo', className: 'btn-grey'}
                    ],
            'wysiwyg': {
                fileUploadError: showErrorAlert
            }
        }).prev().addClass('wysiwyg-style2');



        $('#editor2').css({'height': '200px'}).ace_wysiwyg({
            toolbar_place: function (toolbar) {
                return $(this).closest('.widget-box').find('.widget-header').prepend(toolbar);
            },
            toolbar:
                    [
                        'bold',
                        {name: 'italic', title: 'Change Title!', icon: 'icon-leaf'},
                        'strikethrough',
                        'underline',
                        null,
                        'insertunorderedlist',
                        'insertorderedlist',
                        null,
                        'justifyleft',
                        'justifycenter',
                        'justifyright'
                    ],
            speech_button: false
        });


        $('[data-toggle="buttons-radio"]').on('click', function (e) {
            var target = $(e.target);
            var which = parseInt($.trim(target.text()));
            var toolbar = $('#editor1').prev().get(0);
            if (which == 1 || which == 2 || which == 3) {
                toolbar.className = toolbar.className.replace(/wysiwyg\-style(1|2)/g, '');
                if (which == 1)
                    $(toolbar).addClass('wysiwyg-style1');
                else if (which == 2)
                    $(toolbar).addClass('wysiwyg-style2');
            }
        });





//Add Image Resize Functionality to Chrome and Safari
//webkit browsers don't have image resize functionality when content is editable
//so let's add something using jQuery UI resizable
//another option would be opening a dialog for user to enter dimensions.
        if (typeof jQuery.ui !== 'undefined' && /applewebkit/.test(navigator.userAgent.toLowerCase())) {

            var lastResizableImg = null;
            function destroyResizable() {
                if (lastResizableImg == null)
                    return;
                lastResizableImg.resizable("destroy");
                lastResizableImg.removeData('resizable');
                lastResizableImg = null;
            }

            var enableImageResize = function () {
                $('.wysiwyg-editor')
                        .on('mousedown', function (e) {
                            var target = $(e.target);
                            if (e.target instanceof HTMLImageElement) {
                                if (!target.data('resizable')) {
                                    target.resizable({
                                        aspectRatio: e.target.width / e.target.height,
                                    });
                                    target.data('resizable', true);

                                    if (lastResizableImg != null) {//disable previous resizable image
                                        lastResizableImg.resizable("destroy");
                                        lastResizableImg.removeData('resizable');
                                    }
                                    lastResizableImg = target;
                                }
                            }
                        })
                        .on('click', function (e) {
                            if (lastResizableImg != null && !(e.target instanceof HTMLImageElement)) {
                                destroyResizable();
                            }
                        })
                        .on('keydown', function () {
                            destroyResizable();
                        });
            }

            enableImageResize();

            /**
             //or we can load the jQuery UI dynamically only if needed
             if (typeof jQuery.ui !== 'undefined') enableImageResize();
             else {//load jQuery UI if not loaded
             $.getScript($assets+"/js/jquery-ui-1.10.3.custom.min.js", function(data, textStatus, jqxhr) {
             if('ontouchend' in document) {//also load touch-punch for touch devices
             $.getScript($assets+"/js/jquery.ui.touch-punch.min.js", function(data, textStatus, jqxhr) {
             enableImageResize();
             });
             } else	enableImageResize();
             });
             }
             */
        }


    });
</script>
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
<script src="<?= base_url(); ?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $("#example1").DataTable();

    });
</script>