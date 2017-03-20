<?php require_once(APPPATH . 'views/css-page.php'); ?>
<div class="col-xs-12">
    <h3><?php echo $this->session->userdata('name'); ?>'s Qualifications</h3>
    <a href="javascript:void(0);" class="add_user" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus-square"></i> <span> New qualificaion record</span> </a>

    <?php echo $this->session->flashdata('msg'); ?>
    <div class="row-fluid">
        <div class="span12 widget-container-span">

           
            <div class="widget-main ">
                <div id="accordion2" class="accordion">              

                  

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

                                            <th>Name</th>
                                            <th>institute</th>
                                            <th>Year of completion</th>   
                                            <th>Graduation</th>   
                                            <th>verified</th> 
                                            <th>submitted</th> 

                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        if (is_array($qualifications) && count($qualifications)) {
                                            foreach ($qualifications as $loop) {
                                                $name = $loop->name;
                                                $institute = $loop->institute;
                                                $completion = $loop->completion;
                                                $graduation = $loop->graduation;
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
                                                    <td class="edit_td">
                                                        <span id="institute_<?php echo $id; ?>" class="text"><?php echo $institute; ?></span>
                                                        <input type="text" value="<?php echo $institute; ?>" class="editbox" id="institute_input_<?php echo $id; ?>"
                                                    </td>   
                                                    <td class="edit_td">
                                                        <span id="completion_<?php echo $id; ?>" class="text"><?php echo $completion; ?></span>
                                                        <input class="span10 editbox" id="completion_input_<?php echo $id; ?>" value="<?php echo $completion; ?>"  type="text" name="date" data-date-format="yyyy-mm-dd" />
                                                       
                                                    </td>
                                                    <td class="edit_td">
                                                        <span id="graduation_<?php echo $id; ?>" class="text"><?php echo $graduation; ?></span>
                                                        <input class="span10  editbox" id="graduation_input_<?php echo $id; ?>" value="<?php echo $graduation; ?>"  type="text" name="date" data-date-format="yyyy-mm-dd" />
                                                                                                       
                                                    </td>


                                                    <td><?= $loop->verified ?></td>
                                                    <td><?= $loop->created ?></td>

                                                    <td class="td-actions">

                                                        <a href="<?php echo base_url() . "index.php/student/qualification/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                               Delete <i class="icon-trash bigger-120"></i>
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
<div class="modal fade  col-md-12" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">NEW QUALIFICATION RECORD</h4>
            </div>

            <form  role= "form" id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/qualification'  method="post">            

              
              
                <div class="control-group form">
                    <div class="controls">
                       <div class="controls">
                            <label>Qualification name</label>
                          
                                <input required type="text" class="form-control"  id="name" name="name"   />
                        </div>
                        <div class="controls">

                            <label>Institution</label> 
                           <input required  type="text" class="form-control"  id="institute" name="institute"   /></span>


                        </div>
                     


                        <div class="form-group">
                            <label class="label-top">Date of completion</label>
                            <select name="completion" class="form-control">
                                <?php
                                for ($i = 1950; $i < date('Y') + 1; $i++) {
                                    echo "<option>$i</option>";
                                }
                                ?>
                            </select>

                        </div>
                        <div class="form-group">
                            <label class="label-top">Date of graduation</label>
                            <select name="graduation" class="form-control">
                                <?php
                                for ($i = 1950; $i < date('Y') + 1; $i++) {
                                    echo "<option>$i</option>";
                                }
                                ?>
                            </select>
              

                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-info pull-right">Submit</button>
                        </div><!-- /.box-footer -->

                    </div>

                </div>
            </form>	
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
<!--ace scripts-->

<script src="<?= base_url(); ?>assets/js/ace-elements.min.js"></script>
<script src="<?= base_url(); ?>assets/js/ace.min.js"></script>




<script type="text/javascript">
    $(document).ready(function ()
    {
        $(".editbox").hide();

        $(".edit_tr").click(function ()
        {
            var ID = $(this).attr('id');
            $("#name_" + ID).hide();
            $("#institute_" + ID).hide();
            $("#graduation_" + ID).hide();
            $("#completion_" + ID).hide();

            $("#name_input_" + ID).show();
            $("#institute_input_" + ID).show();
            $("#completion_input_" + ID).show();
            $("#graduation_input_" + ID).show();

        }).change(function ()
        {
            var ID = $(this).attr('id');
            var name = $("#name_input_" + ID).val();
            var institute = $("#institute_input_" + ID).val();
            var completion = $("#completion_input_" + ID).val();
            var graduation = $("#graduation_input_" + ID).val();

            var dataString = 'id=' + ID + '&name=' + name + '&institute=' + institute + '&completion=' + completion + '&graduation=' + graduation;
            $("#name_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
            $("#institute_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
            $("#graduation_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />');
            $("#completion_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />');
            if (name.length > 0 && institute.length > 0)
            {

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() . "index.php/student/qualification/update/"; ?>",
                    data: dataString,
                    cache: false,
                    success: function (html)
                    {
                        $("#name_" + ID).html(name);
                        $("#institute_" + ID).html(institute);
                        $("#graduation_" + ID).html(graduation);
                        $("#completion_" + ID).html(completion);
                       location.reload();

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
