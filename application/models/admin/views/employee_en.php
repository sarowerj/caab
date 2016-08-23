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
    $emp_id = $this->uri->segment(3);
    ?>
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
                        <a href="<?php echo base_url('admin/employee/' . $emp_id); ?>" class="btn btn-primary">Bangla Version</a>
                        <a href="<?php echo base_url('admin/edit_en/' . $emp_id); ?>" class="btn btn-primary">Edit This Profile</a>
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
                                        01. Employee ID
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['id'])) {
                                            echo $info['basic_info'][0]['id'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        02. Employee Name
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
                                        03.Current Designation
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
                                        04. Appointment Designation
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
                                        05. Appointment Date
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_apointment_date'])) {
                                            if (!empty($info['basic_info'][0]['emp_apointment_date'])) {
                                                echo $info['basic_info'][0]['emp_apointment_date'];
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        06. Promotion Date
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
                                        07. Current Working Place
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
                                        08. Joining date of current office
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_current_office_appointment_date'])) {
                                            if (!empty($info['basic_info'][0]['emp_current_office_appointment_date'])) {
                                                echo $info['basic_info'][0]['emp_current_office_appointment_date'];
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        09. Immediate past
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 has_inner">
                                        A) Office
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
                                        B) Appointment Date
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_recent_prev_joining_date'])) {
                                            if (!empty($info['basic_info'][0]['emp_recent_prev_joining_date'])) {
                                                echo $info['basic_info'][0]['emp_recent_prev_joining_date'];
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 has_inner">
                                        C) Designation
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_recent_prev_joining_date'])) {
                                            if (!empty($info['basic_info'][0]['emp_recent_prev_joining_date'])) {
                                                echo $info['basic_info'][0]['emp_recent_prev_joining_date'];
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        10. National ID Number (if any)
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
                                        11. Religion
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
                                        12. Passport Number (if any)
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
                                        13. Father's Name
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
                                        14. Mother's Name
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
                                        15. Date of birthday
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
                                        16. Blood group
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_blood_group'])) {
                                            echo $info['basic_info'][0]['emp_blood_group'];
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        17. Sex
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
                                        18. Marital Status
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
                                        19. Spouse Name
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
                                        20. Telephone Number
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
                                        21. Mobile Number
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
                                        22. TIN (if any)
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
                                        23. Email
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
                                        24. Permanent Address
                                    </div>
                                    <div class="col-sm-8">
                                        <ul>
                                            <li>
                                                <span class="label">Village</span>
                                                <span> 
                                                    <?php
                                                    if (isset($info['basic_info'][0]['emp_add_village'])) {
                                                        echo $info['basic_info'][0]['emp_add_village'];
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="label">Post Office</span>
                                                <span> 
                                                    <?php
                                                    if (isset($info['basic_info'][0]['emp_add_post'])) {
                                                        echo $info['basic_info'][0]['emp_add_post'];
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="label">Police Station / Upazila</span>
                                                <span>
                                                    <?php
                                                    if (isset($info['basic_info'][0]['emp_add_po'])) {
                                                        echo $info['basic_info'][0]['emp_add_po'];
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="label">District</span>
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
                                        25. Current Address
                                    </div>
                                    <div class="col-sm-8">
                                        <ul>
                                            <li>
                                                <span class="label">Village</span>
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
                                                <span class="label">Police Station</span>
                                                <span>
                                                    <?php
                                                    if (isset($info['basic_info'][0]['emp_per_add_post'])) {
                                                        echo $info['basic_info'][0]['emp_per_add_post'];
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="label">Police Station</span>
                                                <span>
                                                    <?php
                                                    if (isset($info['basic_info'][0]['emp_per_add_po'])) {
                                                        echo $info['basic_info'][0]['emp_per_add_po'];
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="label">District</span>
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
                                26. Educational Qualification
                                <br />
                                <br />
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr. No</th>
                                            <th>Name of Examination</th>
                                            <th>Group / Department / Subject	</th>
                                            <th>Passing Year</th>
                                            <th>University / Board</th>
                                            <th>GPA/CGPA/Grade/Class</th>
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

                                27. Office Information ( When was employee )
                                <br />
                                <br />
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="70">Sr. No</th>
                                            <th>Office Name</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Comment</th>
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

                                28. Industrial Training
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="70">Sr No</th>
                                            <th>Name of training</th>
                                            <th>Institute</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Duration</th>
                                            <th>Description</th>
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
                                                <td colspan="7" class="text-center">No office information found.</td>
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
                                        29. Experience on computer. 
                                    </div>
                                    <div class="col-sm-8">
                                        <?php
                                        if (isset($info['basic_info'][0]['emp_computer_skill'])) {
                                            echo implode(unserialize($info['basic_info'][0]['emp_computer_skill']), ', ');
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        30. Expected retirement date
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
                                        31. Children Amount
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
                                        31. Extra Experience
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
                                33. Nominee Information<br /> <br />
                                A)	GPF:

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="70">Sr. No</th>
                                            <th>Nominee name and relation</th>
                                            <th>Percentse</th>
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


                                B) Pension / Gratuity

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="70">Sr. No</th>
                                            <th>Nominee name and relation</th>
                                            <th>Percentse</th>
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


                                C) Welfare Fund:

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="70">Sr. No</th>
                                            <th>Nominee name and relation</th>
                                            <th>Percentse</th>
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

                                D) Loss for Dead

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="70">Sr. No</th>
                                            <th>Nominee name and relation</th>
                                            <th>Percentse</th>
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


                                E) Joint Bema: 
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="70">Sr. No</th>
                                            <th>Nominee name and relation</th>
                                            <th>Percentse</th>
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
                                National pay scale-2015 scheduled report
                                <br /><br />
                                <?php
                                $salary_info = $info['salary_info'];
                                ?>
                                <div class="row">
                                    <div class="col-sm-4">
                                        1. National ID number
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
                                        2. Employee name and designation.
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
                                        3. Divisional office
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
                                        4. Mobile (registered)
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
                                        5. Date of birth
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
                                        6.
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 has_inner">
                                        A. First joining date
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
                                        B. First joining designation
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
                                        C. Employee identification number
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
                                        7. On 30/06/2015
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 has_inner">
                                        A. Received main salary
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
                                        B. PP(if any)
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
                                        8. Total salary 7A+7B
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
                                        9. On 30/06/2015 as national pay scale 2009 
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 has_inner">
                                         A. Grade deserve
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
                                        B. Initial salary of grade deserve
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
                                        10. Total difference between 8-9B
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
                                        11. On 01/07/2015 as national pay scale 2015
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 has_inner">
                                        A. Grade deserve
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
                                        B. Initial salary of grade deserve
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
                                        12. Total salary10+11B
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