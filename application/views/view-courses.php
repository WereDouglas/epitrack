<?php require_once(APPPATH . 'views/css-page.php'); ?>
<div class="row container-fluid">
    <div class="col-md-12">
        <h4>Short courses</h4>
        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="center">
                        <label>
                            <input type="checkbox" />
                            <span class="lbl"></span>
                        </label>
                    </th>
                    <th>#</th>
                    <th>Student Name</th>
                    <th>Cohort</th>
                    <th>Name</th>                   
                    <th>Description</th>   
                    <th>Start</th>
                    <th>End</th>   
                    <th>Participants</th> 
                    <th>Objective</th> 
                    <th>Role</th> 
                    <th>Date of study</th> 

                </tr>
            </thead>

            <tbody>
                <?php
                if (is_array($outs) && count($outs)) {
                    foreach ($outs as $loop) {
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
                            <td class="center ">
                                <div class="profile-activity">
                                    <a href="<?php echo base_url() . "index.php/student/details/" . $loop->id; ?>" target="frame">    <img class="nav-user-photo"  src="<?= base_url(); ?>uploads/<?= $loop->image ?>" height="30px" width="30px"  alt="<?php echo $fname; ?>" /></a>
                                </div>
                            </td>
                            <td class="">
                                <?= $loop->fname . ' ' . $loop->lname . ' ' . $loop->other ?>
                            </td>
                            <td class="">
                                <?= $loop->cohort ?>
                            </td>
                            <td class="">
                                <span id="name_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
                            </td>
                            <td><?= $loop->description ?></td>

                            <td><?= $loop->start ?></td>
                            <td><?= $loop->end ?></td>

                            <td class="">
                                <?= $loop->participants ?>
                            </td>    
                            <td class="">
                                <?= $loop->objective ?>
                            </td>
                            <td class="">
                                <?= $loop->role ?>
                            </td>    

                            <td><?= $loop->dos ?></td>


                        </tr>
                        <?php
                    }
                }
                ?>

            </tbody>
        </table>  
    </div><!-- /.col -->

</div><!-- /.row -->

<script type="text/javascript">
    window.jQuery || document.write("<script src='<?= base_url(); ?>assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");</script>

<!--<![endif]-->

<!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
    if ("ontouchend" in document)
        document.write("<script src='<?= base_url(); ?>assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");</script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

<!--page specific plugin scripts-->

<!--[if lte IE 8]>
  <script src="assets/js/excanvas.min.js"></script>
<![endif]-->



<script src="<?= base_url(); ?>assets/js/ace-elements.min.js"></script>
<script src="<?= base_url(); ?>assets/js/ace.min.js"></script>

<script src="<?= base_url(); ?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $("#sample-table-2").DataTable();

    });
</script>
<script>
    $('.qualification').click(function (e) {
        updateURL = $(this).attr("href");
        e.preventDefault();//in this way you have no redirect
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: updateURL,
            async: false,
            success: function (data) {
                alert('Information updated!')
            }

        });
        alert('Information updated!')
        return false;
    });

</script>

