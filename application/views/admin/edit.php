	 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>admin/assets/css/jquery.datetimepicker.css"/>                      						
                                    <?php foreach($query as $row): ?>
                           <form action="<?php echo base_url();?>registration/edit_save/<?php echo $row->personal_id?>" method="post">
    		
                                         <label class="control-label">First name</label>
										<input type="text" class="span6 m-wrap" placeholder="provide first name" name="firstname" id="firstname" value="<?php echo $row->first_name;?>"/>
                                        <label class="control-label">Last name</label>
                                        <input type="text" class="span6 m-wrap" placeholder="provide last name" name="lastname" id="lastname" value="<?php echo $row->last_name;?>"/>
                                        <label class="control-label">Surname</label>
                                        <input type="text" class="span6 m-wrap" placeholder="Surname " name="surname" value="<?php echo $row->surname;?>"/>
                                        <label class="control-label">Other names</label>
                                        <input type="text" class="span6 m-wrap" placeholder="other names " name="othernames"value="<?php echo $row->other_names;?>"/>
                                         <label class="control-label">data of birth</label>
                                         <input type="text" name="dateofbirth" id="datetimepicker_mask" class="infusion-field-container" placeholder="date of birth" value="<?php echo $row->date_of_birth;?>" />
                                         <label class="control-label">Phone number</label>
                                         <input type="text" class="span6 m-wrap" placeholder="phone number " name="phonenumber" value="<?php echo $row->phone_number;?>"/>
                                         
                                         <div class="col-sm-6" >
                                         <label class="control-label">gender</label>
                                                <select class="select2" name="gender">
                                                <option value="<?php echo $row->sex;?>" >male</option >
                                                <option value="<?php echo $row->sex;?>">female</option>
                                                </select>
                                            </div>
                                            <label class="control-label">Job status</label>
                                         <input type="text" class="span6 m-wrap" placeholder="job status " name="jobstatus" value="<?php echo $row->job_status;?>"/>
                                         <label class="control-label">Birth certificate ID</label>
                                         <input type="text" class="span6 m-wrap" placeholder="birth certificate id " name="birthId" value="<?php echo $row->birth_id;?>"/>
                                        <div class="modal-footer">
							         <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
							 <button class="btn yellow">Save</button>
                                                          
          </div>
      <?php endforeach;?>
</form>   
<script src="<?php echo base_url(); ?>admin/assets/js/jquery.js"></script>
   <script src="<?php echo base_url(); ?>admin/assets/js/jquery.datetimepicker.js"></script>
     <script>
  $('#datetimepicker10').datetimepicker({
	step:5,
	inline:true
});

$('#datetimepicker_mask').datetimepicker({
	mask:'9999/19/39 29:59'
});
</script>
    
								