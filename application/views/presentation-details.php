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
                <div class="col-md-12 col-sm-12 col-xs-12"> <span class=" status col-md-12 col-sm-12 col-xs-12" id="status"></span></div>

                <table class="table zebra-style ">
                    <tbody>
                        <tr>
                            <td></td>
                            <td><font class="red">(Editable)</font></td>

                        </tr>
                        <tr>
                            <td>NAME:</td>
                            <td id="eventName:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->eventName; ?></td>

                        </tr>
                        <tr>
                            <td>TITLE:</td>
                            <td id="title:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->title; ?></td>

                        </tr>
                        <tr>
                            <td>EVENT TYPE:</td>
                            <td id="eventType:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->eventType; ?></td>

                        </tr>
                        <tr>
                            <td>PRESENTATION TYPE:</td>
                            <td id="presentationType:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->presentationType; ?></td>

                        </tr>
                        <tr>
                            <td>COUNTRY:</td>
                            <td id="country:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->country; ?></td>

                        </tr>
                        <tr>
                            <td>LOCATION:</td>
                            <td id="location:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->location; ?></td>

                        </tr>
                        <tr>
                            <td>SUBMISSION DATE</td>
                            <td id="dos:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->dos; ?></td>

                        </tr>
                        <tr>
                            <td>ACCEPTED?:</td>
                            <td id="accepted:<?php echo $loop->id; ?>" contenteditable="false" class="editable"><?php echo $loop->accepted; ?></td>

                        </tr>
                        <tr>
                            <td>SUMMARY:</td>
                            <td id="summary:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->summary; ?></td>


                        </tr>
                        <tr>
                            <td>AUTHOR</td>
                            <td id="author:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->author; ?></td>

                        </tr>
                        <tr>
                            <td>DATE</td>
                            <td id="date:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->date; ?></td>


                        </tr>
                        <tr>
                            <td>PRESENTED BY</td>
                            <td id="presenter:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->presenter; ?></td>


                        </tr>
                        <tr>
                            <td>DATE OF SUBMISSION</td>
                            <td id="submissionDate:<?php echo $loop->id; ?>" contenteditable="true" class="editable"><?php echo $loop->submissionDate; ?></td>


                        </tr>

                    </tbody>
                </table>

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
        $.post('<?php echo base_url() . "index.php/presentation/updater/"; ?>', field_id + "=" + value, function (data) {
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
