<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_model extends Ci_Model {

    /**
     * Function Name = insert() <br />
     * Uses = This function is to store data into any table. <br />
     * Parameters = $tbl_name, $data
     * @param string $tbl_name is name of Table
     * @param array $data is form data.
     * @return boolean Always return true or false.
     */
    public function insert($tbl_name, $data) {
        $this->db->insert($tbl_name, $data);
    }

    /**
     * Function Name = getAll() <br />
     * Uses = This function is to get all data from any table. <br />
     * Parameters = $tbl_name
     * @param string $tbl_name is name of Table
     * @return array It returns an associative array with object data.
     */
    public function getAll($tbl_name) {
        $query = $this->db->get($tbl_name);
        return $query->result();
    }

    public function getById($tbl_name, $col, $id) {
        $query = $this->db->where($col, $id)
                ->from($tbl_name)
                ->limit(1)
                ->get();
        return $query->result_array();
    }

    public function getByIdLnBasic($tbl_name, $emp_id, $lan) {
        $check = array(
            'id' => $emp_id,
            'lan' => $lan
        );
        $query = $this->db->where($check)
                ->from($tbl_name)
                ->limit(1)
                ->get();
        return $query->result_array();
    }
    
    public function getByIdLnBasicEn($tbl_name, $emp_id, $lan) {
        $check = array(
            'emp_id' => $emp_id,
            'lan' => $lan
        );
        $query = $this->db->where($check)
                ->from($tbl_name)
                ->limit(1)
                ->get();
        return $query->result_array();
    }

    public function getByIdLn($tbl_name, $emp_id, $lan) {
        $check = array(
            'emp_id' => $emp_id,
            'lan' => $lan
        );
        $query = $this->db->where($check)
                ->from($tbl_name)
                ->get();
        return $query->result_array();
    }

    public function basic_info($tbl_name) {
        $query = $this->db->get($tbl_name)
                ->limit(1);
        return $query->result();
    }

    public function getAllUsers_basic() {
        $query = $this->db->select('id,emp_name,emp_name_eng,emp_current_designation')
                ->from('basic_info')
                ->get();

        return $query->result_array();
    }
    
    public function getAllUsersBasicCat($emp) {
        $query = $this->db->select('id,emp_name,emp_name_eng,emp_current_designation')
                ->from('basic_info')
                ->where($emp)
                ->get();

        return $query->result_array();
    }

    public function update($table, $data, $column, $id) {
        $query = $this->db->where($column, $id)
                ->update($table, $data);
    }

    public function updateByLn($table, $data, $id, $lan) {
        $check = array(
            'id' => $id,
            'lan' => $lan
        );
        $query = $this->db->where($check)
                ->update($table, $data);
    }

    public function updateByLoop($table, $data, $column, $id) {
        array_pop($data);
        $query = $this->db->where($column, $id)
                ->update($table, $data);
    }
}

?>