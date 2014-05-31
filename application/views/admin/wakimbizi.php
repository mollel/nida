 <div class="container-fluid" id="pcont">
    <div class="page-head">
     <h2>personal information</h2>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>admin/#">Home</a></li>
        <li><a href="<?php echo base_url(); ?>admin/#">Form</a></li>
        <li class="active">usajili</li>
      </ol>
    </div>
    <div class="cl-mcont">		
    <div class="row">
      <div class="col-md-12 fuelux">
        <div class="block-wizard">
          <div id="wizard1" class="wizard wizard-ux">
            <ul class="steps">
              <li data-target="#step1" class="active">Step 1<span class="chevron"></span></li>
              <li data-target="#step2">Step 2<span class="chevron"></span></li>
              <li data-target="#step3">Step 3<span class="chevron"></span></li>
            </ul>
            <div class="actions">
              <button type="button" class="btn btn-xs btn-prev btn-default"> <i class="icon-arrow-left"></i>Prev</button>
              <button type="button" class="btn btn-xs btn-next btn-default" data-last="Finish">Next<i class="icon-arrow-right"></i></button>
            </div>
          </div>
          <div class="step-content">
            <form class="form-horizontal group-border-dashed" action="<?php echo base_url(); ?>msajili/step1_raia" method="post" data-parsley-namespace="data-parsley-" data-parsley-validate novalidate > 
              <div class="step-pane active" id="step1">
                <div class="form-group no-padding">
                  <!--div class="col-sm-7">
                    <h3 class="hthin">personal information</h3>
                  </div-->
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">first name</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="first name " name="firstname">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">last name</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="last name " name="lastname">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">surname</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Surname " name="surname">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">other names</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="other names " name="othernames">
                  </div>
                </div>				
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button class="btn btn-default">Cancel</button>
                    <button data-wizard="#wizard1" class="btn btn-primary wizard-next">Next Step <i class="fa fa-caret-right"></i></button>
                  </div>
                </div>									
              </div>
              <div class="step-pane" id="step2">
                <div class="form-group no-padding">
                  <!--div class="col-sm-7">
                    <h3 class="hthin">Notifications</h3>
                  </div-->
                </div>
                <div class="form-group">
                  <div class="form-group">
                  <label class="col-sm-3 control-label" for="inf_field_birthday">date of birth&nbsp;&nbsp;</label>
                  <div class="col-sm-6">
                  <input type="text" name="dateofbirth" id="inf_field_Birthday" class="infusion-field-container" placeholder="date of birth" />
                    <!--input type="text" class="form-control" placeholder="date of birth" name="dateofbirth"-->
                  </div>
                </div>
                  <div class="form-group">
                  <label class="col-sm-3 control-label" >phone number</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="phone number " name="phonenumber">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">gender</label>
                  <div class="col-sm-6">
                   <select class="select2" name="gender">
                         <option value="male" >male</option>
                         <option value="female">female</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <button data-wizard="#wizard1" class="btn btn-default wizard-previous"><i class="fa fa-caret-left"></i> Previous</button>
                    <button data-wizard="#wizard1" class="btn btn-primary wizard-next">Next Step <i class="fa fa-caret-right"></i></button>
                  </div>
                </div>	
              </div>
              <div class="step-pane" id="step3">
                <div class="form-group">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Job status</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="job status " name="jobstatus">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Birth certificate Id</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="birth certificate id " name="birthId">
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <button data-wizard="#wizard1" class="btn btn-default wizard-previous"><i class="fa fa-caret-left"></i> Previous</button>
                    <button data-wizard="#wizard1" class="btn btn-success wizard-next"><i class="fa fa-check"></i>Complete</button></a>
                  </div>
                </div>	
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    </div>
  </div> 