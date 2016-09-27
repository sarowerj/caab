<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Site_model');
        $this->data = new stdClass();
    }

    public function index() {
        $this->template->load('Site/template/template_site', 'Site/home');
    }

    public function emp_login() {
        $this->load->view('login');
    }

    public function check_login() {
        $emp_pin = $this->input->post('emp_id');

        $this->db->select('id, emp_name');
        $this->db->where('emp_id_number', $emp_pin);
        $status = $this->db->get('caab_basic_info')->row();

        if ($status != null) {
            $emp_data = array(
                'emp_name' => $status->emp_name,
                'emp_id' => $status->id,
            );

            $this->session->set_userdata($emp_data);
            redirect('/Site/profile/', 'refresh');
        } else {
            echo "Select a valid id";
        }
    }

    public function profile() {
        if (!empty($_SESSION['emp_name'])) {
            $employee_name = $_SESSION['emp_name'];
            $employee_id = $_SESSION['emp_id'];

            $this->data->basic_info = $this->Site_model->getByIdLnBasic('basic_info', $employee_id, 'bn');
            $this->data->education_info = $this->Site_model->getByIdLn('educational_qualification', $employee_id, 'bn');
            $this->data->office_info = $this->Site_model->getByIdLn('office_info', $employee_id, 'bn');
            $this->data->training_info = $this->Site_model->getByIdLn('info_training', $employee_id, 'bn');
            $this->data->nominee_info_gpf = $this->Site_model->getByIdLn('nominee_info_gpf', $employee_id, 'bn');
            $this->data->nominee_info_pention = $this->Site_model->getByIdLn('nominee_info_pention', $employee_id, 'bn');
            $this->data->nominee_info_walfare = $this->Site_model->getByIdLn('nominee_info_walfare', $employee_id, 'bn');
            $this->data->nominee_info_dead_loss = $this->Site_model->getByIdLn('nominee_info_dead_loss', $employee_id, 'bn');
            $this->data->nominee_info_bema = $this->Site_model->getByIdLn('nominee_info_bema', $employee_id, 'bn');
            
            $this->template->load('Site/template/template_site', 'Site/profile', $this->data);
        }
    }

    public function employee() {
        $this->data->meta = 'employee';
        $this->data->active = '';
        $this->data->status = '';

        $user_id = $employee_id;

        if (isset($user_id)) {
            if (is_numeric($user_id)) {
                $basic_info = $this->Site_model->getByIdLnBasic('basic_info', $user_id, 'bn');
                if (!empty($basic_info)) {
                    $info['basic_info'] = $basic_info;

                    $educational_qualification = $this->Site_model->getByIdLn('educational_qualification', $user_id, 'bn');
                    $info['educational_qualification'] = $educational_qualification;

                    $office_info = $this->Site_model->getByIdLn('office_info', $user_id, 'bn');
                    $info['office_info'] = $office_info;

                    $training_info = $this->Site_model->getByIdLn('info_training', $user_id, 'bn');
                    $info['training_info'] = $training_info;

                    $nominee_info_gpf = $this->Site_model->getByIdLn('nominee_info_gpf', $user_id, 'bn');
                    $info['nominee_info_gpf'] = $nominee_info_gpf;

                    $nominee_info_pention = $this->Site_model->getByIdLn('nominee_info_pention', $user_id, 'bn');
                    $info['nominee_info_pention'] = $nominee_info_pention;

                    $nominee_info_walfare = $this->Site_model->getByIdLn('nominee_info_walfare', $user_id, 'bn');
                    $info['nominee_info_walfare'] = $nominee_info_walfare;

                    $nominee_info_dead_loss = $this->Site_model->getByIdLn('nominee_info_dead_loss', $user_id, 'bn');
                    $info['nominee_info_dead_loss'] = $nominee_info_dead_loss;

                    $nominee_info_bema = $this->Site_model->getByIdLn('nominee_info_bema', $user_id, 'bn');
                    $info['nominee_info_bema'] = $nominee_info_bema;

                    $salary_info = $this->Site_model->getByIdLn('salary_info', $user_id, 'bn');
                    $info['salary_info'] = $salary_info;

                    $this->data->info = $info;

                    $this->template->load('admin/template/template_dashboard_admin', 'admin/employee', $this->data);
                } else {
                    $this->data->status = 'empty';
                    $this->template->load('admin/template/template_dashboard_admin', 'admin/employee', $this->data);
                }
            } else {
                $this->data->status = 'not_valid';
                $this->template->load('admin/template/template_dashboard_admin', 'admin/employee', $this->data);
            }
        } else {
            $this->data->status = 'empty';
            $this->template->load('admin/template/template_dashboard_admin', 'admin/employee', $this->data);
        }
    }

}
