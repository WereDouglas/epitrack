<?php require_once(APPPATH . 'views/css-page.php'); ?>

<div class="row">


    <div class="col-md-12">
        <!-- The time line -->
        <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
                <span class="bg-red">
                    <?php echo date('Y-m-d'); ?>
                </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>

                <i class="fa fa-newspaper-o bg-blue"></i>

                <?php
                if (is_array($publication_cnt_review)) {
                    foreach ($publication_cnt_review as $loop) {
                        ?>    
                         <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i>  <?= $loop->author; ?></span>
                            <h3 class="timeline-header"><a href="#"><?= $loop->title.' ' ?></a>  <?= $loop->author; ?></h3>
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
                            <span class="time"><i class="fa fa-clock-o"></i>  <?= $loop->author; ?></span>
                            <h3 class="timeline-header"><a href="#"><?= $loop->title.' ' ?></a>  <?= $loop->author; ?></h3>
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

                    <?php
                    if (is_array($student_cnt_false)) {
                        foreach ($student_cnt_false as $loop) {
                            ?>    
                            <h3 class="timeline-header no-border"><a href="#"><?= $loop->fname . ' ' . $loop->fname . ' ' ?></a><?= $loop->email . ' ' . $loop->contact ?> </h3>

                            <?php
                        }
                    }
                    ?>

                </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-video-camera bg-yellow"></i>
                
                         <?php
                if (is_array($present_cnt_accepted)) {
                    foreach ($present_cnt_accepted as $loop) {
                        ?>    
                         <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i>  <?= $loop->submissionDate; ?></span>
                            <h3 class="timeline-header"><a href="#"><?= $loop->title.' ' ?></a>  <?= $loop->presenter.' '.$loop->country ; ?></h3>
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
            <!-- END timeline item -->
            <!-- timeline time label -->
            <li class="time-label">
                <span class="bg-green">
                   <?php echo date('Y-m-d'); ?>
                </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
           
             <div class="col-md-6">
                  <!-- USERS LIST -->
                  <div class="box box-danger">
                    <div class="box-header with-border">
                      <h3 class="box-title">Latest Students</h3>
                      <div class="box-tools pull-right">
                        <span class="label label-danger"><?php echo count($student_cnt_false);?> New students</span>
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div><!-- /.box-header -->
                    <div class="box-body no-padding">
                      <ul class="users-list clearfix">
                           <?php
                    if (is_array($student_cnt_false)) {
                        foreach ($student_cnt_false as $loop) {
                            ?>    
                          <li>
                         <a href="<?php echo base_url() . "index.php/student/details/".$loop->id; ?>" target="frame">  <img src="<?= base_url(); ?>uploads/<?php echo $loop->image; ?>" alt="User Image" />
                           <?php echo  $loop->fname.' '.$loop->lname ?></a>
                          <span class="users-list-date"><?php echo $loop->submitted?></span>
                        </li>
                            <?php
                        }
                    }
                    ?>                          
                      </ul><!-- /.users-list -->
                    </div><!-- /.box-body -->
                    <div class="box-footer text-center">
                      <a href="<?php echo base_url() . "index.php/management/country_student"; ?>" class="uppercase">View All Students</a>
                    </div><!-- /.box-footer -->
                  </div><!--/.box -->
                </div><!-- /.col -->
             
            <!-- END timeline item -->
            <!-- timeline item -->
           
            <!-- END timeline item -->
            <li>
                <i class="fa fa-clock-o bg-gray"></i>
            </li>
        </ul>
    </div><!-- /.col -->
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