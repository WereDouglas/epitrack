<?php require_once(APPPATH . 'views/css-page.php'); ?>


<div class="col-xs-12">
    <?php
    if (is_array($outbreaks) && count($outbreaks)) {
        foreach ($outbreaks as $loop) {
            ?>
            <section id='introduction'>
                <h2 class='page-header'><a href="#introduction">FINDINGS  :-<?php echo $loop->name; ?></a></h2>
               
              
                <div class="col-md-12 col-sm-12 col-xs-12"> <span class=" status col-md-12 col-sm-12 col-xs-12" id="status"></span></div>
                <table class="table zebra-style ">
                    <tbody>
                        <tr>
                            <td></td>
                            <td><font class="red">(Editable)</font></td>

                        </tr>
                        <tr>
                            <td>NAME:</td>
                            <td id="name:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->name; ?></td>

                        </tr>
                     
                        
                        <tr>
                            <td>LOCATION:</td>
                            <td id="location:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->location; ?></td>


                        </tr>
                        <tr>
                            <td>NOTES:</td>
                            <td id="notes:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->notes; ?></td>


                        </tr>
                      
                        <tr>
                            <td>DATE OF SUBMISSION</td>
                            <td id="dos:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->dos; ?></td>


                        </tr>
                     
                    </tbody>
                </table>

            </section><!-- /#introduction -->

          
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
        $.post('<?php echo base_url() . "index.php/field/updater/"; ?>', field_id + "=" + value, function (data) {
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

