<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        if (!$this->is_logedin()) {
            redirect('/login/', 'refresh');
        }
        $session_data = $this->session->userdata();
        $this->data = new stdClass();
        $this->data->title = 'Admin | Dashboard';
        $this->data->meta = 'dashbord';
        $this->data->username = $session_data['user_nicename'];
        $this->data->email = $session_data['email'];
        $this->data->type = $session_data['type'];
    }

    public function index() {
        $this->data->meta = 'dashboard';
        $this->data->active = 'dashboard';
        $this->template->load('admin/template/template_dashboard_admin', 'admin/dashboard', $this->data);
    }

    public function employees() {
        $category = urldecode($this->uri->segment(3));
        $emp = array(
            'emp_dept' => $category,
        );
        $this->data->meta = 'employee';
        $this->data->active = 'all_employees';
        $this->data->employees = $this->Admin_model->getAllUsersBasicCat($emp);
        $this->template->load('admin/template/template_dashboard_admin', 'admin/emp_by_cat', $this->data);
    }

    public function new_employee() {
        $this->data->meta = 'employee';
        $this->data->active = 'new_employee';
        $this->template->load('admin/template/template_dashboard_admin', 'admin/new_employee', $this->data);
    }

    public function all_employees() {
        $this->data->meta = 'employee';
        $this->data->active = 'all_employees';
        $this->data->users = $this->Admin_model->getAllUsers_basic();
        $this->template->load('admin/template/template_dashboard_admin', 'admin/all_employee', $this->data);
    }

    public function employee() {
        $this->data->meta = 'employee';
        $this->data->active = '';
        $this->data->status = '';

        $user_id = $this->uri->segment(3);

        if (isset($user_id)) {
            if (is_numeric($user_id)) {
                $basic_info = $this->Admin_model->getByIdLnBasic('basic_info', $user_id, 'bn');
                if (!empty($basic_info)) {
                    $info['basic_info'] = $basic_info;

                    $educational_qualification = $this->Admin_model->getByIdLn('educational_qualification', $user_id, 'bn');
                    $info['educational_qualification'] = $educational_qualification;

                    $office_info = $this->Admin_model->getByIdLn('office_info', $user_id, 'bn');
                    $info['office_info'] = $office_info;

                    $training_info = $this->Admin_model->getByIdLn('info_training', $user_id, 'bn');
                    $info['training_info'] = $training_info;

                    $nominee_info_gpf = $this->Admin_model->getByIdLn('nominee_info_gpf', $user_id, 'bn');
                    $info['nominee_info_gpf'] = $nominee_info_gpf;

                    $nominee_info_pention = $this->Admin_model->getByIdLn('nominee_info_pention', $user_id, 'bn');
                    $info['nominee_info_pention'] = $nominee_info_pention;

                    $nominee_info_walfare = $this->Admin_model->getByIdLn('nominee_info_walfare', $user_id, 'bn');
                    $info['nominee_info_walfare'] = $nominee_info_walfare;

                    $nominee_info_dead_loss = $this->Admin_model->getByIdLn('nominee_info_dead_loss', $user_id, 'bn');
                    $info['nominee_info_dead_loss'] = $nominee_info_dead_loss;

                    $nominee_info_bema = $this->Admin_model->getByIdLn('nominee_info_bema', $user_id, 'bn');
                    $info['nominee_info_bema'] = $nominee_info_bema;

                    $salary_info = $this->Admin_model->getByIdLn('salary_info', $user_id, 'bn');
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

    public function employee_en() {
        $this->data->meta = 'employee';
        $this->data->active = '';
        $this->data->status = '';

        $user_id = $this->uri->segment(3);

        if (isset($user_id)) {
            if (is_numeric($user_id)) {
                $basic_info = $this->Admin_model->getById('basic_info_en', 'emp_id', $user_id);
                $info['basic_info'] = $basic_info;

                $educational_qualification = $this->Admin_model->getByIdLn('educational_qualification', $user_id, 'en');
                $info['educational_qualification'] = $educational_qualification;

                $office_info = $this->Admin_model->getByIdLn('office_info', $user_id, 'en');
                $info['office_info'] = $office_info;

                $training_info = $this->Admin_model->getByIdLn('info_training', $user_id, 'en');
                $info['training_info'] = $training_info;

                $nominee_info_gpf = $this->Admin_model->getByIdLn('nominee_info_gpf', $user_id, 'en');
                $info['nominee_info_gpf'] = $nominee_info_gpf;

                $nominee_info_pention = $this->Admin_model->getByIdLn('nominee_info_pention', $user_id, 'en');
                $info['nominee_info_pention'] = $nominee_info_pention;

                $nominee_info_walfare = $this->Admin_model->getByIdLn('nominee_info_walfare', $user_id, 'en');
                $info['nominee_info_walfare'] = $nominee_info_walfare;

                $nominee_info_dead_loss = $this->Admin_model->getByIdLn('nominee_info_dead_loss', $user_id, 'en');
                $info['nominee_info_dead_loss'] = $nominee_info_dead_loss;

                $nominee_info_bema = $this->Admin_model->getByIdLn('nominee_info_bema', $user_id, 'en');
                $info['nominee_info_bema'] = $nominee_info_bema;

                $salary_info = $this->Admin_model->getByIdLn('salary_info', $user_id, 'en');
                $info['salary_info'] = $salary_info;

                $this->data->info = $info;

                $this->template->load('admin/template/template_dashboard_admin', 'admin/employee_en', $this->data);
            } else {
                $this->data->status = 'not_valid';
                $this->template->load('admin/template/template_dashboard_admin', 'admin/employee_en', $this->data);
            }
        } else {
            $this->data->status = 'empty';
            $this->template->load('admin/template/template_dashboard_admin', 'admin/employee_en', $this->data);
        }
    }

    public function save_user_info() {
        /**
         * Inserting Basic Info
         */
        $computer_skill = $this->input->post('emp_computer_skill');
        if (!empty($computer_skill)) {
            $computer_skill = serialize($this->input->post('emp_computer_skill'));
        } else {
            $computer_skill = '';
        }
        $data = array(
            'lan' => 'bn',
            'emp_name' => $this->input->post('emp_name'),
            'emp_name_eng' => $this->input->post('emp_name_eng'),
            'emp_dept' => $this->input->post('emp_dept'),
            'emp_id_number' => $this->input->post('emp_id_number'),
            'emp_current_designation' => $this->input->post('emp_current_designation'),
            'emp_appointment_designation' => $this->input->post('emp_appointment_designation'),
            'emp_apointment_date' => strtotime($this->input->post('emp_apointment_date')),
            'emp_retirement_date' => strtotime($this->input->post('emp_retirement_date')),
            'emp_current_office' => $this->input->post('emp_current_office'),
            'emp_promotion_date' => strtotime($this->input->post('emp_promotion_date')),
            'emp_current_office_appointment_date' => strtotime($this->input->post('emp_current_office_appointment_date')),
            'emp_recent_prev_joining_place' => $this->input->post('emp_recent_prev_joining_place'),
            'emp_recent_prev_designation' => $this->input->post('emp_recent_prev_designation'),
            'emp_recent_prev_joining_date' => strtotime($this->input->post('emp_recent_prev_joining_date')),
            'emp_nationality' => $this->input->post('emp_nationality'),
            'emp_nid_no' => $this->input->post('emp_nid_no'),
            'emp_religion' => $this->input->post('emp_religion'),
            'emp_passport_no' => $this->input->post('emp_passport_no'),
            'emp_father_name' => $this->input->post('emp_father_name'),
            'emp_mother_name' => $this->input->post('emp_mother_name'),
            'emp_birth_date' => strtotime($this->input->post('emp_birth_date')),
            'emp_blood_group' => $this->input->post('emp_blood_group'),
            'emp_sex' => $this->input->post('emp_sex'),
            'emp_merital_status' => $this->input->post('emp_merital_status'),
            'emp_spose' => $this->input->post('emp_spose'),
            'emp_telephone_number' => $this->input->post('emp_telephone_number'),
            'emp_mobile_number' => $this->input->post('emp_mobile_number'),
            'emp_tin' => $this->input->post('emp_tin'),
            'emp_email' => $this->input->post('emp_email'),
            'emp_add_village' => $this->input->post('emp_add_village'),
            'emp_add_post' => $this->input->post('emp_add_post'),
            'emp_add_po' => $this->input->post('emp_add_po'),
            'emp_add_district' => $this->input->post('emp_add_district'),
            'emp_per_add_house' => $this->input->post('emp_per_add_house'),
            'emp_per_add_road' => $this->input->post('emp_per_add_road'),
            'emp_per_add_village' => $this->input->post('emp_per_add_village'),
            'emp_per_add_post' => $this->input->post('emp_per_add_post'),
            'emp_per_add_po' => $this->input->post('emp_per_add_po'),
            'emp_per_add_district' => $this->input->post('emp_per_add_district'),
            'emp_computer_skill' => $computer_skill,
            'emp_children_amount' => $this->input->post('emp_children_amount'),
            'emp_extra_experience' => $this->input->post('emp_extra_experience')
        );

        /**
         * Inserting Basic Info
         */
        $emp_name = $this->input->post('emp_name');
        if (!empty($emp_name)) {
            $query_cont = $this->Admin_model->insert('basic_info', $data);
            $query_id = $this->db->insert_id();
            $lastid = $query_id;


            /**
             * Inserting Educational Qualification. 
             */
            $educational_qualification = [];
            $total_edu_exam_name = sizeof($this->input->post('edu_exam_name'));
            for ($i = 0; $i < $total_edu_exam_name; $i++) {
                $educational_qualification_single = array(
                    'emp_id' => $lastid,
                    'lan' => 'bn',
                    'edu_exam_name' => $this->input->post('edu_exam_name')[$i],
                    'edu_exam_dept' => $this->input->post('edu_exam_dept')[$i],
                    'edu_passing_year' => $this->input->post('edu_passing_year')[$i],
                    'edu_university_board' => $this->input->post('edu_university_board')[$i],
                    'edu_gpa_class' => $this->input->post('edu_gpa_class')[$i]
                );
                array_push($educational_qualification, $educational_qualification_single);
            }


            /**
             * Inserting Employeement office Info.
             */
            $office_info = [];
            $total_office_info = sizeof($this->input->post('emp_office_name'));
            for ($i = 0; $i < $total_office_info; $i++) {
                $office_info_single = array(
                    'emp_id' => $lastid,
                    'lan' => 'bn',
                    'emp_office_name' => $this->input->post('emp_office_name')[$i],
                    'emp_office_from' => strtotime($this->input->post('emp_office_from')[$i]),
                    'emp_office_to' => strtotime($this->input->post('emp_office_to')[$i]),
                    'emp_office_duration' => $this->input->post('emp_office_duration')[$i],
                    'emp_office_about' => $this->input->post('emp_office_about')[$i]
                );
                array_push($office_info, $office_info_single);
            }




            /**
             * Inserting Employeement Training. 
             */
            $training_info = [];
            $total_training_info = sizeof($this->input->post('employeement_training'));
            for ($i = 0; $i < $total_training_info; $i++) {
                $training_info_single = array(
                    'emp_id' => $lastid,
                    'lan' => 'bn',
                    'employeement_training_name' => $this->input->post('employeement_training_name')[$i],
                    'employeement_training_institute' => $this->input->post('employeement_training_institute')[$i],
                    'employeement_training_from' => strtotime($this->input->post('employeement_training_from')[$i]),
                    'employeement_training_to' => strtotime($this->input->post('employeement_training_to')[$i]),
                    'employeement_training_duration' => $this->input->post('employeement_training_duration')[$i],
                    'employeement_training' => $this->input->post('employeement_training')[$i]
                );
                array_push($training_info, $training_info_single);
            }


            /**
             * Inserting Nominee Info GPF. 
             */
            $emp_nomini_gpf_info = [];
            $total_emp_nomini_gpf_info = sizeof($this->input->post('emp_gpf_nomini_name_rel'));
            for ($i = 0; $i < $total_emp_nomini_gpf_info; $i++) {
                $emp_nomini_gpf_info_single = array(
                    'emp_id' => $lastid,
                    'lan' => 'bn',
                    'emp_gpf_nomini_name_rel' => $this->input->post('emp_gpf_nomini_name_rel')[$i],
                    'gpf_percent_amount' => $this->input->post('gpf_percent_amount')[$i]
                );
                array_push($emp_nomini_gpf_info, $emp_nomini_gpf_info_single);
            }


            /**
             * Inserting Nominee Info Pention. 
             */
            $emp_nomini_pention_info = [];
            $total_emp_nomini_pention_info = sizeof($this->input->post('emp_pention_nomini_name_rel'));
            for ($i = 0; $i < $total_emp_nomini_pention_info; $i++) {
                $emp_nomini_pention_info_single = array(
                    'emp_id' => $lastid,
                    'lan' => 'bn',
                    'emp_pention_nomini_name_rel' => $this->input->post('emp_pention_nomini_name_rel')[$i],
                    'pention_percent_amount' => $this->input->post('pention_percent_amount')[$i]
                );
                array_push($emp_nomini_pention_info, $emp_nomini_pention_info_single);
            }


            /**
             * Inserting Nominee Info Walfare. 
             */
            $emp_nomini_walfare_info = [];
            $total_emp_nomini_walfare_info = sizeof($this->input->post('emp_walfare_nomini_name_rel'));
            for ($i = 0; $i < $total_emp_nomini_walfare_info; $i++) {
                $emp_nomini_walfare_info_single = array(
                    'emp_id' => $lastid,
                    'lan' => 'bn',
                    'emp_walfare_nomini_name_rel' => $this->input->post('emp_walfare_nomini_name_rel')[$i],
                    'walfare_percent_amount' => $this->input->post('walfare_percent_amount')[$i]
                );
                array_push($emp_nomini_walfare_info, $emp_nomini_walfare_info_single);
            }



            /**
             * Inserting Dead Loss.  emp_dead_loss_nomini_name_rel
             */
            $emp_dead_loss_info = [];
            $total_emp_dead_loss_info = sizeof($this->input->post('emp_dead_loss_nomini_name_rel'));
            for ($i = 0; $i < $total_emp_dead_loss_info; $i++) {
                $emp_dead_loss_info_single = array(
                    'emp_id' => $lastid,
                    'lan' => 'bn',
                    'emp_dead_loss_nomini_name_rel' => $this->input->post('emp_dead_loss_nomini_name_rel')[$i],
                    'emp_dead_loss_percent_amount' => $this->input->post('emp_dead_loss_percent_amount')[$i]
                );
                array_push($emp_dead_loss_info, $emp_dead_loss_info_single);
            }



            /**
             * Inserting Dead Loss.  emp_dead_loss_nomini_name_rel
             */
            $emp_nominee_bima_info = [];
            $total_emp_nominee_bima_info = sizeof($this->input->post('emp_bema_nomini_name_rel'));
            for ($i = 0; $i < $total_emp_nominee_bima_info; $i++) {
                $emp_nominee_bima_info_single = array(
                    'emp_id' => $lastid,
                    'lan' => 'bn',
                    'emp_bema_nomini_name_rel' => $this->input->post('emp_bema_nomini_name_rel')[$i],
                    'bema_percent_amount' => $this->input->post('bema_percent_amount')[$i]
                );
                array_push($emp_nominee_bima_info, $emp_nominee_bima_info_single);
            }


            /**
             * Inserting dat of salary information
             */
            $data_salary = array(
                'emp_id' => $lastid,
                'lan' => 'bn',
                'stp_4_nid' => $this->input->post('stp_4_nid'),
                'stp_4_name_desig' => $this->input->post('stp_4_name_desig'),
                'stp_4_office_name' => $this->input->post('stp_4_office_name'),
                'stp_4_mobile_no' => $this->input->post('stp_4_mobile_no'),
                'stp_4_date_of_birth' => strtotime($this->input->post('stp_4_date_of_birth')),
                'stp_4_first_joining_date' => strtotime($this->input->post('stp_4_first_joining_date')),
                'stp_4_first_joining_designation' => $this->input->post('stp_4_first_joining_designation'),
                'stp_4_employee_identy_number' => $this->input->post('stp_4_employee_identy_number'),
                'stp_4_taken_main_salary' => $this->input->post('stp_4_taken_main_salary'),
                'stp_4_pp' => $this->input->post('stp_4_pp'),
                'stp_4_total_salary_7a_7b' => $this->input->post('stp_4_total_salary_7a_7b'),
                'stp_4_grade_2009' => $this->input->post('stp_4_grade_2009'),
                'stp_4_grade_initial_salary_2009' => $this->input->post('stp_4_grade_initial_salary_2009'),
                'stp_4_total_distance_8_9B' => $this->input->post('stp_4_total_distance_8_9B'),
                'stp_4_grade_2015' => $this->input->post('stp_4_grade_2015'),
                'stp_4_grade_initial_salary_2015' => $this->input->post('stp_4_grade_initial_salary_2015'),
                'stp_4_total_salary_10_11b' => $this->input->post('stp_4_total_salary_10_11b'),
                'stp_4_got_step_from_2015' => $this->input->post('stp_4_got_step_from_2015'),
                'stp_4_got_by_pp' => $this->input->post('stp_4_got_by_pp'),
                'stp_4_main_salary_at_01_07_2015' => $this->input->post('stp_4_main_salary_at_01_07_2015'),
                'stp_4_total_salary_from_01_30' => $this->input->post('stp_4_total_salary_from_01_30'),
                'stp_4_next_salary_increment_date' => strtotime($this->input->post('stp_4_next_salary_increment_date')),
            );

            $this->db->trans_start();

            /**
             * Inserting Educational Qualification. 
             */
            foreach ($educational_qualification as $single_education) {
                if (!empty($single_education['edu_exam_name'])) {
                    $this->Admin_model->insert('educational_qualification', $single_education);
                }
            }
            /**
             * Inserting Employeement office Info.
             */
            foreach ($office_info as $single_office_info) {
                if (!empty($single_office_info['emp_office_name'])) {
                    $this->Admin_model->insert('office_info', $single_office_info);
                }
            }

            /**
             * Inserting Employeement Training. 
             */
            foreach ($training_info as $single_training_info) {
                if (!empty($single_training_info['employeement_training_name'])) {
                    $this->Admin_model->insert('info_training', $single_training_info);
                }
            }

            /**
             * Inserting Nominee Info GPF. 
             */
            foreach ($emp_nomini_gpf_info as $single_emp_nomini_gpf_info) {
                if (!empty($single_emp_nomini_gpf_info['emp_gpf_nomini_name_rel'])) {
                    $this->Admin_model->insert('nominee_info_gpf', $single_emp_nomini_gpf_info);
                }
            }

            /**
             * Inserting Nominee Info Pention. 
             */
            foreach ($emp_nomini_pention_info as $single_emp_nomini_pention_info) {
                if (!empty($single_emp_nomini_pention_info['emp_pention_nomini_name_rel'])) {
                    $this->Admin_model->insert('nominee_info_pention', $single_emp_nomini_pention_info);
                }
            }

            /**
             * Inserting Nominee Info Walfare. 
             */
            foreach ($emp_nomini_walfare_info as $single_emp_nomini_walfare_info) {
                if (!empty($single_emp_nomini_walfare_info['emp_walfare_nomini_name_rel'])) {
                    $this->Admin_model->insert('nominee_info_walfare', $single_emp_nomini_walfare_info);
                }
            }

            /**
             * Inserting Dead Loss.  emp_dead_loss_nomini_name_rel
             */
            foreach ($emp_dead_loss_info as $single_emp_dead_loss_info_single) {
                if (!empty($single_emp_dead_loss_info_single['emp_dead_loss_nomini_name_rel'])) {
                    $this->Admin_model->insert('nominee_info_dead_loss', $single_emp_dead_loss_info_single);
                }
            }

            /**
             * Inserting Bema Info
             */
            foreach ($emp_nominee_bima_info as $emp_nominee_bima_info_single) {
                if (!empty($emp_nominee_bima_info_single['emp_bema_nomini_name_rel'])) {
                    $this->Admin_model->insert('nominee_info_bema', $emp_nominee_bima_info_single);
                }
            }
            $this->Admin_model->insert('salary_info', $data_salary);

            $this->db->trans_complete();

            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
            } else {
                $this->db->trans_commit();
            }

            $this->session->set_flashdata('msg', 'emp_add_success');
            redirect(base_url('admin/employee/' . $lastid));
        } /* == End Condition == */ else {

            $this->session->set_flashdata('msg', 'emp_name_required');
            $back = '<script>window.history.go(-1);</script>';
            echo $back;
        }
    }

    public function save_user_info_en() {

        /**
         * Inserting Basic Info
         */
        $computer_skill = $this->input->post('emp_computer_skill');
        if (!empty($computer_skill)) {
            $computer_skill = serialize($this->input->post('emp_computer_skill'));
        } else {
            $computer_skill = '';
        }
        $data = array(
            'lan' => 'en',
            'emp_id' => $this->input->post('employee_id'),
            'emp_name' => $this->input->post('emp_name'),
            'emp_id_number' => $this->input->post('emp_id_number'),
            'emp_current_designation' => $this->input->post('emp_current_designation'),
            'emp_appointment_designation' => $this->input->post('emp_appointment_designation'),
            'emp_apointment_date' => strtotime($this->input->post('emp_apointment_date')),
            'emp_retirement_date' => strtotime($this->input->post('emp_retirement_date')),
            'emp_current_office' => $this->input->post('emp_current_office'),
            'emp_promotion_date' => strtotime($this->input->post('emp_promotion_date')),
            'emp_current_office_appointment_date' => strtotime($this->input->post('emp_current_office_appointment_date')),
            'emp_recent_prev_joining_place' => $this->input->post('emp_recent_prev_joining_place'),
            'emp_recent_prev_designation' => $this->input->post('emp_recent_prev_designation'),
            'emp_recent_prev_joining_date' => strtotime($this->input->post('emp_recent_prev_joining_date')),
            'emp_nationality' => $this->input->post('emp_nationality'),
            'emp_nid_no' => $this->input->post('emp_nid_no'),
            'emp_religion' => $this->input->post('emp_religion'),
            'emp_passport_no' => $this->input->post('emp_passport_no'),
            'emp_father_name' => $this->input->post('emp_father_name'),
            'emp_mother_name' => $this->input->post('emp_mother_name'),
            'emp_birth_date' => strtotime($this->input->post('emp_birth_date')),
            'emp_blood_group' => $this->input->post('emp_blood_group'),
            'emp_sex' => $this->input->post('emp_sex'),
            'emp_merital_status' => $this->input->post('emp_merital_status'),
            'emp_spose' => $this->input->post('emp_spose'),
            'emp_telephone_number' => $this->input->post('emp_telephone_number'),
            'emp_mobile_number' => $this->input->post('emp_mobile_number'),
            'emp_tin' => $this->input->post('emp_tin'),
            'emp_email' => $this->input->post('emp_email'),
            'emp_add_village' => $this->input->post('emp_add_village'),
            'emp_add_post' => $this->input->post('emp_add_post'),
            'emp_add_po' => $this->input->post('emp_add_po'),
            'emp_add_district' => $this->input->post('emp_add_district'),
            'emp_per_add_house' => $this->input->post('emp_per_add_house'),
            'emp_per_add_road' => $this->input->post('emp_per_add_road'),
            'emp_per_add_village' => $this->input->post('emp_per_add_village'),
            'emp_per_add_post' => $this->input->post('emp_per_add_post'),
            'emp_per_add_po' => $this->input->post('emp_per_add_po'),
            'emp_per_add_district' => $this->input->post('emp_per_add_district'),
            'emp_computer_skill' => $computer_skill,
            'emp_children_amount' => $this->input->post('emp_children_amount'),
            'emp_extra_experience' => $this->input->post('emp_extra_experience')
        );

        /**
         * Inserting Basic Info
         */
        $emp_name = $this->input->post('emp_name');
        $emp_id = $this->input->post('employee_id');
        if (!empty($emp_name)) {
            $query_cont = $this->Admin_model->insert('basic_info_en', $data);


            /**
             * Inserting Educational Qualification. 
             */
            $educational_qualification = [];
            $total_edu_exam_name = sizeof($this->input->post('edu_exam_name'));
            for ($i = 0; $i < $total_edu_exam_name; $i++) {
                $educational_qualification_single = array(
                    'emp_id' => $emp_id,
                    'lan' => 'en',
                    'edu_exam_name' => $this->input->post('edu_exam_name')[$i],
                    'edu_exam_dept' => $this->input->post('edu_exam_dept')[$i],
                    'edu_passing_year' => $this->input->post('edu_passing_year')[$i],
                    'edu_university_board' => $this->input->post('edu_university_board')[$i],
                    'edu_gpa_class' => $this->input->post('edu_gpa_class')[$i]
                );
                array_push($educational_qualification, $educational_qualification_single);
            }


            /**
             * Inserting Employeement office Info.
             */
            $office_info = [];
            $total_office_info = sizeof($this->input->post('emp_office_name'));
            for ($i = 0; $i < $total_office_info; $i++) {
                $office_info_single = array(
                    'emp_id' => $emp_id,
                    'lan' => 'en',
                    'emp_office_name' => $this->input->post('emp_office_name')[$i],
                    'emp_office_from' => strtotime($this->input->post('emp_office_from')[$i]),
                    'emp_office_to' => strtotime($this->input->post('emp_office_to')[$i]),
                    'emp_office_duration' => $this->input->post('emp_office_duration')[$i],
                    'emp_office_about' => $this->input->post('emp_office_about')[$i]
                );
                array_push($office_info, $office_info_single);
            }




            /**
             * Inserting Employeement Training. 
             */
            $training_info = [];
            $total_training_info = sizeof($this->input->post('employeement_training'));
            for ($i = 0; $i < $total_training_info; $i++) {
                $training_info_single = array(
                    'emp_id' => $emp_id,
                    'lan' => 'en',
                    'employeement_training_name' => $this->input->post('employeement_training_name')[$i],
                    'employeement_training_institute' => $this->input->post('employeement_training_institute')[$i],
                    'employeement_training_from' => strtotime($this->input->post('employeement_training_from')[$i]),
                    'employeement_training_to' => strtotime($this->input->post('employeement_training_to')[$i]),
                    'employeement_training_duration' => $this->input->post('employeement_training_duration')[$i],
                    'employeement_training' => $this->input->post('employeement_training')[$i]
                );
                array_push($training_info, $training_info_single);
            }


            /**
             * Inserting Nominee Info GPF. 
             */
            $emp_nomini_gpf_info = [];
            $total_emp_nomini_gpf_info = sizeof($this->input->post('emp_gpf_nomini_name_rel'));
            for ($i = 0; $i < $total_emp_nomini_gpf_info; $i++) {
                $emp_nomini_gpf_info_single = array(
                    'emp_id' => $emp_id,
                    'lan' => 'en',
                    'emp_gpf_nomini_name_rel' => $this->input->post('emp_gpf_nomini_name_rel')[$i],
                    'gpf_percent_amount' => $this->input->post('gpf_percent_amount')[$i]
                );
                array_push($emp_nomini_gpf_info, $emp_nomini_gpf_info_single);
            }


            /**
             * Inserting Nominee Info Pention. 
             */
            $emp_nomini_pention_info = [];
            $total_emp_nomini_pention_info = sizeof($this->input->post('emp_pention_nomini_name_rel'));
            for ($i = 0; $i < $total_emp_nomini_pention_info; $i++) {
                $emp_nomini_pention_info_single = array(
                    'emp_id' => $emp_id,
                    'lan' => 'en',
                    'emp_pention_nomini_name_rel' => $this->input->post('emp_pention_nomini_name_rel')[$i],
                    'pention_percent_amount' => $this->input->post('pention_percent_amount')[$i]
                );
                array_push($emp_nomini_pention_info, $emp_nomini_pention_info_single);
            }


            /**
             * Inserting Nominee Info Walfare. 
             */
            $emp_nomini_walfare_info = [];
            $total_emp_nomini_walfare_info = sizeof($this->input->post('emp_walfare_nomini_name_rel'));
            for ($i = 0; $i < $total_emp_nomini_walfare_info; $i++) {
                $emp_nomini_walfare_info_single = array(
                    'emp_id' => $emp_id,
                    'lan' => 'en',
                    'emp_walfare_nomini_name_rel' => $this->input->post('emp_walfare_nomini_name_rel')[$i],
                    'walfare_percent_amount' => $this->input->post('walfare_percent_amount')[$i]
                );
                array_push($emp_nomini_walfare_info, $emp_nomini_walfare_info_single);
            }



            /**
             * Inserting Dead Loss.  emp_dead_loss_nomini_name_rel
             */
            $emp_dead_loss_info = [];
            $total_emp_dead_loss_info = sizeof($this->input->post('emp_dead_loss_nomini_name_rel'));
            for ($i = 0; $i < $total_emp_dead_loss_info; $i++) {
                $emp_dead_loss_info_single = array(
                    'emp_id' => $emp_id,
                    'lan' => 'en',
                    'emp_dead_loss_nomini_name_rel' => $this->input->post('emp_dead_loss_nomini_name_rel')[$i],
                    'emp_dead_loss_percent_amount' => $this->input->post('emp_dead_loss_percent_amount')[$i]
                );
                array_push($emp_dead_loss_info, $emp_dead_loss_info_single);
            }



            /**
             * Inserting Dead Loss.  emp_dead_loss_nomini_name_rel
             */
            $emp_nominee_bima_info = [];
            $total_emp_nominee_bima_info = sizeof($this->input->post('emp_bema_nomini_name_rel'));
            for ($i = 0; $i < $total_emp_nominee_bima_info; $i++) {
                $emp_nominee_bima_info_single = array(
                    'emp_id' => $emp_id,
                    'lan' => 'en',
                    'emp_bema_nomini_name_rel' => $this->input->post('emp_bema_nomini_name_rel')[$i],
                    'bema_percent_amount' => $this->input->post('bema_percent_amount')[$i]
                );
                array_push($emp_nominee_bima_info, $emp_nominee_bima_info_single);
            }


            /**
             * Inserting dat of salary information
             */
            $data_salary = array(
                'emp_id' => $emp_id,
                'lan' => 'en',
                'stp_4_nid' => $this->input->post('stp_4_nid'),
                'stp_4_name_desig' => $this->input->post('stp_4_name_desig'),
                'stp_4_office_name' => $this->input->post('stp_4_office_name'),
                'stp_4_mobile_no' => $this->input->post('stp_4_mobile_no'),
                'stp_4_date_of_birth' => strtotime($this->input->post('stp_4_date_of_birth')),
                'stp_4_first_joining_date' => strtotime($this->input->post('stp_4_first_joining_date')),
                'stp_4_first_joining_designation' => $this->input->post('stp_4_first_joining_designation'),
                'stp_4_employee_identy_number' => $this->input->post('stp_4_employee_identy_number'),
                'stp_4_taken_main_salary' => $this->input->post('stp_4_taken_main_salary'),
                'stp_4_pp' => $this->input->post('stp_4_pp'),
                'stp_4_total_salary_7a_7b' => $this->input->post('stp_4_total_salary_7a_7b'),
                'stp_4_grade_2009' => $this->input->post('stp_4_grade_2009'),
                'stp_4_grade_initial_salary_2009' => $this->input->post('stp_4_grade_initial_salary_2009'),
                'stp_4_total_distance_8_9B' => $this->input->post('stp_4_total_distance_8_9B'),
                'stp_4_grade_2015' => $this->input->post('stp_4_grade_2015'),
                'stp_4_grade_initial_salary_2015' => $this->input->post('stp_4_grade_initial_salary_2015'),
                'stp_4_total_salary_10_11b' => $this->input->post('stp_4_total_salary_10_11b'),
                'stp_4_got_step_from_2015' => $this->input->post('stp_4_got_step_from_2015'),
                'stp_4_got_by_pp' => $this->input->post('stp_4_got_by_pp'),
                'stp_4_main_salary_at_01_07_2015' => $this->input->post('stp_4_main_salary_at_01_07_2015'),
                'stp_4_total_salary_from_01_30' => $this->input->post('stp_4_total_salary_from_01_30'),
                'stp_4_next_salary_increment_date' => strtotime($this->input->post('stp_4_next_salary_increment_date')),
            );

            $this->db->trans_start();

            /**
             * Inserting Educational Qualification. 
             */
            foreach ($educational_qualification as $single_education) {
                if (!empty($single_education['edu_exam_name'])) {
                    $this->Admin_model->insert('educational_qualification', $single_education);
                }
            }
            /**
             * Inserting Employeement office Info.
             */
            foreach ($office_info as $single_office_info) {
                if (!empty($single_office_info['emp_office_name'])) {
                    $this->Admin_model->insert('office_info', $single_office_info);
                }
            }

            /**
             * Inserting Employeement Training. 
             */
            foreach ($training_info as $single_training_info) {
                if (!empty($single_training_info['employeement_training_name'])) {
                    $this->Admin_model->insert('info_training', $single_training_info);
                }
            }

            /**
             * Inserting Nominee Info GPF. 
             */
            foreach ($emp_nomini_gpf_info as $single_emp_nomini_gpf_info) {
                if (!empty($single_emp_nomini_gpf_info['emp_gpf_nomini_name_rel'])) {
                    $this->Admin_model->insert('nominee_info_gpf', $single_emp_nomini_gpf_info);
                }
            }

            /**
             * Inserting Nominee Info Pention. 
             */
            foreach ($emp_nomini_pention_info as $single_emp_nomini_pention_info) {
                if (!empty($single_emp_nomini_pention_info['emp_pention_nomini_name_rel'])) {
                    $this->Admin_model->insert('nominee_info_pention', $single_emp_nomini_pention_info);
                }
            }

            /**
             * Inserting Nominee Info Walfare. 
             */
            foreach ($emp_nomini_walfare_info as $single_emp_nomini_walfare_info) {
                if (!empty($single_emp_nomini_walfare_info['emp_walfare_nomini_name_rel'])) {
                    $this->Admin_model->insert('nominee_info_walfare', $single_emp_nomini_walfare_info);
                }
            }

            /**
             * Inserting Dead Loss.  emp_dead_loss_nomini_name_rel
             */
            foreach ($emp_dead_loss_info as $single_emp_dead_loss_info_single) {
                if (!empty($single_emp_dead_loss_info_single['emp_dead_loss_nomini_name_rel'])) {
                    $this->Admin_model->insert('nominee_info_dead_loss', $single_emp_dead_loss_info_single);
                }
            }

            /**
             * Inserting Bema Info
             */
            foreach ($emp_nominee_bima_info as $emp_nominee_bima_info_single) {
                if (!empty($emp_nominee_bima_info_single['emp_bema_nomini_name_rel'])) {
                    $this->Admin_model->insert('nominee_info_bema', $emp_nominee_bima_info_single);
                }
            }
            $this->Admin_model->insert('salary_info', $data_salary);

            $this->db->trans_complete();

            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
            } else {
                $this->db->trans_commit();
            }

            $this->session->set_flashdata('msg', 'emp_add_success');
            redirect(base_url('admin/employee/' . $lastid));
        } /* == End Condition == */ else {

            $this->session->set_flashdata('msg', 'emp_name_required');
            $back = '<script>window.history.go(-1);</script>';
            echo $back;
        }
    }

    public function edit() {
        $this->data->meta = 'employee';
        $this->data->active = '';
        $this->data->status = '';

        $user_id = $this->uri->segment(3);

        if (isset($user_id)) {
            if (is_numeric($user_id)) {
                $basic_info = $this->Admin_model->getById('basic_info', 'id', $user_id);
                if (!empty($basic_info)) {
                    $info['basic_info'] = $basic_info;

                    $educational_qualification = $this->Admin_model->getByIdLn('educational_qualification', $user_id, 'bn');
                    $info['educational_qualification'] = $educational_qualification;

                    $office_info = $this->Admin_model->getByIdLn('office_info', $user_id, 'bn');
                    $info['office_info'] = $office_info;

                    $training_info = $this->Admin_model->getByIdLn('info_training', $user_id, 'bn');
                    $info['training_info'] = $training_info;

                    $nominee_info_gpf = $this->Admin_model->getByIdLn('nominee_info_gpf', $user_id, 'bn');
                    $info['nominee_info_gpf'] = $nominee_info_gpf;

                    $nominee_info_pention = $this->Admin_model->getByIdLn('nominee_info_pention', $user_id, 'bn');
                    $info['nominee_info_pention'] = $nominee_info_pention;

                    $nominee_info_walfare = $this->Admin_model->getByIdLn('nominee_info_walfare', $user_id, 'bn');
                    $info['nominee_info_walfare'] = $nominee_info_walfare;

                    $nominee_info_dead_loss = $this->Admin_model->getByIdLn('nominee_info_dead_loss', $user_id, 'bn');
                    $info['nominee_info_dead_loss'] = $nominee_info_dead_loss;

                    $nominee_info_bema = $this->Admin_model->getByIdLn('nominee_info_bema', $user_id, 'bn');
                    $info['nominee_info_bema'] = $nominee_info_bema;

                    $salary_info = $this->Admin_model->getByIdLn('salary_info', $user_id, 'bn');
                    $info['salary_info'] = $salary_info;

                    $this->data->info = $info;

                    $this->template->load('admin/template/template_dashboard_admin', 'admin/edit_employee', $this->data);
                } else {
                    $this->data->status = 'empty';
                    $this->template->load('admin/template/template_dashboard_admin', 'admin/edit_employee', $this->data);
                }
            } else {
                $this->data->status = 'not_valid';
                $this->template->load('admin/template/template_dashboard_admin', 'admin/edit_employee', $this->data);
            }
        } else {
            $this->data->status = 'empty';
            $this->template->load('admin/template/template_dashboard_admin', 'admin/edit_employee', $this->data);
        }
    }

    public function edit_en() {
        $this->data->meta = 'employee';
        $this->data->active = '';
        $this->data->status = '';

        $user_id = $this->uri->segment(3);

        if (isset($user_id)) {
            if (is_numeric($user_id)) {
                $basic_info = $this->Admin_model->getByIdLnBasicEn('basic_info_en', $user_id, 'en');
                $info['basic_info'] = $basic_info;

                $educational_qualification = $this->Admin_model->getByIdLn('educational_qualification', $user_id, 'en');
                $info['educational_qualification'] = $educational_qualification;

                $office_info = $this->Admin_model->getByIdLn('office_info', $user_id, 'en');
                $info['office_info'] = $office_info;

                $training_info = $this->Admin_model->getByIdLn('info_training', $user_id, 'en');
                $info['training_info'] = $training_info;

                $nominee_info_gpf = $this->Admin_model->getByIdLn('nominee_info_gpf', $user_id, 'en');
                $info['nominee_info_gpf'] = $nominee_info_gpf;

                $nominee_info_pention = $this->Admin_model->getByIdLn('nominee_info_pention', $user_id, 'en');
                $info['nominee_info_pention'] = $nominee_info_pention;

                $nominee_info_walfare = $this->Admin_model->getByIdLn('nominee_info_walfare', $user_id, 'en');
                $info['nominee_info_walfare'] = $nominee_info_walfare;

                $nominee_info_dead_loss = $this->Admin_model->getByIdLn('nominee_info_dead_loss', $user_id, 'en');
                $info['nominee_info_dead_loss'] = $nominee_info_dead_loss;

                $nominee_info_bema = $this->Admin_model->getByIdLn('nominee_info_bema', $user_id, 'en');
                $info['nominee_info_bema'] = $nominee_info_bema;

                $salary_info = $this->Admin_model->getByIdLn('salary_info', $user_id, 'en');
                $info['salary_info'] = $salary_info;

                $this->data->info = $info;

                $this->template->load('admin/template/template_dashboard_admin', 'admin/edit_employee_en', $this->data);
            } else {
                $this->data->status = 'not_valid';
                $this->template->load('admin/template/template_dashboard_admin', 'admin/edit_employee_en', $this->data);
            }
        } else {
            $this->data->status = 'empty';
            $this->template->load('admin/template/template_dashboard_admin', 'admin/edit_employee_en', $this->data);
        }
    }

    public function edit_en_new() {
        $this->data->meta = 'employee';
        $this->data->active = '';
        $this->data->status = '';

        $user_id = $this->uri->segment(3);
        $this->template->load('admin/template/template_dashboard_admin', 'admin/employee_en_new', $this->data);
    }

    public function update_user_info() {
        $this->data->meta = 'employee';
        $this->data->active = '';
        $this->data->status = '';

        $employee_id = $this->input->post('employee_id');
        $lan = $this->input->post('lan');

        $computer_skill = $this->input->post('emp_computer_skill');
        if (!empty($computer_skill)) {
            $computer_skill = serialize($this->input->post('emp_computer_skill'));
        } else {
            $computer_skill = '';
        }
        /**
         * Inserting Basic Info
         */
        $data = array(
            'emp_dept' => $this->input->post('emp_dept'),
            'lan' => $this->input->post('lan'),
            'emp_name' => $this->input->post('emp_name'),
            'emp_name_eng' => $this->input->post('emp_name_eng'),
            'emp_id_number' => $this->input->post('emp_id_number'),
            'emp_current_designation' => $this->input->post('emp_current_designation'),
            'emp_appointment_designation' => $this->input->post('emp_appointment_designation'),
            'emp_apointment_date' => strtotime($this->input->post('emp_apointment_date')),
            'emp_retirement_date' => strtotime($this->input->post('emp_retirement_date')),
            'emp_current_office' => $this->input->post('emp_current_office'),
            'emp_promotion_date' => strtotime($this->input->post('emp_promotion_date')),
            'emp_current_office_appointment_date' => strtotime($this->input->post('emp_current_office_appointment_date')),
            'emp_recent_prev_joining_place' => $this->input->post('emp_recent_prev_joining_place'),
            'emp_recent_prev_designation' => $this->input->post('emp_recent_prev_designation'),
            'emp_recent_prev_joining_date' => strtotime($this->input->post('emp_recent_prev_joining_date')),
            'emp_nationality' => $this->input->post('emp_nationality'),
            'emp_nid_no' => $this->input->post('emp_nid_no'),
            'emp_religion' => $this->input->post('emp_religion'),
            'emp_passport_no' => $this->input->post('emp_passport_no'),
            'emp_father_name' => $this->input->post('emp_father_name'),
            'emp_mother_name' => $this->input->post('emp_mother_name'),
            'emp_birth_date' => strtotime($this->input->post('emp_birth_date')),
            'emp_blood_group' => $this->input->post('emp_blood_group'),
            'emp_sex' => $this->input->post('emp_sex'),
            'emp_merital_status' => $this->input->post('emp_merital_status'),
            'emp_spose' => $this->input->post('emp_spose'),
            'emp_telephone_number' => $this->input->post('emp_telephone_number'),
            'emp_mobile_number' => $this->input->post('emp_mobile_number'),
            'emp_tin' => $this->input->post('emp_tin'),
            'emp_email' => $this->input->post('emp_email'),
            'emp_add_village' => $this->input->post('emp_add_village'),
            'emp_add_post' => $this->input->post('emp_add_post'),
            'emp_add_po' => $this->input->post('emp_add_po'),
            'emp_add_district' => $this->input->post('emp_add_district'),
            'emp_per_add_house' => $this->input->post('emp_per_add_house'),
            'emp_per_add_road' => $this->input->post('emp_per_add_road'),
            'emp_per_add_village' => $this->input->post('emp_per_add_village'),
            'emp_per_add_post' => $this->input->post('emp_per_add_post'),
            'emp_per_add_po' => $this->input->post('emp_per_add_po'),
            'emp_per_add_district' => $this->input->post('emp_per_add_district'),
            'emp_computer_skill' => $computer_skill,
            'emp_children_amount' => $this->input->post('emp_children_amount'),
            'emp_extra_experience' => $this->input->post('emp_extra_experience')
        );
        /**
         * Inserting Basic Info
         */
        $emp_up_name = $this->input->post('emp_name');
        if (!empty($emp_up_name)) {
            if ($this->input->post('lan') == 'bn') {
                $this->Admin_model->update('basic_info', $data, 'id', $employee_id);
            } else if ($this->input->post('lan') == 'en') {
                $this->Admin_model->update('basic_info_en', $data, 'emp_id', $employee_id);
            }
        }
        /**
         * Update Educational Qualification. 
         */
        $educational_qualification = [];
        $total_edu_exam_name = sizeof($this->input->post('edu_exam_name'));
        for ($i = 0; $i < $total_edu_exam_name; $i++) {
            $educational_qualification_single = array(
                'lan' => $this->input->post('lan'),
                'edu_exam_name' => $this->input->post('edu_exam_name')[$i],
                'edu_exam_dept' => $this->input->post('edu_exam_dept')[$i],
                'edu_passing_year' => $this->input->post('edu_passing_year')[$i],
                'edu_university_board' => $this->input->post('edu_university_board')[$i],
                'edu_gpa_class' => $this->input->post('edu_gpa_class')[$i],
                'id' => $this->input->post('education_id')[$i]
            );
            array_push($educational_qualification, $educational_qualification_single);
        }
        foreach ($educational_qualification as $single_education) {
            if (!empty($single_education['edu_exam_name'])) {
                $this->Admin_model->updateByLn('educational_qualification', $single_education, $single_education['id'], $lan);
            }
        }
        /**
         * Inserting Educational Qualification. 
         */
        $educational_qualification_new = [];
        $total_edu_exam_name_new = sizeof($this->input->post('edu_exam_name_new'));
        for ($i = 0; $i < $total_edu_exam_name_new; $i++) {
            $educational_qualification_single_new = array(
                'emp_id' => $employee_id,
                'lan' => $this->input->post('lan'),
                'edu_exam_name' => $this->input->post('edu_exam_name_new')[$i],
                'edu_exam_dept' => $this->input->post('edu_exam_dept_new')[$i],
                'edu_passing_year' => $this->input->post('edu_passing_year_new')[$i],
                'edu_university_board' => $this->input->post('edu_university_board_new')[$i],
                'edu_gpa_class' => $this->input->post('edu_gpa_class_new')[$i]
            );
            array_push($educational_qualification_new, $educational_qualification_single_new);
        }
        foreach ($educational_qualification_new as $single_education_new) {
            if (!empty($single_education_new['edu_exam_name'])) {
                $this->Admin_model->insert('educational_qualification', $single_education_new);
            }
        }



        /**
         * Updating office Info.
         */
        $office_info = [];
        $total_office_info = sizeof($this->input->post('emp_office_name'));
        for ($i = 0; $i < $total_office_info; $i++) {
            $office_info_single = array(
                'lan' => $this->input->post('lan'),
                'emp_office_name' => $this->input->post('emp_office_name')[$i],
                'emp_office_from' => strtotime($this->input->post('emp_office_from')[$i]),
                'emp_office_to' => strtotime($this->input->post('emp_office_to')[$i]),
                'emp_office_duration' => $this->input->post('emp_office_duration')[$i],
                'emp_office_about' => $this->input->post('emp_office_about')[$i],
                'id' => $this->input->post('emp_office_id')[$i]
            );
            array_push($office_info, $office_info_single);
        }
        foreach ($office_info as $single_office_info) {
            if (!empty($single_office_info['emp_office_name'])) {
                $this->Admin_model->updateByLn('office_info', $single_office_info, $single_office_info['id'], $lan);
            }
        }
        /**
         * Inserting office Info.
         */
        $office_info_new = [];
        $total_office_info_new = sizeof($this->input->post('emp_office_name_new'));
        for ($i = 0; $i < $total_office_info_new; $i++) {
            $office_info_single_new = array(
                'emp_id' => $employee_id,
                'lan' => $this->input->post('lan'),
                'emp_office_name' => $this->input->post('emp_office_name_new')[$i],
                'emp_office_from' => strtotime($this->input->post('emp_office_from_new')[$i]),
                'emp_office_to' => strtotime($this->input->post('emp_office_to_new')[$i]),
                'emp_office_duration' => $this->input->post('emp_office_duration_new')[$i],
                'emp_office_about' => $this->input->post('emp_office_about_new')[$i]
            );
            array_push($office_info_new, $office_info_single_new);
        }
        foreach ($office_info_new as $single_office_info_new) {
            if (!empty($single_office_info_new['emp_office_name'])) {
                $this->Admin_model->insert('office_info', $single_office_info_new);
            }
        }




        /**
         * Updating Employee Training. 
         */
        $training_info = [];
        $total_training_info = sizeof($this->input->post('employeement_training'));
        for ($i = 0; $i < $total_training_info; $i++) {
            $training_info_single = array(
                'lan' => $this->input->post('lan'),
                'employeement_training_name' => $this->input->post('employeement_training_name')[$i],
                'employeement_training_institute' => $this->input->post('employeement_training_institute')[$i],
                'employeement_training_from' => strtotime($this->input->post('employeement_training_from')[$i]),
                'employeement_training_to' => strtotime($this->input->post('employeement_training_to')[$i]),
                'employeement_training_duration' => $this->input->post('employeement_training_duration')[$i],
                'employeement_training' => $this->input->post('employeement_training')[$i],
                'id' => $this->input->post('employeement_training_id')[$i]
            );
            array_push($training_info, $training_info_single);
        }
        foreach ($training_info as $single_training_info) {
            if (!empty($single_training_info['employeement_training'])) {
                $this->Admin_model->update('info_training', $single_training_info, 'id', $single_training_info['id']);
            }
        }
        /**
         * Inserting Employee Training. 
         */
        $training_info_new = [];
        $total_training_info_new = sizeof($this->input->post('employeement_training_new'));
        for ($i = 0; $i < $total_training_info_new; $i++) {
            $training_info_single_new = array(
                'emp_id' => $employee_id,
                'lan' => $this->input->post('lan'),
                'employeement_training_name' => $this->input->post('employeement_training_name_new')[$i],
                'employeement_training_institute' => $this->input->post('employeement_training_institute_new')[$i],
                'employeement_training_from' => strtotime($this->input->post('employeement_training_from_new')[$i]),
                'employeement_training_to' => strtotime($this->input->post('employeement_training_to_new')[$i]),
                'employeement_training_duration' => $this->input->post('employeement_training_duration_new')[$i],
                'employeement_training' => $this->input->post('employeement_training_new')[$i],
            );
            array_push($training_info_new, $training_info_single_new);
        }
        foreach ($training_info_new as $single_training_info_new) {
            if (!empty($single_training_info_new['employeement_training'])) {
                $this->Admin_model->insert('info_training', $single_training_info_new);
            }
        }



        /**
         * Updating Nominee Info GPF. 
         */
        $emp_nomini_gpf_info = [];
        $total_emp_nomini_gpf_info = sizeof($this->input->post('emp_gpf_nomini_name_rel'));
        for ($i = 0; $i < $total_emp_nomini_gpf_info; $i++) {
            $emp_nomini_gpf_info_single = array(
                'lan' => $this->input->post('lan'),
                'emp_gpf_nomini_name_rel' => $this->input->post('emp_gpf_nomini_name_rel')[$i],
                'gpf_percent_amount' => $this->input->post('gpf_percent_amount')[$i],
                'id' => $this->input->post('nominee_gpf_id')[$i]
            );
            array_push($emp_nomini_gpf_info, $emp_nomini_gpf_info_single);
        }
        foreach ($emp_nomini_gpf_info as $single_emp_nomini_gpf_info) {
            if (!empty($single_emp_nomini_gpf_info['emp_gpf_nomini_name_rel'])) {
                $this->Admin_model->update('nominee_info_gpf', $single_emp_nomini_gpf_info, 'id', $single_emp_nomini_gpf_info['id']);
            }
        }
        /**
         * Inserting Nominee Info GPF. 
         */
        $emp_nomini_gpf_info_new = [];
        $total_emp_nomini_gpf_info_new = sizeof($this->input->post('emp_gpf_nomini_name_rel_new'));
        for ($i = 0; $i < $total_emp_nomini_gpf_info_new; $i++) {
            $emp_nomini_gpf_info_single_new = array(
                'emp_id' => $employee_id,
                'lan' => $this->input->post('lan'),
                'emp_gpf_nomini_name_rel' => $this->input->post('emp_gpf_nomini_name_rel_new')[$i],
                'gpf_percent_amount' => $this->input->post('gpf_percent_amount_new')[$i]
            );
            array_push($emp_nomini_gpf_info_new, $emp_nomini_gpf_info_single_new);
        }

        foreach ($emp_nomini_gpf_info_new as $single_emp_nomini_gpf_info_new) {
            if (!empty($single_emp_nomini_gpf_info_new['emp_gpf_nomini_name_rel'])) {
                $this->Admin_model->insert('nominee_info_gpf', $single_emp_nomini_gpf_info_new);
            }
        }


        /**
         * Updating Nominee Info Pention. 
         */
        $emp_nomini_pention_info = [];
        $total_emp_nomini_pention_info = sizeof($this->input->post('emp_pention_nomini_name_rel'));
        for ($i = 0; $i < $total_emp_nomini_pention_info; $i++) {
            $emp_nomini_pention_info_single = array(
                'lan' => $this->input->post('lan'),
                'emp_pention_nomini_name_rel' => $this->input->post('emp_pention_nomini_name_rel')[$i],
                'pention_percent_amount' => $this->input->post('pention_percent_amount')[$i],
                'id' => $this->input->post('nominee_pention_info_id')[$i]
            );
            array_push($emp_nomini_pention_info, $emp_nomini_pention_info_single);
        }
        foreach ($emp_nomini_pention_info as $single_emp_nomini_pention_info) {
            if (!empty($single_emp_nomini_pention_info['emp_pention_nomini_name_rel'])) {
                $this->Admin_model->update('nominee_info_pention', $single_emp_nomini_pention_info, 'id', $single_emp_nomini_pention_info['id']);
            }
        }
        /**
         * Inserting Nominee Info Pention. 
         */
        $emp_nomini_pention_info_new = [];
        $total_emp_nomini_pention_info_new = sizeof($this->input->post('emp_pention_nomini_name_rel_new'));
        for ($i = 0; $i < $total_emp_nomini_pention_info_new; $i++) {
            $emp_nomini_pention_info_single_new = array(
                'emp_id' => $employee_id,
                'lan' => $this->input->post('lan'),
                'emp_pention_nomini_name_rel' => $this->input->post('emp_pention_nomini_name_rel_new')[$i],
                'pention_percent_amount' => $this->input->post('pention_percent_amount_new')[$i]
            );
            array_push($emp_nomini_pention_info_new, $emp_nomini_pention_info_single_new);
        }
        foreach ($emp_nomini_pention_info_new as $single_emp_nomini_pention_info_new) {
            if (!empty($single_emp_nomini_pention_info_new['emp_pention_nomini_name_rel'])) {
                $this->Admin_model->insert('nominee_info_pention', $single_emp_nomini_pention_info_new);
            }
        }



        /**
         * Updating Nominee Info Walfare. 
         */
        $emp_nomini_walfare_info = [];
        $total_emp_nomini_walfare_info = sizeof($this->input->post('emp_walfare_nomini_name_rel'));
        for ($i = 0; $i < $total_emp_nomini_walfare_info; $i++) {
            $emp_nomini_walfare_info_single = array(
                'lan' => $this->input->post('lan'),
                'emp_walfare_nomini_name_rel' => $this->input->post('emp_walfare_nomini_name_rel')[$i],
                'walfare_percent_amount' => $this->input->post('walfare_percent_amount')[$i],
                'id' => $this->input->post('nominee_walfare_info_id')[$i]
            );
            array_push($emp_nomini_walfare_info, $emp_nomini_walfare_info_single);
        }
        foreach ($emp_nomini_walfare_info as $single_emp_nomini_walfare_info) {
            if (!empty($single_emp_nomini_walfare_info['emp_walfare_nomini_name_rel'])) {
                $this->Admin_model->update('nominee_info_walfare', $single_emp_nomini_walfare_info, 'id', $single_emp_nomini_walfare_info['id']);
            }
        }
        /**
         * Inserting Nominee Info Walfare. 
         */
        $emp_nomini_walfare_info_new = [];
        $total_emp_nomini_walfare_info_new = sizeof($this->input->post('emp_walfare_nomini_name_rel_new'));
        for ($i = 0; $i < $total_emp_nomini_walfare_info_new; $i++) {
            $emp_nomini_walfare_info_single_new = array(
                'emp_id' => $employee_id,
                'lan' => $this->input->post('lan'),
                'emp_walfare_nomini_name_rel' => $this->input->post('emp_walfare_nomini_name_rel_new')[$i],
                'walfare_percent_amount' => $this->input->post('walfare_percent_amount_new')[$i]
            );
            array_push($emp_nomini_walfare_info_new, $emp_nomini_walfare_info_single_new);
        }
        foreach ($emp_nomini_walfare_info_new as $single_emp_nomini_walfare_info_new) {
            if (!empty($single_emp_nomini_walfare_info_new['emp_walfare_nomini_name_rel'])) {
                $this->Admin_model->insert('nominee_info_walfare', $single_emp_nomini_walfare_info_new);
            }
        }




        /**
         * Updating Dead Loss.  emp_dead_loss_nomini_name_rel
         */
        $emp_dead_loss_info = [];
        $total_emp_dead_loss_info = sizeof($this->input->post('emp_dead_loss_nomini_name_rel'));
        for ($i = 0; $i < $total_emp_dead_loss_info; $i++) {
            $emp_dead_loss_info_single = array(
                'lan' => $this->input->post('lan'),
                'emp_dead_loss_nomini_name_rel' => $this->input->post('emp_dead_loss_nomini_name_rel')[$i],
                'emp_dead_loss_percent_amount' => $this->input->post('emp_dead_loss_percent_amount')[$i],
                'id' => $this->input->post('emp_dead_loss_info_id')[$i]
            );
            array_push($emp_dead_loss_info, $emp_dead_loss_info_single);
        }
        foreach ($emp_dead_loss_info as $single_emp_dead_loss_info) {
            $this->Admin_model->update('nominee_info_dead_loss', $single_emp_dead_loss_info, 'id', $single_emp_dead_loss_info['id']);
        }
        /**
         * Inserting Dead Loss.  emp_dead_loss_nomini_name_rel
         */
        $emp_dead_loss_info_new = [];
        $total_emp_dead_loss_info_new = sizeof($this->input->post('emp_dead_loss_nomini_name_rel_new'));
        for ($i = 0; $i < $total_emp_dead_loss_info_new; $i++) {
            $emp_dead_loss_info_single_new = array(
                'emp_id' => $employee_id,
                'lan' => $this->input->post('lan'),
                'emp_dead_loss_nomini_name_rel' => $this->input->post('emp_dead_loss_nomini_name_rel_new')[$i],
                'emp_dead_loss_percent_amount' => $this->input->post('emp_dead_loss_percent_amount_new')[$i]
            );
            array_push($emp_dead_loss_info_new, $emp_dead_loss_info_single_new);
        }
        foreach ($emp_dead_loss_info_new as $single_emp_dead_loss_info_new) {
            if (!empty($single_emp_dead_loss_info_new['emp_dead_loss_nomini_name_rel'])) {
                $this->Admin_model->insert('nominee_info_dead_loss', $single_emp_dead_loss_info_new);
            }
        }



        /**
         * Updating Bema Info
         */
        $emp_nominee_bima_info = [];
        $total_emp_nominee_bima_info = sizeof($this->input->post('emp_bema_nomini_name_rel'));
        for ($i = 0; $i < $total_emp_nominee_bima_info; $i++) {
            $emp_nominee_bima_info_single = array(
                'lan' => $this->input->post('lan'),
                'emp_bema_nomini_name_rel' => $this->input->post('emp_bema_nomini_name_rel')[$i],
                'bema_percent_amount' => $this->input->post('bema_percent_amount')[$i],
                'id' => $this->input->post('nominee_bema_info_id')[$i]
            );
            array_push($emp_nominee_bima_info, $emp_nominee_bima_info_single);
        }
        foreach ($emp_nominee_bima_info as $single_emp_nominee_bima_info) {
            $this->Admin_model->update('nominee_info_bema', $single_emp_nominee_bima_info, 'id', $single_emp_nominee_bima_info['id']);
        }
        /**
         * Inserting Bema Info
         */
        $emp_nominee_bima_info_new = [];
        $total_emp_nominee_bima_info_new = sizeof($this->input->post('emp_bema_nomini_name_rel_new'));
        for ($i = 0; $i < $total_emp_nominee_bima_info_new; $i++) {
            $emp_nominee_bima_info_single_new = array(
                'emp_id' => $employee_id,
                'lan' => $this->input->post('lan'),
                'emp_bema_nomini_name_rel' => $this->input->post('emp_bema_nomini_name_rel_new')[$i],
                'bema_percent_amount' => $this->input->post('bema_percent_amount_new')[$i]
            );
            array_push($emp_nominee_bima_info_new, $emp_nominee_bima_info_single_new);
        }
        foreach ($emp_nominee_bima_info_new as $emp_nominee_bima_info_single_new) {
            if (!empty($emp_nominee_bima_info_single_new['emp_bema_nomini_name_rel'])) {
                $this->Admin_model->insert('nominee_info_bema', $emp_nominee_bima_info_single_new);
            }
        }



        /**
         * Inserting dat of salary information
         */
        $data_salary = array(
            'id' => $this->input->post('salary_info_id'),
            'lan' => $this->input->post('lan'),
            'stp_4_nid' => $this->input->post('stp_4_nid'),
            'stp_4_name_desig' => $this->input->post('stp_4_name_desig'),
            'stp_4_office_name' => $this->input->post('stp_4_office_name'),
            'stp_4_mobile_no' => $this->input->post('stp_4_mobile_no'),
            'stp_4_date_of_birth' => strtotime($this->input->post('stp_4_date_of_birth')),
            'stp_4_first_joining_date' => strtotime($this->input->post('stp_4_first_joining_date')),
            'stp_4_first_joining_designation' => $this->input->post('stp_4_first_joining_designation'),
            'stp_4_employee_identy_number' => $this->input->post('stp_4_employee_identy_number'),
            'stp_4_taken_main_salary' => $this->input->post('stp_4_taken_main_salary'),
            'stp_4_pp' => $this->input->post('stp_4_pp'),
            'stp_4_total_salary_7a_7b' => $this->input->post('stp_4_total_salary_7a_7b'),
            'stp_4_grade_2009' => $this->input->post('stp_4_grade_2009'),
            'stp_4_grade_initial_salary_2009' => $this->input->post('stp_4_grade_initial_salary_2009'),
            'stp_4_total_distance_8_9B' => $this->input->post('stp_4_total_distance_8_9B'),
            'stp_4_grade_2015' => $this->input->post('stp_4_grade_2015'),
            'stp_4_grade_initial_salary_2015' => $this->input->post('stp_4_grade_initial_salary_2015'),
            'stp_4_total_salary_10_11b' => $this->input->post('stp_4_total_salary_10_11b'),
            'stp_4_got_step_from_2015' => $this->input->post('stp_4_got_step_from_2015'),
            'stp_4_got_by_pp' => $this->input->post('stp_4_got_by_pp'),
            'stp_4_main_salary_at_01_07_2015' => $this->input->post('stp_4_main_salary_at_01_07_2015'),
            'stp_4_total_salary_from_01_30' => $this->input->post('stp_4_total_salary_from_01_30'),
            'stp_4_next_salary_increment_date' => strtotime($this->input->post('stp_4_next_salary_increment_date')),
        );

        $salary_id = $this->input->post('salary_info_id');
        if (!empty($salary_id)) {
            $this->Admin_model->update('salary_info', $data_salary, 'id', $data_salary['id']);
        } else {
            $data_salary_emp_id = array(
                'emp_id' => $employee_id
            );
            $data_salary = $data_salary + $data_salary_emp_id;
            $this->Admin_model->insert('salary_info', $data_salary);
        }


        $this->session->set_flashdata('msg', 'emp_update_success');
        if ($data_salary['lan'] == 'bn') {
            redirect(base_url('admin/edit/' . $employee_id));
        } elseif ($data_salary['lan'] == 'en') {
            redirect(base_url('admin/edit_en/' . $employee_id));
        }
    }

}
