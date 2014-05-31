<?php
class Login_model extends CI_model{
    public function validate($user,$pwd){

        
        // prepare the items to querried on the database
        $this->db->where('username', $user);
        $this->db->where('password', $pwd);
        
        // run the query 
        $querry = $this->db->get("users");
        
        //chek if there are any results
        if($querry->num_rows() == 1){
            return true;
             }
            else{ //if the previous session didnot validate return false.
             return false;
            }
        
        
    }
}