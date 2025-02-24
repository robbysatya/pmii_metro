<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Gallery_model_model extends CI_Model {
                        
public function index(){
	return $this->db->get_where('tb_gallery')->result();       
                                
}
                        
                            
                        
}
                        
/* End of file Gallery_model.php */
    
                        