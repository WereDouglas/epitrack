<?php require_once(APPPATH . 'views/css-page.php'); ?>

<div class="row container-fluid">
    <div class="col-md-12">
        <h4>Publications</h4>

        <form id="fileform" name="fileform" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/management/download/'  method="post">            


            <table id="example1" name="example1"  class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th> </th>

                       
                        <th>Name</th>
                        <th>Cohort</th>
                        <th>Title <button type="button" id="selectAll" class="main"> <span class="sub"></span> Select </button></th>
                        <th>link  </th>
                        <th>abstract</th>
                        <th>Reviewed</th>
                        <th>Accepted</th>
                        <th>submitted on</th>
                        <th>Accepted</th>
                        <th>Review</th>
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
                                    <a href="<?php echo base_url() . "index.php/student/details/" . $loop->id; ?>" target="frame">    <img src="<?= base_url(); ?>uploads/<?= $loop->image ?>" height="50px" width="150px"  alt="<?php echo $fname; ?>" /></a>
                                </td>
                                <td class="">
                                    <?= $loop->fname . ' ' . $loop->lname . ' ' . $loop->other ?>
                                </td>
                                <td class="">
                                    <?= $loop->cohort ?>
                                </td>
                                <td class="">
                                    <input type='checkbox' name='files[]' value='<?php echo $loop->file; ?>'/>
                                    <a href="<?php echo base_url() . "publications/" . $loop->file; ?>">
                                        <span id="name_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
                                    </a>
                                </td>
                                <td class="center ">
                                    <?php echo $link ?>
                                </td>
                                <td class="center ">
                                    <?php echo $loop->abstract ?>
                                </td>

                                <td >
                                    <?php echo $loop->verified ?>

                                </td>

                                <td class="center ">
                                    <?php echo $loop->accepted ?>
                                </td>
                                <td class="center ">
                                    <?php echo $loop->dos ?>
                                </td>
                                <td class="td-actions">

                                    <a href="<?php echo base_url() . "index.php/student/accept/" . $loop->id . "/" . $loop->accepted . "/" . "publication"; ?>" class="tooltip-info qualification" data-rel="tooltip" title="accept">
                                        <span class="green">
                                            <i class="icon-book bigger-120"></i>
                                        </span>
                                    </a>
                                </td>
                                <td class="td-actions">

                                    <a href="<?php echo base_url() . "index.php/student/verify_qualification/" . $loop->id . "/" . $loop->verified . "/" . "publication"; ?>" class="tooltip-info qualification" data-rel="tooltip" title="verify">
                                        <span class="blue">
                                            <i class="icon-briefcase bigger-120"></i>
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
            <hr>
           
            
            <p><button type="submit">Download selected</button></p>

          
            
        </form>

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
        $("#example1").DataTable();

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
<script>

    $(document).ready(function () {
        $('body').on('click', '#selectAll', function () {
            if ($(this).hasClass('allChecked')) {
                $('input[type="checkbox"]', '#example1').prop('checked', false);
            } else {
                $('input[type="checkbox"]', '#example1').prop('checked', true);
            }
            $(this).toggleClass('allChecked');
        })
    });

</script>
