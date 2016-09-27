<style type="text/css">
    body{
        background:#f1f1f1;
    }
</style>
<main class="emp_profile_page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="profile_picture">
                                <img class="img-responsive" src="<?php echo base_url('assets/site/images/no-avatar-180x180.jpg'); ?>" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Basic Info</a></li>
                                <li><a data-toggle="tab" href="#menu1">Qualification</a></li>
                                <li><a data-toggle="tab" href="#menu2">Nominee Information</a></li>
                                <li><a data-toggle="tab" href="#menu3">Salary Information</a></li>
                            </ul>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="profile_content">
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <h3><?php echo $basic_info[0]['emp_name']; ?></h3>
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td width="350">০১। Employee ID</td>
                                        <td><?= $basic_info[0]['emp_id_number']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>০২। কর্মকর্তা/কর্মচারীর নাম</td>
                                        <td><?= $basic_info[0]['emp_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>০৩। বর্তমান পদবি</td>
                                        <td><?= $basic_info[0]['emp_current_designation']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>০৪। নিয়োগকালীন পদবী</td>
                                        <td><?= $basic_info[0]['emp_appointment_designation']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>০৫। নিয়োগের তারিখ</td>
                                        <td>
                                            <?php
                                            $emp_apointment_date = $basic_info[0]['emp_apointment_date'];
                                            if (!empty($emp_apointment_date)) {
                                                echo (date("d/m/Y", $emp_apointment_date) . ' ইং');
                                            }
                                            ?>  
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>০৬। অবসরে গমনের সম্ভাব্য তারিখ</td>
                                        <td>
                                            <?php
                                            $emp_retirement_date = $basic_info[0]['emp_retirement_date'];
                                            if (!empty($emp_retirement_date)) {
                                                echo (date("d/m/Y", $emp_retirement_date) . ' ইং');
                                            }
                                            ?>  
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>০৭। পদোন্নতির তারিখ</td>
                                        <td>
                                            <?php
                                            $emp_promotion_date = $basic_info[0]['emp_promotion_date'];
                                            if (!empty($emp_promotion_date)) {
                                                echo (date("d/m/Y", $emp_promotion_date) . ' ইং');
                                            }
                                            ?>  
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>০৮। বর্তমান কর্মস্থল</td>
                                        <td>
                                            <?= $basic_info[0]['emp_current_office']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>০৯। বর্তমান কর্মস্থলে যোগদানের তারিখ</td>
                                        <td>
                                            <?php
                                            $emp_current_office_appointment_date = $basic_info[0]['emp_current_office_appointment_date'];
                                            if (!empty($emp_current_office_appointment_date)) {
                                                echo (date("d/m/Y", $emp_current_office_appointment_date) . ' ইং');
                                            }
                                            ?> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">১০। অব্যবহিত পূর্ববর্তী</td>
                                    </tr>
                                    <tr>
                                        <td><span class="inside">(ক)	কর্মস্থল</span></td>
                                        <td><?= $basic_info[0]['emp_recent_prev_joining_place']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="inside">(খ)	যোগদানের তারিখ</span></td>
                                        <td>
                                            <?php
                                            $emp_recent_prev_joining_date = $basic_info[0]['emp_recent_prev_joining_date'];
                                            if (!empty($emp_recent_prev_joining_date)) {
                                                echo (date("d/m/Y", $emp_recent_prev_joining_date) . ' ইং');
                                            }
                                            ?> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>১১।	জাতীয়তা</td>
                                        <td><?= $basic_info[0]['emp_nationality']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>১২।	জাতীয় পরিচয়পত্র নম্বর(যদি থাকে)</td>
                                        <td><?= $basic_info[0]['emp_nid_no']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>১৩। ধর্ম</td>
                                        <td><?= $basic_info[0]['emp_religion']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>১৪। পাসপোর্ট নম্বর (যদি থাকে)</td>
                                        <td><?= $basic_info[0]['emp_passport_no']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>১৫।	পিতার নাম</td>
                                        <td><?= $basic_info[0]['emp_father_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>১৬।	মাতার নাম</td>
                                        <td><?= $basic_info[0]['emp_mother_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>১৭।	জন্ম তারিখ</td>
                                        <td>
                                            <?php
                                            $emp_birth_date = $basic_info[0]['emp_birth_date'];
                                            if (!empty($emp_birth_date)) {
                                                echo (date("d/m/Y", $emp_birth_date) . ' ইং');
                                            }
                                            ?> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>১৮।	রক্তের গ্রুপ</td>
                                        <td>
                                            <?php
                                            if (isset($basic_info[0]['emp_blood_group'])) {
                                                switch ($basic_info[0]['emp_blood_group']) {
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
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>১৯।	লিঙ্গ</td>
                                        <td><?= $basic_info[0]['emp_sex']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>২০।	বৈবাহিক অবস্থা</td>
                                        <td><?= $basic_info[0]['emp_merital_status']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>২১।	স্বামী/স্ত্রীর নাম</td>
                                        <td><?= $basic_info[0]['emp_spose']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>২২।	টেলিফোন নম্বর</td>
                                        <td><?= $basic_info[0]['emp_telephone_number']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>২৩।	মোবাইল নম্বর</td>
                                        <td><?= $basic_info[0]['emp_mobile_number']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>২৪।	টিআইএন(যদি থাকে)</td>
                                        <td><?= $basic_info[0]['emp_tin']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>২৫।	ই-মেইল</td>
                                        <td><?= $basic_info[0]['emp_email']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>২৬।	বর্তমান ঠিকানা</td>
                                        <td>
                                            <ul class="address">
                                                <li>
                                                    <span class="label">গ্রাম</span>
                                                    <span><?= $basic_info[0]['emp_per_add_village']; ?> </span>
                                                </li>
                                                <li>
                                                    <span class="label">ডাকঘর</span>
                                                    <span><?= $basic_info[0]['emp_per_add_post']; ?></span>
                                                </li>
                                                <li>
                                                    <span class="label">থানা/উপজেলা</span>
                                                    <span><?= $basic_info[0]['emp_per_add_po']; ?></span>
                                                </li>
                                                <li>
                                                    <span class="label">জেলা</span>
                                                    <span> <?= $basic_info[0]['emp_per_add_district']; ?> </span>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>২৭।	স্থায়ী ঠিকানা</td>
                                        <td>
                                            <ul class="address">
                                                <li>
                                                    <span class="label">গ্রাম</span>
                                                    <span><?= $basic_info[0]['emp_add_village']; ?> </span>
                                                </li>
                                                <li>
                                                    <span class="label">ডাকঘর</span>
                                                    <span><?= $basic_info[0]['emp_add_po']; ?></span>
                                                </li>
                                                <li>
                                                    <span class="label">থানা/উপজেলা</span>
                                                    <span><?= $basic_info[0]['emp_add_post']; ?></span>
                                                </li>
                                                <li>
                                                    <span class="label">জেলা</span>
                                                    <span> <?= $basic_info[0]['emp_add_district']; ?> </span>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <h3><?php echo $basic_info[0]['emp_name']; ?></h3>
                            <h4>২৭। শিক্ষাগত যোগ্যাতা </h4>
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
                                    $educational_qualification = $education_info;
                                    $edu_sr = 1;
                                    if (!empty($educational_qualification)) {
                                        foreach ($educational_qualification as $single_edu_qua) {
                                            if ($single_edu_qua['edu_exam_name'] != '--') {
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
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="6" class="text-center">No Education</td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                            <h4>২৮। কর্মস্থলের তথ্য(সম্পূর্ণ চাকুরীকালীন)</h4>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="70">ক্রমিক নং</th>
                                        <th>কর্মস্থলের নাম</th>
                                        <th>হতে</th>
                                        <th>পর্যন্ত</th>
                                        <th>সময়কাল</th>
                                        <th>মন্তব্য</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $office_info = $office_info;
                                    $office_info_sr = 1;
                                    if (!empty($office_info)) {
                                        foreach ($office_info as $single_office_info) {
                                            if ($single_office_info['emp_office_name'] != '--') {
                                                ?>
                                                <tr>
                                                    <td><?php echo $office_info_sr; ?></td>
                                                    <td><?php echo $single_office_info['emp_office_name']; ?></td>
                                                    <td><?php echo ($single_office_info['emp_office_from'] != 0) ? date('d-m-Y', $single_office_info['emp_office_from']) . ' ইং' : ''; ?></td>
                                                    <td><?php echo ($single_office_info['emp_office_to'] != 0) ? date('d-m-Y', $single_office_info['emp_office_to']) . ' ইং' : ''; ?></td>
                                                    <td><?php echo $single_office_info['emp_office_duration']; ?></td>
                                                    <td><?php echo $single_office_info['emp_office_about']; ?></td>
                                                </tr>
                                                <?php
                                                $office_info_sr++;
                                            }
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="6" class="text-center">No office information found.</td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>

                            <h4>২৯। পেশাগত যোগ্যতা:</h4>
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
                                    $training_info_sr = 1;
                                    if (!empty($training_info)) {
                                        foreach ($training_info as $single_training_info) {
                                            if ($single_training_info['employeement_training_name'] != '--') {
                                                ?>
                                                <tr>
                                                    <td><?php echo $training_info_sr; ?></td>
                                                    <td><?php echo $single_training_info['employeement_training_name']; ?></td>
                                                    <td><?php echo $single_training_info['employeement_training_institute']; ?></td>
                                                    <td><?php echo ($single_training_info['employeement_training_from'] != 0) ? date('d-m-Y', $single_training_info['employeement_training_from']) . ' ইং' : ''; ?></td>
                                                    <td><?php echo ($single_training_info['employeement_training_to'] != 0) ? date('d-m-Y', $single_training_info['employeement_training_to']) . ' ইং' : ''; ?></td>
                                                    <td><?php echo $single_training_info['employeement_training_duration']; ?></td>
                                                    <td><?php echo $single_training_info['employeement_training']; ?></td>
                                                </tr>
                                                <?php
                                                $training_info_sr++;
                                            }
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

                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td>
                                            ৩০। কম্পিউটার পরিচালনায়
                                        </td>
                                        <td>
                                            <?php
                                            if (isset($basic_info[0]['emp_computer_skill'])) {
                                                if (!empty($basic_info[0]['emp_computer_skill'])) {
                                                    $computer_skills = unserialize($basic_info[0]['emp_computer_skill']);
                                                    echo implode($computer_skills, ', ');
                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ৩২। সন্তান সংখ্যা
                                        </td>
                                        <td>
                                            <?php
                                            if (isset($basic_info[0]['emp_children_amount'])) {
                                                echo $basic_info[0]['emp_children_amount'];
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ৩৩। বিশেষ দক্ষতা/পারদর্শিতা
                                        </td>
                                        <td>
                                            <?php
                                            if (isset($basic_info[0]['emp_extra_experience'])) {
                                                echo $basic_info[0]['emp_extra_experience'];
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <h3><?php echo $basic_info[0]['emp_name']; ?></h3>
                            <h4>৩৪। নমিনির তথ্য:</h4>
                            <h4>(ক)জিপিএফ:</h4>
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
                                    $nominee_info_gpf_sr = 1;
                                    if (!empty($nominee_info_gpf)) {
                                        foreach ($nominee_info_gpf as $single_info_gpf) {
                                            if ($single_info_gpf['emp_gpf_nomini_name_rel'] != '--') {
                                                ?>
                                                <tr>
                                                    <td><?php echo $nominee_info_gpf_sr; ?></td>
                                                    <td><?php echo $single_info_gpf['emp_gpf_nomini_name_rel']; ?></td>
                                                    <td><?php echo($single_info_gpf['gpf_percent_amount'] != '') ? $single_info_gpf['gpf_percent_amount'] . '%' : ''; ?></td>
                                                </tr>
                                                <?php
                                                $nominee_info_gpf_sr++;
                                            }
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

                            <h4>(খ)পেনশন/গ্রাচ্যুইটি:</h4>
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
                                    if (!empty($nominee_info_pention)) {
                                        $nominee_info_pention_sr = 1;
                                        foreach ($nominee_info_pention as $single_info_pention) {
                                            if ($single_info_pention['emp_pention_nomini_name_rel'] != '--') {
                                                ?>
                                                <tr>
                                                    <td><?= $nominee_info_pention_sr; ?></td>
                                                    <td><?php echo $single_info_pention['emp_pention_nomini_name_rel']; ?></td>
                                                    <td><?php echo($single_info_pention['pention_percent_amount'] != '') ? $single_info_pention['pention_percent_amount'] . '%' : ''; ?></td>
                                                </tr>
                                                <?php
                                                $nominee_info_pention++;
                                            }
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


                            <h4>(গ)কল্যান তহবিল:</h4>
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
                                    $nominee_info_walfare_sr = 1;
                                    if (!empty($nominee_info_walfare)) {
                                        foreach ($nominee_info_walfare as $single_info_walfare) {
                                            if ($single_info_walfare['emp_walfare_nomini_name_rel'] != '--') {
                                                ?>
                                                <tr>
                                                    <td><?= $nominee_info_walfare_sr; ?></td>
                                                    <td><?php echo $single_info_walfare['emp_walfare_nomini_name_rel']; ?></td>
                                                    <td><?php echo($single_info_walfare['walfare_percent_amount'] != '') ? $single_info_walfare['walfare_percent_amount'] . '%' : ''; ?></td>
                                                </tr>
                                                <?php
                                                $nominee_info_walfare_sr++;
                                            }
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


                            <h4>(ঘ)মৃত্যুজনিত ক্ষতিপূরণ:</h4>
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
                                    $nominee_info_dead_loss_sr = 1;
                                    if (!empty($nominee_info_dead_loss)) {
                                        foreach ($nominee_info_dead_loss as $single_info_dead_loss) {
                                            if ($single_info_dead_loss['emp_dead_loss_nomini_name_rel'] != '--') {
                                                ?>
                                                <tr>
                                                    <td><?php echo $nominee_info_dead_loss_sr; ?></td>
                                                    <td><?php echo $single_info_dead_loss['emp_dead_loss_nomini_name_rel'] ?></td>
                                                    <td><?php echo($single_info_dead_loss['emp_dead_loss_percent_amount'] != '') ? $single_info_dead_loss['emp_dead_loss_percent_amount'] . '%' : ''; ?></td>
                                                </tr>
                                                <?php
                                                $nominee_info_dead_loss_sr++;
                                            }
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


                            <h4>(ঙ)যৌথবীমা:</h4>
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
                                    $nominee_info_bema_sr = 1;
                                    if (!empty($nominee_info_bema)) {
                                        foreach ($nominee_info_bema as $single_info_bema) {
                                            if ($single_info_bema['emp_bema_nomini_name_rel'] != '--') {
                                                ?>
                                                <tr>
                                                    <td><?= $nominee_info_bema_sr; ?></td>
                                                    <td><?php echo $single_info_bema['emp_bema_nomini_name_rel']; ?></td>
                                                    <td><?php echo($single_info_bema['bema_percent_amount'] != '') ? $single_info_bema['bema_percent_amount'] . '%' : ''; ?></td>
                                                </tr>
                                                <?php
                                                $nominee_info_bema_sr++;
                                            }
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
                        <div id="menu3" class="tab-pane fade">
                            <h3>Menu 3</h3>
                            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>