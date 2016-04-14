<?php require_once(APPPATH . 'views/css-page.php'); ?>


<div class="col-xs-12">
    <?php
      if ($this->session->userdata('level') == 1) {
    ?>
    <h4>Add new track</h4>  
    <div class="row-fluid">
       
        <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/management/tracks/'  method="post">            
            <label>
                <span class="block input-icon input-icon-right">
                    <input type="text" class="span12" id="track" name="track" placeholder="track name" />  
                </span>
            </label>

           

            <button  class="width-15 pull-right btn btn-small btn-success">
                Submit

            </button>
            

        </form>

    </div>                                                     
    <hr>        
      <?php }?>
    <h4>Track list</h4>                               
 <?php echo $this->session->flashdata('msg'); ?>
    <div class="alert alert-info">Select a field to edit the content</div>                     

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

                <th>Submitted on</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php
            if (is_array($tracks) && count($tracks)) {
                foreach ($tracks as $loop) {
                    $track = $loop->track;
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
                            <span id="track_<?php echo $id; ?>" class="text"><?php echo $track; ?></span>
                            <input type="text" value="<?php echo $track; ?>" class="editbox" id="track_input_<?php echo $id; ?>"
                        </td>


                        <td><?= $loop->created ?></td>

                        <td class="td-actions">

                            <a href="<?php echo base_url() . "index.php/management/tracks/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                <span class="red">
                                    <i class="icon-trash bigger-120"></i>
                                </span>
                            </a>
                        </td>
                    </tr>
                <?php }
            }
            ?>



        </tbody>
    </table>      




</div>




<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-2.0.3.min.js"></script>
<script type="text/javascript">
    $(document).ready(function ()
    {
        $(".editbox").hide();
        $(".edit_tr").click(function ()
        {
            var ID = $(this).attr('id');
            $("#track" + ID).hide();
            $("#track_input_" + ID).show();

        }).change(function ()
        {
            var ID = $(this).attr('id');
            var track = $("#track_input_" + ID).val();
            var dataString = 'id=' + ID + '&track=' + track;
            $("#track_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image

            if (track.length > 0)
            {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() . "index.php/management/tracks/update/"; ?>",
                    data: dataString,
                    cache: false,
                    success: function (html)
                    {
                        $("#track_" + ID).html(track);
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