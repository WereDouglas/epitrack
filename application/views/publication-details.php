<link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery.gritter.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/fullcalendar.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/select2.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-editable.css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/mine.css" />
<link href="<?= base_url(); ?>dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

<div class="main-content">
    <div class="page-content">
        <div class="row-fluid">


            <?php
            if (is_array($publications) && count($publications)) {
                foreach ($publications as $loop) {
                    $name = $loop->title;
                    $link = $loop->link;
                    $abstract = $loop->abstract;
                    $file = $loop->file;
                    $id = $loop->id;
                    $accepted = $loop->accepted;
                    $reviewed = $loop->verified;
                    $dos = $loop->dos;
                    $author = $loop->author;
                }
            }
            ?>



            </tbody>
            </table>  
            <section id='introduction'>
                <h2 class='page-header'><a href="#introduction"><?php echo $name; ?></a></h2>
                <p class='lead'>
                    <b></b><?php echo $abstract; ?>
                </p>
                <?php echo $link ?>

                <p> <?php echo 'Author:-'. $author ?></p>

                <p> <?php echo 'Accepted: ' . $accepted . ' Reviewed: ' . $reviewed . ' Date of submission:' . $dos ?></p>
            </section><!-- /#introduction -->

            <!-- ============================================================= -->

            <section id='download'>

                <div class='row'>

                    <div class='col-sm-6'>
                        <div class='box box-danger'>
                            <div class='box-header with-border'>
                                <h3 class='box-title'>File</h3>
                                <span class='label label-danger pull-right'><i class='fa fa-database'></i></span>
                            </div><!-- /.box-header -->
                            <div class='box-body'>                               
                                <a href='<?php echo base_url() . "publications/" . $file; ?>' class='btn btn-danger'><i class='fa fa-download'></i> Download</a>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </section>

        </div><!--/.row-fluid-->


    </div><!--/.page-content-->


</div><!--/.main-content-->
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

<script src="<?= base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.gritter.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootbox.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.easy-pie-chart.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.hotkeys.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap-wysiwyg.min.js"></script>
<script src="<?= base_url(); ?>assets/js/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url(); ?>assets/js/fuelux/fuelux.spinner.min.js"></script>
<script src="<?= base_url(); ?>assets/js/x-editable/bootstrap-editable.min.js"></script>
<script src="<?= base_url(); ?>assets/js/x-editable/ace-editable.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>

<!--ace scripts-->

<script src="<?= base_url(); ?>assets/js/ace-elements.min.js"></script>
<script src="<?= base_url(); ?>assets/js/ace.min.js"></script>
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
