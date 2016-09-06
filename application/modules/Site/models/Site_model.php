<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site_model extends Ci_Model {

    /**
     * Get breaking news title and hyperlink
     * @return AssociativeArray
     */
    public function get_emp($emp_name, $emp_pin) {
        $name = array(
            'emp_name'=>$emp_name,
            'emp_id_number'=>$emp_pin
        ); 
        $query = $this->db->where($name)
                ->from('basic_info')
                ->get();
        return $query->result_array();
    }

}

?>