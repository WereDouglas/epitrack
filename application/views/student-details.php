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
            <div class="span12">
                <!--PAGE CONTENT BEGINS-->

                <?php
                if (is_array($bio) && count($bio)) {
                    foreach ($bio as $loop) {
                        $id = $loop->id;
                        $fname = $loop->fname;
                        $lname = $loop->lname;
                        $other = $loop->other;
                        $email = $loop->email;
                        $gender = $loop->gender;
                        $dob = $loop->dob;
                        $country = $loop->country;
                        $image = $loop->image;
                        $password = $loop->password;
                        $cohort = $loop->cohort;
                        $contact = $loop->contact;
                        $status = $loop->status;
                    }
                }
                ?>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="span3">
                            <img  height="100px" width="120px" class="" alt="<?php echo $fname; ?>" src="<?= base_url(); ?>uploads/<?= $image ?>" />

                        </div>
                        <div class="span4">                         
                                    <div class="profile-user-info profile-user-info-striped ">

                                        <div class="profile-info-row">
                                            <div class="profile-info-name">
                                                Name  
                                            </div>
                                            <div class="profile-info-value">
                                                <?= $fname ?>  <?= $lname ?>   <?= $other ?>
                                            </div>
                                        </div>                                

                                        <div class="profile-info-row">
                                            <div class="profile-info-name">Primary email </div>

                                            <div class="profile-info-value">
                                                <?= $email ?>
                                            </div>
                                        </div>
                                        <div class="profile-info-row">
                                            <div class="profile-info-name">Gender </div>

                                            <div class="profile-info-value">
                                                <?= $gender ?>
                                            </div>
                                        </div>
                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Date of Birth</div>

                                            <div class="profile-info-value">
                                                <?php echo $dob; ?>
                                            </div>
                                        </div>
                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Country </div>

                                            <div class="profile-info-value">
                                                <i class="icon-map-marker light-orange bigger-110"></i>
                                                <?= $country ?>

                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name">Primary contact </div>

                                            <div class="profile-info-value">
                                                <?= $contact ?>
                                            </div>
                                        </div>
                                        <div class="profile-info-row">
                                            <div class="profile-info-name">Cohort </div>

                                            <div class="profile-info-value">
                                                <?= $cohort ?>

                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name">Activate /deactivate student </div>

                                            <div class="profile-info-value">

                                                <a href="<?php echo base_url() . "index.php/student/activate/" . $id . "/" . $status; ?>" class="tooltip-info qualification" data-rel="tooltip" title="activat/deativate">
                                                    <span class="blue">
                                                        <i class="icon-archive bigger-120">activate/deactivate</i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div><!--/span-->


                </div><!--/row-->


                <!--PAGE CONTENT ENDS-->
            </div><!--/.span-->
        </div><!--/.row-fluid-->


        <div class="row">
            <div class="col-md-6">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Student details</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="box-group" id="accordion">
                            <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            Qualifications and Employment records
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="box-body">
                                        <h4>Qualifications</h4>
                                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </th>

                                                    <th>Name</th>
                                                    <th>institute</th>
                                                    <th>Year of completion</th>   
                                                    <th>Graduation</th>   
                                                    <th>verified</th> 
                                                    <th>submitted</th> 

                                                    <th>Verify</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                if (is_array($qualifications) && count($qualifications)) {
                                                    foreach ($qualifications as $loop) {
                                                        $name = $loop->name;
                                                        $institute = $loop->institute;
                                                        $id = $loop->id;
                                                        ?>  

                                                        <tr id="<?php echo $id; ?>" class="edit_tr">
                                                            <td class="center ">
                                                                <label>
                                                                    <input type="checkbox" />
                                                                    <span class="lbl"></span>
                                                                </label>
                                                            </td>

                                                            <td class="">
                                                                <span id="name_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
                                                            </td>
                                                            <td class="">
                                                                <span id="institute_<?php echo $id; ?>" class="text"><?php echo $institute; ?></span>
                                                            </td>   
                                                            <td><?= $loop->completion ?></td>
                                                            <td><?= $loop->graduation ?></td>



                                                            <td><?= $loop->verified ?></td>
                                                            <td><?= $loop->created ?></td>

                                                            <td class="td-actions">

                                                                <a href="<?php echo base_url() . "index.php/student/verify_qualification/" . $loop->id . "/" . $loop->verified . "/" . "qualification"; ?>" class="tooltip-info qualification" data-rel="tooltip" title="verify">
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
                                        <h4>Employment records</h4>
                                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </th>

                                                    <th>Organisation</th>
                                                    <th>Position</th>
                                                    <th>Country</th>   
                                                    <th>Location</th>   
                                                    <th>Sector</th>   
                                                    <th>Contact</th>

                                                    <th>Created</th>

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

                                                        $id = $loop->id;
                                                        ?>  

                                                        <tr id="<?php echo $id; ?>" class="edit_tr">
                                                            <td class="center ">
                                                                <label>
                                                                    <input type="checkbox" />
                                                                    <span class="lbl"></span>
                                                                </label>
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


                                                        </tr>
                                                        <?php
                                                    }
                                                }
                                                ?>



                                            </tbody>
                                        </table>  
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-danger">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            Surveillance, outbreaks and presentations
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <h4>Surveillance</h4>
                                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </th>

                                                    <th>Name/Title</th>
                                                    <th>Type</th>
                                                    <th>Date</th>   
                                                    <th>Country/Region</th>   
                                                    <th>Finding</th> 
                                                    <th>Verified</th> 
                                                    <th>submitted</th> 

                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                if (is_array($survey) && count($survey)) {
                                                    foreach ($survey as $loop) {
                                                        $name = $loop->name;
                                                        $type = $loop->type;
                                                        $region = $loop->region;
                                                        $verified = $loop->verified;
                                                        $id = $loop->id;
                                                        ?>  

                                                        <tr id="<?php echo $id; ?>" class="edit_tr">
                                                            <td class="center ">
                                                                <label>
                                                                    <input type="checkbox" />
                                                                    <span class="lbl"></span>
                                                                </label>
                                                            </td>

                                                            <td class="">
                                                                <span id="name_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
                                                            </td>
                                                            <td class="">
                                                                <span id="type_<?php echo $id; ?>" class="text"><?php echo $type; ?></span>
                                                            </td>   

                                                            <td><?= $loop->date ?></td>
                                                            <td class="">
                                                                <span id="region_<?php echo $id; ?>" class="text"><?php echo $region; ?></span>
                                                            </td>   

                                                            <td class="">
                                                                <span id="finding_<?php echo $id; ?>" class="text"><?php echo $finding; ?></span>
                                                            </td>  
                                                            <td><?= $loop->verified ?></td>
                                                            <td><?= $loop->created ?></td>

                                                            <td class="td-actions">

                                                                <a href="<?php echo base_url() . "index.php/student/verify_qualification/" . $loop->id . "/" . $loop->verified . "/" . "surveillance"; ?>" class="tooltip-info qualification" data-rel="tooltip" title="verify">
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
                                        <h4>Outbreaks</h4>
                                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </th>

                                                    <th>Name</th>
                                                    <th>Onset</th>
                                                    <th>Dissemination</th> 
                                                    <th>Period</th>  
                                                    <th>Findings</th>
                                                    <th>Date of study</th> 
                                                    <th>Cases</th> 
                                                    <th>Deaths</th> 
                                                    <th>verified</th>
                                                    <th>Verified</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                if (is_array($out) && count($out)) {
                                                    foreach ($out as $loop) {
                                                        $name = $loop->name;
                                                        $findings = $loop->findings;
                                                        $id = $loop->id;
                                                        ?>  

                                                        <tr id="<?php echo $id; ?>" class="edit_tr">
                                                            <td class="center ">
                                                                <label>
                                                                    <input type="checkbox" />
                                                                    <span class="lbl"></span>
                                                                </label>
                                                            </td>

                                                            <td class="">
                                                                <span id="name_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
                                                            </td>
                                                            <td><?= $loop->onset ?></td>
                                                            <td><?= $loop->findings ?></td>
                                                            <td><?= $loop->dates ?></td>

                                                            <td class="">
                                                                <span id="findings_<?php echo $id; ?>" class="text"><?php echo $findings; ?></span>
                                                            </td>                                                          

                                                            <td><?= $loop->dos ?></td>
                                                            <td><?= $loop->max ?></td>
                                                            <td><?= $loop->min ?></td>
                                                            <td><?= $loop->verified ?></td>

                                                            <td class="td-actions">

                                                                <a href="<?php echo base_url() . "index.php/student/verify_qualification/" . $loop->id . "/" . $loop->verified . "/" . "outbreak"; ?>" class="tooltip-info qualification" data-rel="tooltip" title="verify">
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

                                        <h4>Presentations</h4>
                                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </th>
                                                    <th>Title</th>
                                                    <th>Event type</th>
                                                    <th>Event name</th>
                                                    <th>Presentation type</th>
                                                    <th>Summary</th>
                                                    <th>Date</th>
                                                    <th>Accepted</th>
                                                    <th>submitted on</th>
                                                    <th>Accepted</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                if (is_array($presentations) && count($presentations)) {
                                                    foreach ($presentations as $loop) {
                                                        $name = $loop->eventName;
                                                        $type = $loop->eventType;
                                                        $summary = $loop->summary;

                                                        $id = $loop->id;
                                                        ?>  

                                                        <tr id="<?php echo $id; ?>" class="edit_tr">
                                                            <td class="center ">
                                                                <label>
                                                                    <input type="checkbox" />
                                                                    <span class="lbl"></span>
                                                                </label>
                                                            </td>
                                                            <td class="">
                                                                <span id="name_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
                                                            </td>
                                                            <td class="center ">
                                                                <?php echo $type ?>
                                                            </td>
                                                            <td class="center ">
                                                                <?php echo $loop->eventName ?>
                                                            </td>
                                                            <td class="center ">
                                                                <?php echo $loop->presentationType ?>
                                                            </td>
                                                            <td class="center ">
                                                                <?php echo $loop->summary ?>
                                                            </td>
                                                            <td class="center ">
                                                                <?php echo $loop->date ?>
                                                            </td>
                                                            <td class="center ">
                                                                <?php echo $loop->accepted ?>
                                                            </td>
                                                            <td class="center ">
                                                                <?php echo $loop->dos ?>
                                                            </td>
                                                            <td class="td-actions">

                                                                <a href="<?php echo base_url() . "index.php/student/accept/" . $loop->id . "/" . $loop->accepted . "/" . "presentation"; ?>" class="tooltip-info qualification" data-rel="tooltip" title="verify">
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
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-success">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                            Publications,studies,Short courses
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <h4>Publications</h4>
                                        <table id="example1" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </th>
                                                    <th>Title</th>
                                                    <th>link</th>
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
                                                                <label>
                                                                    <input type="checkbox" />
                                                                    <span class="lbl"></span>
                                                                </label>
                                                            </td>
                                                            <td class="">
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

                                        <h4>Studies</h4>

                                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </th>

                                                    <th>Name</th>
                                                    <th>Onset</th>
                                                    <th>Dissemination</th>   
                                                    <th>Findings</th>   
                                                    <th>Date of study</th> 

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                if (is_array($study) && count($study)) {
                                                    foreach ($study as $loop) {
                                                        $name = $loop->name;
                                                        $findings = $loop->findings;
                                                        $id = $loop->id;
                                                        ?>  

                                                        <tr id="<?php echo $id; ?>" class="edit_tr">
                                                            <td class="center ">
                                                                <label>
                                                                    <input type="checkbox" />
                                                                    <span class="lbl"></span>
                                                                </label>
                                                            </td>

                                                            <td class="">
                                                                <span id="name_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
                                                            </td>
                                                            <td><?= $loop->onset ?></td>
                                                            <td><?= $loop->dissemination ?></td>

                                                            <td class="">
                                                                <span id="findings_<?php echo $id; ?>" class="text"><?php echo $findings; ?></span>
                                                            </td>                                                          

                                                            <td><?= $loop->dos ?></td>


                                                        </tr>
                                                        <?php
                                                    }
                                                }
                                                ?>



                                            </tbody>
                                        </table>  
                                        <h4>Short courses</h4>

                                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </th>

                                                    <th>Name</th>
                                                    <th>Onset</th>
                                                    <th>Dissemination</th>   
                                                    <th>Findings</th>   
                                                    <th>Date of study</th> 

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                if (is_array($outs) && count($outs)) {
                                                    foreach ($outs as $loop) {
                                                        $name = $loop->name;
                                                        $findings = $loop->findings;
                                                        $id = $loop->id;
                                                        ?>  

                                                        <tr id="<?php echo $id; ?>" class="edit_tr">
                                                            <td class="center ">
                                                                <label>
                                                                    <input type="checkbox" />
                                                                    <span class="lbl"></span>
                                                                </label>
                                                            </td>

                                                            <td class="">
                                                                <span id="name_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
                                                            </td>
                                                            <td><?= $loop->onset ?></td>
                                                            <td><?= $loop->dissemination ?></td>

                                                            <td class="">
                                                            </td>                                                          

                                                            <td><?= $loop->dos ?></td>


                                                        </tr>
                                                        <?php
                                                    }
                                                }
                                                ?>



                                            </tbody>
                                        </table>  


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->

        </div><!-- /.row -->

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
