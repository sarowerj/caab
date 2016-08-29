<div class="alert_messages">
    <div class="alert alert-danger alert-dismissible alert_msg emp_name_required" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Error!</strong> Employee name required.
    </div>
</div>
<?php
$msg = $this->session->flashdata('msg');
if (isset($msg)) {
    if ($msg == 'emp_name_required') {
        ?>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.alert_msg.emp_name_required').fadeIn().delay(3000).fadeOut("fast", 0);
            })
        </script>
        <?php
    }
}
?>
<div class="page-content new_employee">
    <!-- END PAGE HEADER-->
    <div class="content container-fluid">
        <form action="admin/save_user_info" method="post"> 
            <div class="header">
                <div class="row">
                    <div class="col-xs-3"><h3 class="main_title">কর্মচারির জীবন বৃত্তান্ত</h3></div> 
                    <div class="col-xs-3">
                        <select name="emp_dept" class="form-control" id="emp_dept">
                            <?php
                            foreach ($dept as $single_dept) {
                                ?>
                                <option value="<?php echo $single_dept->slug; ?>"><?php echo $single_dept->dept; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <br />
            <br />
            <div class="row step" id="step_1">
                <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>০১. কর্মকর্তার নাম</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text"   name="emp_name"> 
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>০২. নাম ইংরেজীতে</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text"   name="emp_name_eng"> 
                        </div>
                    </div> 
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>০৩. কর্মকর্তার আইডি</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text"   name="emp_id_number"> 
                        </div>
                    </div> 
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>০৪. বর্তমান পদবি</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text"   name="emp_current_designation">
                        </div>
                    </div> 
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>০৫. নিয়োগকালীন পদবি</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" id="emp_appointment_designation" name="emp_appointment_designation">
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
                            <input class="form-control date-picker" type="text" id="emp_apointment_date" name="emp_apointment_date">
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
                            <input type="text" name="emp_retirement_date" class="form-control date-picker" />
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>০৮. পদন্নতির তারিখ</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control date-picker" type="text"   name="emp_promotion_date">
                        </div>
                    </div> 
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>০৯. বর্তমান কর্মস্থল</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text"   name="emp_current_office">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-6">
                            <label>১০. বর্তমান কর্মস্থলে যোগদানের তারিখ</label>
                        </div>
                        <div class="col-sm-6">
                            <input class="form-control date-picker" type="text"   name="emp_current_office_appointment_date">
                        </div>
                    </div>
                    <label>১১. অব্যবহিত পূর্ববর্তী</label>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>ক) কর্মস্থল</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text"   name="emp_recent_prev_joining_place">
                        </div>
                    </div>
                    <!-- New emp_recent_prev_designation -->
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>খ) পদবী</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text"   name="emp_recent_prev_designation">
                        </div>
                    </div><!--End New -->
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>গ) যোগদানের তারিখ</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="date-picker form-control" type="text"   name="emp_recent_prev_joining_date">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>১২. জাতীয়তা</label>
                        </div>
                        <div class="col-sm-7">
                            <select name="emp_nationality" id="emp_nationality" class="form-control">
                                <?php
                                $nationals = array('Afghan', 'Albanian', 'Algerian', 'American', 'Andorran', 'Angolan', 'Antiguans', 'Argentinean', 'Armenian', 'Australian', 'Austrian', 'Azerbaijani', 'Bahamian', 'Bahraini', 'Bangladeshi', 'Barbadian', 'Barbudans', 'Batswana', 'Belarusian', 'Belgian', 'Belizean', 'Beninese', 'Bhutanese', 'Bolivian', 'Bosnian', 'Brazilian', 'British', 'Bruneian', 'Bulgarian', 'Burkinabe', 'Burmese', 'Burundian', 'Cambodian', 'Cameroonian', 'Canadian', 'Cape Verdean', 'Central African', 'Chadian', 'Chilean', 'Chinese', 'Colombian', 'Comoran', 'Congolese', 'Costa Rican', 'Croatian', 'Cuban', 'Cypriot', 'Czech', 'Danish', 'Djibouti', 'Dominican', 'Dutch', 'East Timorese', 'Ecuadorean', 'Egyptian', 'Emirian', 'Equatorial Guinean', 'Eritrean', 'Estonian', 'Ethiopian', 'Fijian', 'Filipino', 'Finnish', 'French', 'Gabonese', 'Gambian', 'Georgian', 'German', 'Ghanaian', 'Greek', 'Grenadian', 'Guatemalan', 'Guinea-Bissauan', 'Guinean', 'Guyanese', 'Haitian', 'Herzegovinian', 'Honduran', 'Hungarian', 'I-Kiribati', 'Icelander', 'Indian', 'Indonesian', 'Iranian', 'Iraqi', 'Irish', 'Israeli', 'Italian', 'Ivorian', 'Jamaican', 'Japanese', 'Jordanian', 'Kazakhstani', 'Kenyan', 'Kittian and Nevisian', 'Kuwaiti', 'Kyrgyz', 'Laotian', 'Latvian', 'Lebanese', 'Liberian', 'Libyan', 'Liechtensteiner', 'Lithuanian', 'Luxembourger', 'Macedonian', 'Malagasy', 'Malawian', 'Malaysian', 'Maldivan', 'Malian', 'Maltese', 'Marshallese', 'Mauritanian', 'Mauritian', 'Mexican', 'Micronesian', 'Moldovan', 'Monacan', 'Mongolian', 'Moroccan', 'Mosotho', 'Motswana', 'Mozambican', 'Namibian', 'Nauruan', 'Nepalese', 'New Zealander', 'Nicaraguan', 'Nigerian', 'Nigerien', 'North Korean', 'Northern Irish', 'Norwegian', 'Omani', 'Pakistani', 'Palauan', 'Panamanian', 'Papua New Guinean', 'Paraguayan', 'Peruvian', 'Polish', 'Portuguese', 'Qatari', 'Romanian', 'Russian', 'Rwandan', 'Saint Lucian', 'Salvadoran', 'Samoan', 'San Marinese', 'Sao Tomean', 'Saudi', 'Scottish', 'Senegalese', 'Serbian', 'Seychellois', 'Sierra Leonean', 'Singaporean', 'Slovakian', 'Slovenian', 'Solomon Islander', 'Somali', 'South African', 'South Korean', 'Spanish', 'Sri Lankan', 'Sudanese', 'Surinamer', 'Swazi', 'Swedish', 'Swiss', 'Syrian', 'Taiwanese', 'Tajik', 'Tanzanian', 'Thai', 'Togolese', 'Tongan', 'Trinidadian/Tobagonian', 'Tunisian', 'Turkish', 'Tuvaluan', 'Ugandan', 'Ukrainian', 'Uruguayan', 'Uzbekistani', 'Venezuelan', 'Vietnamese', 'Welsh', 'Yemenite', 'Zambian', 'Zimbabwean');
                                foreach ($nationals as $national) {
                                    ?>
                                    <option value="<?= $national; ?>"><?= $national; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>১৩. জাতীয় পরিচয়পত্র নং</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text"   name="emp_nid_no">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>১৪. ধর্ম</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text"   name="emp_religion">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>১৫. পাসপোর্ট নম্বর </label>
                            <span class="hints">(যদি থাকে)</span>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text"   name="emp_passport_no">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>১৬. পিতার নাম</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text"   name="emp_father_name">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>১৭. মাতার নাম</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text"   name="emp_mother_name">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>১৮. জন্ম তারিখ</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control date-picker" type="text" id="emp_birth_date" name="emp_birth_date">
                        </div>
                        <script type="text/javascript">
                            $('#emp_birth_date').change(function () {
                                $('#step_4_emp_birth_date').val($('#emp_birth_date').val());
                            })
                        </script>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>১৯. রক্তের গ্রুপ</label>
                        </div>
                        <div class="col-sm-7">
                            <select name="emp_blood_group" id="emp_blood_group"  class="form-control" >
                                <option value="A_neg">A-</option>
                                <option value="A_pos">A+</option>
                                <option value="AB_neg">AB-</option>
                                <option value="AB_pos">AB+</option>
                                <option value="B_neg">B-</option>
                                <option value="B_pos">B+</option>
                                <option value="O_neg">O-</option>
                                <option value="O_pos">O+</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>২০. লিঙ্গ</label>
                        </div>
                        <div class="col-sm-7">
                            <div class="sex">
                                <label for="sex_male">পুরুষ <input type="radio" value="পুরুষ" name="emp_sex" id="sex_male"/></label> 
                                <label for="sex_female">মহিলা <input type="radio" value="মহিলা" name="emp_sex" id="sex_female"/></label> 
                                <label for="sex_others">অন্যান্য <input type="radio" value="অন্যান্য" name="emp_sex" id="sex_others"/></label>
                            </div> 
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>২১. বৈবাহিক অবস্থা</label>
                        </div>
                        <div class="col-sm-7">
                            <select name="emp_merital_status" class="form-control">
                                <option value="বিবাহিত">বিবাহিত</option>
                                <option value="অবিবাহিত">অবিবাহিত</option>
                                <option value="বিধবা">বিধবা</option>
                                <option value="তালাকপ্রপ্ত">তালাকপ্রপ্ত</option>
                                <option value="বিপত্নিক">বিপত্নিক</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>২২. স্বামী/স্ত্রীর নাম</label>
                        </div>
                        <div class="col-sm-7">
                            <input type="text" name="emp_spose" class="form-control" />
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>২৩. টেলিফোন নম্বর</label>
                        </div>
                        <div class="col-sm-7">
                            <input type="text" name="emp_telephone_number" class="form-control" />
                            <span class="hints">একাধিরক নম্বরের ক্ষেত্রে কমা (,) ব্যবহার করুন।</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>২৪. মোবাইল নম্বর (রেজিস্টার্ড)</label>
                        </div>
                        <div class="col-sm-7">
                            <input type="text" name="emp_mobile_number" class="form-control" />
                            <span class="hints">একাধিরক নম্বরের ক্ষেত্রে কমা (,) ব্যবহার করুন।</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>২৫. টিআইএন (TIN)</label>
                            <span class="hints">(যদি থাকে)</span>
                        </div>
                        <div class="col-sm-7">
                            <input type="text" name="emp_tin" class="form-control" />
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>২৬. ইমেইল</label>
                        </div>
                        <div class="col-sm-7">
                            <input type="text" name="emp_email" class="form-control" />
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
                                    <input type="text" name="emp_add_village" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>ডাকঘর</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="emp_add_post" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>থানা/উপজেলা</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="emp_add_po" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>জেলা</label>
                                </div>
                                <div class="col-sm-8">
                                    <?php
                                    $all_districts = [ "বরগুনা", "বরিশাল", "ভোলা", "ঝালকাঠি", "পটুয়াখালী", "পিরোজপুর", "বান্দরবান", "ব্রাহ্মণবাড়ীয়া", "চাঁদপুর", "চট্টগ্রাম", "কুমিল্লা", "কক্সবাজার", "ফেনী", "খাগড়াছড়ি", "লক্ষীপুর", "নোয়াখালী", "রাঙ্গামাটি", "ঢাকা", "ফরিদপুর", "গাজীপুর", "গোপালগঞ্জ", "কিশোরগঞ্জ", "মাদারীপুর", "মানিকগঞ্জ", "মুন্সীগঞ্জ", "নারায়ণগঞ্জ", "নরসিংদী", "রাজবাড়ী", "শরীয়তপুর", "টাঙ্গাইল", "বাগেরহাট", "চুয়াডাঙ্গা", "যশোর", "ঝিনাইদহ", "খুলনা", "কুষ্টিয়া", "মাগুরা", "মেহেরপুর", "নড়াইল", "সাতক্ষিরা", "জামালপুর", "ময়মনসিংহ", "নেত্রকোনা", "শেরপুর", "বগুড়া", "জয়পুরহাট", "নওগাঁ", "নাটোর", "নওয়াবগঞ্জ", "পাবনা", "রাজশাহী", "সিরাজগঞ্জ", "দিনাজপুর", "গাইবান্ধা", "কুড়িগ্রাম", "লালমনিরহাট", "নীলফামারী", "পঞ্চগড়", "রংপুর", "ঠাকুরগাঁও", "হবিগঞ্জ", "মৌলভীবাজার", "সুনামগঞ্জ", "সিলেট"];
                                    ?>
                                    <select name="emp_add_district" class="form-control" id="emp_add_district"><?php
                                        foreach ($all_districts as $district) {
                                            ?>
                                            <option value="<?= $district ?>"><?= $district ?></option>
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
                                    <input type="text" name="emp_per_add_house" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>সড়ক নং</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="emp_per_add_road" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>গ্রাম</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="emp_per_add_village" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>ডাকঘর</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="emp_per_add_post" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>থানা / উপজেলা</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="emp_per_add_po" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>জেলা</label>
                                </div>
                                <div class="col-sm-8">
                                    <select name="emp_per_add_district" class="form-control" id="emp_add_district"><?php
                                        foreach ($all_districts as $district) {
                                            ?>
                                            <option value="<?= $district ?>"><?= $district ?></option>
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
                            <tr>
                                <td>১। </td>
                                <td><input type="text" name="edu_exam_name[]" id="edu_exam_name" class="form-control" /></td>
                                <td><input type="text" name="edu_exam_dept[]" id="edu_exam_dept" class="form-control" /></td>
                                <td><input type="text" name="edu_passing_year[]" id="edu_passing_year" class="form-control" /></td>
                                <td><input type="text" name="edu_university_board[]" id="edu_university_board" class="form-control" /> </td>
                                <td><input type="text" name="edu_gpa_class[]" id="edu_gpa_class" class="form-control" /> </td>
                            </tr>
                            <tr>
                                <td>২। </td>
                                <td><input type="text" name="edu_exam_name[]" id="edu_exam_name" class="form-control" /></td>
                                <td><input type="text" name="edu_exam_dept[]" id="edu_exam_dept" class="form-control" /></td>
                                <td><input type="text" name="edu_passing_year[]" id="edu_passing_year" class="form-control" /></td>
                                <td><input type="text" name="edu_university_board[]" id="edu_university_board" class="form-control" /> </td>
                                <td><input type="text" name="edu_gpa_class[]" id="edu_gpa_class" class="form-control" /> </td>
                            </tr>
                            <tr>
                                <td>৩। </td>
                                <td><input type="text" name="edu_exam_name[]" id="edu_exam_name" class="form-control" /></td>
                                <td><input type="text" name="edu_exam_dept[]" id="edu_exam_dept" class="form-control" /></td>
                                <td><input type="text" name="edu_passing_year[]" id="edu_passing_year" class="form-control" /></td>
                                <td><input type="text" name="edu_university_board[]" id="edu_university_board" class="form-control" /> </td>
                                <td><input type="text" name="edu_gpa_class[]" id="edu_gpa_class" class="form-control" /> </td>
                            </tr> 
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
                                        '<td><input type="text" name="edu_exam_name[]" id="edu_exam_name" class="form-control" /></td>' +
                                        '<td><input type="text" name="edu_exam_dept[]" id="edu_exam_dept" class="form-control" /></td>' +
                                        '<td><input type="text" name="edu_passing_year[]" id="edu_passing_year" class="form-control" /></td>' +
                                        '<td><input type="text" name="edu_university_board[]" id="edu_university_board" class="form-control" /> </td>' +
                                        '<td><input type="text" name="edu_gpa_class[]" id="edu_gpa_class" class="form-control" /> </td>' +
                                        '</tr>'
                                $(this).closest('table').children('.body_content').append(td);
                                event.preventDefault();
                            }
                        })
                    </script> 

                    <h4>৩০. কর্মস্থলের তথ্য (সম্পুর্ণ চাকুরীকালীন)</h4>
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
                            <tr>
                                <td>১। </td>
                                <td><input type="text" name="emp_office_name[]" id="emp_office_name" class="form-control" /></td>
                                <td><input type="text" name="emp_office_from[]" class="form-control date-picker" /></td>
                                <td><input type="text" name="emp_office_to[]" class="form-control  date-picker" /></td>
                                <td><input type="text" name="emp_office_duration[]" class="form-control" /></td>
                                <td><textarea type="text" name="emp_office_about[]" id="emp_office_about" class="form-control"></textarea> </td>
                            </tr>
                            <tr>
                                <td>২। </td>
                                <td><input type="text" name="emp_office_name[]" id="emp_office_name" class="form-control" /></td>
                                <td><input type="text" name="emp_office_from[]" class="form-control date-picker" /></td>
                                <td><input type="text" name="emp_office_to[]" class="form-control  date-picker" /></td>
                                <td><input type="text" name="emp_office_duration[]" class="form-control" /></td>
                                <td><textarea type="text" name="emp_office_about[]" id="emp_office_about" class="form-control"></textarea> </td>
                            </tr>
                            <tr>
                                <td>৩। </td>
                                <td><input type="text" name="emp_office_name[]" id="emp_office_name" class="form-control" /></td>
                                <td><input type="text" name="emp_office_from[]" class="form-control date-picker" /></td>
                                <td><input type="text" name="emp_office_to[]"  class="form-control  date-picker" /></td>
                                <td><input type="text" name="emp_office_duration[]"  class="form-control" /></td>
                                <td><textarea type="text" name="emp_office_about[]" id="emp_office_about" class="form-control"></textarea> </td>
                            </tr>
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
                                        ' +<td><input type="text" name="emp_office_name[]" id="emp_office_name" class="form-control" /></td>' +
                                        ' +<td><input type="text" name="emp_office_from[]" class="form-control date-picker" /></td>' +
                                        ' +<td><input type="text" name="emp_office_to[]" class="form-control  date-picker" /></td>' +
                                        ' +<td><input type="text" name="emp_office_duration[]" class="form-control" /></td>' +
                                        ' +<td><textarea type="text" name="emp_office_about[]" id="emp_office_about" class="form-control"></textarea> </td>' +
                                        '</tr>'
                                $(this).closest('table').children('.body_content').append(td);
                                $('.date-picker').datepicker({
                                    changeYear: true,
                                    dateFormat: 'dd-mm-yy'
                                });
                                event.preventDefault();
                            }
                        })
                    </script>

                    <h4>৩১. পেশাগত প্রশিক্ষণ</h4>
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
                            <tr>
                                <td width="50">১। </td>
                                <td><textarea name="employeement_training_name[]" class="form-control" id="employeement_training_name" cols="30" rows="3"></textarea></td>
                                <td><textarea name="employeement_training_institute[]" class="form-control" id="employeement_training_institute" cols="30" rows="3"></textarea></td>
                                <td><input type="text" class="form-control date-picker" name="employeement_training_from[]"/></td>
                                <td><input type="text" class="form-control date-picker" name="employeement_training_to[]" /></td>
                                <td><input type="text" class="form-control" name="employeement_training_duration[]" /></td>
                                <td><textarea rows="3" type="text" name="employeement_training[]" id="emp_office_about" class="form-control"></textarea> </td>
                            </tr>
                            <tr>
                                <td width="50">২। </td>
                                <td><textarea name="employeement_training_name[]" class="form-control" id="employeement_training_name" cols="30" rows="3"></textarea></td>
                                <td><textarea name="employeement_training_institute[]" class="form-control" id="employeement_training_institute" cols="30" rows="3"></textarea></td>
                                <td><input type="text" class="form-control date-picker" name="employeement_training_from[]"/></td>
                                <td><input type="text" class="form-control date-picker" name="employeement_training_to[]" /></td>
                                <td><input type="text" class="form-control" name="employeement_training_duration[]"/></td>
                                <td><textarea rows="3" type="text" name="employeement_training[]" id="emp_office_about" class="form-control"></textarea> </td>
                            </tr>
                            <tr>
                                <td width="50">৩। </td>
                                <td><textarea name="employeement_training_name[]" class="form-control" id="employeement_training_name" cols="30" rows="3"></textarea></td>
                                <td><textarea name="employeement_training_institute[]" class="form-control" id="employeement_training_institute" cols="30" rows="3"></textarea></td>
                                <td><input type="text" class="form-control date-picker" name="employeement_training_from[]" /></td>
                                <td><input type="text" class="form-control date-picker" name="employeement_training_to[]" /></td>
                                <td><input type="text" class="form-control" name="employeement_training_duration[]"/></td>
                                <td><textarea rows="3" type="text" name="employeement_training[]" id="emp_office_about" class="form-control"></textarea> </td>
                            </tr>
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
                                        '<td><textarea name="employeement_training_name[]" class="form-control" id="employeement_training_name" cols="30" rows="3"></textarea></td>' +
                                        '<td><textarea name="employeement_training_institute[]" class="form-control" id="employeement_training_institute" cols="30" rows="3"></textarea></td>' +
                                        '<td><input type="text" class="form-control date-picker" name="employeement_training_from[]" /></td>' +
                                        '<td><input type="text" class="form-control date-picker" name="employeement_training_to[]" /></td>' +
                                        '<td><input type="text" class="form-control" name="employeement_training_duration[]" /></td>' +
                                        '<td><textarea rows="3" type="text" name="employeement_training[]" id="emp_office_about" class="form-control"></textarea> </td>' +
                                        '</tr>'
                                $(this).closest('table').children('.body_content').append(td);
                                event.preventDefault();
                            }
                            $('.date-picker').datepicker({
                                changeYear: true,
                                dateFormat: 'dd-mm-yy'
                            });
                        })
                    </script>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>৩২. কম্পিউটার পরিচালনায় যোগ্যতা</label>
                                </div>
                                <div class="col-sm-8">
                                    <!--input type="text" name="emp_computer_skill" class="form-control" /-->
                                    <select name="emp_computer_skill[]" multiple="multiple" class="form-control" id="emp_extra_experience_multiple">
                                        <option value="Microsoft Word">Microsoft Word</option>
                                        <option value="Microsoft Excel">Microsoft Excel</option>
                                        <option value="Microsoft Powerpoint">Microsoft Powerpoint</option>
                                        <option value="Microsoft Access">Microsoft Access</option>
                                        <option value="Internet Browsing">Internet Browsing</option>
                                        <option value="Email">Email</option>
                                        <option value="Adobe Photoshop">Adobe Photoshop</option>
                                        <option value="Designing">Designing</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>৩৩. সন্তান সংখ্যা</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="emp_children_amount" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>৩৪. বিশেষ দক্ষতা/পারদর্শিতা</label>
                                </div>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="emp_extra_experience" id="emp_extra_experience2" rows="5"></textarea>
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
                            <h4>৩৫. নমিনির তথ্য</h4>
                        </div>
                        <div class="col-xs-2">
                            <label>(ক) জিপিএফ</label>
                        </div>
                        <div class="col-xs-10">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="50">ক্রমিক নং</th>
                                        <th>নমিনির নাম ও সম্পর্ক</th>
                                        <th width="100">প্রাপ্যতার শতকরা হার</th>
                                    </tr>
                                </thead>
                                <tbody class="body_content">
                                    <tr>
                                        <td width="50">১।</td>
                                        <td>
                                            <input type="text" name="emp_gpf_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" name="gpf_percent_amount[]" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <td width="50">২।</td>
                                        <td>
                                            <input type="text" name="emp_gpf_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" name="gpf_percent_amount[]" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <td width="50">৩।</td>
                                        <td>
                                            <input type="text" name="emp_gpf_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" name="gpf_percent_amount[]" class="form-control" /></td>
                                    </tr>
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
                                                '<td><input type="text" name="emp_gpf_nomini_name_rel[]" class="form-control" /></td>' +
                                                '<td><input type="text" name="gpf_percent_amount[]" class="form-control" /></td>' +
                                                '</tr>'
                                        $(this).closest('table').children('.body_content').append(td);
                                        event.preventDefault();
                                    }
                                })
                            </script>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                            <label>(খ) পেনশন/গ্রাচ্যুইটি</label>
                        </div>
                        <div class="col-xs-10">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="50">ক্রমিক নং</th>
                                        <th>নমিনির নাম ও সম্পর্ক</th>
                                        <th width="100">প্রাপ্যতার শতকরা হার</th>
                                    </tr>
                                </thead>
                                <tbody class="body_content">
                                    <tr>
                                        <td width="50">১।</td>
                                        <td>
                                            <input type="text" name="emp_pention_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" name="pention_percent_amount[]" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <td width="50">২।</td>
                                        <td>
                                            <input type="text" name="emp_pention_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" name="pention_percent_amount[]" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <td width="50">৩।</td>
                                        <td>
                                            <input type="text" name="emp_pention_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" name="pention_percent_amount[]" class="form-control" /></td>
                                    </tr>
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
                                                '<td><input type="text" name="emp_pention_nomini_name_rel[]" class="form-control" /></td>' +
                                                '<td><input type="text" name="pention_percent_amount[]" class="form-control" /></td></td>' +
                                                '</tr>'
                                        $(this).closest('table').children('.body_content').append(td);
                                        event.preventDefault();
                                    }
                                })
                            </script> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                            <label>(গ) কল্যাণ তহবিল</label>
                        </div>
                        <div class="col-xs-10">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="50">ক্রমিক নং</th>
                                        <th>নমিনির নাম ও সম্পর্ক</th>
                                        <th width="100">প্রাপ্যতার শতকরা হার</th>
                                    </tr>
                                </thead>
                                <tbody class="body_content">
                                    <tr>
                                        <td width="50">১।</td>
                                        <td>
                                            <input type="text" name="emp_walfare_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" name="walfare_percent_amount[]" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <td width="50">২।</td>
                                        <td>
                                            <input type="text" name="emp_walfare_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" name="walfare_percent_amount[]" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <td width="50">৩।</td>
                                        <td>
                                            <input type="text" name="emp_walfare_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" name="walfare_percent_amount[]" class="form-control" /></td>
                                    </tr>
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
                                                '<td><input type="text" name="emp_walfare_nomini_name_rel[]" class="form-control" /></td>' +
                                                '<td><input type="text" name="walfare_percent_amount[]" class="form-control" /></td></td>' +
                                                '</tr>'
                                        $(this).closest('table').children('.body_content').append(td);
                                        event.preventDefault();
                                    }
                                })
                            </script>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                            <label>(ঘ) মৃত্যুজনিত ক্ষতিপুরণ</label>
                        </div>
                        <div class="col-xs-10">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="50">ক্রমিক নং</th>
                                        <th>নমিনির নাম ও সম্পর্ক</th>
                                        <th width="100">প্রাপ্যতার শতকরা হার</th>
                                    </tr>
                                </thead>
                                <tbody class="body_content">
                                    <tr>
                                        <td width="50">১।</td>
                                        <td>
                                            <input type="text" name="emp_dead_loss_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" name="emp_dead_loss_percent_amount[]" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <td width="50">২।</td>
                                        <td>
                                            <input type="text" name="emp_dead_loss_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" name="emp_dead_loss_percent_amount[]" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <td width="50">৩।</td>
                                        <td>
                                            <input type="text" name="emp_dead_loss_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" name="emp_dead_loss_percent_amount[]" class="form-control" /></td>
                                    </tr>
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
                                                '<td><input type="text" name="emp_dead_loss_nomini_name_rel[]" class="form-control" /></td>' +
                                                '<td><input type="text" name="emp_dead_loss_percent_amount[]" class="form-control" /></td></td>' +
                                                '</tr>'
                                        $(this).closest('table').children('.body_content').append(td);
                                        event.preventDefault();
                                    }
                                })
                            </script>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                            <label>(ঙ) যৌথ বীমা</label>
                        </div>
                        <div class="col-xs-10">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="50">ক্রমিক নং</th>
                                        <th>নমিনির নাম ও সম্পর্ক</th>
                                        <th width="100">প্রাপ্যতার শতকরা হার</th>
                                    </tr>
                                </thead>
                                <tbody class="body_content">
                                    <tr>
                                        <td width="50">১।</td>
                                        <td>
                                            <input type="text" name="emp_bema_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" name="bema_percent_amount[]" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <td width="50">২।</td>
                                        <td>
                                            <input type="text" name="emp_bema_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" name="bema_percent_amount[]" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <td width="50">৩।</td>
                                        <td>
                                            <input type="text" name="emp_bema_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" name="bema_percent_amount[]" class="form-control" /></td>
                                    </tr>
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
                                                '<td><input type="text" name="emp_bema_nomini_name_rel[]" class="form-control" /></td>' +
                                                '<td><input type="text" name="bema_percent_amount[]" class="form-control" /></td></td>' +
                                                '</tr>'
                                        $(this).closest('table').children('.body_content').append(td);
                                        event.preventDefault();
                                    }
                                })
                            </script>
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
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label for="">১) জাতীয় পরিচয়পত্র (এনআইডি)নম্বর</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="stp_4_nid" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label for="">২) বিভাগ অফিসের নাম</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="stp_4_office_name" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label for="">৩) মোবাইল ফোন নম্বর</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="stp_4_mobile_no" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label for="">৪) জন্ম তারিখ</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="stp_4_date_of_birth" id="step_4_emp_birth_date" class="form-control date-picker" />
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
                                            <input type="text" name="stp_4_first_joining_date" class="form-control date-picker" />
                                        </div>
                                    </div>
                                    <div class="row inside form-group">
                                        <div class="col-xs-5">
                                            <label>খ. চাকুরিতে প্রথম যোগদানের পদবি</label>
                                        </div>
                                        <div class="col-xs-7">
                                            <input type="text" name="stp_4_first_joining_designation" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row inside form-group">
                                        <div class="col-xs-5">
                                            <label>গ. কর্মচারীর পরিচিতি নম্বর</label>
                                        </div>
                                        <div class="col-xs-7">
                                            <input type="text" name="stp_4_employee_identy_number" class="form-control" />
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
                                            <input type="text" value="0" id="stp_4_taken_main_salary" name="stp_4_taken_main_salary" class="form-control" />
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


                                        });
                                    </script>
                                    <div class="row inside form-group">
                                        <div class="col-xs-5">
                                            <label for="">(খ) পিপি(যদি থাকে)</label>
                                        </div>
                                        <div class="col-xs-7">
                                            <input type="text" value="0" id="stp_4_pp" name="stp_4_pp" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label for="">৭) মোট বেতন (৭ক+৭খ)</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" value="0" disabled="disabled" id="stp_4_total_salary_7a_7b" name="stp_4_total_salary_7a_7b" class="form-control " />
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
                                            <input type="text" name="stp_4_grade_2009" class="form-control " />
                                        </div>
                                    </div>
                                    <div class="row inside form-group">
                                        <div class="col-xs-5">
                                            <label for="">(খ) প্রাপ্য গ্রেডের প্রারম্ভিক বেতন </label>
                                        </div>
                                        <div class="col-xs-7">
                                            <input type="text" value="0" id="stp_4_grade_initial_salary_2009" name="stp_4_grade_initial_salary_2009" class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label for="">৯ ) মোট পার্থক্য ৮-৯ (খ)</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" disabled="disabled" value="0" id="stp_4_total_distance_8_9B" name="stp_4_total_distance_8_9B" class="form-control" />
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
                                            <input type="text" name="stp_4_grade_2015" class="form-control " />
                                        </div>
                                    </div>
                                    <div class="row inside form-group">
                                        <div class="col-xs-5">
                                            <label for="">(খ) প্রাপ্য গ্রেডের প্রারম্ভিক বেতন </label>
                                        </div>
                                        <div class="col-xs-7">
                                            <input type="text" value="0" id="stp_4_grade_initial_salary_2015" name="stp_4_grade_initial_salary_2015" class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label for="">১১ । মোট বেতন ১০+১১(খ)</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" disabled="disabled" value="0" id="stp_4_total_salary_10_11b" name="stp_4_total_salary_10_11b" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <label for="">১২ । জাতীয় বেতন স্কেল ২০১৫ খ্রিঃ অনুযায়ী ০১/০৭/২০১৫ তারিখে প্রাপ্য ধাপ</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="stp_4_got_step_from_2015" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <label for="">১৩ । বার্ষিক বর্ধিত বেতনের সমপরিমাণ টাকার কম হলে পিপি হিসেবে প্রাপ্য</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="stp_4_got_by_pp" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <label for="">১৪ ) ০১/০৭/২০১৫ তারিখে নির্ধারিত মূলবেতন</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="stp_4_main_salary_at_01_07_2015" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <label for="">১৫ ) ০১/০৭/২০১৫ খ্রিঃ হতে ৩০/০৬/২০১৬ খ্রিঃ পর্যন্ত প্রাপ্য বার্ষিক বেতন  টাকা বৃদ্ধি যা ১৫/১২/১৫ খ্রিঃ তারিখে প্রদেয় সহ মোট </label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="stp_4_total_salary_from_01_30" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <label for="">১৬ ) পরবর্তী বার্ষিক বেতন বৃদ্ধির তারিখ</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="stp_4_next_salary_increment_date" class="form-control date-picker" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 col-xs-offset-4">
                    <input type="submit" value="Save" class="btn btn-primary form-control" />
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
        })
    </script>

</div>