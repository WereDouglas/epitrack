<?php require_once(APPPATH . 'views/css-page.php'); ?>


<div class="row container-fluid">
    <input type="button" value="Print" onclick="PrintElem('#mydiv')" />
    <div class="col-md-12" id="mydiv">
        <h4>Employement Records</h4>
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
                    <th>Name</th>
                      <th>Program</th>
                    <th>Cohort</th>
                    <th>Organisation</th>
                    <th>Position</th>
                    <th>Country</th>   
                    <th>Location</th>   
                    <th>Sector</th>   
                    <th>Contact</th>

                    <th>Created</th>
                     <th>verified</th>
                    <th>Verified</th>

                </tr>
            </thead>

            <tbody>
                <?php
                if (is_array($records) && count($records)) {
                    foreach ($records as $loop) {
                        $organisation = $loop->organisation;
                        $position = $loop->position;
                        $country = $loop->country;
                        $location = $loop->location;
                        $sector = $loop->sector;
                        $contact = $loop->contact;
                        $created = $loop->created;
                        if($loop->verified!=""){
                        $verified = $loop->verified ;
                        }
                        else{ $verified = "false";}

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
                             <td class="center ">
                                <?php echo $loop->country ?>
                            </td>
                             <td class="">
                                <?= $loop->cohort ?>
                            </td>

                            <td class="">
                                <?php echo $organisation; ?>
                            </td>
                            <td class="">
                                <span id="position_<?php echo $id; ?>" class="text"><?php echo $position; ?></span>
                            </td>
                            <td class="">
                                <span id="country_<?php echo $id; ?>" class="text"><?php echo $country; ?></span>
                            </td>
                            <td class="">
                                <span id="location_<?php echo $id; ?>" class="text"><?php echo $location; ?></span>

                            </td>
                            <td class="">
                                <span id="sector_<?php echo $id; ?>" class="text"><?php echo $sector; ?></span>
                            </td>
                            <td class="">
                                <span id="contact_<?php echo $id; ?>" class="text"><?php echo $contact; ?></span>
                            </td>

                            <td><?= $loop->created ?></td>
                            <td>
                                
                                <?php if ($verified =="false"){?>
                                <strong> <p  class="text-danger"><?= $verified ?></p></strong>
                                <?php }else{?>
                                 <strong> <p  class=" text-green"><?= $verified ?></p></strong>
                                 <?php }?>
                                
                                
                            </td>

                            <td class="td-actions">

                                <a href="<?php echo base_url() . "index.php/student/verify_qualification/" . $loop->id . "/" . $verified . "/" . "employment"; ?>" class="tooltip-info qualification" data-rel="tooltip" title="verify">
                                    <span class="red">
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
                location.reload();
            }

        });
        alert('Information updated!')
        location.reload();
        return false;
    });

</script>
<script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>
