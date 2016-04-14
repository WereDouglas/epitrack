<?php require_once(APPPATH . 'views/css-page.php'); ?>
<div class="col-xs-12">   
    <!-- The time line -->
    <ul class="timeline">
        <!-- timeline time label -->
      
        <!-- /.timeline-label -->
        <!-- timeline item -->
        <li>
            <i class="fa fa-newspaper-o bg-blue"></i>

            <?php
            if (is_array($publication_cnt_review)) {
                foreach ($publication_cnt_review as $loop) {
                    ?>    
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> <strong><?= $loop->dos; ?></strong>  <?= $loop->author; ?></span>
                        <h3 class="timeline-header"><a href="#"><?= $loop->title . ' ' ?></a>  <?= $loop->author; ?></h3>
                        <div class="timeline-body">
                            <?= $loop->abstract; ?>

                        </div>
                        <div class="timeline-footer">
                            <a href="<?php echo base_url() . "publications/" . $loop->file; ?>">view</a>

                        </div>
                    </div>
                    <?php
                }
            }
            ?>
            <?php
            if (is_array($publication_cnt_accepted)) {
                foreach ($publication_cnt_accepted as $loop) {
                    ?>    

                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> <b> <?= $loop->dos; ?></b> <?= $loop->author; ?></span>
                        <h3 class="timeline-header"><a href="#"><?= $loop->title . ' ' ?></a>  <?= $loop->author; ?></h3>
                        <div class="timeline-body">
                            <?= $loop->abstract; ?>
                        </div>
                        <div class="timeline-footer">
                            <a href="<?php echo base_url() . "publications/" . $loop->file; ?>">view</a>

                        </div>
                    </div>
                    <?php
                }
            }
            ?> 
        </li>
        <!-- END timeline item -->
        <!-- timeline item -->
        <li>
            <i class="fa fa-user bg-aqua"></i>
            <div class="timeline-item">
                <a href="<?php echo base_url() . "index.php/management/country_student"; ?>" target="frame">
                    <i class="fa fa-users text-aqua"></i> <?php echo count($student_cnt_false); ?> Pending activation
                </a>  
                <div class="box-body ">
                    <ul class="users-list clearfix">
                        <?php
                        if (is_array($student_cnt_false)) {
                            foreach ($student_cnt_false as $loop) {
                                ?>    
                                <li>
                                    <a href="<?php echo base_url() . "index.php/student/details/" . $loop->id; ?>" target="frame">  <img src="<?= base_url(); ?>uploads/<?php echo $loop->image; ?>" alt="User Image" />
                                        <?php echo $loop->fname . ' ' . $loop->lname ?></a>
                                    <span class="users-list-date"><?php echo $loop->submitted ?></span>
                                </li>
                                <?php
                            }
                        }
                        ?>                          
                    </ul><!-- /.users-list -->
                </div><!-- /.box-body -->
                <div class="box-footer text-center">
                    <?php
                    if ($this->session->userdata('level') == '1' || $this->session->userdata('level') == '2') {
                        ?>
                        <a href="<?php echo base_url() . "index.php/management/country_student"; ?>" class="uppercase">View All Students</a>

                    <?php } ?>
                </div><!-- /.box-footer -->
            </div>
        </li>
        <!-- END timeline item -->
        <!-- timeline item -->
        <li>               

            <?php
            if (is_array($present_cnt_accepted)) {
                foreach ($present_cnt_accepted as $loop) {
                    ?>    
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i>  <?= $loop->submissionDate; ?></span>
                        <h3 class="timeline-header"><a href="#"><?= $loop->title . ' ' ?></a>  <?= $loop->presenter . ' ' . $loop->country; ?></h3>
                        <div class="timeline-body">
                            <?= $loop->summary; ?>
                        </div>
                        <div class="timeline-footer">
                            <a href="<?php echo base_url() . "publications/" . $loop->file; ?>">view</a>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>

        </li>
        <li>
            <i class="fa fa-clock-o bg-gray"></i>
            <div class="timeline-item">
                <a href="<?php echo base_url() . "index.php/student/"; ?>" target="frame">
                    <i class="fa fa-users text-aqua"></i> <?php echo count($events); ?> Events
                </a>  
                <div class="box-body ">
                    <ul class="calendar-date clearfix">
                        <?php
                        if (is_array($events)) {
                            foreach ($events as $loop) {
                                ?>    
                                <li>
                                    <h3>  <?php echo $loop->title; ?></h3>
                                    <p><?php echo $loop->description . ' ' . $loop->country; ?></p>
                                    <span class="users-list-date"><?php echo $loop->startdate ?></span>
                                </li>
                                <?php
                            }
                        }
                        ?>                          
                    </ul><!-- /.users-list -->
                </div><!-- /.box-body -->
                <div class="box-footer text-center">
                    <?php
                    if ($this->session->userdata('level') == '1' || $this->session->userdata('level') == '2') {
                        ?>
                        <a href="<?php echo base_url() . "index.php/management/country_student"; ?>" class="uppercase">View All Students</a>

                    <?php } ?>
                </div><!-- /.box-footer -->
            </div>
        </li>

        <!-- END timeline item -->
        <!-- timeline item -->

        <!-- END timeline item -->
        <li>
            <i class="fa fa-clock-o bg-gray"></i>
        </li>
    </ul>

</div><!-- /.row -->

<script src="<?= base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="<?= base_url(); ?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src="<?= base_url(); ?>plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>dist/js/app.min.js" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>dist/js/demo.js" type="text/javascript"></script>