<?php
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
        if ($msg == 'emp_add_success') {
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
            <strong>Success!</strong> New employee added successfully.
        </div>
    </div>
    <div class="page-content employee_details">
        <!-- END PAGE HEADER-->
        <div class="content container-fluid">
            <div class="header">
                <div class="row">
                    <div class="col-xs-6">
                        <h3 class="main_title">
                            <?php
                            if (isset($info['basic_info'][0]['emp_name'])) {
                                echo $info['basic_info'][0]['emp_name'];
                            }
                            ?>
                        </h3>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href="<?php echo base_url('admin/employee_en/' . $info['basic_info'][0]['id']); ?>" class="btn btn-primary">English Version</a>
                        <a href="<?php echo base_url('admin/edit/' . $info['basic_info'][0]['id']); ?>" class="btn btn-primary">Edit This Profile</a>
                    </div>
                </div>
                <h5>
                    <?php
                    if (isset($info['basic_info'][0]['emp_dept'])) {
                        echo $info['basic_info'][0]['emp_dept'];
                    }
                    ?>
                </h5>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div> 
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#basic_info" aria-controls="basic_info" role="tab" data-toggle="tab">Basic Info</a></li>
                            <li role="presentation"><a href="#qualification" aria-controls="educatonal_qualification" role="tab" data-toggle="tab">Qualification</a></li>
                            <li role="presentation"><a href="#nominee_information" aria-controls="messages" role="tab" data-toggle="tab">Nominee Information</a></li>
                            <li role="presentation"><a href="#salary_info" aria-controls="salary_info" role="tab" data-toggle="tab">Salary Information</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="basic_info">
                                <div class="row">
                                    <div class="col-sm-4">
                                        ০১। Employee ID
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_id_number'])) {
                                            echo $info['basic_info'][0]['emp_id_number'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ০২। কর্মকর্তা/কর্মচারীর নাম
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_name'])) {
                                            echo $info['basic_info'][0]['emp_name'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ০৩। বর্তমান পদবি
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_current_designation'])) {
                                            echo $info['basic_info'][0]['emp_current_designation'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ০৪। নিয়োগকালীন পদবী
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_appointment_designation'])) {
                                            echo $info['basic_info'][0]['emp_appointment_designation'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ০৫। নিয়োগের তারিখ
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_apointment_date'])) {
                                            if (!empty($info['basic_info'][0]['emp_apointment_date'])) {
                                                echo $info['basic_info'][0]['emp_apointment_date'] . " ইং";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ০৫। অবসরে গমনের সম্ভাব্য তারিখ
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_retirement_date'])) {
                                            if (!empty($info['basic_info'][0]['emp_retirement_date'])) {
                                                echo $info['basic_info'][0]['emp_retirement_date'] . " ইং";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ০৬। পদোন্নতির তারিখ
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_promotion_date'])) {
                                            echo $info['basic_info'][0]['emp_promotion_date'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ০৭। বর্তমান কর্মস্থল
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_current_office'])) {
                                            if (!empty($info['basic_info'][0]['emp_current_office'])) {
                                                echo $info['basic_info'][0]['emp_current_office'] . "।";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ০৮। বর্তমান কর্মস্থলে যোগদানের তারিখ
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_current_office_appointment_date'])) {
                                            if (!empty($info['basic_info'][0]['emp_current_office_appointment_date'])) {
                                                echo $info['basic_info'][0]['emp_current_office_appointment_date'] . " ইং";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        ০৯। অব্যবহিত পূর্ববর্তী
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 has_inner">
                                        (ক)	কর্মস্থল
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_recent_prev_joining_place'])) {
                                            if (!empty($info['basic_info'][0]['emp_recent_prev_joining_place'])) {
                                                echo $info['basic_info'][0]['emp_recent_prev_joining_place'] . " ।";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 has_inner">
                                        (খ)	যোগদানের তারিখ
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_recent_prev_joining_date'])) {
                                            if (!empty($info['basic_info'][0]['emp_recent_prev_joining_date'])) {
                                                echo $info['basic_info'][0]['emp_recent_prev_joining_date'] . " ইং";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ১০।	জাতীয় পরিচয়পত্র নম্বর(যদি থাকে)
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_nid_no'])) {
                                            echo $info['basic_info'][0]['emp_nid_no'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ১১। ধর্ম
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_religion'])) {
                                            echo $info['basic_info'][0]['emp_religion'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ১২।	পাসপোর্ট নম্বর (যদি থাকে)
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_passport_no'])) {
                                            echo $info['basic_info'][0]['emp_passport_no'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ১৩।	পিতার নাম
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_father_name'])) {
                                            echo $info['basic_info'][0]['emp_father_name'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ১৪।	মাতার নাম
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_mother_name'])) {
                                            echo $info['basic_info'][0]['emp_mother_name'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ১৫। জন্ম তারিখ
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_birth_date'])) {
                                            echo $info['basic_info'][0]['emp_birth_date'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ১৬। রক্তের গ্রুপ
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_blood_group'])) {
                                            switch ($info['basic_info'][0]['emp_blood_group']) {
                                                case 'A_neg':
                                                    echo 'A-';
                                                    break;
                                                case 'A_pos':
                                                    echo 'A+';
                                                    break;
                                                case 'AB_neg':
                                                    echo 'AB-';
                                                    break;
                                                case 'AB_pos':
                                                    echo 'AB+';
                                                    break;
                                                case 'B_neg':
                                                    echo 'B-';
                                                    break;
                                                case 'B_pos':
                                                    echo 'B+';
                                                    break;
                                                case 'O_neg';
                                                    echo 'O-';
                                                    break;
                                                case 'O_pos':
                                                    echo 'O+';
                                                    break;
                                                default :
                                                    echo '';
                                                    break;
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ১৭।	লিঙ্গ
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_sex'])) {
                                            echo $info['basic_info'][0]['emp_sex'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ১৮।	বৈবাহিক অবস্থা
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_merital_status'])) {
                                            echo $info['basic_info'][0]['emp_merital_status'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ১৯।	স্বামী/স্ত্রীর নাম
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_spose'])) {
                                            echo $info['basic_info'][0]['emp_spose'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ২০।	টেলিফোন নম্বর
                                    </div>
                                    <div class="col-sm-8"> 
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_telephone_number'])) {
                                            echo $info['basic_info'][0]['emp_telephone_number'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ২১।	মোবাইল নম্বর
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_mobile_number'])) {
                                            echo $info['basic_info'][0]['emp_mobile_number'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ২২।	টিআইএন(যদি থাকে)
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_tin'])) {
                                            echo $info['basic_info'][0]['emp_tin'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ২৩।	ই-মেইল
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_email'])) {
                                            echo $info['basic_info'][0]['emp_email'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ২৪।	স্থায়ী ঠিকানা
                                    </div>
                                    <div class="col-sm-8">
                                        <ul>
                                            <li>
                                                <span class="label">গ্রাম</span>
                                                <span> 
                                                    <?php
                                                    if (isset($info['basic_info'][0]['emp_add_village'])) {
                                                        echo $info['basic_info'][0]['emp_add_village'];
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="label">ডাকঘর</span>
                                                <span> 
                                                    <?php
                                                    if (isset($info['basic_info'][0]['emp_add_post'])) {
                                                        echo $info['basic_info'][0]['emp_add_post'];
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="label">থানা/উপজেলা</span>
                                                <span>
                                                    <?php
                                                    if (isset($info['basic_info'][0]['emp_add_po'])) {
                                                        echo $info['basic_info'][0]['emp_add_po'];
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="label">জেলা</span>
                                                <span>
                                                    <?php
                                                    if (isset($info['basic_info'][0]['emp_add_district'])) {
                                                        echo $info['basic_info'][0]['emp_add_district'];
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ২৫।	বর্তমান ঠিকানা
                                    </div>
                                    <div class="col-sm-8">
                                        <ul>
                                            <li>
                                                <span class="label">গ্রাম</span>
                                                <span>
                                                    <?php
                                                    if (isset($info['basic_info'][0]['emp_per_add_house'])) {
                                                        echo $info['basic_info'][0]['emp_per_add_house'];
                                                    }
                                                    ?>

                                                    <?php
                                                    if (isset($info['basic_info'][0]['emp_per_add_road'])) {
                                                        echo $info['basic_info'][0]['emp_per_add_road'];
                                                    }
                                                    ?>

                                                    <?php
                                                    if (isset($info['basic_info'][0]['emp_per_add_village'])) {
                                                        echo $info['basic_info'][0]['emp_per_add_village'];
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="label">ডাকঘর</span>
                                                <span>
                                                    <?php
                                                    if (isset($info['basic_info'][0]['emp_per_add_post'])) {
                                                        echo $info['basic_info'][0]['emp_per_add_post'];
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="label">থানা/উপজেলা</span>
                                                <span>
                                                    <?php
                                                    if (isset($info['basic_info'][0]['emp_per_add_po'])) {
                                                        echo $info['basic_info'][0]['emp_per_add_po'];
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="label">জেলা</span>
                                                <span>
                                                    <?php
                                                    if (isset($info['basic_info'][0]['emp_per_add_district'])) {
                                                        echo $info['basic_info'][0]['emp_per_add_district'];
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane fade " id="qualification">
                                ২৬। শিক্ষাগত যোগ্যাতা 
                                <br />
                                <br />
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ক্রমিক নং</th>
                                            <th>পরীক্ষার নাম</th>
                                            <th>গ্রুপ/বিভাগ/বিষয়</th>
                                            <th>পাসের সন</th>
                                            <th>বিশ্ববিদ্যালয়/বোর্ড</th>
                                            <th>জিপিএ/গ্রেড/শ্রেণি</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $educational_qualification = $info['educational_qualification'];
                                        $edu_sr = 1;
                                        if (!empty($educational_qualification)) {
                                            foreach ($educational_qualification as $single_edu_qua) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $edu_sr; ?></td>
                                                    <td><?php echo $single_edu_qua['edu_exam_name'] ?></td>
                                                    <td><?php echo $single_edu_qua['edu_exam_dept'] ?></td>
                                                    <td><?php echo $single_edu_qua['edu_passing_year'] ?></td>
                                                    <td><?php echo $single_edu_qua['edu_university_board'] ?></td>
                                                    <td><?php echo $single_edu_qua['edu_gpa_class'] ?></td>
                                                </tr>
                                                <?php
                                                $edu_sr++;
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="6" class="text-center">No Education</td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                                <br />
                                <br />
                                ২৭। কর্মস্থলের তথ্য(সম্পূর্ণ চাকুরীকালীন)
                                <br />
                                <br />
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="70">ক্রমিক নং</th>
                                            <th>কর্মস্থলের নাম</th>
                                            <th>হতে</th>
                                            <th>পর্যন্ত</th>
                                            <th>মন্তব্য</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $office_info = $info['office_info'];
                                        $office_info_sr = 1;
                                        if (!empty($office_info)) {
                                            foreach ($office_info as $single_office_info) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $office_info_sr; ?></td>
                                                    <td><?php echo $single_office_info['emp_office_name']; ?></td>
                                                    <td><?php echo $single_office_info['emp_office_from']; ?></td>
                                                    <td><?php echo $single_office_info['emp_office_to']; ?></td>
                                                    <td><?php echo $single_office_info['emp_office_about']; ?></td>
                                                </tr>
                                                <?php
                                                $office_info_sr++;
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="5" class="text-center">No office information found.</td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                <br />
                                <br />
                                ২৮। পেশাগত যোগ্যতা:
                                <br />
                                <br />
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="70">ক্রমিক নং</th>
                                            <th>কোর্সের নাম</th>
                                            <th>প্রতিষ্ঠান</th>
                                            <th>হতে</th>
                                            <th>পর্যন্ত</th>
                                            <th>সময়কাল</th>
                                            <th>বিবরণ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $training_info = $info['training_info'];
                                        $training_info_sr = 1;
                                        if (!empty($training_info)) {
                                            foreach ($training_info as $single_training_info) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $training_info_sr; ?></td>
                                                    <td><?php echo $single_training_info['employeement_training_name']; ?></td>
                                                    <td><?php echo $single_training_info['employeement_training_institute']; ?></td>
                                                    <td><?php echo $single_training_info['employeement_training_from']; ?></td>
                                                    <td><?php echo $single_training_info['employeement_training_to']; ?></td>
                                                    <td><?php echo $single_training_info['employeement_training_duration']; ?></td>
                                                    <td><?php echo $single_training_info['employeement_training']; ?></td>
                                                </tr>
                                                <?php
                                                $training_info_sr++;
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="5" class="text-center">No office information found.</td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <br />
                                <br />
                                <div class="row">
                                    <div class="col-sm-4">
                                        ২৯। কম্পিউটার পরিচালনায়
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_computer_skill'])) {
                                            $computer_skills = unserialize($info['basic_info'][0]['emp_computer_skill']);
                                            $sr = 0;
                                            foreach ($computer_skills as $computer_skill) {
                                                if ($sr == 0) {
                                                    echo $computer_skill;
                                                } else {
                                                    echo ', ' . $computer_skill;
                                                }
                                                $sr++;
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ৩০। অবসরে গমনের সম্ভাব্য তারিখ
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_retirement_date'])) {
                                            echo $info['basic_info'][0]['emp_retirement_date'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ৩১। সন্তান সংখ্যা
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_children_amount'])) {
                                            echo $info['basic_info'][0]['emp_children_amount'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ৩২। বিশেষ দক্ষতা/পারদর্শিতা
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_extra_experience'])) {
                                            echo $info['basic_info'][0]['emp_extra_experience'];
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div> 

                            <div role="tabpanel" class="tab-pane fade " id="nominee_information">
                                ৩৩। নমিনির তথ্য: <br /> <br />
                                (ক)	জিপিএফ:

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="70">ক্রমিক নং</th>
                                            <th>নমিনির নাম ও সম্পর্ক</th>
                                            <th>প্রাপ্যতার শতকরা হার</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nominee_info_gpf = $info['nominee_info_gpf'];
                                        $nominee_info_gpf_sr = 1;
                                        if (!empty($nominee_info_gpf)) {
                                            foreach ($nominee_info_gpf as $single_info_gpf) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $nominee_info_gpf_sr; ?></td>
                                                    <td><?php echo $single_info_gpf['emp_gpf_nomini_name_rel']; ?></td>
                                                    <td><?php echo $single_info_gpf['gpf_percent_amount']; ?>%</td>
                                                </tr>
                                                <?php
                                                $nominee_info_gpf_sr++;
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="3" class="text-center">No information found.</td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>


                                (খ)	পেনশন/গ্রাচ্যুইটি:

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="70">ক্রমিক নং</th>
                                            <th>নমিনির নাম ও সম্পর্ক</th>
                                            <th>প্রাপ্যতার শতকরা হার</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nominee_info_pention = $info['nominee_info_pention'];
                                        if (!empty($nominee_info_pention)) {
                                            $nominee_info_pention_sr = 1;
                                            foreach ($nominee_info_pention as $single_info_pention) {
                                                ?>
                                                <tr>
                                                    <td><?= $nominee_info_pention_sr; ?></td>
                                                    <td><?php echo $single_info_pention['emp_pention_nomini_name_rel']; ?></td>
                                                    <td><?php echo $single_info_pention['pention_percent_amount']; ?>%</td>
                                                </tr>
                                                <?php
                                                $nominee_info_pention++;
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="3" class="text-center">No information found.</td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>


                                (গ)	কল্যান তহবিল:

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="70">ক্রমিক নং</th>
                                            <th>নমিনির নাম ও সম্পর্ক</th>
                                            <th>প্রাপ্যতার শতকরা হার</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nominee_info_walfare = $info['nominee_info_walfare'];
                                        $nominee_info_walfare_sr = 1;
                                        if (!empty($nominee_info_walfare)) {
                                            foreach ($nominee_info_walfare as $single_info_walfare) {
                                                ?>
                                                <tr>
                                                    <td><?= $nominee_info_walfare_sr; ?></td>
                                                    <td><?php echo $single_info_walfare['emp_walfare_nomini_name_rel']; ?></td>
                                                    <td><?php echo $single_info_walfare['walfare_percent_amount']; ?>%</td>
                                                </tr>
                                                <?php
                                                $nominee_info_walfare_sr++;
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="3" class="text-center">No information found.</td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                (ঘ)	মৃত্যুজনিত ক্ষতিপূরণ:

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="70">ক্রমিক নং</th>
                                            <th>নমিনির নাম ও সম্পর্ক</th>
                                            <th>প্রাপ্যতার শতকরা হার</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nominee_info_dead_loss = $info['nominee_info_dead_loss'];
                                        $nominee_info_dead_loss_sr = 1;
                                        if (!empty($nominee_info_dead_loss)) {
                                            foreach ($nominee_info_dead_loss as $single_info_dead_loss) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $nominee_info_dead_loss_sr; ?></td>
                                                    <td><?php echo $single_info_dead_loss['emp_dead_loss_nomini_name_rel'] ?></td>
                                                    <td><?php echo $single_info_dead_loss['emp_dead_loss_percent_amount'] ?>%</td>
                                                </tr>
                                                <?php
                                                $nominee_info_dead_loss_sr++;
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="3" class="text-center">No information found.</td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>


                                (ঙ)	যৌথবীমা: 
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="70">ক্রমিক নং</th>
                                            <th>নমিনির নাম ও সম্পর্ক</th>
                                            <th>প্রাপ্যতার শতকরা হার</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nominee_info_bema = $info['nominee_info_bema'];
                                        $nominee_info_bema_sr = 1;
                                        if (!empty($nominee_info_bema)) {
                                            foreach ($nominee_info_bema as $single_info_bema) {
                                                ?>
                                                <tr>
                                                    <td><?= $nominee_info_bema_sr; ?></td>
                                                    <td><?php echo $single_info_bema['emp_bema_nomini_name_rel']; ?></td>
                                                    <td><?php echo $single_info_bema['bema_percent_amount']; ?>%</td>
                                                </tr>
                                                <?php
                                                $nominee_info_bema_sr++;
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="3" class="text-center">No information found.</td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane fade " id="salary_info">
                                জাতীয় বেতন স্কেল-২০১৫খ্রিঃ এর বেতন নির্ধারনী বিবরনী
                                <br /><br />
                                <?php
                                $salary_info = $info['salary_info'];
                                ?>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ১) জাতীয় পরিচয়পত্র (এনআইডি)নম্বর
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($salary_info[0]['stp_4_nid'])) {
                                            echo $salary_info[0]['stp_4_nid'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ২) কর্মচারীর নাম ও পদবি
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_name'])) {
                                            echo $info['basic_info'][0]['emp_name'];
                                            if (isset($info['basic_info'][0]['emp_current_designation'])) {
                                                echo ", " . $info['basic_info'][0]['emp_current_designation'];
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ৩) বিভাগ অফিসের নাম 
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($salary_info[0]['stp_4_office_name'])) {
                                            echo $salary_info[0]['stp_4_office_name'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ৪) মোবাইল ফোন নম্বর
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($salary_info[0]['stp_4_mobile_no'])) {
                                            echo $salary_info[0]['stp_4_mobile_no'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ৫) জন্ম তারিখ
                                    </div>
                                    <div class="col-sm-8"> 
                                        <?php
                                        if (isset($salary_info[0]['stp_4_date_of_birth'])) {
                                            echo $salary_info[0]['stp_4_date_of_birth'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        ৬)
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 has_inner">
                                        ক. চাকুরিতে প্রথম যোগদানের তারিখ
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($salary_info[0]['stp_4_first_joining_date'])) {
                                            echo $salary_info[0]['stp_4_first_joining_date'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 has_inner">
                                        খ. চাকুরিতে প্রথম যোগদানের পদবি
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($salary_info[0]['stp_4_first_joining_designation'])) {
                                            echo $salary_info[0]['stp_4_first_joining_designation'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 has_inner">
                                        গ. কর্মচারীর পরিচিতি নম্বর
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($salary_info[0]['stp_4_employee_identy_number'])) {
                                            echo $salary_info[0]['stp_4_employee_identy_number'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        ৭) ৩০/০৬/২০১৫ খ্রিঃ তারিখে
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 has_inner">
                                        (ক) গৃহিত মূলবেতন
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($salary_info[0]['stp_4_taken_main_salary'])) {
                                            if (!empty($salary_info[0]['stp_4_taken_main_salary'])) {
                                                echo $salary_info[0]['stp_4_taken_main_salary'];
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 has_inner">
                                        (খ) পিপি(যদি থাকে)
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($salary_info[0]['stp_4_pp'])) {
                                            if (!empty($salary_info[0]['stp_4_pp'])) {
                                                echo $salary_info[0]['stp_4_pp'];
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ০৮) মোট বেতন (৭ক+৭খ)
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($salary_info[0]['stp_4_total_salary_7a_7b'])) {
                                            echo $salary_info[0]['stp_4_total_salary_7a_7b'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        ০৯) জাতীয় বেতনস্কেল ২০০৯ খ্রিঃ অনুযায়ী ৩০/০৬/২০১৫ খ্রিঃ তারিখে
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 has_inner">
                                        (ক) প্রাপ্য গ্রেড
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($salary_info[0]['stp_4_grade_2009'])) {
                                            echo $salary_info[0]['stp_4_grade_2009'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 has_inner">
                                        (খ) প্রাপ্য গ্রেডের প্রারম্ভিক বেতন
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($salary_info[0]['stp_4_grade_initial_salary_2009'])) {
                                            if (!empty($salary_info[0]['stp_4_grade_initial_salary_2009'])) {
                                                echo $salary_info[0]['stp_4_grade_initial_salary_2009'];
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ১০ ) মোট পার্থক্য ৮-৯ (খ)
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($salary_info[0]['stp_4_total_distance_8_9B'])) {
                                            echo $salary_info[0]['stp_4_total_distance_8_9B'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        ১১ । জাতীয় বেতন স্কেল ২০১৫ খ্রিঃ অনুযায়ী ০১/০৭/২০১৫ তারিখে
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 has_inner">
                                        (ক) প্রাপ্য গ্রেড
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($salary_info[0]['stp_4_grade_2015'])) {
                                            echo $salary_info[0]['stp_4_grade_2015'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 has_inner">
                                        (খ) প্রাপ্য গ্রেডের প্রারম্ভিক বেতন
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($salary_info[0]['stp_4_grade_initial_salary_2015'])) {
                                            if (!empty($salary_info[0]['stp_4_grade_initial_salary_2015'])) {
                                                echo $salary_info[0]['stp_4_grade_initial_salary_2015'];
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ১২ । মোট বেতন ১০+১১(খ)
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($salary_info[0]['stp_4_total_salary_10_11b'])) {
                                            echo $salary_info[0]['stp_4_total_salary_10_11b'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ১৩ । জাতীয় বেতন স্কেল ২০১৫ খ্রিঃ অনুযায়ী ০১/০৭/২০১৫ তারিখে প্রাপ্য ধাপ
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($salary_info[0]['stp_4_got_step_from_2015'])) {
                                            echo $salary_info[0]['stp_4_got_step_from_2015'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ১৪ । বার্ষিক বর্ধিত বেতনের সমপরিমাণ টাকার কম হলে পিপি হিসেবে প্রাপ্য
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($salary_info[0]['stp_4_got_by_pp'])) {
                                            echo $salary_info[0]['stp_4_got_by_pp'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ১৫ ) ০১/০৭/২০১৫ তারিখে নির্ধারিত মূলবেতন
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($salary_info[0]['stp_4_main_salary_at_01_07_2015'])) {
                                            echo $salary_info[0]['stp_4_main_salary_at_01_07_2015'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ১৬ ) ০১/০৭/২০১৫ খ্রিঃ হতে ৩০/০৬/২০১৬ খ্রিঃ পর্যন্ত প্রাপ্য বার্ষিক বেতন টাকা বৃদ্ধি যা ১৫/১২/১৫ খ্রিঃ তারিখে প্রদেয় সহ মোট
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($salary_info[0]['stp_4_total_salary_from_01_30'])) {
                                            echo $salary_info[0]['stp_4_total_salary_from_01_30'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        ১৭ ) পরবর্তী বার্ষিক বেতন বৃদ্ধির তারিখ
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($salary_info[0]['stp_4_next_salary_increment_date'])) {
                                            echo $salary_info[0]['stp_4_next_salary_increment_date'];
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>