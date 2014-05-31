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
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<!--h3 class="page-title">
							Registered users 				
							<small>@</small>
						</h3-->
						<!--ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<a href="#">table for</a>
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">registered</a></li>
						</ul-->
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<h4><i class="icon-edit"></i>View registered, add,edit and remove</h4>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">
								<div class="clearfix">
										<div class="btn-group">
										<button  class="btn green">
										<a href="<?php echo base_url(); ?>registration/native">New</a> <i class="icon-plus"></i>
										</button>
									</div>
									<div class="btn-group pull-right">
										<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
										</button>
										<ul class="dropdown-menu">
											<li><a href="#">Print</a></li>
											<li><a href="<?php echo base_url();?>registration/native_in_pdf">Save as PDF</a></li>
											<li><a href="<?php echo base_url();?>registration/export_excel">Export to Excel</a></li>
										</ul>
									</div>
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
									<thead>
										<tr>
										<th>First name</th>
											<th>last name</th>
                                            <th> surname</th>
											<th>other names</th>
          	                                 <th>birth date</th>
											<th>Phone number</th>
											<th>gender</th>
                                            <th>job status</th>
                                            <th>bith id</th>
											
											<th>actions</th></th>
										</tr>
									</thead>
									<tbody>
									<?php foreach ($query as $row):?>
										<tr >                
											<td><?php echo $row->first_name;?></td>
											<td><?php echo $row->last_name;?></td>
											<td><?php echo $row->surname;?></td>
										    <td><?php echo $row->other_names;?></td>
                                            <td><?php echo $row->date_of_birth;?></td>
											<td><?php echo $row->phone_number;?></td>
                                            <td><?php echo $row->sex;?></td>
                                            <td><?php echo $row->job_status;?></td>
                                            <td><?php echo $row->birth_id;?></td>
                                            <td><a href="#myModal1" class="popbtn " role="button"  data-toggle="modal" id="<?php echo base_url();?>registration/editInfo/<?php echo $row->personal_id;?>"><i class="icon-pencil"></i></a>&nbsp;&nbsp;
											<a  href="<?php echo base_url();?>registration/delete_native/<?php echo $row->personal_id;?>"><i class="icon-trash"></i></a></td>
										</tr>
								<?php endforeach;?>		
									</tbody>
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
					</div>
				</div>
				<!-- END PAGE CONTENT -->
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->

				    