<?php 
class Registration extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->is_logged_in();
    }
    public function is_logged_in(){
        $is_logged_in = $this->session->userdata('is_login_in');
        if(!isset($is_logged_in)|| $is_logged_in !=true){
            redirect('site');
            die();
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('site');
    }
    public function admin_dashboard(){
        //this function loads the dashboard of admin side
        $data['main_page']='admin/dashboard';
        $this->load->view('includes/template',$data);
    }
    public function native(){
        
        $data['main_page']='admin/personal_information';
        $this->load->view('includes/template',$data);
    }
    public function map(){
        
        $data['main_page']='admin/location_map';
        $this->load->view('includes/template',$data);
    }
    public function raia1(){
        $data['main_page']='admin/personal_details';
        $this->load->view('includes/template',$data);
    }
    public function natives_details(){
        $data['main_page']='admin/personal_details';
        $this->load->view('includes/template',$data);
        }
    public function ratibu_taarifa_za_wazazi(){
        $data['main_page']='admin/parent_details';
        $this->load->view('includes/template',$data);
        }
    public function nakili_taarifa_ya_makazi_ya_raia(){
        $data['main_page']='admin/area_of_residence';
        $this->load->view('includes/template',$data);
        }
        public function kiapo_cha_raia(){
            $data['main_page']='admin/kiapo';
            $this->load->view('includes/template',$data);
        }
   public function store_natives_personalinfo(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname','Fisrt name','trim|required|xss_clean');
        $this->form_validation->set_rules('lastname','Last Name','trim|required|xss_clean');
        $this->form_validation->set_rules('surname','Surname','trim|required|xss_clean');
        $this->form_validation->set_rules('othernames','other names','trim,|required|xss_clean');
        $this->form_validation->set_rules('dateofbirth','date of birth','trim|required|xss_clean');
        $this->form_validation->set_rules('phonenumber','phone number','trim|required|xss_clean');
        $this->form_validation->set_rules('gender','gender','trim|required|xss_clean');
        $this->form_validation->set_rules('jobstatus','job status','trim|required|xss_clean');
        $this->form_validation->set_rules('birthId','birth certificate Id','trim|required|xss_clean');
        
        //check the form validation if it exists
        if($this->form_validation->run() == FALSE){
            $this->native();
        }
        
        else{
        $raiaInfo = array(
            
            'first_name' => $this->input->post('firstname'),
            'last_name' => $this->input->post('lastname'),
            'surname' => $this->input->post('surname'),
            'other_names' => $this->input->post('othernames'),
            'date_of_birth' => $this->input->post('dateofbirth'),
            'phone_number' => $this->input->post('phonenumber'),
            'sex' => $this->input->post('gender'),
            'job_status' => $this->input->post('jobstatus'),
            'birth_id' => $this->input->post('birthId')
            );
            
          $this->load->model('Usajili'); 
          $id = $this->Usajili->raia_step1_info($raiaInfo); 
          $user_data = array(
                'user_id' => $id,
                'first_name' => $this->input->post('firstname'),
                'phone_number' => $this->input->post('phonenumber')
          ); 
          $this->session->set_userdata($user_data);
          redirect('registration/natives_details');
          }
    }
    public function store_natives_details(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('passportid','passport ID','trim|required|xss_clean');
        $this->form_validation->set_rules('drivingid','driving id','trim|required|xss_clean');
        $this->form_validation->set_rules('voteid','vote id','trim|required|xss_clean');
        $this->form_validation->set_rules('nhifid','NHIF ID','trim|required|xss_clean');
        $this->form_validation->set_rules('tinid','TIN ID','trim|required|xss_clean');
        $this->form_validation->set_rules('socialstatus','social status','trim|required|xss_clean');
        $this->form_validation->set_rules('secondaryid','secondary education id','trim|required|xss_clean');
        $this->form_validation->set_rules('advancedid','advanced secondary certificate','trim|required|xss_clean');
        $this->form_validation->set_rules('declarationid','declaration id','trim|required|xss_clean');
        $last_id =array();
              
        //check the form validation if it exists
        if($this->form_validation->run() == FALSE){
            $this->raia1();
        }
        
        else{
            
             $user_id = $this->session->userdata('user_id');
        
        $raiaInfo2 = array(
            
            
            'passport_ID' => $this->input->post('passportid'),
            'driving_ID' => $this->input->post('drivingid'),
            'vote_ID' => $this->input->post('voteid'),
            'NHIF_ID' => $this->input->post('nhifid'),
            'TIN_ID' => $this->input->post('tinid'),
            'social_status' => $this->input->post('socialstatus'),
            'form4_ID' => $this->input->post('secondaryid'),
            'personal_id'=>$user_id,
            'form6_ID' => $this->input->post('advancedid'),
            'declaration_ID' => $this->input->post('declarationid'),
            );
            
          $this->load->model('Usajili');     
          $this->Usajili->raia_step2_info($raiaInfo2);
            redirect('registration/ratibu_taarifa_za_wazazi');
   
          }
    } 
    public function hifadhi_taarifa_za_wazazi(){
               /* $this->load->library('form_validation');
                $this->form_validation->set_rules('father_fname','father fisrt name','trim|required|xss_clean');
                $this->form_validation->set_rules('father_lname','Last Name','trim|required|xss_clean');
                $this->form_validation->set_rules('father_surname','Surname','trim|required|xss_clean');
                $this->form_validation->set_rules('father_citizenship','your father citizenship','trim|required|xss_clean');
                $this->form_validation->set_rules('dob_father','date of birth of father','trim|required|xss_clean');
                $this->form_validation->set_rules('vote_ID','vote id of father','trim|required|xss_clean');
                $this->form_validation->set_rules('mother_fname','first name of your mother','trim|required|xss_clean');
                $this->form_validation->set_rules('mother_lname','your mother last name','trim|required|xss_clean');
                $this->form_validation->set_rules('mother_surname','surname of your mother','trim|required|xss_clean');
                $this->form_validation->set_rules('mother_citizenship','your mother citizenship','trim|required|xss_clean');
                $this->form_validation->set_rules('dob_mother','date of birth of your mother','trim|required|xss_clean');
                //check the form validation if it exists
                 if($this->form_validation->run() == FALSE){
                $this->ratibu_taarifa_za_wazazi();
          }
         
          else{*/
         $user_id = $this->session->userdata('user_id');
        $taarifa = array(
            'father_firstname' => $this->input->post('father_fname'),
            'father_lastname' => $this->input->post('father_lname'),
            'father_surname' => $this->input->post('father_surname'),
            'father_citizenship' => $this->input->post('father_citizenship'),
            'DOB_of_father' => $this->input->post('dob_father'),
            'vote_ID' => $this->input->post('vote_ID'),
            'personal_id'=>$user_id,
            'mother_firstname' => $this->input->post('mother_fname'),
            'mother_lastname' => $this->input->post('mother_lname'),
            'mother_surname' =>$this->input->post('mother_surname'),
            'mother_citizenship' => $this->input->post('mother_citizenship'),
            'DOB_of_mother' => $this->input->post('dob_mother')
            );
        $this->load->model('usajili');     
          $this->usajili->taarifa_za_wazazi($taarifa);
            redirect('registration/nakili_taarifa_ya_makazi_ya_raia');
         // }
      }  
      public function hifathi_taarifa_ya_makazi(){
         $this->load->library('form_validation');
                $this->form_validation->set_rules('region','region','trim|required|xss_clean');
                $this->form_validation->set_rules('district','district','trim|required|xss_clean');
                $this->form_validation->set_rules('ward','ward','trim|required|xss_clean');
                $this->form_validation->set_rules('paddress','permanent address','trim|required|xss_clean');
                $this->form_validation->set_rules('current','current address','trim|required|xss_clean');
                //check the form validation if it exists
                 if($this->form_validation->run() == FALSE){
                $this->nakili_taarifa_ya_makazi_ya_raia();
          }
         
          else{
        $user_id = $this->session->userdata('user_id');
        $makazi = array(
            'region' => $this->input->post('region'),
            'district' => $this->input->post('district'),
            'ward' => $this->input->post('ward'),
            'personal_id'=>$user_id,
            'permanent_address' => $this->input->post('paddress'),
            'current_address' => $this->input->post('current')
            );
        $this->load->model('usajili');     
          $this->usajili->makazi($makazi);
          $this->session->unset_userdata('user_id');
            $this->natives_info();
          }
      } 
      public function registered_natives(){
            $data['main_page']='admin/raia_waliosajiliwa';
            $this->load->model('usajili');
            $data['query']=$this->usajili->personalinfo();
            $this->load->view('includes/template',$data);

      } 
      
//usajili wa wgeni na wakimbizi
public function mgeni_view(){
    $data['main_page']='admin/wageni_waliosajiliwa';
    $this->load->view('includes/template',$data);
}
public function mgeni(){
    $data['main_page']='admin/mgeni_step1';
    $this->load->view('includes/template',$data);
   }
   public function natives_info(){
    $data['main_page']='admin/raia_waliosajiliwa';
    $this->load->model('usajili');
    $data['query'] = $this->usajili->personalinfo();
   $this->load->view('includes/template',$data);
   }
public   function editInfo(){
    $id = $this->uri->segment(3);
    $this->load->model('usajili');
    $data['query']=$this->usajili->getpersonal($id);
    $this->load->view('admin/edit',$data);
   }
 public function edit_save(){
    $id = $this->uri->segment(3);
    $this->load->library('form_validation');
    $edited= array(
            'first_name' => $this->input->post('firstname'),
            'last_name' => $this->input->post('lastname'),
            'surname' => $this->input->post('surname'),
            'other_names' => $this->input->post('othernames'),
            'date_of_birth' => $this->input->post('dateofbirth'),
            'phone_number' => $this->input->post('phonenumber'),
            'sex' => $this->input->post('gender'),
            'job_status' => $this->input->post('jobstatus'),
            'birth_id' => $this->input->post('birthId')
            );
        $this->form_validation->set_rules('firstname','Fisrt name','trim|required|xss_clean');
        $this->form_validation->set_rules('lastname','Last Name','trim|required|xss_clean');
        $this->form_validation->set_rules('surname','Surname','trim|required|xss_clean');
        $this->form_validation->set_rules('othernames','other names','trim,|required|xss_clean');
        $this->form_validation->set_rules('dateofbirth','date of birth','trim|required|xss_clean');
        $this->form_validation->set_rules('phonenumber','phone number','trim|required|xss_clean');
        $this->form_validation->set_rules('gender','gender','trim|required|xss_clean');
        $this->form_validation->set_rules('jobstatus','job status','trim|required|xss_clean');
        $this->form_validation->set_rules('birthId','birth certificate Id','trim|required|xss_clean');
        if($this->form_validation->run() == FALSE){
            $this->native();
        }else{
               
          $this->load->model('Usajili'); 
          $this->Usajili->update_native($id,$edited); 
          $this->natives_info();
          }
        
 } 
 public function delete_native(){
           $id=$this->uri->segment(3);
           $this->load->model('usajili');
           $this->usajili->deleted($id);
           $this->natives_info();
 
   } 
  public function calendar(){
    $data['main_page'] = 'admin/calender';
    $this->load->view('includes/template',$data);
  } 
  public function export_excel(){
    $this->load->model('usajili');
    $query = $this->usajili->personalinfo();
    //load the php excel library
    if(!$query)
            return false;
 
        // Starting the PHPExcel library
        $this->load->library('PHPExcel');
        $this->load->library('PHPExcel/IOFactory');
 
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getProperties()->setTitle("export")->setDescription("none");
 
        $objPHPExcel->setActiveSheetIndex(0);
 
        // Field names in the first row
        $fields = $query->list_fields();
        $col = 0;
        foreach ($fields as $field)
        {
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, 1, $field);
            $col++;
        }
 
        // Fetching the table data
        $row = 2;
        foreach($query->result() as $data)
        {
            $col = 0;
            foreach ($fields as $field)
            {
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data->$field);
                $col++;
            }
 
            $row++;
        }
 
        $objPHPExcel->setActiveSheetIndex(0);
 
        $objWriter = IOFactory::createWriter($objPHPExcel, 'Excel5');
 
        // Sending headers to force the user to download the file
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Products_'.date('dMy').'.xls"');
        header('Cache-Control: max-age=0');
 
        $objWriter->save('php://output');
    }
    public function native_in_pdf(){
         $this->load->helper('pdf_helper');
        $this->load->model('usajili');
        $data['query']=$this->usajili->personalinfo();
        $this->load->view('admin/natives_pdf',$data);
    }
  }
 