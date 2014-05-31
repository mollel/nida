<?php
tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
//$obj_pdf->SetCreator(PDF_CREATOR);
//$title = "PDF Report";
//$obj_pdf->SetTitle($title);
//$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, PDF_HEADER_STRING);
//$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
//$obj_pdf->SetDefaultMonospacedFont('calibri');
//$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
//$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
//$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
//$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
//$obj_pdf->SetFont('helvetica', 'italic', 10);
//$obj_pdf->setFontSubsetting(true);
$obj_pdf->AddPage();
ob_start();

    // we can have any view part here like HTML, PHP etc
    ?>
  <html>  
                <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <!--li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li-->
            <!--li><a href="table-static.html">Tables</a> <span class="separator"></span></li-->
            <!--li>banking system</li-->
        </ul>
        
        <div class="pageheader">
            <!--form action="<?php echo base_url(); ?>index.php/login/view_users" method="post" class="searchbar">
                <input type="text" name="keyword" placeholder="To search type and hit enter..." />
            </form-->
            <!--div class="pageicon"><span class="iconfa-table"></span></div-->
            <div class="pagetitle">
                <h1>Registered users on the banking system</h1>
            </div>
        </div><!--pageheader-->
        <div class="maincontent">
            <div class="maincontentinner"> 
               <!--h4 class="widgettitle">Data Table</h4-->
                <table id="dyntable" class="table table-bordered responsive">
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
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                     foreach ($query as $row):?>
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
                 
                        </tr>
                        </tbody>
                        <?php endforeach;?>
                </table>
                
                <br /><br />
                </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    </html>
    <?php
    $content = ob_get_contents();
ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
$obj_pdf->Output('output.pdf', 'I');
?>