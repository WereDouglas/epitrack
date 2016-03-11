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


                <div class="row-fluid">
                    <div class="span4">
                        <div class="profile-user-info profile-user-info-striped">

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
                                }
                            }
                            ?>

                            <div class="span3">

                                <div class="profile-user-info profile-user-info-striped span4">

                                    <img id="avatar" height="100px" width="120px" class="editable" alt="<?php echo $fname; ?>" src="<?= base_url(); ?>uploads/<?= $image ?>" />

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

                                                    <th></th>
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

                                                            <td class="edit_td">
                                                                <span id="name_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
                                                                <input type="text" value="<?php echo $name; ?>" class="editbox" id="name_input_<?php echo $id; ?>"
                                                            </td>
                                                            <td class="edit_td">
                                                                <span id="institute_<?php echo $id; ?>" class="text"><?php echo $institute; ?></span>
                                                                <input type="text" value="<?php echo $institute; ?>" class="editbox" id="institute_input_<?php echo $id; ?>"
                                                            </td>   
                                                            <td><?= $loop->completion ?></td>
                                                            <td><?= $loop->graduation ?></td>



                                                            <td><?= $loop->verified ?></td>
                                                            <td><?= $loop->created ?></td>

                                                            <td class="td-actions">

                                                                <a href="<?php echo base_url() . "index.php/student/qualification/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                    <span class="red">
                                                                        <i class="icon-trash bigger-120"></i>
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
                                                    <th></th>
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

                                                            <td class="edit_td">
                                                                <span id="organisation_<?php echo $id; ?>" class="text"><?php echo $organisation; ?></span>
                                                                <input type="text" value="<?php echo $organisation; ?>" class="editbox" id="organisation_input_<?php echo $id; ?>"
                                                            </td>
                                                            <td class="edit_td">
                                                                <span id="position_<?php echo $id; ?>" class="text"><?php echo $position; ?></span>
                                                                <input type="text" value="<?php echo $position; ?>" class="editbox" id="position_input_<?php echo $id; ?>"
                                                            </td>
                                                            <td class="edit_td">
                                                                <span id="country_<?php echo $id; ?>" class="text"><?php echo $country; ?></span>
                                                                <input type="text" value="<?php echo $country; ?>" class="editbox" id="country_input_<?php echo $id; ?>"
                                                            </td>
                                                            <td class="edit_td">
                                                                <span id="location_<?php echo $id; ?>" class="text"><?php echo $location; ?></span>
                                                                <input type="text" value="<?php echo $location; ?>" class="editbox" id="location_input_<?php echo $id; ?>"
                                                            </td>
                                                            <td class="edit_td">
                                                                <span id="sector_<?php echo $id; ?>" class="text"><?php echo $sector; ?></span>
                                                                <input type="text" value="<?php echo $sector; ?>" class="editbox" id="sector_input_<?php echo $id; ?>"
                                                            </td>
                                                            <td class="edit_td">
                                                                <span id="contact_<?php echo $id; ?>" class="text"><?php echo $contact; ?></span>
                                                                <input type="text" value="<?php echo $contact; ?>" class="editbox" id="contact_input_<?php echo $id; ?>"
                                                            </td>

                                                            <td><?= $loop->created ?></td>

                                                            <td class="td-actions">

                                                                <a href="<?php echo base_url() . "index.php/student/employment/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                    <span class="red">
                                                                        <i class="icon-trash bigger-120"></i>
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

                                                            <td class="edit_td">
                                                                <span id="name_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
                                                                <input type="text" value="<?php echo $name; ?>" class="editbox" id="name_input_<?php echo $id; ?>"
                                                            </td>
                                                            <td class="edit_td">
                                                                <span id="type_<?php echo $id; ?>" class="text"><?php echo $type; ?></span>
                                                                <input type="text" value="<?php echo $type; ?>" class="editbox" id="type_input_<?php echo $id; ?>"
                                                            </td>   

                                                            <td><?= $loop->date ?></td>
                                                            <td class="edit_td">
                                                                <span id="region_<?php echo $id; ?>" class="text"><?php echo $region; ?></span>
                                                                <input type="text" value="<?php echo $region; ?>" class="editbox" id="region_input_<?php echo $id; ?>"
                                                            </td>   

                                                            <td class="edit_td">
                                                                <span id="finding_<?php echo $id; ?>" class="text"><?php echo $finding; ?></span>
                                                                <input type="text" value="<?php echo $finding; ?>" class="editbox" id="finding_input_<?php echo $id; ?>"
                                                            </td>  
                                                            <td><?= $loop->verified ?></td>
                                                            <td><?= $loop->created ?></td>

                                                            <td class="td-actions">

                                                                <a href="<?php echo base_url() . "index.php/student/surveillance/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                    <span class="red">
                                                                        <i class="icon-trash bigger-120"></i>
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

                                                    <th></th>
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

                                                            <td class="edit_td">
                                                                <span id="name_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
                                                                <input type="text" value="<?php echo $name; ?>" class="editbox" id="name_input_<?php echo $id; ?>"
                                                            </td>
                                                            <td><?= $loop->onset ?></td>
                                                            <td><?= $loop->findings ?></td>
                                                            <td><?= $loop->dates ?></td>

                                                            <td class="edit_td">
                                                                <span id="findings_<?php echo $id; ?>" class="text"><?php echo $findings; ?></span>
                                                                <input type="text" value="<?php echo $findings; ?>" class="editbox" id="findings_input_<?php echo $id; ?>"
                                                            </td>                                                          

                                                            <td><?= $loop->dos ?></td>
                                                            <td><?= $loop->max ?></td>
                                                            <td><?= $loop->min ?></td>
                                                            <td><?= $loop->verified ?></td>

                                                            <td class="td-actions">

                                                                <a href="<?php echo base_url() . "index.php/student/study/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                    <span class="red">
                                                                        <i class="icon-trash bigger-120"></i>
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



                                                    <th></th>
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
                                                            <td class="edit_td">
                                                                <span id="name_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
                                                                <input type="text" value="<?php echo $name; ?>" class="editbox" id="name_input_<?php echo $id; ?>"
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

                                                                <a href="<?php echo base_url() . "index.php/management/country/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                    <span class="red">
                                                                        <i class="icon-trash bigger-120"></i>
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



                                                    <th></th>
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
                                                            <td class="edit_td">
                                                                <a href="<?php echo base_url() . "publications/" . $loop->file; ?>">
                                                                    <span id="name_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
                                                                    <input type="text" value="<?php echo $name; ?>" class="editbox" id="name_input_<?php echo $id; ?>"
                                                                </a>
                                                            </td>
                                                            <td class="center ">
                                                                <?php echo $link ?>
                                                            </td>
                                                            <td class="center ">
                                                                <?php echo $loop->abstract ?>
                                                            </td>

                                                            <td >

                                                                <?php
                                                                if ($loop->reviewed == "no") {
                                                                    ?>
                                                                    <div class="btn-group" data-toggle="buttons" data-toggle-default-class="btn-default">
                                                                        <label class="btn btn-xs btn-default" data-toggle-class="btn-success" value="<?= $loop->id; ?>">
                                                                            <input type="radio" name="status" id="<?= $loop->reviewed; ?>" value="<?= $loop->id; ?>" />
                                                                            yes
                                                                        </label>
                                                                        <label class="btn btn-xs btn-danger active" data-toggle-class="btn-danger" value="<?= $loop->id; ?>">
                                                                            <input type="radio" name="status" id="<?= $loop->reviewed; ?>" value="<?= $loop->id; ?>" checked />
                                                                            no
                                                                        </label>
                                                                    </div> 
                                                                <?php } ?>

                                                                <?php
                                                                if ($loop->reviewed == "yes") {
                                                                    ?>
                                                                    <div class="btn-group" data-toggle="buttons" data-toggle-default-class="btn-default">
                                                                        <label class="btn btn-xs btn-success active" data-toggle-class="btn-success">
                                                                            <input type="radio" name="status" id="<?= $loop->reviewed; ?>" value="<?= $loop->id; ?>" checked />
                                                                            yes
                                                                        </label>
                                                                        <label class="btn btn-xs btn-default " data-toggle-class="btn-danger">
                                                                            <input type="radio" name="status" id="<?= $loop->reviewed; ?>" value="<?= $loop->id; ?>"  />
                                                                            no
                                                                        </label>
                                                                    </div> 
                                                                <?php } ?>

                                                            </td>

                                                            <td class="center ">
                                                                <?php echo $loop->accepted ?>
                                                            </td>
                                                            <td class="center ">
                                                                <?php echo $loop->dos ?>
                                                            </td>
                                                            <td class="td-actions">

                                                                <a href="<?php echo base_url() . "index.php/management/country/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                    <span class="red">
                                                                        <i class="icon-trash bigger-120"></i>
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

                                                    <th></th>
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

                                                            <td class="edit_td">
                                                                <span id="name_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
                                                                <input type="text" value="<?php echo $name; ?>" class="editbox" id="name_input_<?php echo $id; ?>"
                                                            </td>
                                                            <td><?= $loop->onset ?></td>
                                                            <td><?= $loop->dissemination ?></td>

                                                            <td class="edit_td">
                                                                <span id="findings_<?php echo $id; ?>" class="text"><?php echo $findings; ?></span>
                                                                <input type="text" value="<?php echo $findings; ?>" class="editbox" id="findings_input_<?php echo $id; ?>"
                                                            </td>                                                          

                                                            <td><?= $loop->dos ?></td>

                                                            <td class="td-actions">

                                                                <a href="<?php echo base_url() . "index.php/student/study/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                    <span class="red">
                                                                        <i class="icon-trash bigger-120"></i>
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

                                                    <th></th>
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

                                                            <td class="edit_td">
                                                                <span id="name_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
                                                                <input type="text" value="<?php echo $name; ?>" class="editbox" id="name_input_<?php echo $id; ?>"
                                                            </td>
                                                            <td><?= $loop->onset ?></td>
                                                            <td><?= $loop->dissemination ?></td>

                                                            <td class="edit_td">
                                                                <span id="findings_<?php echo $id; ?>" class="text"><?php echo $findings; ?></span>
                                                                <input type="text" value="<?php echo $findings; ?>" class="editbox" id="findings_input_<?php echo $id; ?>"
                                                            </td>                                                          

                                                            <td><?= $loop->dos ?></td>

                                                            <td class="td-actions">

                                                                <a href="<?php echo base_url() . "index.php/student/study/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                    <span class="red">
                                                                        <i class="icon-trash bigger-120"></i>
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
    if ("ontouchend" in document) document.write("<script src='<?= base_url(); ?>assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");</script>
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

