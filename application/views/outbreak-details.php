<?php require_once(APPPATH . 'views/css-page.php'); ?>


<div class="col-xs-12">
    <?php
    if (is_array($outbreaks) && count($outbreaks)) {
        foreach ($outbreaks as $loop) {
            if ($this->session->userdata('level') == "student") {
                if ($loop->verified == "false") {

                    $editable = "true";
                } else {

                    $editable = "false";
                }
            } else {
                $editable = "false";
            }
            ?>

            <section id='introduction'>
                <h2 class='page-header'><a href="#introduction">OUT BREAK  :-<?php echo $loop->name; ?></a></h2>
                <div class="col-md-12 col-sm-12 col-xs-12"> <span class=" status col-md-12 col-sm-12 col-xs-12" id="status"></span></div>

                <table class="table zebra-style ">
                    <tbody>
                        <tr>
                            <td></td>
                            <td><font class="red">(Editable)</font></td>

                        </tr>
                        <tr>
                            <td>NAME:</td>
                            <td id="name:<?php echo $loop->id; ?>" contenteditable="<?php echo $editable; ?>" class="editable"><?php echo $loop->name; ?></td>

                        </tr>
                        <tr>
                            <td>COUNTRY:</td>
                            <td id="country:<?php echo $loop->id; ?>" contenteditable="<?php echo $editable; ?>" class="editable"><?php echo $loop->country; ?></td>

                        </tr>
                        <tr>
                            <td>REGION</td>
                            <td id="region:<?php echo $loop->id; ?>" contenteditable="<?php echo $editable; ?>" class="editable"><?php echo $loop->region; ?></td>

                        </tr>
                        <tr>
                            <td>MAX NO OF DEATHS:</td>
                            <td id="max:<?php echo $loop->id; ?>" contenteditable="<?php echo $editable; ?>" class="editable"><?php echo $loop->max; ?></td>

                        </tr>
                        <tr>
                            <td>MIN NO OF DEATHS:</td>
                            <td id="min:<?php echo $loop->id; ?>" contenteditable="<?php echo $editable; ?>" class="editable"><?php echo $loop->min; ?></td>


                        </tr>
                        <tr>
                            <td>DATE OF ONSET</td>
                            <td id="onset:<?php echo $loop->id; ?>" contenteditable="<?php echo $editable; ?>" class="editable"><?php echo $loop->onset; ?></td>

                        </tr>
                        <tr>
                            <td>DAY OF OUTBREAK:</td>
                            <td id="dates:<?php echo $loop->id; ?>" contenteditable="<?php echo $editable; ?>" class="editable"><?php echo $loop->dates; ?></td>
                        </tr>
                        <tr>
                            <td>LAB:</td>
                            <td id="lab:<?php echo $loop->id; ?>" contenteditable="<?php echo $editable; ?>" class="editable"><?php echo $loop->lab; ?></td>

                        </tr>
                        <tr>
                            <td>CONFIRMED</td>
                            <td id="confirm:<?php echo $loop->id; ?>" contenteditable="<?php echo $editable; ?>" class="editable"><?php echo $loop->confirm; ?></td>
                        </tr> 
                        <tr>
                            <td>ETIOLOGY</td>
                            <td id="etiology:<?php echo $loop->id; ?>" contenteditable="<?php echo $editable; ?>" class="editable"><?php echo $loop->etiology; ?></td>

                        </tr>
                        <tr>
                            <td>FINDINGS</td>
                            <td id="findings:<?php echo $loop->id; ?>" contenteditable="<?php echo $editable; ?>" class="editable"><?php echo $loop->findings; ?></td>


                        </tr>
                        <tr>
                            <td>DATE OF SUBMISSION</td>
                            <td id="dos:<?php echo $loop->id; ?>" contenteditable="<?php echo $editable; ?>" class="editable"><?php echo $loop->dos; ?></td>


                        </tr>
                        <tr>
                            <td>STUDY VERIFICATION</td>
                            <td id="verified:<?php echo $loop->id; ?>" contenteditable="<?php echo $editable; ?>" class="editable"><?php echo $loop->verified; ?></td>

                        </tr>
                    </tbody>
                </table>

            </section><!-- /#introduction -->

            <!-- ============================================================= -->

            <?php
        }
    }
    ?>

</div><!--/.row-fluid-->

<script type="text/javascript">
    window.jQuery || document.write("<script src='<?= base_url(); ?>assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");</script>


<script type="text/javascript">
    if ("ontouchend" in document)
        document.write("<script src='<?= base_url(); ?>assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");</script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

<script>
    var message_status = $("#status");
    $("td[contenteditable=true]").blur(function () {
        var field_id = $(this).attr("id");
        var value = $(this).text();
        $.post('<?php echo base_url() . "index.php/outbreak/updater/"; ?>', field_id + "=" + value, function (data) {
            if (data != '')
            {
                message_status.show();
                message_status.text(data);
                //hide the message
                setTimeout(function () {
                    message_status.hide()
                }, 1000);
            }
        });
    });

</script>
