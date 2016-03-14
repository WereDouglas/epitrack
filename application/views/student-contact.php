<?php require_once(APPPATH . 'views/css-page.php'); ?>


<div class="col-xs-12">


    <div class="alert alert-success">Add new contact</div>  
    <?php echo $this->session->flashdata('msg'); ?>

    <div class="row-fluid">
        <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/contact/'  method="post">            


            <span class="block input-icon input-icon-right">
                <input type="text" class="span12" id="contact" name="contact" placeholder="250" /> 

                <label>Select type</label>
                <select id="type" name="type" >                                                            

                    <option value="e-mail" />E-mail
                    <option value="Physical" />Physical
                    <option value="Mobile" />Mobile phone
                    <option value="office" />Office 
                    <option value="landline" />Landline
                    <option value="fax" />Fax

                </select>  

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

                <th>CONTACT</th>
                <th>TYPE</th>                                                                                                      
                <th>SUBMITTED ON</th>
                  <th></th>

            </tr>
        </thead>

        <tbody>
            <?php
            if (is_array($contacts) && count($contacts)) {
                foreach ($contacts as $loop) {
                    $contact = $loop->contact;
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
                            <span id="cohort_<?php echo $id; ?>" class="text"><?php echo $contact; ?></span>
                            <input type="text" value="<?php echo $contact; ?>" class="editbox" id="contact_input_<?php echo $id; ?>"
                        </td>
                        <td><?= $loop->type ?></td>

                        <td><?= $loop->created ?></td>

                        <td class="td-actions">

                            <a href="<?php echo base_url() . "index.php/student/contact/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
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

<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-2.0.3.min.js"></script>
<script type="text/javascript">
    $(document).ready(function ()
    {
        $(".editbox").hide();


        $(".edit_tr").click(function ()
        {
            var ID = $(this).attr('id');
            $("#contact" + ID).hide();
            $("#contact_input_" + ID).show();

        }).change(function ()
        {
            var ID = $(this).attr('id');
            var contact = $("#contact_input_" + ID).val();
            var dataString = 'id=' + ID + '&contact=' + contact;
            $("#contact_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image

            if (contact.length > 0)
            {

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() . "index.php/student/contact/update/"; ?>",
                    data: dataString,
                    cache: false,
                    success: function (html)
                    {
                        $("#contact_" + ID).html(contact);

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