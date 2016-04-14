<?php require_once(APPPATH . 'views/css-page.php'); ?>

<div class="col-xs-12">
    <?php
    if ($this->session->userdata('level') == 1) {
        ?>
        <h4>Add new cohort</h4> 
        <div class="row-fluid">
            <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/management/cohort/'  method="post">            
                <label>
                    <span class="block input-icon input-icon-right">
                        <label>Name</label>
                        <div class="control-group">
                            <input type="text"  id="name" name="name" placeholder="cohort III 2015" /> 
                        </div>
                        <label> Select track </label>
                       
                        <div class="control-group">
                        <select id="track" name="track" >                                                            
                            <?php
                            if (is_array($tracks) && count($tracks)) {
                                foreach ($tracks as $loop) {
                                    ?>                        
                                    <option value="<?= $loop->track ?>" /><?= $loop->track ?>
                                <?php
                                }
                            }
                            ?>
                        </select>
                        </div>
                        <label>Year </label>
                       
                         <div class="control-group">
                             <input type="text"  id="years" name="years" placeholder="<?php echo date('Y'); ?>" /> 

                         </div>
                    </span>
                </label>


                <div>                   
                    <button type="reset" class="width-10 pull-left btn btn-small">
                        <i class="icon-refresh"></i>
                        Clear
                    </button>

                    <button  class="width-15 pull-left btn btn-small btn-success">
                        Submit

                    </button>
                </div>

            </form>


        </div>                         
        <hr>   
    <?php } ?>
    <h4>Cohort list</h4>
<?php echo $this->session->flashdata('msg'); ?>                                             
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

                <th>NAME</th>
                <th>TRACK</th>
                <th>YEAR</th>                                                    
                <th>created on</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php
            if (is_array($cohorts) && count($cohorts)) {
                foreach ($cohorts as $loop) {
                    $name = $loop->name;
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
                            <span id="cohort_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
                            <input type="text" value="<?php echo $name; ?>" class="editbox" id="cohort_input_<?php echo $id; ?>"
                        </td>
                        <td><?= $loop->track ?></td>
                        <td><?= $loop->year ?></td>

                        <td><?= $loop->created ?></td>

                        <td class="td-actions">

                            <a href="<?php echo base_url() . "index.php/management/cohort/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
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




</div><!--/.main-content-->
<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-2.0.3.min.js"></script>
<script src="<?= base_url(); ?>assets/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url(); ?>assets/js/date-time/bootstrap-timepicker.min.js"></script>
<script src="<?= base_url(); ?>assets/js/date-time/moment.min.js"></script>
<script src="<?= base_url(); ?>assets/js/date-time/daterangepicker.min.js"></script>
<script type="text/javascript">
    $(document).ready(function ()
    {
        $(".editbox").hide();


        $(".edit_tr").click(function ()
        {
            var ID = $(this).attr('id');
            $("#cohort" + ID).hide();
            $("#cohort_input_" + ID).show();

        }).change(function ()
        {
            var ID = $(this).attr('id');
            var name = $("#cohort_input_" + ID).val();
            var dataString = 'id=' + ID + '&name=' + name;
            $("#cohort_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image

            if (name.length > 0)
            {

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() . "index.php/management/cohort/update/"; ?>",
                    data: dataString,
                    cache: false,
                    success: function (html)
                    {
                        $("#cohort_" + ID).html(name);
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