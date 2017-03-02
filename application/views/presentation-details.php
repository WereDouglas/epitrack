<?php require_once(APPPATH . 'views/css-page.php'); ?>


<div class="col-xs-12">


    <?php
    if (is_array($outbreaks) && count($outbreaks)) {
        foreach ($outbreaks as $loop) {
            $name = $loop->title;
            $link = $loop->link;
            $abstract = $loop->abstract;
            $file = $loop->file;
            $id = $loop->id;
            $accepted = $loop->accepted;
            $reviewed = $loop->verified;
            $dos = $loop->dos;
            $author = $loop->author;
            ?>


            <section id='introduction'>
                <h2 class='page-header'><a href="#introduction"><?php echo $loop->title; ?></a></h2>
                <p class='lead'>
                    <b>COUNTRY </b><?php echo $loop->country; ?>
                </p>

                <p> <?php echo 'Event type:-' . $loop->eventType; ?></p>
                <p> <?php echo 'Event name:-' . $loop->eventName; ?></p>
                <p> <?php echo 'Date:-' . $loop->date; ?></p>
                <p> <?php echo 'Location:-' . $loop->location; ?></p>
                <p> <?php echo 'Submission date:-' . $loop->dos; ?></p>
                <p> <?php echo 'Accepted:-' . $loop->accepted; ?></p>
                <p> <?php echo 'Presentation type:-' . $loop->presentationType; ?></p>
                <p> <?php echo 'Date of submission:-' . $loop->dos; ?></p>
                <p> <?php echo 'Accepted:-' . $loop->accepted; ?></p>
                
                <p> <?php echo 'Summary:-' . $loop->summary; ?></p>
                <p> <?php echo 'Author:-' . $loop->author; ?></p>
                <p> <?php echo 'Presenter:-' . $loop->presenter; ?></p>
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
                                <a href='<?php echo base_url() . "publications/" . $loop->file; ?>' class='btn btn-danger'><i class='fa fa-download'></i> Download</a>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </section>
            <?php
        }
    }
    ?>

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
