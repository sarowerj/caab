<?php
$number = ["১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "১০", "১১", "১২", "১৩", "১৪", "১৫", "১৬", "১৭", "১৮", "১৯", "২০"];
if ($status == 'empty') {
    ?>
    <div class="page-content employee_details">
        Not Found.
    </div>
    <?php
} elseif ($status == 'not_valid') {
    ?>
    <div class="page-content employee_details">
        Not Valid.
    </div>
    <?php
} else {
    $msg = $this->session->flashdata('msg');
    if (isset($msg)) {
        if ($msg == 'emp_update_success') {
            ?>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('.alert_msg.new_employee_added').fadeIn().delay(3000).fadeOut("fast", 0);
                })
            </script>
            <?php
        }
    }
    ?>

    <div class="alert_messages">
        <div class="alert alert-success alert-dismissible alert_msg new_employee_added" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong> Employee information updated successfully.
        </div>
    </div>
    <div class="page-content new_employee">
        <!-- END PAGE HEADER-->
        <div class="content container-fluid">
            <form action="<?php echo base_url('admin/update_user_info'); ?>" method="post">
                <div class="header">
                    <div class="row">
                        <div class="col-xs-3"><h3 class="main_title">কর্মচারির জীবন বৃত্তান্ত</h3></div> 
                        <div class="col-xs-3">
                            <?php
                            $emp_dept = '';
                            if (isset($info['basic_info'][0]['emp_dept'])) {
                                $emp_dept = $info['basic_info'][0]['emp_dept'];
                            }
                            ?>
                            <select name="emp_dept" class="form-control">
                                <option <?php echo ($emp_dept == 'সশস্ত্র-নিরাপত্তা-প্রহরী') ? 'selected ' : ''; ?> value="সশস্ত্র-নিরাপত্তা-প্রহরী">সশস্ত্র নিরাপত্তা প্রহরী</option>
                                <option <?php echo ($emp_dept == 'এমটি,-ক্লিনার') ? 'selected ' : ''; ?> value="এমটি,-ক্লিনার">এমটি, ক্লিনার</option>
                                <option <?php echo ($emp_dept == 'রাজশাহী-বিমানবন্দর') ? 'selected ' : ''; ?> value="রাজশাহী-বিমানবন্দর">রাজশাহী বিমানবন্দর</option>
                                <option <?php echo ($emp_dept == 'সিভিল-ডিভশন-2') ? 'selected ' : ''; ?> value="সিভিল-ডিভশন-2">সিভিল ডিভশন-2</option>
                                <option <?php echo ($emp_dept == 'সিভিল-ডিভশন-1') ? 'selected ' : ''; ?> value="সিভিল-ডিভশন-1">সিভিল ডিভশন-1</option>
                                <option <?php echo ($emp_dept == 'সিভিল-সার্কেল') ? 'selected ' : ''; ?> value="সিভিল-সার্কেল">সিভিল সার্কেল</option>
                                <option <?php echo ($emp_dept == 'সম্পত্তি-শাখা') ? 'selected ' : ''; ?> value="সম্পত্তি-শাখা">সম্পত্তি শাখা</option>
                                <option <?php echo ($emp_dept == 'সদস্য-(পরিঃ)') ? 'selected ' : ''; ?> value="সদস্য-(পরিঃ)">সদস্য (পরিঃ)</option>
                                <option <?php echo ($emp_dept == 'চেয়ারম্যান-সচিবালয়') ? 'selected ' : ''; ?> value="চেয়ারম্যান-সচিবালয়">চেয়ারম্যান সচিবালয়</option>
                                <option <?php echo ($emp_dept == 'আইন-শাখা') ? 'selected ' : ''; ?> value="আইন-শাখা">আইন শাখা</option>
                                <option <?php echo ($emp_dept == 'সদর-দপ্তর,-এমটি-পুল') ? 'selected ' : ''; ?> value="সদর-দপ্তর,-এমটি-পুল" >সদর দপ্তর, এমটি পুল</option>
                                <option <?php echo ($emp_dept == 'যোগাযোগ-বিভাগ') ? 'selected ' : ''; ?> value="যোগাযোগ-বিভাগ" >যোগাযোগ বিভাগ</option>
                                <option <?php echo ($emp_dept == 'এটিএস-এন্ড-এরো-বিভাগ') ? 'selected ' : ''; ?> value="এটিএস-এন্ড-এরো-বিভাগ" >এটিএস এন্ড এরো বিভাগ</option>
                                <option <?php echo ($emp_dept == 'পরিকল্পনা-ও-প্রশিক্ষণ-বিভাগ') ? 'selected ' : ''; ?> value="পরিকল্পনা-ও-প্রশিক্ষণ-বিভাগ" >পরিকল্পনা ও প্রশিক্ষণ বিভাগ</option>
                                <option <?php echo ($emp_dept == 'এফএস-আর-বিভাগ') ? 'selected ' : ''; ?> value="এফএস-আর-বিভাগ" >এফএস আর বিভাগ</option>
                                <option <?php echo ($emp_dept == 'অর্থ-বিভাগ') ? 'selected ' : ''; ?> value="অর্থ-বিভাগ" >অর্থ বিভাগ</option>
                                <option <?php echo ($emp_dept == 'প্রধান-প্রকৌশলীর-দপ্তর') ? 'selected ' : ''; ?> value="প্রধান-প্রকৌশলীর-দপ্তর" >প্রধান প্রকৌশলীর দপ্তর</option>
                                <option <?php echo ($emp_dept == 'প্রশাসন-বিভাগ') ? 'selected ' : ''; ?> value="প্রশাসন-বিভাগ" >প্রশাসন বিভাগ</option>
                                <option <?php echo ($emp_dept == 'অডিট-ভবন') ? 'selected ' : ''; ?> value="অডিট-ভবন" >অডিট ভবন</option>
                                <option <?php echo ($emp_dept == 'জনসংযোগ-বিভাগ') ? 'selected ' : ''; ?> value="জনসংযোগ-বিভাগ" >জনসংযোগ বিভাগ</option>
                                <option <?php echo ($emp_dept == 'প্রশাসন-বিভাগ-2') ? 'selected ' : ''; ?> value="প্রশাসন-বিভাগ-2" >প্রশাসন বিভাগ-2</option>
                                <option <?php echo ($emp_dept == 'যোগাযোগ-বিভাগ') ? 'selected ' : ''; ?> value="যোগাযোগ-বিভাগ" >যোগাযোগ বিভাগ</option>
                                <option <?php echo ($emp_dept == 'প্রশাসন-শাখা') ? 'selected ' : ''; ?> value="প্রশাসন-শাখা" >প্রশাসন শাখা</option>
                                <option <?php echo ($emp_dept == 'সিভিল-ডিভিশন-3') ? 'selected ' : ''; ?> value="সিভিল-ডিভিশন-3" >সিভিল ডিভিশন-3</option>
                                <option <?php echo ($emp_dept == 'ই/এম-সার্কেল-2') ? 'selected ' : ''; ?> value="ই/এম-সার্কেল-2" >ই/এম সার্কেল-2</option>
                                <option <?php echo ($emp_dept == 'ই/এম-বিভাগ-1') ? 'selected ' : ''; ?> value="ই/এম-বিভাগ-1" >ই/এম বিভাগ-1</option>
                                <option <?php echo ($emp_dept == 'ই/এম-বিভাগ-2') ? 'selected ' : ''; ?> value="ই/এম-বিভাগ-2" >ই/এম বিভাগ-2</option>
                                <option <?php echo ($emp_dept == 'ই/এম-বিভাগ-3') ? 'selected ' : ''; ?> value="ই/এম-বিভাগ-3" >ই/এম বিভাগ-3</option>
                                <option <?php echo ($emp_dept == 'পরিচালকের-দপ্তর') ? 'selected ' : ''; ?> value="পরিচালকের-দপ্তর" >পরিচালকের দপ্তর</option>
                                <option <?php echo ($emp_dept == 'বেসামরিক-বিমান-চলাচল-কর্তৃপক্ষ') ? 'selected ' : ''; ?> value="বেসামরিক-বিমান-চলাচল-কর্তৃপক্ষ" >বেসামরিক বিমান চলাচল কর্তৃপক্ষ</option>
                            </select>
                            <input type="hidden" name="lan" value="bn" />
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="<?php echo base_url('admin/employee/' . $info['basic_info'][0]['id']); ?>" class="btn btn-primary">View this profile</a>
                        </div>
                    </div>
                </div>
                <br />
                <br />
                <input type="hidden" name="employee_id" value="<?= $this->uri->segment(3) ?>" />
                <div class="row step" id="step_1">
                    <div class="col-md-6">
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>০১. কর্মকর্তার নাম</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_name = '';
                                if (isset($info['basic_info'][0]['emp_name'])) {
                                    $emp_name = $info['basic_info'][0]['emp_name'];
                                }
                                ?>
                                <input class="form-control" type="text" value="<?= $emp_name; ?>"  name="emp_name"> 
                            </div>
                        </div> 
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>০২. নাম ইংরেজীতে</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_name_eng = '';
                                if (isset($info['basic_info'][0]['emp_name_eng'])) {
                                    $emp_name_eng = $info['basic_info'][0]['emp_name_eng'];
                                }
                                ?>
                                <input class="form-control" type="text" value="<?= $emp_name_eng; ?>" name="emp_name_eng"> 
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>০৩. কর্মকর্তার আইডি</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_id_number = '';
                                if (isset($info['basic_info'][0]['emp_id_number'])) {
                                    $emp_id_number = $info['basic_info'][0]['emp_id_number'];
                                }
                                ?>
                                <input class="form-control" type="text" value="<?= $emp_id_number; ?>" name="emp_id_number"> 
                            </div>
                        </div> 
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>০৪. বর্তমান পদবি</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_current_designation = '';
                                if (isset($info['basic_info'][0]['emp_current_designation'])) {
                                    $emp_current_designation = $info['basic_info'][0]['emp_current_designation'];
                                }
                                ?>
                                <input class="form-control" type="text" value="<?= $emp_current_designation; ?>" name="emp_current_designation">
                            </div>
                        </div> 
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>০৫. নিয়োগকালীন পদবি</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_appointment_designation = '';
                                if (isset($info['basic_info'][0]['emp_appointment_designation'])) {
                                    $emp_appointment_designation = $info['basic_info'][0]['emp_appointment_designation'];
                                }
                                ?>
                                <input class="form-control" type="text" value="<?= $emp_appointment_designation; ?>" id="emp_appointment_designation" name="emp_appointment_designation">
                            </div>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('#emp_appointment_designation').change(function () {
                                        $('input[name="stp_4_first_joining_designation"]').val($('#emp_appointment_designation').val());
                                    });
                                });
                            </script>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>০৬. নিয়োগের তারিখ</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_apointment_date = '';
                                if (isset($info['basic_info'][0]['emp_apointment_date'])) {
                                    if ($info['basic_info'][0]['emp_apointment_date'] != 0) {
                                        $emp_apointment_date = date('d-m-Y', $info['basic_info'][0]['emp_apointment_date']);
                                    } else {
                                        $emp_apointment_date = '';
                                    }
                                }
                                ?>
                                <input class="form-control date-picker" value="<?= $emp_apointment_date; ?>" type="text" id="emp_apointment_date" name="emp_apointment_date">
                            </div>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('#emp_apointment_date').change(function () {
                                        $('input[name="stp_4_first_joining_date"]').val($('#emp_apointment_date').val());
                                    });
                                });
                            </script>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <label>০৭. অবসরে গমনের সম্ভাব্য তারিখ</label>
                            </div>
                            <div class="col-sm-6">
                                <?php
                                $emp_retirement_date = '';
                                if (isset($info['basic_info'][0]['emp_retirement_date'])) {
                                    if ($info['basic_info'][0]['emp_retirement_date'] != 0) {
                                        $emp_retirement_date = date('d-m-Y', $info['basic_info'][0]['emp_retirement_date']);
                                    } else {
                                        $emp_retirement_date = '';
                                    }
                                }
                                ?>
                                <input type="text" value="<?php echo $emp_retirement_date; ?>" name="emp_retirement_date" class="form-control date-picker" />
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>০৮. পদন্নতির তারিখ</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_promotion_date = '';
                                if (isset($info['basic_info'][0]['emp_promotion_date'])) {
                                    if ($info['basic_info'][0]['emp_promotion_date'] != 0) {
                                        $emp_promotion_date = date('d-m-Y', $info['basic_info'][0]['emp_promotion_date']);
                                    } else {
                                        $emp_promotion_date = '';
                                    }
                                }
                                ?>
                                <input class="form-control date-picker" value="<?= $emp_promotion_date; ?>" type="text"   name="emp_promotion_date">
                            </div>
                        </div> 
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>০৯. বর্তমান কর্মস্থল</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_current_office = '';
                                if (isset($info['basic_info'][0]['emp_current_office'])) {
                                    $emp_current_office = $info['basic_info'][0]['emp_current_office'];
                                }
                                ?>
                                <input class="form-control" value="<?= $emp_current_office; ?>" type="text"   name="emp_current_office">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <label>১০. বর্তমান কর্মস্থলে যোগদানের তারিখ</label>
                            </div>
                            <div class="col-sm-6">
                                <?php
                                $emp_current_office_appointment_date = '';
                                if (isset($info['basic_info'][0]['emp_current_office_appointment_date'])) {
                                    if ($info['basic_info'][0]['emp_current_office_appointment_date'] != 0) {
                                        $emp_current_office_appointment_date = date('d-m-Y', $info['basic_info'][0]['emp_current_office_appointment_date']);
                                    }
                                }
                                ?>
                                <input class="form-control date-picker" type="text" value="<?= $emp_current_office_appointment_date; ?>"  name="emp_current_office_appointment_date">
                            </div>
                        </div>
                        <label>১১. অব্যবহিত পূর্ববর্তী</label>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>ক) কর্মস্থল</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_recent_prev_joining_place = '';
                                if (isset($info['basic_info'][0]['emp_recent_prev_joining_place'])) {
                                    $emp_recent_prev_joining_place = $info['basic_info'][0]['emp_recent_prev_joining_place'];
                                }
                                ?>
                                <input class="form-control" type="text" value="<?= $emp_recent_prev_joining_place; ?>" name="emp_recent_prev_joining_place">
                            </div>
                        </div>
                        <!-- New emp_recent_prev_designation -->
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>খ) পদবী</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_recent_prev_designation = '';
                                if (isset($info['basic_info'][0]['emp_recent_prev_designation'])) {
                                    $emp_recent_prev_designation = $info['basic_info'][0]['emp_recent_prev_designation'];
                                }
                                ?>
                                <input class="form-control" type="text" value="<?= $emp_recent_prev_designation; ?>"  name="emp_recent_prev_designation">
                            </div>
                        </div><!--End New -->
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>গ) যোগদানের তারিখ</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_recent_prev_joining_date = '';
                                if (isset($info['basic_info'][0]['emp_recent_prev_joining_date'])) {
                                    if ($info['basic_info'][0]['emp_recent_prev_joining_date'] != 0) {
                                        $emp_recent_prev_joining_date = date('d-m-Y', $info['basic_info'][0]['emp_recent_prev_joining_date']);
                                    }
                                }
                                ?>
                                <input class="date-picker form-control" type="text" value="<?= $emp_recent_prev_joining_date; ?>" name="emp_recent_prev_joining_date">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>১২. জাতীয়তা</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_nationality = '';
                                if (isset($info['basic_info'][0]['emp_nationality'])) {
                                    $emp_nationality = $info['basic_info'][0]['emp_nationality'];
                                }
                                ?>
                                <input class="form-control" type="text" value="<?= $emp_nationality; ?>" name="emp_nationality">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>১৩. জাতীয় পরিচয়পত্র নং</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_nid_no = '';
                                if (isset($info['basic_info'][0]['emp_nid_no'])) {
                                    $emp_nid_no = $info['basic_info'][0]['emp_nid_no'];
                                }
                                ?>
                                <input class="form-control" type="text" value="<?= $emp_nid_no; ?>" name="emp_nid_no">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>১৪. ধর্ম</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_religion = '';
                                if (isset($info['basic_info'][0]['emp_religion'])) {
                                    $emp_religion = $info['basic_info'][0]['emp_religion'];
                                }
                                ?>
                                <input class="form-control" type="text" value="<?= $emp_religion; ?>" name="emp_religion">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>১৫. পাসপোর্ট নম্বর </label>
                                <span class="hints">(যদি থাকে)</span>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_passport_no = '';
                                if (isset($info['basic_info'][0]['emp_passport_no'])) {
                                    $emp_passport_no = $info['basic_info'][0]['emp_passport_no'];
                                }
                                ?>
                                <input class="form-control" type="text" value="<?= $emp_passport_no ?>" name="emp_passport_no">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>১৬. পিতার নাম</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_father_name = '';
                                if (isset($info['basic_info'][0]['emp_father_name'])) {
                                    $emp_father_name = $info['basic_info'][0]['emp_father_name'];
                                }
                                ?>
                                <input class="form-control" type="text" value="<?= $emp_father_name; ?>" name="emp_father_name">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>১৭. মাতার নাম</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_mother_name = '';
                                if (isset($info['basic_info'][0]['emp_mother_name'])) {
                                    $emp_mother_name = $info['basic_info'][0]['emp_mother_name'];
                                }
                                ?>
                                <input class="form-control" type="text" value="<?= $emp_mother_name; ?>" name="emp_mother_name">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>১৮. জন্ম তারিখ</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_birth_date = '';
                                if (isset($info['basic_info'][0]['emp_birth_date'])) {
                                    if ($info['basic_info'][0]['emp_birth_date'] != 0) {
                                        $emp_birth_date = date('d-m-Y', $info['basic_info'][0]['emp_birth_date']);
                                    }
                                }
                                ?>
                                <input class="form-control date-picker" value="<?= $emp_birth_date; ?>" type="text" id="emp_birth_date" name="emp_birth_date">
                            </div>
                            <script type="text/javascript">
                                $('#emp_birth_date').change(function () {
                                    $('#step_4_emp_birth_date').val($('#emp_birth_date').val());
                                })</script>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>১৯. রক্তের গ্রুপ</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_blood_group = '';
                                if (isset($info['basic_info'][0]['emp_blood_group'])) {
                                    $emp_blood_group = $info['basic_info'][0]['emp_blood_group'];
                                }
                                ?>
                                <select name="emp_blood_group" id="emp_blood_group"  class="form-control" >
                                    <option <?php echo ($emp_blood_group == 'A_neg' ? 'selected ' : '') ?> value="A_neg">A-</option>
                                    <option <?php echo ($emp_blood_group == 'A_pos' ? 'selected ' : '') ?> value="A_pos">A+</option>
                                    <option <?php echo ($emp_blood_group == 'AB_neg' ? 'selected ' : '') ?> value="AB_neg">AB-</option>
                                    <option <?php echo ($emp_blood_group == 'AB_pos' ? 'selected ' : '') ?>value="AB_pos">AB+</option>
                                    <option <?php echo ($emp_blood_group == 'B_neg' ? 'selected ' : '') ?> value="B_neg">B-</option>
                                    <option <?php echo ($emp_blood_group == 'B_pos' ? 'selected ' : '') ?> value="B_pos">B+</option>
                                    <option <?php echo ($emp_blood_group == 'O_neg' ? 'selected ' : '') ?> value="O_neg">O-</option>
                                    <option <?php echo ($emp_blood_group == 'O_pos' ? 'selected ' : '') ?> value="O_pos">O+</option>
                                </select> 
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>২০. লিঙ্গ</label>
                            </div>
                            <div class="col-sm-7">
                                <div class="sex">
                                    <?php
                                    $emp_sex = '';
                                    if (isset($info['basic_info'][0]['emp_sex'])) {
                                        $emp_sex = $info['basic_info'][0]['emp_sex'];
                                    }
                                    ?>
                                    <label for="sex_male">পুরুষ <input type="radio" value="পুরুষ" name="emp_sex" id="sex_male" <?php echo ($emp_sex == 'পুরুষ') ? 'checked' : ''; ?>/></label> 
                                    <label for="sex_female">মহিলা <input type="radio" value="মহিলা" name="emp_sex" id="sex_female" <?php echo ($emp_sex == 'মহিলা') ? 'checked' : ''; ?>/></label> 
                                    <label for="sex_others">অন্যান্য <input type="radio" value="অন্যান্য" name="emp_sex" id="sex_others" <?php echo ($emp_sex == 'অন্যান্য') ? 'checked' : ''; ?>/></label>
                                </div> 
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>২১. বৈবাহিক অবস্থা</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_merital_status = '';
                                if (isset($info['basic_info'][0]['emp_merital_status'])) {
                                    $emp_merital_status = $info['basic_info'][0]['emp_merital_status'];
                                }
                                ?>
                                <select name="emp_merital_status" class="form-control">
                                    <option <?php echo ($emp_merital_status == 'বিবাহিত' ? 'selected ' : '') ?> value="বিবাহিত">বিবাহিত</option>
                                    <option <?php echo ($emp_merital_status == 'অবিবাহিত' ? 'selected ' : '') ?>value="অবিবাহিত">অবিবাহিত</option>
                                    <option <?php echo ($emp_merital_status == 'বিধবা' ? 'selected ' : '') ?>value="বিধবা">বিধবা</option>
                                    <option <?php echo ($emp_merital_status == 'তালাকপ্রপ্ত' ? 'selected ' : '') ?>value="তালাকপ্রপ্ত">তালাকপ্রপ্ত</option>
                                    <option <?php echo ($emp_merital_status == 'বিপত্নিক' ? 'selected ' : '') ?>value="বিপত্নিক">বিপত্নিক</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>২২. স্বামী/স্ত্রীর নাম</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_spose = '';
                                if (isset($info['basic_info'][0]['emp_spose'])) {
                                    $emp_spose = $info['basic_info'][0]['emp_spose'];
                                }
                                ?>
                                <input type="text" value="<?= $emp_spose; ?>" name="emp_spose" class="form-control" />
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>২৩. টেলিফোন নম্বর</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_telephone_number = '';
                                if (isset($info['basic_info'][0]['emp_telephone_number'])) {
                                    $emp_telephone_number = $info['basic_info'][0]['emp_telephone_number'];
                                }
                                ?>
                                <input type="text" value="<?= $emp_telephone_number; ?>" name="emp_telephone_number" class="form-control" />
                                <span class="hints">একাধিরক নম্বরের ক্ষেত্রে কমা (,) ব্যবহার করুন।</span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>২৪. মোবাইল নম্বর (রেজিস্টার্ড)</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_mobile_number = '';
                                if (isset($info['basic_info'][0]['emp_mobile_number'])) {
                                    $emp_mobile_number = $info['basic_info'][0]['emp_mobile_number'];
                                }
                                ?>
                                <input type="text" value="<?= $emp_mobile_number; ?>" name="emp_mobile_number" class="form-control" />
                                <span class="hints">একাধিরক নম্বরের ক্ষেত্রে কমা (,) ব্যবহার করুন।</span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>২৫. টিআইএন (TIN)</label>
                                <span class="hints">(যদি থাকে)</span>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_tin = '';
                                if (isset($info['basic_info'][0]['emp_tin'])) {
                                    $emp_tin = $info['basic_info'][0]['emp_tin'];
                                }
                                ?>
                                <input type="text" value="<?= $emp_tin; ?>" name="emp_tin" class="form-control" />
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label>২৬. ইমেইল</label>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                $emp_email = '';
                                if (isset($info['basic_info'][0]['emp_email'])) {
                                    $emp_email = $info['basic_info'][0]['emp_email'];
                                }
                                ?>
                                <input type="text" value="<?= $emp_email; ?>" name="emp_email" class="form-control" />
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label>২৭. স্থায়ী ঠিকানা</label>
                            </div>
                            <div class="col-md-8 inside">
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label>গ্রাম</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        $emp_add_village = '';
                                        if (isset($info['basic_info'][0]['emp_add_village'])) {
                                            $emp_add_village = $info['basic_info'][0]['emp_add_village'];
                                        }
                                        ?>
                                        <input type="text" value="<?= $emp_add_village; ?>" name="emp_add_village" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label>ডাকঘর</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        $emp_add_post = '';
                                        if (isset($info['basic_info'][0]['emp_add_post'])) {
                                            $emp_add_post = $info['basic_info'][0]['emp_add_post'];
                                        }
                                        ?>
                                        <input type="text" value="<?= $emp_add_post; ?>" name="emp_add_post" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label>থানা/উপজেলা</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        $emp_add_po = '';
                                        if (isset($info['basic_info'][0]['emp_add_po'])) {
                                            $emp_add_po = $info['basic_info'][0]['emp_add_po'];
                                        }
                                        ?>
                                        <input type="text" value="<?= $emp_add_po; ?>" name="emp_add_po" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label>জেলা</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        $emp_add_district = '';
                                        if (isset($info['basic_info'][0]['emp_add_district'])) {
                                            $emp_add_district = $info['basic_info'][0]['emp_add_district'];
                                        }
                                        $all_districts = [ "বরগুনা", "বরিশাল", "ভোলা", "ঝালকাঠি", "পটুয়াখালী", "পিরোজপুর", "বান্দরবান", "ব্রাহ্মণবাড়ীয়া", "চাঁদপুর", "চট্টগ্রাম", "কুমিল্লা", "কক্সবাজার", "ফেনী", "খাগড়াছড়ি", "লক্ষীপুর", "নোয়াখালী", "রাঙ্গামাটি", "ঢাকা", "ফরিদপুর", "গাজীপুর", "গোপালগঞ্জ", "কিশোরগঞ্জ", "মাদারীপুর", "মানিকগঞ্জ", "মুন্সীগঞ্জ", "নারায়ণগঞ্জ", "নরসিংদী", "রাজবাড়ী", "শরীয়তপুর", "টাঙ্গাইল", "বাগেরহাট", "চুয়াডাঙ্গা", "যশোর", "ঝিনাইদহ", "খুলনা", "কুষ্টিয়া", "মাগুরা", "মেহেরপুর", "নড়াইল", "সাতক্ষিরা", "জামালপুর", "ময়মনসিংহ", "নেত্রকোনা", "শেরপুর", "বগুড়া", "জয়পুরহাট", "নওগাঁ", "নাটোর", "নওয়াবগঞ্জ", "পাবনা", "রাজশাহী", "সিরাজগঞ্জ", "দিনাজপুর", "গাইবান্ধা", "কুড়িগ্রাম", "লালমনিরহাট", "নীলফামারী", "পঞ্চগড়", "রংপুর", "ঠাকুরগাঁও", "হবিগঞ্জ", "মৌলভীবাজার", "সুনামগঞ্জ", "সিলেট"];
                                        ?>
                                        <select name="emp_add_district" class="form-control" id="emp_add_district">
                                            <?php
                                            foreach ($all_districts as $district) {
                                                ?>
                                                <option <?php echo ($district == $emp_add_district) ? 'selected ' : ''; ?> value="<?= $district ?>"><?= $district ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label>২৮. বর্তমান ঠিকানা</label>
                            </div>
                            <div class="col-md-8 inside">
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label>বাসা নং</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        $emp_per_add_house = '';
                                        if (isset($info['basic_info'][0]['emp_per_add_house'])) {
                                            $emp_per_add_house = $info['basic_info'][0]['emp_per_add_house'];
                                        }
                                        ?>
                                        <input type="text" value="<?= $emp_per_add_house; ?>" name="emp_per_add_house" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label>সড়ক নং</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        $emp_per_add_road = '';
                                        if (isset($info['basic_info'][0]['emp_per_add_road'])) {
                                            $emp_per_add_road = $info['basic_info'][0]['emp_per_add_road'];
                                        }
                                        ?>
                                        <input type="text" value="<?= $emp_per_add_road; ?>" name="emp_per_add_road" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label>গ্রাম</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        $emp_per_add_village = '';
                                        if (isset($info['basic_info'][0]['emp_per_add_village'])) {
                                            $emp_per_add_village = $info['basic_info'][0]['emp_per_add_village'];
                                        }
                                        ?>
                                        <input type="text" value="<?= $emp_per_add_village; ?>" name="emp_per_add_village" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label>ডাকঘর</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        $emp_per_add_post = '';
                                        if (isset($info['basic_info'][0]['emp_per_add_post'])) {
                                            $emp_per_add_post = $info['basic_info'][0]['emp_per_add_post'];
                                        }
                                        ?>
                                        <input type="text" value="<?= $emp_per_add_post; ?>" name="emp_per_add_post" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label>থানা / উপজেলা</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        $emp_per_add_po = '';
                                        if (isset($info['basic_info'][0]['emp_per_add_po'])) {
                                            $emp_per_add_po = $info['basic_info'][0]['emp_per_add_po'];
                                        }
                                        ?>
                                        <input type="text" value="<?= $emp_per_add_po; ?>" name="emp_per_add_po" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label>জেলা</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        $emp_per_add_district = '';
                                        if (isset($info['basic_info'][0]['emp_per_add_district'])) {
                                            $emp_per_add_district = $info['basic_info'][0]['emp_per_add_district'];
                                        }
                                        ?>
                                        <select name="emp_per_add_district" class="form-control" id="emp_add_district">
                                            <?php
                                            foreach ($all_districts as $district) {
                                                ?>
                                                <option <?php echo ($district == $emp_per_add_district) ? 'selected ' : ''; ?> value="<?= $district ?>"><?= $district ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row step" id="step_2">
                    <div class="col-xs-12">
                        <h4>২৯. শিক্ষাগত যোগ্যতা</h4>
                        <?php
                        $educational_qualification = $info['educational_qualification'];
                        ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="80">ক্রমিক নং</th>
                                    <th>পরীক্ষার নাম</th>
                                    <th>গ্রুপ/বিভাগ/বিষয়</th>
                                    <th width="120">পাসের সন</th>
                                    <th>বিশ্ববিদ্যালয়/বোর্ড</th>
                                    <th width="80">জিপিএ/গ্রেড/শ্রেনী</th>
                                </tr>
                            </thead>
                            <tbody class="body_content">
                                <?php
                                if (!empty($educational_qualification)) {
                                    $sr = 0;
                                    foreach ($educational_qualification as $single_edu_qualification) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $number[$sr]; ?>। 
                                                <input type="hidden" value="<?= $single_edu_qualification['id']; ?>" name="education_id[]" />
                                            </td>
                                            <td><input type="text" value="<?= $single_edu_qualification['edu_exam_name']; ?>" name="edu_exam_name[]" id="edu_exam_name" class="form-control" /></td>
                                            <td><input type="text" value="<?= $single_edu_qualification['edu_exam_dept']; ?>" name="edu_exam_dept[]" id="edu_exam_dept" class="form-control" /></td>
                                            <td><input type="text" value="<?= $single_edu_qualification['edu_passing_year']; ?>" name="edu_passing_year[]" id="edu_passing_year" class="form-control" /></td>
                                            <td><input type="text" value="<?= $single_edu_qualification['edu_university_board']; ?>" name="edu_university_board[]" id="edu_university_board" class="form-control" /> </td>
                                            <td><input type="text" value="<?= $single_edu_qualification['edu_gpa_class']; ?>" name="edu_gpa_class[]" id="edu_gpa_class" class="form-control" /> </td>
                                        </tr>
                                        <?php
                                        $sr++;
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="6" class="text-center">No Data Found</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6" class="text-right">
                                        <a href="javascript:void(0)" id="add_new_education" class="btn btn-primary">Add More</a>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <script type="text/javascript">
                            number = ["১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "১০", "১১", "১২", "১৩", "১৪", "১৫", "১৬", "১৭", "১৮", "১৯", "২০"];
                            $('#add_new_education').click(function () {
                                var height = $('#step_2').height();
                                $('.content').height(height + 150);
                                var total_tr = $(this).parent().parent().parent().siblings('tbody').children('tr').length;
                                if (total_tr < 10) {
                                    if (total_tr == 9) {
                                        $(this).attr('disabled', 'disabled');
                                    }
                                    var td = '<tr>' +
                                            '<td>' + number[total_tr] + '। </td>' +
                                            '<td><input type="text" name="edu_exam_name_new[]" id="edu_exam_name" class="form-control" /></td>' +
                                            '<td><input type="text" name="edu_exam_dept_new[]" id="edu_exam_dept" class="form-control" /></td>' +
                                            '<td><input type="text" name="edu_passing_year_new[]" id="edu_passing_year" class="form-control" /></td>' +
                                            '<td><input type="text" name="edu_university_board_new[]" id="edu_university_board" class="form-control" /> </td>' +
                                            '<td><input type="text" name="edu_gpa_class_new[]" id="edu_gpa_class" class="form-control" /> </td>' +
                                            '</tr>'
                                    $(this).closest('table').children('.body_content').append(td);
                                    event.preventDefault();
                                }
                            })</script> 

                        <h4>৩০. কর্মস্থলের তথ্য (সম্পুর্ণ চাকুরীকালীন)</h4>
                        <?php
                        $office_info = $info['office_info'];
                        ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="80">ক্রমিক নং</th>
                                    <th>কর্মস্থলের নাম</th>
                                    <th width="120">হতে</th>
                                    <th width="120">পর্যন্ত</th>
                                    <th width="120">সময়কাল</th>
                                    <th>মন্তব্য</th>
                                </tr>
                            </thead>
                            <tbody class="body_content">
                                <?php
                                if (!empty($office_info)) {
                                    $sr = 0;
                                    foreach ($office_info as $single_office_info) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $number[$sr]; ?>। 
                                                <input type="hidden" value="<?= $single_office_info['id']; ?>" name="emp_office_id[]" id="emp_office_id" />
                                            </td>
                                            <td><input type="text" value="<?= $single_office_info['emp_office_name']; ?>" name="emp_office_name[]" id="emp_office_name" class="form-control" /></td>
                                            <td><input type="text" value="<?php echo ($single_office_info['emp_office_from'] != 0) ? date('d-m-Y', $single_office_info['emp_office_from']) : ''; ?>"  name="emp_office_from[]" class="form-control date-picker" /></td>
                                            <td><input type="text" value="<?php echo ($single_office_info['emp_office_to'] != 0) ? date('d-m-Y', $single_office_info['emp_office_to']) : ''; ?>"  name="emp_office_to[]" class="form-control  date-picker" /></td>
                                            <td><input type="text" value="<?= $single_office_info['emp_office_duration']; ?>"  name="emp_office_duration[]" class="form-control" /></td>
                                            <td><textarea type="text" name="emp_office_about[]" id="emp_office_about" class="form-control"><?= $single_office_info['emp_office_about']; ?></textarea> </td>
                                        </tr>
                                        <?php
                                        $sr++;
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="6" class="text-center">No Data Found</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            <tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6" class="text-right">
                                        <a href="javascript:void(0)" id="emp_office_info" class="btn btn-primary">Add More</a>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <script type="text/javascript">
                            $('#emp_office_info').click(function () {
                                var height = $('#step_2').height();
                                $('.content').height(height + 150);
                                var total_tr = $(this).parent().parent().parent().siblings('tbody').children('tr').length;
                                if (total_tr < 10) {
                                    if (total_tr == 9) {
                                        $(this).attr('disabled', 'disabled');
                                    }
                                    var td = '<tr>' +
                                            '<td>' + number[total_tr] + '। </td>' +
                                            ' +<td><input type="text" name="emp_office_name_new[]" id="emp_office_name" class="form-control" /></td>' +
                                            ' +<td><input type="text" name="emp_office_from_new[]" class="form-control date-picker" /></td>' +
                                            ' +<td><input type="text" name="emp_office_to_new[]" class="form-control  date-picker" /></td>' +
                                            ' +<td><input type="text" name="emp_office_duration_new[]" class="form-control" /></td>' +
                                            ' +<td><textarea type="text" name="emp_office_about_new[]" id="emp_office_about" class="form-control"></textarea> </td>' +
                                            '</tr>'
                                    $(this).closest('table').children('.body_content').append(td);
                                    $('.date-picker').datepicker({
                                        changeYear: true,
                                        dateFormat: 'dd-mm-yy'
                                    });
                                    event.preventDefault();
                                }
                            })</script>

                        <h4>৩১. পেশাগত প্রশিক্ষণ</h4>
                        <?php
                        $training_info = $info['training_info'];
                        ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="80">ক্রমিক নং</th>
                                    <th>কোর্সের নাম</th>
                                    <th>প্রতিষ্ঠান</th>
                                    <th width="115">হতে </th>
                                    <th width="115">পর্যন্ত </th>
                                    <th width="100">সময়কাল </th>
                                    <th>বিবরণ</th>
                                </tr>
                            </thead>
                            <tbody class="body_content">
                                <?php
                                if (!empty($training_info)) {
                                    $sr = 0;
                                    foreach ($training_info as $single_training_info) {
                                        if (!empty($single_training_info['employeement_training'])) {
                                            ?>
                                            <tr>
                                                <td width="50">
                                                    <?php echo $number[$sr]; ?>।
                                                    <input type="hidden" value="<?= $single_training_info['id'] ?>" name="employeement_training_id[]" id="employeement_training_id" />
                                                </td>
                                                <td><textarea name="employeement_training_name[]" class="form-control" id="employeement_training_name" cols="30" rows="3"><?= $single_training_info['employeement_training_name'] ?></textarea></td>
                                                <td><textarea name="employeement_training_institute[]" class="form-control" id="employeement_training_institute" cols="30" rows="3"><?= $single_training_info['employeement_training_institute'] ?></textarea></td>
                                                <td><input value="<?php echo ($single_training_info['employeement_training_from'] != 0) ? date('d-m-Y', $single_training_info['employeement_training_from']) : ''; ?>" type="text" class="form-control date-picker" name="employeement_training_from[]" /></td>
                                                <td><input value="<?php echo ($single_training_info['employeement_training_to'] != 0) ? date('d-m-Y', $single_training_info['employeement_training_to']) : ''; ?>" type="text" class="form-control date-picker" name="employeement_training_to[]"/></td>
                                                <td><input value="<?= $single_training_info['employeement_training_duration'] ?>" type="text" class="form-control" name="employeement_training_duration[]"/></td>
                                                <td><textarea rows="3" type="text" name="employeement_training[]" id="emp_office_about" class="form-control"><?= $single_training_info['employeement_training'] ?></textarea> </td>
                                            </tr>
                                            <?php
                                            $sr++;
                                        }
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="7" class="text-center">No Data found.</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            <tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7" class="text-right">
                                        <a href="javascript:void(0)" id="emp_training_info" class="btn btn-primary">Add More</a>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <script type="text/javascript">
                            $('#emp_training_info').click(function () {
                                var height = $('#step_2').height();
                                $('.content').height(height + 150);
                                var total_tr = $(this).parent().parent().parent().siblings('tbody').children('tr').length;
                                if (total_tr < 10) {
                                    if (total_tr == 9) {
                                        $(this).attr('disabled', 'disabled');
                                    }
                                    var td = '<tr>' +
                                            '<td>' + number[total_tr] + '। </td>' +
                                            '<td><textarea name="employeement_training_name_new[]" class="form-control" id="employeement_training_name" cols="30" rows="3"></textarea></td>' +
                                            '<td><textarea name="employeement_training_institute_new[]" class="form-control" id="employeement_training_institute" cols="30" rows="3"></textarea></td>' +
                                            '<td><input type="text" class="form-control date-picker" name="employeement_training_from_new[]" /></td>' +
                                            '<td><input type="text" class="form-control date-picker" name="employeement_training_to_new[]"/></td>' +
                                            '<td><input type="text" class="form-control" name="employeement_training_duration_new[]"/></td>' +
                                            '<td><textarea rows="3" type="text" name="employeement_training_new[]" id="emp_office_about" class="form-control"></textarea> </td>'
                                    '</tr>'
                                    $(this).closest('table').children('.body_content').append(td);
                                    $('.date-picker').datepicker({
                                        changeYear: true,
                                        dateFormat: 'dd-mm-yy'
                                    });
                                    event.preventDefault();
                                }
                            })</script>
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label>৩২. কম্পিউটার পরিচালনায় যোগ্যতা</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        $emp_computer_skill = '';
                                        if (isset($info['basic_info'][0]['emp_computer_skill'])) {
                                            $emp_computer_skill = $info['basic_info'][0]['emp_computer_skill'];
                                            if (!empty($emp_computer_skill)) {
                                                $emp_computer_slill_array = unserialize($emp_computer_skill);
                                            } else {
                                                $emp_computer_slill_array = [];
                                            }
                                        }
                                        ?> 
                                        <select name="emp_computer_skill[]" multiple="multiple" class="form-control" id="emp_extra_experience_multiple">
                                            <option <?php
                                            foreach ($emp_computer_slill_array as $single_array) {
                                                if ($single_array == 'Microsoft Word') {
                                                    echo "selected";
                                                }
                                            }
                                            ?> value="Microsoft Word">Microsoft Word</option>
                                            <option <?php
                                            foreach ($emp_computer_slill_array as $single_array) {
                                                if ($single_array == 'Microsoft Excel') {
                                                    echo "selected";
                                                }
                                            }
                                            ?> value="Microsoft Excel">Microsoft Excel</option>
                                            <option <?php
                                            foreach ($emp_computer_slill_array as $single_array) {
                                                if ($single_array == 'Microsoft Powerpoint') {
                                                    echo "selected";
                                                }
                                            }
                                            ?> value="Microsoft Powerpoint">Microsoft Powerpoint</option>
                                            <option <?php
                                            foreach ($emp_computer_slill_array as $single_array) {
                                                if ($single_array == 'Microsoft Access') {
                                                    echo "selected";
                                                }
                                            }
                                            ?> value="Microsoft Access">Microsoft Access</option>

                                            <option <?php
                                            foreach ($emp_computer_slill_array as $single_array) {
                                                if ($single_array == 'Internet Browsing') {
                                                    echo "selected";
                                                }
                                            }
                                            ?> value="Internet Browsing">Internet Browsing</option>
                                            <option <?php
                                            foreach ($emp_computer_slill_array as $single_array) {
                                                if ($single_array == 'Email') {
                                                    echo "selected";
                                                }
                                            }
                                            ?>  value="Email">Email</option>
                                            <option <?php
                                            foreach ($emp_computer_slill_array as $single_array) {
                                                if ($single_array == 'Adobe Photoshop') {
                                                    echo "selected";
                                                }
                                            }
                                            ?>  value="Adobe Photoshop">Adobe Photoshop</option>
                                            <option <?php
                                            foreach ($emp_computer_slill_array as $single_array) {
                                                if ($single_array == 'Designing') {
                                                    echo "selected";
                                                }
                                            }
                                            ?>  value="Designing">Designing</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label>৩৩. সন্তান সংখ্যা</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" value="<?php echo $info['basic_info'][0]['emp_children_amount'] ?>" name="emp_children_amount" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label>৩৪. বিশেষ দক্ষতা/পারদর্শিতা</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea rows="5" type="text" name="emp_extra_experience" class="form-control"><?php echo $info['basic_info'][0]['emp_extra_experience'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row step" id="step_3">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4>৩৪. নমিনির তথ্য</h4>
                            </div>
                            <div class="col-xs-2">
                                <label>(ক) জিপিএফ</label>
                            </div>
                            <div class="col-xs-10">
                                <?php
                                $nominee_info_gpf = $info['nominee_info_gpf'];
                                ?>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="50">ক্রমিক নং</th>
                                            <th>নমিনির নাম ও সম্পর্ক</th>
                                            <th width="100">প্রাপ্যতার শতকরা হার</th>
                                        </tr>
                                    </thead>
                                    <tbody class="body_content">
                                        <?php
                                        if (!empty($nominee_info_gpf)) {
                                            $sr = 0;
                                            foreach ($nominee_info_gpf as $single_nominee_info_gpf) {
                                                ?>
                                                <tr>
                                                    <td width="50">
                                                        <?php echo $number[$sr]; ?>।
                                                        <input type="hidden" value="<?= $single_nominee_info_gpf['id'] ?>" name="nominee_gpf_id[]" id="" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="<?php echo $single_nominee_info_gpf['emp_gpf_nomini_name_rel']; ?>" name="emp_gpf_nomini_name_rel[]" class="form-control" />
                                                    </td>
                                                    <td><input type="text" value="<?= $single_nominee_info_gpf['gpf_percent_amount']; ?>" name="gpf_percent_amount[]" class="form-control" /></td>
                                                </tr>
                                                <?php
                                                $sr++;
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="3" class="text-center">No data found.</td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" class="text-right">
                                                <a href="javascript:void(0)" id="nominee_gpf_info" class="btn btn-primary">Add More</a>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <script type="text/javascript">
                                    $('#nominee_gpf_info').click(function () {
                                        var height = $('#step_3').height();
                                        $('.content').height(height + 80);
                                        var total_tr = $(this).parent().parent().parent().siblings('tbody').children('tr').length;
                                        if (total_tr < 10) {
                                            if (total_tr == 9) {
                                                $(this).attr('disabled', 'disabled');
                                            }
                                            var td = '<tr>' +
                                                    '<td>' + number[total_tr] + '। </td>' +
                                                    '<td><input type="text" name="emp_gpf_nomini_name_rel_new[]" class="form-control" /></td>' +
                                                    '<td><input type="text" name="gpf_percent_amount_new[]" class="form-control" /></td>' +
                                                    '</tr>'
                                            $(this).closest('table').children('.body_content').append(td);
                                            event.preventDefault();
                                        }
                                    })</script>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2">
                                <label>(খ) পেনশন/গ্রাচ্যুইটি</label>
                            </div>
                            <div class="col-xs-10">
                                <?php
                                $nominee_info_pention = $info['nominee_info_pention'];
                                ?>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="50">ক্রমিক নং</th>
                                            <th>নমিনির নাম ও সম্পর্ক</th>
                                            <th width="100">প্রাপ্যতার শতকরা হার</th>
                                        </tr>
                                    </thead>
                                    <tbody class="body_content">
                                        <?php
                                        if (!empty($nominee_info_pention)) {
                                            $sr = 0;
                                            foreach ($nominee_info_pention as $single_niminee_info_pention) {
                                                ?>
                                                <tr>
                                                    <td width="50">
                                                        <?= $number[$sr] ?>।
                                                        <input type="hidden" value="<?= $single_niminee_info_pention['id'] ?>" name="nominee_pention_info_id[]" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="<?= $single_niminee_info_pention['emp_pention_nomini_name_rel']; ?>" name="emp_pention_nomini_name_rel[]" class="form-control" />
                                                    </td>
                                                    <td><input type="text" value="<?= $single_niminee_info_pention['pention_percent_amount']; ?>" name="pention_percent_amount[]" class="form-control" /></td>
                                                </tr>
                                                <?php
                                                $sr++;
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td class="text-center" colspan="3">No Data Found</td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" class="text-right">
                                                <a href="javascript:void(0)" id="nominee_pention_info" class="btn btn-primary">Add More</a>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <script type="text/javascript">
                                    $('#nominee_pention_info').click(function () {
                                        var height = $('#step_3').height();
                                        $('.content').height(height + 80);
                                        var total_tr = $(this).parent().parent().parent().siblings('tbody').children('tr').length;
                                        if (total_tr < 10) {
                                            if (total_tr == 9) {
                                                $(this).attr('disabled', 'disabled');
                                            }
                                            var td = '<tr>' +
                                                    '<td>' + number[total_tr] + '। </td>' +
                                                    '<td><input type="text" name="emp_pention_nomini_name_rel_new[]" class="form-control" /></td>' +
                                                    '<td><input type="text" name="pention_percent_amount_new[]" class="form-control" /></td></td>' +
                                                    '</tr>'
                                            $(this).closest('table').children('.body_content').append(td);
                                            event.preventDefault();
                                        }
                                    })</script> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2">
                                <label>(গ) কল্যাণ তহবিল</label>
                            </div>
                            <div class="col-xs-10">
                                <?php
                                $nominee_info_walfare = $info['nominee_info_walfare'];
                                ?>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="50">ক্রমিক নং</th>
                                            <th>নমিনির নাম ও সম্পর্ক</th>
                                            <th width="100">প্রাপ্যতার শতকরা হার</th>
                                        </tr>
                                    </thead>
                                    <tbody class="body_content">
                                        <?php
                                        if (!empty($nominee_info_walfare)) {
                                            $sr = 0;
                                            foreach ($nominee_info_walfare as $single_nominee_info_walfare) {
                                                ?>
                                                <tr>
                                                    <td width="50">
                                                        <?= $number[$sr]; ?>।
                                                        <input type="hidden" value="<?= $single_nominee_info_walfare['ID']; ?>" name="nominee_walfare_info_id[]" id="nominee_walfare_info_id" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="<?= $single_nominee_info_walfare['emp_walfare_nomini_name_rel'] ?>" name="emp_walfare_nomini_name_rel[]" class="form-control" />
                                                    </td>
                                                    <td><input type="text" value="<?= $single_nominee_info_walfare['walfare_percent_amount'] ?>" name="walfare_percent_amount[]" class="form-control" /></td>
                                                </tr>
                                                <?php
                                                $sr++;
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="3" class="text-center" class="text-center">No Data Found</td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" class="text-right">
                                                <a href="javascript:void(0)" id="nominee_walfare_info" class="btn btn-primary">Add More</a>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <script type="text/javascript">
                                    $('#nominee_walfare_info').click(function () {
                                        var height = $('#step_3').height();
                                        $('.content').height(height + 80);
                                        var total_tr = $(this).parent().parent().parent().siblings('tbody').children('tr').length;
                                        if (total_tr < 10) {
                                            if (total_tr == 9) {
                                                $(this).attr('disabled', 'disabled');
                                            }
                                            var td = '<tr>' +
                                                    '<td>' + number[total_tr] + '। </td>' +
                                                    '<td><input type="text" name="emp_walfare_nomini_name_rel_new[]" class="form-control" /></td>' +
                                                    '<td><input type="text" name="walfare_percent_amount_new[]" class="form-control" /></td></td>' +
                                                    '</tr>'
                                            $(this).closest('table').children('.body_content').append(td);
                                            event.preventDefault();
                                        }
                                    })</script>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2">
                                <label>(ঘ) মৃত্যুজনিত ক্ষতিপুরণ</label>
                            </div>
                            <div class="col-xs-10">
                                <?php
                                $nominee_info_dead_loss = $info['nominee_info_dead_loss'];
                                ?>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="50">ক্রমিক নং</th>
                                            <th>নমিনির নাম ও সম্পর্ক</th>
                                            <th width="100">প্রাপ্যতার শতকরা হার</th>
                                        </tr>
                                    </thead>
                                    <tbody class="body_content">
                                        <?php
                                        if (!empty($nominee_info_dead_loss)) {
                                            $sr = 0;
                                            foreach ($nominee_info_dead_loss as $single_nominee_info_dead_loss) {
                                                ?>
                                                <tr>
                                                    <td width="50">
                                                        <?= $number[$sr]; ?>।
                                                        <input type="hidden" value="<?= $single_nominee_info_dead_loss['id'] ?>" name="emp_dead_loss_info_id[]" />
                                                    </td>
                                                    <td>
                                                        <input type="text" value="<?= $single_nominee_info_dead_loss['emp_dead_loss_nomini_name_rel'] ?>" name="emp_dead_loss_nomini_name_rel[]" class="form-control" />
                                                    </td>
                                                    <td><input type="text" value="<?= $single_nominee_info_dead_loss['emp_dead_loss_percent_amount'] ?>" name="emp_dead_loss_percent_amount[]" class="form-control" /></td>
                                                </tr>
                                                <?php
                                                $sr++;
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="3" class="text-center">No Data Found</td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" class="text-right">
                                                <a href="javascript:void(0)" id="dead_loss_info" class="btn btn-primary">Add More</a>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <script type="text/javascript">
                                    $('#dead_loss_info').click(function () {
                                        var height = $('#step_3').height();
                                        $('.content').height(height + 80);
                                        var total_tr = $(this).parent().parent().parent().siblings('tbody').children('tr').length;
                                        if (total_tr < 10) {
                                            if (total_tr == 9) {
                                                $(this).attr('disabled', 'disabled');
                                            }
                                            var td = '<tr>' +
                                                    '<td>' + number[total_tr] + '। </td>' +
                                                    '<td><input type="text" name="emp_dead_loss_nomini_name_rel_new[]" class="form-control" /></td>' +
                                                    '<td><input type="text" name="emp_dead_loss_percent_amount_new[]" class="form-control" /></td></td>' +
                                                    '</tr>'
                                            $(this).closest('table').children('.body_content').append(td);
                                            event.preventDefault();
                                        }
                                    })</script>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2">
                                <label>(ঙ) যৌথ বীমা</label>
                            </div>
                            <div class="col-xs-10">
                                <?php
                                $nominee_info_bema = $info['nominee_info_bema'];
                                ?>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="50">ক্রমিক নং</th>
                                            <th>নমিনির নাম ও সম্পর্ক</th>
                                            <th width="100">প্রাপ্যতার শতকরা হার</th>
                                        </tr>
                                    </thead>
                                    <tbody class="body_content">
                                        <?php
                                        if (!empty($nominee_info_bema)) {
                                            $sr = 0;
                                            foreach ($nominee_info_bema as $single_nominee_info_bema) {
                                                ?>
                                                <tr>
                                                    <td width="50">
                                                        <?= $number[$sr]; ?>।
                                                        <input type="hidden" value="<?= $single_nominee_info_bema['id'] ?>" name="nominee_bema_info_id[]"/>
                                                    </td>
                                                    <td>
                                                        <input type="text" value="<?= $single_nominee_info_bema['emp_bema_nomini_name_rel'] ?>" name="emp_bema_nomini_name_rel[]" class="form-control" />
                                                    </td>
                                                    <td><input type="text" value="<?= $single_nominee_info_bema['bema_percent_amount'] ?>" name="bema_percent_amount[]" class="form-control" /></td>
                                                </tr>
                                                <?php
                                                $sr++;
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="3" class="text-center">No Data Found.</td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" class="text-right">
                                                <a href="javascript:void(0)" id="emp_bema_nomini_info" class="btn btn-primary">Add More</a>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <script type="text/javascript">
                                    $('#emp_bema_nomini_info').click(function () {
                                        var height = $('#step_3').height();
                                        $('.content').height(height + 80);
                                        var total_tr = $(this).parent().parent().parent().siblings('tbody').children('tr').length;
                                        if (total_tr < 10) {
                                            if (total_tr == 9) {
                                                $(this).attr('disabled', 'disabled');
                                            }
                                            var td = '<tr>' +
                                                    '<td>' + number[total_tr] + '। </td>' +
                                                    '<td><input type="text" name="emp_bema_nomini_name_rel_new[]" class="form-control" /></td>' +
                                                    '<td><input type="text" name="bema_percent_amount_new[]" class="form-control" /></td></td>' +
                                                    '</tr>'
                                            $(this).closest('table').children('.body_content').append(td);
                                            event.preventDefault();
                                        }
                                    })</script>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row step" id="step_4">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="text-center">জাতীয় বেতন স্কেল-২০১৫খ্রিঃ এর বেতন নির্ধারনী বিবরনী</h4>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-sm-8">
                                <?php
                                $salary_info_id = '';
                                if (isset($info['salary_info'][0]['id'])) {
                                    $salary_info_id = $info['salary_info'][0]['id'];
                                }
                                ?>
                                <input type="hidden" value="<?= $salary_info_id; ?>" name="salary_info_id"/>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="">১) জাতীয় পরিচয়পত্র (এনআইডি)নম্বর</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        $stp_4_nid = '';
                                        if (isset($info['salary_info'][0]['stp_4_nid'])) {
                                            $stp_4_nid = $info['salary_info'][0]['stp_4_nid'];
                                        }
                                        ?>
                                        <input type="text" value="<?= $stp_4_nid; ?>" name="stp_4_nid" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="">২) বিভাগ অফিসের নাম</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        $stp_4_office_name = '';
                                        if (isset($info['salary_info'][0]['stp_4_office_name'])) {
                                            $stp_4_office_name = $info['salary_info'][0]['stp_4_office_name'];
                                        }
                                        ?>
                                        <input type="text" value="<?= $stp_4_office_name; ?>" name="stp_4_office_name" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="">৩) মোবাইল ফোন নম্বর</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        $stp_4_mobile_no = '';
                                        if (isset($info['salary_info'][0]['stp_4_mobile_no'])) {
                                            $stp_4_mobile_no = $info['salary_info'][0]['stp_4_mobile_no'];
                                        }
                                        ?>
                                        <input type="text" value="<?= $stp_4_mobile_no; ?>" name="stp_4_mobile_no" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="">৪) জন্ম তারিখ</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        $stp_4_date_of_birth = '';
                                        if (isset($info['salary_info'][0]['stp_4_date_of_birth'])) {
                                            if ($info['salary_info'][0]['stp_4_date_of_birth'] != 0) {
                                                $stp_4_date_of_birth = date('d-m-Y', $info['salary_info'][0]['stp_4_date_of_birth']);
                                            } else {
                                                $stp_4_date_of_birth = '';
                                            }
                                        }
                                        ?>
                                        <input type="text" value="<?= $stp_4_date_of_birth; ?>" name="stp_4_date_of_birth" id="step_4_emp_birth_date" class="form-control date-picker" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="">৫)  </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row inside form-group">
                                            <div class="col-xs-5">
                                                <label>ক. চাকুরিতে প্রথম যোগদানের তারিখ</label>
                                            </div>
                                            <div class="col-xs-7">
                                                <?php
                                                $stp_4_first_joining_date = '';
                                                if ($info['salary_info'][0]['stp_4_first_joining_date'] != 0) {
                                                    $stp_4_first_joining_date = date('d-m-Y', $info['salary_info'][0]['stp_4_first_joining_date']);
                                                } else {
                                                    $stp_4_first_joining_date = '';
                                                }
                                                ?>
                                                <input type="text" value="<?= $stp_4_first_joining_date; ?>" name="stp_4_first_joining_date" class="form-control date-picker" />
                                            </div>
                                        </div>
                                        <div class="row inside form-group">
                                            <div class="col-xs-5">
                                                <label>খ. চাকুরিতে প্রথম যোগদানের পদবি</label>
                                            </div>
                                            <div class="col-xs-7">
                                                <?php
                                                $stp_4_first_joining_designation = '';
                                                if (isset($info['salary_info'][0]['stp_4_first_joining_designation'])) {
                                                    $stp_4_first_joining_designation = $info['salary_info'][0]['stp_4_first_joining_designation'];
                                                }
                                                ?>
                                                <input type="text" value="<?= $stp_4_first_joining_designation; ?>" name="stp_4_first_joining_designation" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="row inside form-group">
                                            <div class="col-xs-5">
                                                <label>গ. কর্মচারীর পরিচিতি নম্বর</label>
                                            </div>
                                            <div class="col-xs-7">
                                                <?php
                                                $stp_4_employee_identy_number = '';
                                                if (isset($info['salary_info'][0]['stp_4_employee_identy_number'])) {
                                                    $stp_4_employee_identy_number = $info['salary_info'][0]['stp_4_employee_identy_number'];
                                                }
                                                ?>
                                                <input type="text" value="<?= $stp_4_employee_identy_number; ?>" name="stp_4_employee_identy_number" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="">৬)  ৩০/০৬/২০১৫ খ্রিঃ তারিখে </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row inside form-group">
                                            <div class="col-xs-5">
                                                <label for="">(ক) গৃহিত মূলবেতন</label>
                                            </div>
                                            <div class="col-xs-7">
                                                <?php
                                                $stp_4_taken_main_salaryr = 0;
                                                if (isset($info['salary_info'][0]['stp_4_taken_main_salary'])) {
                                                    $stp_4_taken_main_salaryr = $info['salary_info'][0]['stp_4_taken_main_salary'];
                                                }
                                                ?>
                                                <input type="text" value="<?= $stp_4_taken_main_salaryr; ?>" id="stp_4_taken_main_salary" name="stp_4_taken_main_salary" class="form-control" />
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            $(document).ready(function () {
                                                function step_4_total_salary_7_a_b() {
                                                    var total_salary_7_a = parseFloat($('#stp_4_taken_main_salary').val());
                                                    var total_salary_7_b = parseFloat($('#stp_4_pp').val());
                                                    var total_salary_7_a_b = total_salary_7_a + total_salary_7_b;
                                                    $('#stp_4_total_salary_7a_7b').val(total_salary_7_a_b);
                                                }
                                                function step_4_total_distence_8_9_b() {
                                                    var stp_4_total_salary_7a_7b = parseFloat($('#stp_4_total_salary_7a_7b').val());
                                                    var stp_4_grade_initial_salary_2009 = parseFloat($('#stp_4_grade_initial_salary_2009').val());
                                                    var step_4_total_distence_8_9_b = stp_4_total_salary_7a_7b - stp_4_grade_initial_salary_2009;
                                                    $('#stp_4_total_distance_8_9B').val(step_4_total_distence_8_9_b);
                                                }

                                                function step_4_total_salary_10_11_b() {
                                                    var stp_4_total_distance_8_9B = parseFloat($('#stp_4_total_distance_8_9B').val());
                                                    var stp_4_grade_initial_salary_2015 = parseFloat($('#stp_4_grade_initial_salary_2015').val());
                                                    var step_4_total_salary_10_11_b = stp_4_total_distance_8_9B + stp_4_grade_initial_salary_2015;
                                                    $('#stp_4_total_salary_10_11b').val(step_4_total_salary_10_11_b);
                                                }
                                                $('#stp_4_taken_main_salary').keyup(function () {
                                                    step_4_total_salary_7_a_b();
                                                    step_4_total_distence_8_9_b();
                                                    step_4_total_salary_10_11_b();
                                                });
                                                $('#stp_4_pp').keyup(function () {
                                                    step_4_total_salary_7_a_b();
                                                    step_4_total_distence_8_9_b();
                                                    step_4_total_salary_10_11_b();
                                                });

                                                $('#stp_4_total_salary_7a_7b').keyup(function () {
                                                    step_4_total_distence_8_9_b();
                                                    step_4_total_salary_10_11_b();
                                                });

                                                $('#stp_4_grade_initial_salary_2009').keyup(function () {
                                                    step_4_total_distence_8_9_b();
                                                    step_4_total_salary_10_11_b();
                                                });


                                                $('#stp_4_grade_initial_salary_2015').keyup(function () {
                                                    step_4_total_salary_10_11_b();
                                                });


                                            });</script>
                                        <div class="row inside form-group">
                                            <div class="col-xs-5">
                                                <label for="">(খ) পিপি(যদি থাকে)</label>
                                            </div>
                                            <div class="col-xs-7">
                                                <?php
                                                $stp_4_pp = 0;
                                                if (isset($info['salary_info'][0]['stp_4_pp'])) {
                                                    $stp_4_pp = $info['salary_info'][0]['stp_4_pp'];
                                                }
                                                ?>
                                                <input type="text" value="<?= $stp_4_pp; ?>" id="stp_4_pp" name="stp_4_pp" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="">৭) মোট বেতন (৭ক+৭খ)</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        $stp_4_total_salary_7a_7b = 0;
                                        if (isset($info['salary_info'][0]['stp_4_total_salary_7a_7b'])) {
                                            $stp_4_total_salary_7a_7b = $info['salary_info'][0]['stp_4_total_salary_7a_7b'];
                                        }
                                        ?>
                                        <input type="text" value="<?= $stp_4_total_salary_7a_7b; ?>" disabled="disabled" id="stp_4_total_salary_7a_7b" name="stp_4_total_salary_7a_7b" class="form-control " />
                                    </div>
                                </div> 
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="">৮) জাতীয় বেতনস্কেল  ২০০৯ খ্রিঃ অনুযায়ী ৩০/০৬/২০১৫ খ্রিঃ তারিখে</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row inside form-group">
                                            <div class="col-xs-5">
                                                <label for="">(ক) প্রাপ্য গ্রেড </label>
                                            </div>
                                            <div class="col-xs-7">
                                                <?php
                                                $stp_4_grade_2009 = 0;
                                                if (isset($info['salary_info'][0]['stp_4_grade_2009'])) {
                                                    $stp_4_grade_2009 = $info['salary_info'][0]['stp_4_grade_2009'];
                                                }
                                                ?>
                                                <input type="text" value="<?= $stp_4_grade_2009; ?>" name="stp_4_grade_2009" class="form-control " />
                                            </div>
                                        </div>
                                        <div class="row inside form-group">
                                            <div class="col-xs-5">
                                                <label for="">(খ) প্রাপ্য গ্রেডের প্রারম্ভিক বেতন </label>
                                            </div>
                                            <div class="col-xs-7">
                                                <?php
                                                $stp_4_grade_initial_salary_2009 = 0;
                                                if (isset($info['salary_info'][0]['stp_4_grade_initial_salary_2009'])) {
                                                    $stp_4_grade_initial_salary_2009 = $info['salary_info'][0]['stp_4_grade_initial_salary_2009'];
                                                }
                                                ?>
                                                <input type="text" value="<?= $stp_4_grade_initial_salary_2009; ?>" id="stp_4_grade_initial_salary_2009" name="stp_4_grade_initial_salary_2009" class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="">৯ ) মোট পার্থক্য ৮-৯ (খ)</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        $stp_4_total_distance_8_9B = 0;
                                        if (isset($info['salary_info'][0]['stp_4_total_distance_8_9B'])) {
                                            $stp_4_total_distance_8_9B = $info['salary_info'][0]['stp_4_total_distance_8_9B'];
                                        }
                                        ?>
                                        <input type="text" disabled="disabled" value="<?= $stp_4_total_distance_8_9B; ?>" id="stp_4_total_distance_8_9B" name="stp_4_total_distance_8_9B" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="">১০ । জাতীয় বেতন স্কেল ২০১৫ খ্রিঃ অনুযায়ী ০১/০৭/২০১৫ তারিখে</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row inside form-group">
                                            <div class="col-xs-5">
                                                <label for="">(ক) প্রাপ্য গ্রেড </label>
                                            </div>
                                            <div class="col-xs-7">
                                                <?php
                                                $stp_4_grade_2015 = '';
                                                if (isset($info['salary_info'][0]['stp_4_grade_2015'])) {
                                                    $stp_4_grade_2015 = $info['salary_info'][0]['stp_4_grade_2015'];
                                                }
                                                ?>
                                                <input type="text" value="<?= $stp_4_grade_2015; ?>" name="stp_4_grade_2015" class="form-control " />
                                            </div>
                                        </div>
                                        <div class="row inside form-group">
                                            <div class="col-xs-5">
                                                <label for="">(খ) প্রাপ্য গ্রেডের প্রারম্ভিক বেতন </label>
                                            </div>
                                            <div class="col-xs-7">
                                                <?php
                                                $stp_4_grade_initial_salary_2015 = 0;
                                                if (isset($info['salary_info'][0]['stp_4_grade_initial_salary_2015'])) {
                                                    $stp_4_grade_initial_salary_2015 = $info['salary_info'][0]['stp_4_grade_initial_salary_2015'];
                                                }
                                                ?>
                                                <input type="text" value="<?= $stp_4_grade_initial_salary_2015; ?>" id="stp_4_grade_initial_salary_2015" name="stp_4_grade_initial_salary_2015" class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="">১১ । মোট বেতন ১০+১১(খ)</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        $stp_4_total_salary_10_11b = 0;
                                        if (isset($info['salary_info'][0]['stp_4_total_salary_10_11b'])) {
                                            $stp_4_total_salary_10_11b = $info['salary_info'][0]['stp_4_total_salary_10_11b'];
                                        }
                                        ?>
                                        <input type="text" disabled="disabled" value="<?= $stp_4_total_salary_10_11b; ?>" id="stp_4_total_salary_10_11b" name="stp_4_total_salary_10_11b" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-6">
                                        <label for="">১২ । জাতীয় বেতন স্কেল ২০১৫ খ্রিঃ অনুযায়ী ০১/০৭/২০১৫ তারিখে প্রাপ্য ধাপ</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <?php
                                        $stp_4_got_step_from_2015 = '';
                                        if (isset($info['salary_info'][0]['stp_4_got_step_from_2015'])) {
                                            $stp_4_got_step_from_2015 = $info['salary_info'][0]['stp_4_got_step_from_2015'];
                                        }
                                        ?>
                                        <input type="text" value="<?= $stp_4_got_step_from_2015; ?>" name="stp_4_got_step_from_2015" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-6">
                                        <label for="">১৩ । বার্ষিক বর্ধিত বেতনের সমপরিমাণ টাকার কম হলে পিপি হিসেবে প্রাপ্য</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <?php
                                        $stp_4_got_by_pp = '';
                                        if (isset($info['salary_info'][0]['stp_4_got_by_pp'])) {
                                            $stp_4_got_by_pp = $info['salary_info'][0]['stp_4_got_by_pp'];
                                        }
                                        ?>
                                        <input type="text" value="<?= $stp_4_got_by_pp; ?>" name="stp_4_got_by_pp" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-6">
                                        <label for="">১৪ ) ০১/০৭/২০১৫ তারিখে নির্ধারিত মূলবেতন</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <?php
                                        $stp_4_main_salary_at_01_07_2015 = '';
                                        if (isset($info['salary_info'][0]['stp_4_main_salary_at_01_07_2015'])) {
                                            $stp_4_main_salary_at_01_07_2015 = $info['salary_info'][0]['stp_4_main_salary_at_01_07_2015'];
                                        }
                                        ?>
                                        <input type="text" value="<?= $stp_4_main_salary_at_01_07_2015; ?>" name="stp_4_main_salary_at_01_07_2015" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-6">
                                        <label for="">১৫ ) ০১/০৭/২০১৫ খ্রিঃ হতে ৩০/০৬/২০১৬ খ্রিঃ পর্যন্ত প্রাপ্য বার্ষিক বেতন  টাকা বৃদ্ধি যা ১৫/১২/১৫ খ্রিঃ তারিখে প্রদেয় সহ মোট </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <?php
                                        $stp_4_total_salary_from_01_30 = '';
                                        if (isset($info['salary_info'][0]['stp_4_total_salary_from_01_30'])) {
                                            $stp_4_total_salary_from_01_30 = $info['salary_info'][0]['stp_4_total_salary_from_01_30'];
                                        }
                                        ?>
                                        <input type="text" value="<?= $stp_4_total_salary_from_01_30; ?>" name="stp_4_total_salary_from_01_30" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-6">
                                        <label for="">১৬ ) পরবর্তী বার্ষিক বেতন বৃদ্ধির তারিখ</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <?php
                                        $stp_4_next_salary_increment_date = '';
                                        if ($info['salary_info'][0]['stp_4_next_salary_increment_date'] != 0) {
                                            $stp_4_next_salary_increment_date = date('d-m-Y', $info['salary_info'][0]['stp_4_next_salary_increment_date']);
                                        } else {
                                            $stp_4_next_salary_increment_date = '';
                                        }
                                        ?>
                                        <input type="text" value="<?= $stp_4_next_salary_increment_date; ?>" name="stp_4_next_salary_increment_date" class="form-control date-picker" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-xs-offset-4">
                        <input type="submit" value="Update" class="btn btn-primary form-control" />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                    </div>
                </div>
                <div class="row button_row">
                    <div class="col-xs-6 text-left">
                        <a id="prev_button" href="javascript:void(0)" class="btn btn-primary" data-step="4" disabled><span class="glyphicon glyphicon-arrow-left"></span> Previous </a>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a id="next_button" href="javascript:void(0)" class="btn btn-primary" data-step="1"><span class="glyphicon glyphicon-arrow-right"></span> Next</a>
                    </div>
                </div>

            </form> 
        </div>

        <script type="text/javascript">
            jQuery(document).ready(function () {
                jQuery('.date-picker').datepicker({
                    changeYear: true,
                    dateFormat: 'dd-mm-yy',
                    yearRange: '1940:2070'
                });
                var height = $('#step_1').height();
                $('.content').height(height + 150);
                $('#next_button').click(function () {
                    var step = $(this).attr('data-step');
                    if (step == 1) {
                        var height = $('#step_2').height();
                        $('.content').height(height + 150);
                        $('#prev_button').removeAttr('disabled').attr('data-step', 3);
                        $(this).attr('data-step', 2);
                        $('#step_1, #step_3').fadeOut();
                        $('#step_2').fadeIn();
                    } else if (step == 2) {
                        var height = $('#step_3').height();
                        $('#prev_button').removeAttr('disabled').attr('data-step', 2);
                        $('.content').height(height + 150);
                        $(this).attr('data-step', 3);
                        $('#step_1,#step_2').fadeOut();
                        $('#step_3').fadeIn();
                    } else if (step == 3) {
                        $(this).attr('disabled', 'disabled');
                        var height = $('#step_4').height();
                        $('#prev_button').removeAttr('disabled').attr('data-step', 1);
                        $('.content').height(height + 150);
                        $(this).attr('data-step', 4);
                        $('#step_1,#step_2,#step_3').fadeOut();
                        $('#step_4').fadeIn();
                    }
                })


                $('#prev_button').click(function () {
                    var step = $(this).attr('data-step');
                    if (step == 1) {
                        var height = $('#step_3').height();
                        $('.content').height(height + 150);
                        $(this).attr('data-step', 2);
                        $('#step_1, #step_2,#step_4').fadeOut();
                        $('#step_3').fadeIn();
                        $('#next_button').removeAttr('disabled').attr('data-step', 3);
                    } else if (step == 2) {
                        var height = $('#step_2').height();
                        $('.content').height(height + 150);
                        $(this).attr('data-step', 3);
                        $('#step_1,#step_3,#step_4').fadeOut();
                        $('#step_2').fadeIn();
                        $('#next_button').removeAttr('disabled').attr('data-step', 2);
                    } else if (step == 3) {
                        $(this).attr('disabled', 'disabled');
                        var height = $('#step_1').height();
                        $('.content').height(height + 150);
                        $(this).attr('data-step', 4);
                        $('#step_2,#step_3,#step_4').fadeOut();
                        $('#step_1').fadeIn();
                        $('#next_button').removeAttr('disabled').attr('data-step', 1);
                    }
                })
            })</script>

    </div>
<?php } ?> 