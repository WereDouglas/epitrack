 <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?= base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/mine.css" />

    <div class="main-content">
    <style>
.form-horizontal .controls {
    margin-left: 2px;
}
</style>

    <div class="page-content">
                
         <div class="alert alert-success">Add new student</div>  
                          <?php echo $this->session->flashdata('msg'); ?>
        
            <div class="row-fluid">
                         <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/management/student/'  method="post">            
            
       <div class="alert alert-block alert-info span6">   
           
             
												<div class="widget-main">
													<input type="file" id="id-input-file-2" />
													<input multiple="" type="file" id="id-input-file-3" />
													<label>
														<input type="checkbox" name="file-format" id="id-file-format" />
														<span class="lbl"> Allow only images</span>
													</label>
												</div>
											
           <div class="control-group">
                                                            <label class="control-label" for="form-field-username">First name</label>

                                                            <div class="controls">
                                                                <input type="text" id="form-field-username" placeholder="First name" value="<?php echo 'name'; ?>" />
                                                            </div>
                                                        </div>

                                                        <div class="control-group">
                                                            <label class="control-label" for="form-field-first">Last name</label>

                                                            <div class="controls">
                                                                <input class="input-small" type="text" id="form-field-first" placeholder="First Name"  />
                                                                <input class="input-small" type="text" id="form-field-last" placeholder="Othername"  />
                                                            </div>
                                                        </div>
                                                         <div class="control-group">
                                                            
									<label class="control-label" for="form-field-tags">Please enter your emails one by one</label>

									<div class="controls">
                                                                             <label class="text-error">enter primary e-mail first</label>
										<input type="text" name="tags" id="form-field-tags"  placeholder="info@gmail.com" />
									</div>
								</div>
                                                        <div class="control-group">
                                                             
									<label class="control-label" for="form-field-tags">Please enter your contacts one by one</label>

									<div class="controls">
                                                                             <label class="text-error">enter primary contact first</label>
										<input type="text" name="tags" id="form-field-tags"  placeholder="+2567893213394" />
									</div>
								</div></div>
       <div class="alert alert-block alert-info span6">
            
                                                        <div class="control-group">
                                                            <label class="control-label" for="form-field-sex">Sex</label>
                                                            <div class="controls">
                                                                <select  data-placeholder="Choose a sex...">
                                                                    <option value="" />
                                                                    <option value="male" />male
                                                                    <option value="female" />female

                                                                </select>

                                                            </div>
                                                        </div>


                                                            <div class="control-group">
                                                                <label class="control-label" for="id-date-picker-1">Date of Birth</label>

                                                                <div class="controls">
                                                                    <input class="date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />

                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="form-field-sex">Location</label>
                                                                <div class="controls" id="locationField">
                                                                    <input  id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text"></input>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="id-date-picker-1">Country</label>

                                                                <div class="controls">
                                                                    <div class="controls" id="address">
    <input id="country" type="text" />
                                                                    <input class="field" id="street_number" type="hidden" disabled="true"></input>
                                                                    <input class="field" id="route"type="hidden"  disabled="true"></input>
                                                                    <input class="field" id="locality" type="hidden"     disabled="true"></input>
                                                                    <input class="field" type="hidden" id="administrative_area_level_1" disabled="true"></input>
                                                                    <input class="field" type="hidden" id="postal_code"></input>
                                                                    
                                                                            
                                                                 
                                                                </div>
                                                                </div>
                                                            </div>

                                                               
                                                          
                                                            <div class="control-group">
                                                                <label class="control-label" for="form-field-pass1">New Password</label>

                                                                <div class="controls">
                                                                    <input type="password" id="form-field-pass1" />
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label class="control-label" for="form-field-pass2">Confirm Password</label>

                                                                <div class="controls">
                                                                    <input type="password" id="form-field-pass2" />
                                                                </div>
                                                            </div>
                                                        
								<div class="">
									<button class="btn btn-info" type="button">
										<i class="icon-ok bigger-110"></i>
										Submit
									</button>

									&nbsp; &nbsp; &nbsp;
									<button class="btn" type="reset">
										<i class="icon-undo bigger-110"></i>
										Reset
									</button>
								</div>
       </div>
                                       

                                            

 
      <div class="well well-large span12">
          
                                                    <label>
                                                        <span class="block input-icon input-icon-right">
                                                             <input type="text" class="span2" id="name" name="name" placeholder="cohort III 2015" /> 
                                                             
                                                                 Select track :
                                  <select id="track" name="track" >                                                            
                                                            <?php
                                        if (is_array($tracks) && count($tracks)) {
                                            foreach ($tracks as $loop) {
                                                ?>                        
                                    <option value="<?=$loop->track?>" /><?=$loop->track?>
                                        <?php }}?>
                                                </select>
       
         Select the Year:<input class="span3 date-picker" id="year" name="year" value="<?php echo date('Y');?>" type="text" />
                        <span class="add-on">
                            <i class="icon-calendar"></i>
                        </span>
                                                             
                                                        </span>
                                                    </label>
    
                    
                        <div>                   
           <button type="reset" class="width-10 pull-left btn btn-small">
                                                            <i class="icon-refresh"></i>
                                                            Clear
                                                        </button>

                                                        <button  class="width-15 pull-right btn btn-small btn-success">
                                                           Submit

                                                        </button>
                        </div>
                                                    </div>
                                                       </form>

                 
</div>
                                                     
                                                     
                                                     
                                                     
        <div class="alert alert-info">Select a field to edit the content</div>                     
                                      
                         <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </th>
                                                 
                                                    <th>NAME</th>
                                                     <th>TRACK</th>
                                                      <th>YEAR</th>                                                    
                                                         <th>created on</th>
                                                          <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                        <?php
                                        if (is_array($cohorts) && count($cohorts)) {
                                            foreach ($cohorts as $loop) {
                                                $name = $loop->name;
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
                                                        <span id="cohort_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
<input type="text" value="<?php echo $name; ?>" class="editbox" id="cohort_input_<?php echo $id; ?>"
                                                    </td>
                                                    <td><?= $loop->track ?></td>
                                                  <td><?= $loop->year ?></td>
                                                  
                                                           <td><?= $loop->created ?></td>

                                                    <td class="td-actions">
                                      
                                                        <a href="<?php echo base_url() . "index.php/management/tracks/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="icon-trash bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                        <?php }}?>
                                               


                                            </tbody>
                                        </table>      
                         
                   

           
 </div>
                                                


</div><!--/.main-content-->
<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-2.0.3.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
    $(".editbox").hide();
   
    
$(".edit_tr").click(function()
{
var ID=$(this).attr('id');
$("#cohort"+ID).hide();
$("#cohort_input_"+ID).show();

}).change(function()
{
var ID=$(this).attr('id');
var name=$("#cohort_input_"+ID).val();
var dataString = 'id='+ ID +'&name='+name;
$("#cohort_"+ID).html('<img src="<?=  base_url();?>images/loading.gif" />'); // Loading image

if(name.length>0)
{

$.ajax({
type: "POST",
url: "<?php echo base_url() . "index.php/management/cohort/update/"; ?>",
data: dataString,
cache: false,
success: function(html)
{
$("#cohort_"+ID).html(name);

}
});
}
else
{
alert('Enter something.');
}

});

// Edit input box click action
$(".editbox").mouseup(function()
{
return false
});

// Outside click action
$(document).mouseup(function()
{
$(".editbox").hide();
$(".text").show();
});

});
</script>