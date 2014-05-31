<div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <div id="portlet-config" class="modal hide">
            <div class="modal-header">
               <button data-dismiss="modal" class="close" type="button"></button>
               <h3>portlet Settings</h3>
            </div>
            <div class="modal-body">
            </div>
         </div>
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN STYLE CUSTOMIZER -->
                  <!--div class="color-panel hidden-phone">
                     <div class="color-mode-icons icon-color"></div>
                     <div class="color-mode-icons icon-color-close"></div>
                     <div class="color-mode">
                        <p>THEME COLOR</p>
                        <ul class="inline">
                           <li class="color-black current color-default" data-style="default"></li>
                           <li class="color-blue" data-style="blue"></li>
                           <li class="color-brown" data-style="brown"></li>
                           <li class="color-purple" data-style="purple"></li>
                           <li class="color-white color-light" data-style="light"></li>
                        </ul>
                        <label class="hidden-phone">
                        <input type="checkbox" class="header" checked value="" />
                        <span class="color-mode-label">Fixed Header</span>
                        </label>                    
                     </div>
                  </div-->
                  <!-- END BEGIN STYLE CUSTOMIZER -->   
                  <h3 class="page-title">
                  </h3>
                  <!--ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="index.html">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="#">Form for</a>
                        <span class="icon-angle-right"></span>
                     </li>
                     <li><a href="#">Parent details</a></li>
                  </ul-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <div class="portlet box blue" id="form_wizard_1">
                     <div class="portlet-title">
                        <h4>
                           <i class="icon-reorder"></i> Parent details- <span class="step-title">Step 1 of 4</span>
                        </h4>
                        <div class="tools hidden-phone">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form">
                        <form action="<?php echo base_url();?>registration/hifadhi_taarifa_za_wazazi" class="form-horizontal" method="post">
                           <div class="form-wizard">
                              <div class="navbar steps">
                                 <div class="navbar-inner">
                                    <ul class="row-fluid">
                                       <li class="span3">
                                          <a href="#tab1" data-toggle="tab" class="step active">
                                          <span class="number">1</span>
                                          <span class="desc"><i class="icon-ok"></i> </span>   
                                          </a>
                                       </li>
                                       <li class="span3">
                                          <a href="#tab2" data-toggle="tab" class="step">
                                          <span class="number">2</span>
                                          <span class="desc"><i class="icon-ok"></i> </span>   
                                          </a>
                                       </li>
                                       <!--li class="span3">
                                          <a href="#tab3" data-toggle="tab" class="step">
                                          <span class="number">3</span>
                                          <span class="desc"><i class="icon-ok"></i></span>   
                                          </a>
                                       </li-->
                                       <li class="span3">
                                          <a href="#tab4" data-toggle="tab" class="step">
                                          <span class="number">3</span>
                                          <span class="desc"><i class="icon-ok"></i> Confirm</span>   
                                          </a> 
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div id="bar" class="progress progress-success progress-striped">
                                 <div class="bar"></div>
                              </div>
                              <div class="tab-content">
                                 <div class="tab-pane active" id="tab1">
                                    <h3 class="block">father information </h3>
                                    <div class="control-group">
                                       <label class="control-label">first name</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder="first name of father  " name="father_fname"/>
                                       </div>
                                    </div>
                                     <div class="control-group">
                                       <label class="control-label">last name</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder="last name father" name="father_lname"/>
                                       </div>
                                    </div>
                                     <div class="control-group">
                                       <label class="control-label">surname</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder="surname of father" name="father_surname"/>
                                       </div>
                                    </div>
                                     <div class="control-group">
                                       <label class="control-label">citizenship</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder="citizenship of father" name="father_citizenship"/>
                                       </div>
                                    </div>
                             
                                    <div class="control-group">
                                       <label class="control-label">vote ID</label>
                                       <div class="controls">
                                            <input type="text" class="span6 m-wrap" placeholder="vote id of father" name="vote_ID"/>
                                          <!--span class="help-inline">Provide your fullname</span-->
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">date of birth</label>
                                       <div class="controls">
                                         <input type="text" name="dob_mother" id="datetimepicker_mask"  placeholder="date of birth of father" />
                                       </div>
                                    </div>
                                    <!--div class="control-group">
                                       <label class="control-label">social status</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder="social status" name="socialstatus"/>
                                       </div>
                                    </div-->
                                 </div>
                                 <div class="tab-pane" id="tab2">
                                  <h3 class="block">Mother information </h3>
                                    <div class="control-group">
                                       <label class="control-label">first name</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder="mother first name" name="mother_fname"/>
                                          <span class="help-inline"></span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">last name</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder="mother last name" name="mother_lname"/>
                                          <span class="help-inline"></span>
                                       </div>
                                    </div>
                                     <div class="control-group">
                                       <label class="control-label">surname</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder="mother surname" name="mother_surname"/>
                                          <span class="help-inline"></span>
                                       </div>
                                    </div>
                                     <div class="control-group">
                                       <label class="control-label">citizenship</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder="mother citizenship  " name="mother_citizenship"/>
                                          <span class="help-inline"></span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">date of birth</label>
                                       <div class="controls">
                                         <input type="text" name="dob_father" id="datetimepicker_start_time" placeholder="date of birth of mother" />
                                       </div>
                                    </div>
                                    
                                   <!--div class="control-group">
                                       <label class="control-label">Payment Options</label>
                                       <div class="controls">
                                          <label class="checkbox line">
                                          <input type="checkbox" value="" /> Auto-Pay with this Credit Card
                                          </label>
                                          <label class="checkbox line">
                                          <input type="checkbox" value="" /> Email me monthly billing
                                          </label>
                                       </div>
                                    </div-->
                                 </div>
                                 <div class="tab-pane" id="tab4">
                                    <div class="control-group">
                                       <label class="control-label"></label>
                                       <div class="controls">
                                          <label class="checkbox">
                                          <input type="checkbox" value="" /> I confirm that the information are true
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-actions clearfix">
                                 <a href="javascript:;" class="btn button-previous">
                                 <i class="m-icon-swapleft"></i> Back 
                                 </a>
                                 <a href="javascript:;" class="btn blue button-next">
                                 Continue <i class="m-icon-swapright m-icon-white"></i>
                                 </a>
                                 <input type="submit" class="btn green" value="Submit" /> 
                                   
                                 </a>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
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
$('#datetimepicker_start_time').datetimepicker({
	startDate:'+1970/05/01'
});
</script>
    