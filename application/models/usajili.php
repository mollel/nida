<?php 
class Usajili extends CI_Model{
    public function raia_step1_info($raia){
            $this->db->insert('personalinfo',$raia);
            $id=$this->db->insert_id();
            return $id;
    }
     public function raia_step2_info($raia){
            $this->db->insert('personal_details',$raia);
    }
    public function taarifa_za_wazazi($parents){
            $this->db->insert('parents_details',$parents);
    }
    public function makazi($mahali_anayoishi){
            $this->db->insert('area_of_residence',$mahali_anayoishi);
    }
   public function get_raia(){
   $query= $this->db->query("
    SELECT  personalinfo.first_name ,  personalinfo.last_name ,personalinfo.sex , 
     personalinfo.job_status , personal_details.vote_ID, parents_details.father_firstname, 
      parents_details.mother_firstname, area_of_residence.region
        FROM personalinfo
        INNER JOIN personal_details ON personal_details.personal_id = personalinfo.personal_id
        INNER JOIN parents_details ON parents_details.personal_id = personalinfo.personal_id
        INNER JOIN area_of_residence ON area_of_residence.personal_id = personalinfo.personal_id"
        );
    return $query->result();
    
   }
   public function personalinfo(){
     $query = $this->db->get('personalinfo');
     return $query->result();
   }
   
  public  function getpersonal($id){
   $query = $this->db->where('personal_id',$id)->get('personalinfo');
   return $query->result();
    
   }
   public function update_native($id,$data){
    $this->db->where('personal_id',$id)->update('personalinfo',$data);
   }
   public function deleted($id){
    $table = array('personalinfo','personal_details','area_of_residence','parents_details');
    $this->db->where('personal_id',$id);
    $this->db->delete($table);
    
   }
}
