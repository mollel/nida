<?php
class Site extends CI_Controller{
    public function index(){
        $data['message']='';
        $this->load->view('admin/login_view',$data);
    }
    
    public function validate_user(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('','Fisrt name','trim|required|xss_clean');
        $this->form_validation->set_rules('firstname','Fisrt name','trim|required|xss_clean');
        if($this->form_validation == false){
            $this->index();
        }else{
        //takeor grab the user input
        $username = $this->security->xss_clean($this->input->post("username"));
        $password = $this->security->xss_clean($this->input->post("password"));
        $this->load->model('login_model');
        //validate the user if it can log in
        $query = $this->login_model->validate($username ,$password);
        if(!$query){
            $this->session->set_flashdata('login_error', True);
            $data['message'] = '<div classa="lert-danger"> 
                                    <p> you are not registere as admin</p></div>';
                   $this->index();    
                     }else{
                        $data=array(
                         'username'=>$this->input->post("username"),
                         'is_login_in'=>true
            );
            $this->session->set_userdata($data);
            redirect('registration/admin_dashboard');
                     }
       
        //if the user didnot validate redirect to the dashboard.
        $this->index();
       }
   }
 }