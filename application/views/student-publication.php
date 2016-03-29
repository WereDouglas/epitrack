<?php require_once(APPPATH . 'views/css-page.php'); ?>

           <div class="col-xs-12">

 <h3>Publications</h3>
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
                                        <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/publication/'  method="post">            

                                            <div class="span6">   


                                                <div class="widget-main">

                                                    <input multiple="" type="file" name="userfile" id="id-input-file-3" />

                                                </div>


                                                <div class="control-group">
                                                    <label class="control-label" for="form-field-username">title</label>

                                                    <div class="controls">
                                                        <input type="text" class="span12" id="title" name="title" placeholder="title"  />
                                                    </div>
                                                </div>




                                            </div>
                                            <div class="span6">
                                                <div class="control-group">
                                                    <label class="control-label" for="form-field-username">Country</label>

                                                    <div class="controls">
                                                        <input type="text" class="span12" id="title" name="country" placeholder="country"  />
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="form-field-username">link</label>

                                                    <div class="controls">
                                                        <input type="text" class="span12" id="link" name="link" placeholder="link"  />
                                                    </div>
                                                    <label class="control-label" for="form-field-username">Co-author</label>

                                                    <div class="controls">
                                                        <input type="text" class="span12" id="author" name="author" placeholder="link"  />
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="alert span12">  
                                                <label for="form-field-9">Abstract</label>

                                                <textarea class="span12" id="form-field-9" name="abstract" data-maxlength="10"></textarea>
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
                                                    <th>Title</th>
                                                    <th>link</th>
                                                    <th>abstract</th>
                                                    <th>Reviewed</th>

                                                    <th>Accepted</th>
                                                    <th>submitted on</th>
                                                    <th></th>
                                                      <th>Details</th>
                                                    
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                if (is_array($publications) && count($publications)) {
                                                    foreach ($publications as $loop) {
                                                        $name = $loop->title;
                                                        $link = $loop->link;
                                                        $abstract = $loop->abstract;
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
                                                                <a href="<?php echo base_url() . "publications/" . $loop->file; ?>">
                                                                    <span id="name_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
                                                                    <input type="text" value="<?php echo $name; ?>" class="editbox" id="name_input_<?php echo $id; ?>"
                                                                </a>
                                                            </td>
                                                            <td class="center ">
                                                                <?php echo $link ?>
                                                            </td>
                                                            <td class="center ">
                                                                <?php echo $loop->abstract ?>
                                                            </td>

                                                            <td >

                                                                <?php
                                                                if ($loop->verified == "false") {
                                                                    ?>
                                                                    <div class="btn-group" data-toggle="buttons" data-toggle-default-class="btn-default">
                                                                        <label class="btn btn-xs btn-default" data-toggle-class="btn-success" value="<?= $loop->id; ?>">
                                                                            <input type="radio" name="status" id="<?= $loop->verified; ?>" value="<?= $loop->id; ?>" />
                                                                            yes
                                                                        </label>
                                                                        <label class="btn btn-xs btn-danger active" data-toggle-class="btn-danger" value="<?= $loop->id; ?>">
                                                                            <input type="radio" name="status" id="<?= $loop->verified; ?>" value="<?= $loop->id; ?>" checked />
                                                                            no
                                                                        </label>
                                                                    </div> 
                                                                <?php } ?>

                                                                <?php
                                                                if ($loop->verified == "true") {
                                                                    ?>
                                                                    <div class="btn-group" data-toggle="buttons" data-toggle-default-class="btn-default">
                                                                        <label class="btn btn-xs btn-success active" data-toggle-class="btn-success">
                                                                            <input type="radio" name="status" id="<?= $loop->verified; ?>" value="<?= $loop->id; ?>" checked />
                                                                            yes
                                                                        </label>
                                                                        <label class="btn btn-xs btn-default " data-toggle-class="btn-danger">
                                                                            <input type="radio" name="status" id="<?= $loop->verified; ?>" value="<?= $loop->id; ?>"  />
                                                                            no
                                                                        </label>
                                                                    </div> 
                                                                <?php } ?>

                                                            </td>

                                                            <td class="center ">
                                                                <?php echo $loop->accepted ?>
                                                            </td>
                                                            <td class="center ">
                                                                <?php echo $loop->dos ?>
                                                            </td>
                                                            <td class="td-actions">

                                                                <a href="<?php echo base_url() . "index.php/management/publication/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                    <span class="red">
                                                                        <i class="icon-trash bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </td>
                                                            <td class="td-actions">
                                                                
                                                                  <a href="<?php echo base_url() . "index.php/student/publicationed/" . $loop->id; ?>" target="frame"> 
                                                                   Read more
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
<script src="<?= base_url(); ?>tinymce/tinymce.min.js"></script>
<script>tinymce.init({selector: 'textarea'});</script>

<script src="<?= base_url(); ?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function () {
    $("#example1").DataTable();

});
</script>
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


                                    $.post("<?php echo base_url() ?>index.php/student/activate_publication", {
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