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
                <h2 class='page-header'><a href="#introduction">SURVEILLANCE  :-<?php echo $loop->name; ?></a></h2>
                 <div class="col-md-12 col-sm-12 col-xs-12"> <span class=" status col-md-12 col-sm-12 col-xs-12" id="status"></span></div>
                <table class="table zebra-style ">
                    <tbody>
                        <tr>
                            <td></td>
                            <td><font class="red">(Editable)</font></td>

                        </tr>
                        <tr>
                            <td>NAME:</td>
                            <td id="name:<?php echo $loop->id; ?>" contenteditable="<?php echo $editable;?>" class="editable"><?php echo $loop->name; ?></td>

                        </tr>
                     
                        
                        <tr>
                            <td>LOCATION:</td>
                            <td id="location:<?php echo $loop->id; ?>" contenteditable="<?php echo $editable;?>" class="editable"><?php echo $loop->location; ?></td>


                        </tr>
                        <tr>
                            <td>TYPE OF SURVEILLANCE:</td>
                            <td id="type:<?php echo $loop->id; ?>" contenteditable="<?php echo $editable;?>" class="editable"><?php echo $loop->type; ?></td>


                        </tr>
                        <tr>
                            <td>REGION</td>
                            <td id="region:<?php echo $loop->id; ?>" contenteditable="<?php echo $editable;?>" class="editable"><?php echo $loop->region; ?></td>

                        </tr> 
                      
                        <tr>
                            <td>FINDING</td>
                            <td id="finding:<?php echo $loop->id; ?>" contenteditable="<?php echo $editable;?>" class="editable"><?php echo $loop->finding; ?></td>

                        </tr>
                        <tr>
                            <td>DATE OF SUBMISSION</td>
                            <td id="date:<?php echo $loop->id; ?>" contenteditable="<?php echo $editable;?>" class="editable"><?php echo $loop->date; ?></td>


                        </tr>
                        <tr>
                            <td>VERIFICATION</td>
                            <td id="verified:<?php echo $loop->id; ?>" contenteditable="<?php echo $editable;?>" class="editable"><?php echo $loop->verified; ?></td>


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
    var message_status = $("#status");
    $("td[contenteditable=true]").blur(function () {
        var field_id = $(this).attr("id");
        var value = $(this).text();
        $.post('<?php echo base_url() . "index.php/surveillance/updater/"; ?>', field_id + "=" + value, function (data) {
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
