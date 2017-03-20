<?php require_once(APPPATH . 'views/css-page.php'); ?>


<div class="col-xs-12">
    <h3><?php echo $this->session->userdata('name'); ?>'s studies</h3>
    <a href="javascript:void(0);" class="add_user" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus-square"></i> <span> New study record</span> </a>

    <?php echo $this->session->flashdata('msg'); ?>
    <div class="row-fluid">
        <div class="span12 widget-container-span">
            <div class="widget-main ">
                <div id="accordion2" class="accordion">
                    <div class="accordion-group">

                        <div class="alert alert-info">Select a field to edit the content</div>                     

                        <div class="accordion-body collapsed" id="collapseThree">
                            <div class="accordion-inner">
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
                                            <th>Onset</th>
                                            <th>Dissemination</th>   
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        if (is_array($study) && count($study)) {
                                            foreach ($study as $loop) {
                                                $name = $loop->name;
                                                $dos = $loop->dos;
                                                $onset = $loop->onset;
                                                $findings = $loop->findings;
                                                $dissemination = $loop->dissemination;
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
                                                        <input type="text" value="<?php echo $name; ?>" class="editbox" id="name_input_<?php echo $id; ?>" />
                                                    </td>
                                                    <td class="edit_td">
                                                        <span id="onset_<?php echo $id; ?>" class="text"><?php echo $onset; ?></span>
                                                        <input class="span10 date-picker editbox" id="onset_input_<?php echo $id; ?>" value="<?php echo $onset; ?>"   type="text" name="date" data-date-format="yyyy-mm-dd" />
                                                        <span class="add-on">
                                                            <i class="icon-calendar"></i>
                                                        </span>
                                                    </td>
                                                    <td class="edit_td">
                                                        <span id="dissemination_<?php echo $id; ?>" class="text"><?php echo $dissemination; ?></span>
                                                        <input class="span10 date-picker editbox" id="dissemination_input_<?php echo $id; ?>" value="<?php echo $dissemination; ?>"   type="text" name="date" data-date-format="yyyy-mm-dd" />
                                                        <span class="add-on">
                                                            <i class="icon-calendar"></i>
                                                        </span>                                                        
                                                    </td>
                                                    <td>                                                   

                                                        <a href="<?php echo base_url() . "index.php/study/details/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            View
                                                        </a>

                                                    </td>
                                                    <td class="td-actions">

                                                        <a href="<?php echo base_url() . "index.php/student/study/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">Delete
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
<div class="modal fade col-md-6" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">NEW STUDY</h4>
            </div>

            <form  role= "form" id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/study'  method="post">            

                <div class="control-group form">
                    <div class="controls">

                        <div class="form-group">
                            <label>Study name</label>                        
                            <input type="text" class="form-control"  name="name"  id="name" required="true" />

                        </div>

                        <div class="form-group">
                            <label>Date of Study Onset</label>
                            <input name="onset" id="onset"  class="form-control easyui-datebox" />

                        </div>
                        <div class="form-group">
                            <label>Date of Study Dissemination</label>
                            <input name="dissemination"  id="dissemination" class="form-control easyui-datebox " />

                        </div>                       
                        <div class="form-group">
                            <label for="">Findings/Public Health Action*</label>
                            <textarea class="form-control" id="findings" name="findings" data-maxlength="50"></textarea>
                        </div>       

                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-info pull-right">Submit</button>
                        </div><!-- /.box-footer -->

                    </div>

                </div>
            </form>	
        </div>
    </div>
</div>

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




<script src="<?= base_url(); ?>assets/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url(); ?>assets/js/date-time/bootstrap-timepicker.min.js"></script>
<script src="<?= base_url(); ?>assets/js/date-time/moment.min.js"></script>
<script src="<?= base_url(); ?>assets/js/date-time/daterangepicker.min.js"></script>
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
            $("#name" + ID).hide();
            $("#name_input_" + ID).show();

            $("#onset" + ID).hide();
            $("#onset_input_" + ID).show();



            $("#dissemination" + ID).hide();
            $("#dissemination_input_" + ID).show();
        }).change(function ()
        {
            var ID = $(this).attr('id');
            var name = $("#name_input_" + ID).val();
            var onset = $("#onset_input_" + ID).val();

            var dissemination = $("#dissemination_input_" + ID).val();
            var findings = $("#findings_input_" + ID).val();


            var dataString = 'id=' + ID + '&name=' + name + '&onset=' + onset + '&dissemination=' + dissemination;
            $("#name_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
            $("#onset_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
            $("#dissemination_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
            $("#findings_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
            if (name.length > 0 && onset.length > 0)
            {

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() . "index.php/student/study/update/"; ?>",
                    data: dataString,
                    cache: false,
                    success: function (html)
                    {
                        $("#name_" + ID).html(name);
                        $("#onset_" + ID).html(onset);

                        $("#dissemination_" + ID).html(dissemination);
                        $("#findings_" + ID).html(findings);


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
    });
</script>