<script type="text/javascript">
    $(function() {

    //editables on first profile page
    $.fn.editable.defaults.mode = 'inline';
    $.fn.editableform.loading = "<div class='editableform-loading'><i class='light-blue icon-2x icon-spinner icon-spin'></i></div>";
    $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="icon-ok icon-white"></i></button>' +
            '<button type="button" class="btn editable-cancel"><i class="icon-remove"></i></button>';
    //editables 
    $('#username').editable({
    type: 'text',
            name: 'username'
    });
    $('#fname').editable({
    type: 'text',
            name: 'fname'
    });
    $('#lname').editable({
    type: 'text',
            name: 'lname'
    });
    $('#other').editable({
    type: 'text',
            name: 'other'
    });
    $('#email').editable({
    type: 'text',
            name: 'email'
    });
    $('#password').editable({
    type: 'text',
            name: 'password'
    });
    $('#contact').editable({
    type: 'text',
            name: 'contact'
    });
    var countries = [];
    $.each({ "CA": "Canada", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function(k, v) {
    countries.push({id: k, text: v});
    });
    var cities = [];
    cities["CA"] = [];
    $.each(["Toronto", "Ottawa", "Calgary", "Vancouver"], function(k, v){
    cities["CA"].push({id: v, text: v});
    });
    cities["IN"] = [];
    $.each(["Delhi", "Mumbai", "Bangalore"], function(k, v){
    cities["IN"].push({id: v, text: v});
    });
    cities["NL"] = [];
    $.each([ <?php
    if (is_array($countries) && count($countries)) {
        foreach ($countries as $loop) {
            ?>"<?php echo $loop->name; ?>", <?php
        }
    }
                                                ?>], function(k, v){
    cities["NL"].push({id: v, text: v});
    });
    cities["TR"] = [];
    $.each(["Male", "Female"], function(k, v){
    cities["TR"].push({id: v, text: v});
    });
    cities["US"] = [];
    $.each([<?php foreach ($cohorts as $loop) { ?>"<?php echo $loop->name; ?>",<?php } ?>], function(k, v){
    cities["US"].push({id: v, text: v});
    });
    var currentValue = "NL";
    var currentSex = "TR";
    var currentCohort = "US";
    $('#country').editable({
    type: 'select2',
            value : '<?php echo $country; ?>',
            source: cities[currentValue]
    });
    $('#cohort').editable({
    type: 'select2',
            value : '<?php echo $cohort; ?>',
            source: cities[currentCohort]
    });
    $('#gender').editable({
    type: 'select2',
            value : '<?php echo $gender; ?>',
            source: cities[currentSex]
    });
    $('#dob').editable({
    type: 'date',
            format: 'yyyy-mm-dd',
            viewformat: 'yyyy-mm-dd',
            datepicker: {
            weekStart: 1
            }
    });
    $('#age').editable({
    type: 'spinner',
            name : 'age',
            spinner : {
            min : 16, max:99, step:1
            }
    });
    //var $range = document.createElement("INPUT");
    //$range.type = 'range';
    $('#login').editable({
    type: 'slider', //$range.type == 'range' ? 'range' : 'slider',
            name : 'login',
            slider : {
            min : 1, max:50, width:100
            },
            success: function(response, newValue) {
            if (parseInt(newValue) == 1)
                    $(this).html(newValue + " hour ago");
            else $(this).html(newValue + " hours ago");
            }
    });
    $('#about').editable({
    mode: 'inline',
            type: 'wysiwyg',
            name : 'about',
            wysiwyg : {
            //css : {'max-width':'300px'}
            },
            success: function(response, newValue) {
            }
    });
    // *** editable avatar *** //
    try {//ie8 throws some harmless exception, so let's catch it

    //it seems that editable plugin calls appendChild, and as Image doesn't have it, it causes errors on IE at unpredicted points
    //so let's have a fake appendChild for it!
    if (/msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) Image.prototype.appendChild = function(el){}

    var last_gritter
            $('#avatar').editable({
    type: 'image',
            name: 'avatar',
            value: null,
            image: {
            //specify ace file input plugin's options here
            btn_choose: 'Change Avatar',
                    droppable: true,
                    /**
                     //this will override the default before_change that only accepts image files
                     before_change: function(files, dropped) {
                     return true;
                     },
                     */

                    //and a few extra ones here
                    name: 'avatar', //put the field name here as well, will be used inside the custom plugin
                    max_size: 110000, //~100Kb
                    on_error : function(code) {//on_error function will be called when the selected file has a problem
                    if (last_gritter) $.gritter.remove(last_gritter);
                    if (code == 1) {//file format error
                    last_gritter = $.gritter.add({
                    title: 'File is not an image!',
                            text: 'Please choose a jpg|gif|png image!',
                            class_name: 'gritter-error gritter-center'
                    });
                    } else if (code == 2) {//file size rror
                    last_gritter = $.gritter.add({
                    title: 'File too big!',
                            text: 'Image size should not exceed 100Kb!',
                            class_name: 'gritter-error gritter-center'
                    });
                    }
                    else {//other error
                    }
                    },
                    on_success : function() {
                    $.gritter.removeAll();
                    }
            },
            url: function(params) {
            // ***UPDATE AVATAR HERE*** //
            //You can replace the contents of this function with examples/profile-avatar-update.js for actual upload


            var deferred = new $.Deferred

                    //if value is empty, means no valid files were selected
                    //but it may still be submitted by the plugin, because "" (empty string) is different from previous non-empty value whatever it was
                    //so we return just here to prevent problems
                    var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
            if (!value || value.length == 0) {
            deferred.resolve();
            return deferred.promise();
            }


            //dummy upload
            setTimeout(function(){
            if ("FileReader" in window) {
            //for browsers that have a thumbnail of selected image
            var thumb = $('#avatar').next().find('img').data('thumb');
            if (thumb) $('#avatar').get(0).src = thumb;
            }

            deferred.resolve({'status':'OK'});
            if (last_gritter) $.gritter.remove(last_gritter);
            last_gritter = $.gritter.add({
            title: 'Avatar Updated!',
                    text: 'Uploading to server can be easily implemented. A working example is included with the template.',
                    class_name: 'gritter-info gritter-center'
            });
            }, parseInt(Math.random() * 800 + 800))

                    return deferred.promise();
            },
            success: function(response, newValue) {
            }
    })
    } catch (e) {}



    //another option is using modals
    $('#avatar2').on('click', function(){
    var modal =
            '<div class="modal hide fade">\
                                <div class="modal-header">\
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>\
                                        <h4 class="blue">Change Avatar</h4>\
                                </div>\
                                \
                                <form class="no-margin">\
                                <div class="modal-body">\
                                        <div class="space-4"></div>\
                                        <div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
                                </div>\
                                \
                                <div class="modal-footer center">\
                                        <button type="submit" class="btn btn-small btn-success"><i class="icon-ok"></i> Submit</button>\
                                        <button type="button" class="btn btn-small" data-dismiss="modal"><i class="icon-remove"></i> Cancel</button>\
                                </div>\
                                </form>\
                        </div>';
    var modal = $(modal);
    modal.modal("show").on("hidden", function(){
    modal.remove();
    });
    var working = false;
    var form = modal.find('form:eq(0)');
    var file = form.find('input[type=file]').eq(0);
    file.ace_file_input({
    style:'well',
            btn_choose:'Click to choose new avatar',
            btn_change:null,
            no_icon:'icon-picture',
            thumbnail:'small',
            before_remove: function() {
            //don't remove/reset files while being uploaded
            return !working;
            },
            before_change: function(files, dropped) {
            var file = files[0];
            if (typeof file === "string") {
            //file is just a file name here (in browsers that don't support FileReader API)
            if (! (/\.(jpe?g|png|gif)$/i).test(file)) return false;
            }
            else {//file is a File object
            var type = $.trim(file.type);
            if ((type.length > 0 && ! (/^image\/(jpe?g|png|gif)$/i).test(type))
                    || (type.length == 0 && ! (/\.(jpe?g|png|gif)$/i).test(file.name))//for android default browser!
                    ) return false;
            if (file.size > 110000) {//~100Kb
            return false;
            }
            }

            return true;
            }
    });
    form.on('submit', function(){
    if (!file.data('ace_input_files')) return false;
    file.ace_file_input('disable');
    form.find('button').attr('disabled', 'disabled');
    form.find('.modal-body').append("<div class='center'><i class='icon-spinner icon-spin bigger-150 orange'></i></div>");
    var deferred = new $.Deferred;
    working = true;
    deferred.done(function() {
    form.find('button').removeAttr('disabled');
    form.find('input[type=file]').ace_file_input('enable');
    form.find('.modal-body > :last-child').remove();
    modal.modal("hide");
    var thumb = file.next().find('img').data('thumb');
    if (thumb) $('#avatar2').get(0).src = thumb;
    working = false;
    });
    setTimeout(function(){
    deferred.resolve();
    }, parseInt(Math.random() * 800 + 800));
    return false;
    });
    });
    //////////////////////////////
    $('#profile-feed-1').slimScroll({
    height: '250px',
            alwaysVisible : true
    });
    $('.profile-social-links > a').tooltip();
    $('.easy-pie-chart.percentage').each(function(){
    var barColor = $(this).data('color') || '#555';
    var trackColor = '#E2E2E2';
    var size = parseInt($(this).data('size')) || 72;
    $(this).easyPieChart({
    barColor: barColor,
            trackColor: trackColor,
            scaleColor: false,
            lineCap: 'butt',
            lineWidth: parseInt(size / 10),
            animate:false,
            size: size
    }).css('color', barColor);
    });
    ///////////////////////////////////////////

    //show the user info on right or left depending on its position
    $('#user-profile-2 .memberdiv').on('mouseenter', function(){
    var $this = $(this);
    var $parent = $this.closest('.tab-pane');
    var off1 = $parent.offset();
    var w1 = $parent.width();
    var off2 = $this.offset();
    var w2 = $this.width();
    var place = 'left';
    if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) place = 'right';
    $this.find('.popover').removeClass('right left').addClass(place);
    }).on('click', function() {
    return false;
    });
    ///////////////////////////////////////////
    $('#user-profile-3')
            .find('input[type=file]').ace_file_input({
    style:'well',
            btn_choose:'Change avatar',
            btn_change:null,
            no_icon:'icon-picture',
            thumbnail:'large',
            droppable:true,
            before_change: function(files, dropped) {
            var file = files[0];
            if (typeof file === "string") {//files is just a file name here (in browsers that don't support FileReader API)
            if (! (/\.(jpe?g|png|gif)$/i).test(file)) return false;
            }
            else {//file is a File object
            var type = $.trim(file.type);
            if ((type.length > 0 && ! (/^image\/(jpe?g|png|gif)$/i).test(type))
                    || (type.length == 0 && ! (/\.(jpe?g|png|gif)$/i).test(file.name))//for android default browser!
                    ) return false;
            if (file.size > 110000) {//~100Kb
            return false;
            }
            }

            return true;
            }
    })
            .end().find('button[type=reset]').on(ace.click_event, function(){
    $('#user-profile-3 input[type=file]').ace_file_input('reset_input');
    })
            .end().find('.date-picker').datepicker().next().on(ace.click_event, function(){
    $(this).prev().focus();
    })
            $('.input-mask-phone').mask('(999) 999-9999');
    ////////////////////
    //change profile
    $('[data-toggle="buttons-radio"]').on('click', function(e){
    var target = $(e.target);
    var which = parseInt($.trim(target.text()));
    $('.user-profile').parent().hide();
    $('#user-profile-' + which).parent().show();
    });
    });</script>
<script type="text/javascript">
    $(document).ready(function ()
    {
    $(".editbox").hide();
    $(".edit_tr").click(function ()
    {
    var ID = $(this).attr('id');
    $("#name" + ID).hide();
    $("#name_input_" + ID).show();
    $("#institute" + ID).hide();
    $("#institute_input_" + ID).show();
    }).change(function ()
    {
    var ID = $(this).attr('id');
    var name = $("#name_input_" + ID).val();
    var institute = $("#institute_input_" + ID).val();
    var dataString = 'id=' + ID + '&name=' + name + '&institute=' + institute;
    $("#name_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
    $("#institute_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image

    if (name.length > 0 && institute.length > 0)
    {

    $.ajax({
    type: "POST",
            url: "<?php echo base_url() . "index.php/student/qualification/update/"; ?>",
            data: dataString,
            cache: false,
            success: function (html)
            {
            $("#name_" + ID).html(name);
            $("#institute_" + ID).html(institute);
            }
    });
    }
    else
    {
    alert('Enter something.');
    }

    });
    // Edit input box click action
    $(".editbox").mouseup(function ()
    {
    return false
    });
    // Outside click action
    $(document).mouseup(function ()
    {
    $(".editbox").hide();
    $(".text").show();
    });
    });
</script>

