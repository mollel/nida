<div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <div id="portlet-config" class="modal hide">
            <div class="modal-header">
               <button data-dismiss="modal" class="close" type="button"></button>
               <h3>portlet Settings</h3>
            </div>
            <div class="modal-body">
               <p>Here will be a configuration form</p>
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
                     <li><a href="#">personal information</a></li>
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
                           <i class="icon-reorder"></i> personal details - <span class="step-title">Step 1 of 2</span>
                        </h4>
                        <div class="tools hidden-phone">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form">
                        <form action="<?php echo base_url();?>registration/hifathi_taarifa_ya_makazi" class="form-horizontal" method="post">
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
                                          <a href="#tab4" data-toggle="tab" class="step">
                                          <span class="number">2</span>
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
                                    <h3 class="block">Provide your names </h3>
                                    <div class="control-group">
                                       <label class="control-label">in which region are you residing?</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder="Region of residence" name="region" id="region"/>
                                       </div>
                                    </div>
                                     <div class="control-group">
                                       <label class="control-label">At which district?</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder="district" name="district" id="district"/>
                                       </div>
                                    </div>
                                     <div class="control-group">
                                       <label class="control-label">which ward within the district?</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder="ward" name="ward"/>
                                       </div>
                                    </div>
                                     <div class="control-group">
                                       <label class="control-label">what is your permanent address?</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder="permanent address" name="paddress"/>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">what is your current address?</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder="current address" name="current"/>
                                       </div>
                                    </div>
                                 </div>
                                 <!--div class="tab-pane" id="tab2">
                                    <div class="control-group">
                                       <label class="control-label">Advanced secondary ID</label>
                                       <div class="controls">
                                            <input type="text" class="span6 m-wrap" placeholder="social status" name="advancedid"/>
                                          <span class="help-inline">Provide your fullname</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">TIN ID</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder="namba ya biashara" name="tinid"/>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">social status</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder="social status" name="socialstatus"/>
                                       </div>
                                    </div>
                                 </div-->
                                 <!--div class="tab-pane" id="tab3">
                                    <div class="control-group">
                                       <label class="control-label">secondary education ID</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder="chet cha elimu ya kidato cha 6" name="secondaryid"/>
                                          <span class="help-inline"></span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">declaration Id</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder="kiapo" name="declarationid"/>
                                          <span class="help-inline"></span>
                                       </div>
                                    </div>
                                   <div class="control-group">
                                       <label class="control-label">Payment Options</label>
                                       <div class="controls">
                                          <label class="checkbox line">
                                          <input type="checkbox" value="" /> Auto-Pay with this Credit Card
                                          </label>
                                          <label class="checkbox line">
                                          <input type="checkbox" value="" /> Email me monthly billing
                                          </label>
                                       </div>
                                    </div>
                                 </div-->
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