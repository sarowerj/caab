<div class="alert_messages">
    <div class="alert alert-success alert-dismissible alert_msg new_employee_added" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Success!</strong> Employee information updated successfully.
    </div>
</div>
<div class="page-content new_employee">
    <!-- END PAGE HEADER-->
    <div class="content container-fluid">
        <form action="<?php echo base_url('admin/save_user_info_en'); ?>" method="post">
            <div class="header">
                <div class="row">
                    <div class="col-xs-3"><h3 class="main_title">Curriculum Vita</h3></div> 
                    <div class="col-xs-3">
                        <input type="hidden" name="lan" value="en" />
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href="<?php echo base_url('admin/employee_en/' . $this->uri->segment(3)); ?>" class="btn btn-primary">View this profile</a>
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
                            <label>01. Employee Name</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" value=""  name="emp_name"> 
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>02. Employee ID</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" value="" name="emp_id_number"> 
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>03. Current Designation</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" value="" name="emp_current_designation">
                        </div>
                    </div> 
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>04. Appointment Designation</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" value="" id="emp_appointment_designation" name="emp_appointment_designation">
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
                            <label>05. Appointment Date</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control date-picker" value="" type="text" id="emp_apointment_date" name="emp_apointment_date">
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
                            <label>06. Employee retirement date</label>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" value="" name="emp_retirement_date" class="form-control date-picker" />
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>07. Promotion Date</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control date-picker" value="" type="text"   name="emp_promotion_date">
                        </div>
                    </div> 
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>08. Current Office</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" value="" type="text"   name="emp_current_office">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-6">
                            <label>09. Date of joining at current office</label>
                        </div>
                        <div class="col-sm-6">
                            <input class="form-control date-picker" type="text" value=""  name="emp_current_office_appointment_date">
                        </div>
                    </div>
                    <label>10. Immediate Passed</label>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>A) Office</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" value="" name="emp_recent_prev_joining_place">
                        </div>
                    </div>
                    <!-- New emp_recent_prev_designation -->
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>B) Designation</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" value=""  name="emp_recent_prev_designation">
                        </div>
                    </div><!--End New -->
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>C) Joining date</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="date-picker form-control" type="text" value="" name="emp_recent_prev_joining_date">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>11. Nationality</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" value="" name="emp_nationality">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>12. National ID No</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" value="" name="emp_nid_no">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>13. Religion</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" value="" name="emp_religion">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>14. Passport Number</label>
                            <span class="hints">(if any)</span>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" value="" name="emp_passport_no">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>15. Father's name</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" value="" name="emp_father_name">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>16. Mother's name</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" value="" name="emp_mother_name">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>17. Date of birth</label>
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control date-picker" value="" type="text" id="emp_birth_date" name="emp_birth_date">
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
                            <label>18. Blood group</label>
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
                            <label>19. Gender</label>
                        </div>
                        <div class="col-sm-7">
                            <div class="sex">
                                <label for="sex_male">Male <input type="radio" value="পুরুষ" name="emp_sex" id="sex_male"/></label> 
                                <label for="sex_female">Female <input type="radio" value="মহিলা" name="emp_sex" id="sex_female"/></label> 
                                <label for="sex_others">Others <input type="radio" value="অন্যান্য" name="emp_sex" id="sex_others"/></label>
                            </div> 
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>20. Marital Status</label>
                        </div>
                        <div class="col-sm-7">
                            <select name="emp_merital_status" class="form-control">
                                <option value="বিবাহিত">Married</option>
                                <option value="অবিবাহিত">Unmarried</option>
                                <option value="বিধবা">Widow</option>
                                <option value="তালাকপ্রপ্ত">Divorced</option>
                                <option value="বিপত্নিক">Widower</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>21. Spouse name</label>
                        </div>
                        <div class="col-sm-7">
                            <input type="text" value="" name="emp_spose" class="form-control" />
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>22. Telephone number</label>
                        </div>
                        <div class="col-sm-7">
                            <input type="text" value="" name="emp_telephone_number" class="form-control" />
                            <span class="hints">Use comma (,) to separate multiple.</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>23. Mobile number(registered)</label>
                        </div>
                        <div class="col-sm-7">
                            <input type="text" value="" name="emp_mobile_number" class="form-control" />
                            <span class="hints">Use comma (,) to separate multiple.</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>24. TIN</label>
                            <span class="hints">(if any)</span>
                        </div>
                        <div class="col-sm-7">
                            <input type="text" value="" name="emp_tin" class="form-control" />
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-5">
                            <label>25. Email</label>
                        </div>
                        <div class="col-sm-7">
                            <input type="text" value="" name="emp_email" class="form-control" />
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label>26. Permanent address</label>
                        </div>
                        <div class="col-md-8 inside">
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>Village</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" value="" name="emp_add_village" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>Post office</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" value="" name="emp_add_post" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>Police station</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" value="" name="emp_add_po" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>District</label>
                                </div>
                                <div class="col-sm-8">
                                    <?php
                                    //$all_districts = [ "বরগুনা", "বরিশাল", "ভোলা", "ঝালকাঠি", "পটুয়াখালী", "পিরোজপুর", "বান্দরবান", "ব্রাহ্মণবাড়ীয়া", "চাঁদপুর", "চট্টগ্রাম", "কুমিল্লা", "কক্সবাজার", "ফেনী", "খাগড়াছড়ি", "লক্ষীপুর", "নোয়াখালী", "রাঙ্গামাটি", "ঢাকা", "ফরিদপুর", "গাজীপুর", "গোপালগঞ্জ", "কিশোরগঞ্জ", "মাদারীপুর", "মানিকগঞ্জ", "মুন্সীগঞ্জ", "নারায়ণগঞ্জ", "নরসিংদী", "রাজবাড়ী", "শরীয়তপুর", "টাঙ্গাইল", "বাগেরহাট", "চুয়াডাঙ্গা", "যশোর", "ঝিনাইদহ", "খুলনা", "কুষ্টিয়া", "মাগুরা", "মেহেরপুর", "নড়াইল", "সাতক্ষিরা", "জামালপুর", "ময়মনসিংহ", "নেত্রকোনা", "শেরপুর", "বগুড়া", "জয়পুরহাট", "নওগাঁ", "নাটোর", "নওয়াবগঞ্জ", "পাবনা", "রাজশাহী", "সিরাজগঞ্জ", "দিনাজপুর", "গাইবান্ধা", "কুড়িগ্রাম", "লালমনিরহাট", "নীলফামারী", "পঞ্চগড়", "রংপুর", "ঠাকুরগাঁও", "হবিগঞ্জ", "মৌলভীবাজার", "সুনামগঞ্জ", "সিলেট"];
                                    $bd_districts = ['BAGERHAT', 'BANDARBAN', 'BARGUNA', 'BARISAL', 'BHOLA', 'BOGRA', 'BRAHMONBARIA', 'CHANDPUR', 'CHITTAGONG', 'CHUADANGA', 'COMILLA', 'COX\'S BAZAR', 'DHAKA', 'DINAJPUR', 'FARIDPUR', 'FENI', 'GAIBANDHA', 'GAZIPUR', 'GOPALGONJ', 'HOBIGONJ', 'JAIPURHAT', 'JAMALPUR', 'JESSORE', 'JHALOKATHI', 'JHENAIDAH', 'KHAGRACHHARI', 'KHULNA', 'KISHORGONJ', 'KURIGRAM', 'KUSHTIA', 'LALMONIRHAT', 'LUXMIPUR', 'MADARIPUR', 'MAGURA', 'MANIKGONJ', 'MEHERPUR', 'MOULVIBAZAR', 'MUNSHIGONJ', 'MYMENSINGH', 'NAOGAON', 'NARAIL', 'NARAYANGONJ', 'NARSINGDI', 'NATORE', 'NAWABGONJ', 'NETROKONA', 'NILPHAMARI', 'NOAKHALI', 'PABNA', 'PANCHAGARH', 'PATUAKHALI', 'PIROJPUR', 'RAJBARI', 'RAJSHAHI', 'RANGAMATI', 'RANGPUR', 'SATKHIRA', 'SHARIATPUR', 'SHERPUR', 'SIRAJGONJ', 'SUNAMGONJ', 'SYLHET', 'TANGAIL', 'THAKURGAON'];
                                    ?>
                                    <select name="emp_add_district" class="form-control" id="emp_add_district">
                                        <?php
                                        foreach ($bd_districts as $district) {
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
                            <label>27. Present address</label>
                        </div>
                        <div class="col-md-8 inside">
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>House no</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" value="" name="emp_per_add_house" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>Road no</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" value="" name="emp_per_add_road" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>Village</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" value="" name="emp_per_add_village" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>Post Office</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" value="" name="emp_per_add_post" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>Police Station</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" value="" name="emp_per_add_po" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>District</label>
                                </div>
                                <div class="col-sm-8">
                                    <select name="emp_per_add_district" class="form-control" id="emp_add_district">
                                        <?php
                                        foreach ($bd_districts as $district) {
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
                    <h4>28. Educational qualification</h4>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="80">Sr no</th>
                                <th>Name of examination</th>
                                <th>Group/Department/Subject</th>
                                <th width="120">Passing year</th>
                                <th>University/Board</th>
                                <th width="80">GPA/Grade/Class</th>
                            </tr>
                        </thead>
                        <tbody class="body_content">
                            <tr>
                                <td>1 </td>
                                <td><input type="text" value="" name="edu_exam_name[]" id="edu_exam_name" class="form-control" /></td>
                                <td><input type="text" value="" name="edu_exam_dept[]" id="edu_exam_dept" class="form-control" /></td>
                                <td><input type="text" value="" name="edu_passing_year[]" id="edu_passing_year" class="form-control" /></td>
                                <td><input type="text" value="" name="edu_university_board[]" id="edu_university_board" class="form-control" /> </td>
                                <td><input type="text" value="" name="edu_gpa_class[]" id="edu_gpa_class" class="form-control" /> </td>
                            </tr>
                            <tr>
                                <td>2 </td>
                                <td><input type="text" value="" name="edu_exam_name[]" id="edu_exam_name" class="form-control" /></td>
                                <td><input type="text" value="" name="edu_exam_dept[]" id="edu_exam_dept" class="form-control" /></td>
                                <td><input type="text" value="" name="edu_passing_year[]" id="edu_passing_year" class="form-control" /></td>
                                <td><input type="text" value="" name="edu_university_board[]" id="edu_university_board" class="form-control" /> </td>
                                <td><input type="text" value="" name="edu_gpa_class[]" id="edu_gpa_class" class="form-control" /> </td>
                            </tr>
                            <tr>
                                <td>3 </td>
                                <td><input type="text" value="" name="edu_exam_name[]" id="edu_exam_name" class="form-control" /></td>
                                <td><input type="text" value="" name="edu_exam_dept[]" id="edu_exam_dept" class="form-control" /></td>
                                <td><input type="text" value="" name="edu_passing_year[]" id="edu_passing_year" class="form-control" /></td>
                                <td><input type="text" value="" name="edu_university_board[]" id="edu_university_board" class="form-control" /> </td>
                                <td><input type="text" value="" name="edu_gpa_class[]" id="edu_gpa_class" class="form-control" /> </td>
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
                        number = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20"];
                        $('#add_new_education').click(function () {
                            var height = $('#step_2').height();
                            $('.content').height(height + 150);
                            var total_tr = $(this).parent().parent().parent().siblings('tbody').children('tr').length;
                            if (total_tr < 10) {
                                if (total_tr == 9) {
                                    $(this).attr('disabled', 'disabled');
                                }
                                var td = '<tr>' +
                                        '<td>' + number[total_tr] + ' </td>' +
                                        '<td><input type="text" name="edu_exam_name[]" id="edu_exam_name" class="form-control" /></td>' + '<td><input type="text" name="edu_exam_dept[]" id="edu_exam_dept" class="form-control" /></td>' +
                                        '<td><input type="text" name="edu_passing_year[]" id="edu_passing_year" class="form-control" /></td>' +
                                        '<td><input type="text" name="edu_university_board[]" id="edu_university_board" class="form-control" /> </td>' +
                                        '<td><input type="text" name="edu_gpa_class[]" id="edu_gpa_class" class="form-control" /> </td>' +
                                        '</tr>'
                                $(this).closest('table').children('.body_content').append(td);
                                event.preventDefault();
                            }
                        })</script> 

                    <h4>29. Office information</h4>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="80">Sr no</th>
                                <th>Name of office</th>
                                <th width="120">From</th>
                                <th width="120">To</th>
                                <th width="120">Duration</th>
                                <th>Comment</th>
                            </tr>
                        </thead>
                        <tbody class="body_content">
                            <tr>
                                <td>1</td>
                                <td><input type="text" value="" name="emp_office_name[]" id="emp_office_name" class="form-control" /></td>
                                <td><input type="text" value=""  name="emp_office_from[]" class="form-control date-picker" /></td>
                                <td><input type="text" value=""  name="emp_office_to[]" class="form-control  date-picker" /></td>
                                <td><input type="text" value=""  name="emp_office_duration[]" class="form-control" /></td>
                                <td><textarea type="text" name="emp_office_about[]" id="emp_office_about" class="form-control"></textarea> </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><input type="text" value="" name="emp_office_name[]" id="emp_office_name" class="form-control" /></td>
                                <td><input type="text" value=""  name="emp_office_from[]" class="form-control date-picker" /></td>
                                <td><input type="text" value=""  name="emp_office_to[]" class="form-control  date-picker" /></td>
                                <td><input type="text" value=""  name="emp_office_duration[]" class="form-control" /></td>
                                <td><textarea type="text" name="emp_office_about[]" id="emp_office_about" class="form-control"></textarea> </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><input type="text" value="" name="emp_office_name[]" id="emp_office_name" class="form-control" /></td>
                                <td><input type="text" value=""  name="emp_office_from[]" class="form-control date-picker" /></td>
                                <td><input type="text" value=""  name="emp_office_to[]" class="form-control  date-picker" /></td>
                                <td><input type="text" value=""  name="emp_office_duration[]" class="form-control" /></td>
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
                                        '<td>' + number[total_tr] + ' </td>' +
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
                        })</script>

                    <h4>30. Professional training</h4>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="80">Sr no</th>
                                <th>Name of training</th>
                                <th>Institute</th>
                                <th width="115">From </th>
                                <th width="115">To </th>
                                <th width="100">Duration </th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody class="body_content">
                            <tr>
                                <td width="50">1</td>
                                <td><textarea name="employeement_training_name[]" class="form-control" id="employeement_training_name" cols="30" rows="3"></textarea></td>
                                <td><textarea name="employeement_training_institute[]" class="form-control" id="employeement_training_institute" cols="30" rows="3"></textarea></td>
                                <td><input value="" type="text" class="form-control date-picker" name="employeement_training_from[]" /></td>
                                <td><input value="" type="text" class="form-control date-picker" name="employeement_training_to[]"/></td>
                                <td><input value="" type="text" class="form-control" name="employeement_training_duration[]"/></td>
                                <td><textarea rows="3" type="text" name="employeement_training[]" id="emp_office_about" class="form-control"></textarea> </td>
                            </tr>
                            <tr>
                                <td width="50">2</td>
                                <td><textarea name="employeement_training_name[]" class="form-control" id="employeement_training_name" cols="30" rows="3"></textarea></td>
                                <td><textarea name="employeement_training_institute[]" class="form-control" id="employeement_training_institute" cols="30" rows="3"></textarea></td>
                                <td><input value="" type="text" class="form-control date-picker" name="employeement_training_from[]" /></td>
                                <td><input value="" type="text" class="form-control date-picker" name="employeement_training_to[]"/></td>
                                <td><input value="" type="text" class="form-control" name="employeement_training_duration[]"/></td>
                                <td><textarea rows="3" type="text" name="employeement_training[]" id="emp_office_about" class="form-control"></textarea> </td>
                            </tr>
                            <tr>
                                <td width="50">3</td>
                                <td><textarea name="employeement_training_name[]" class="form-control" id="employeement_training_name" cols="30" rows="3"></textarea></td>
                                <td><textarea name="employeement_training_institute[]" class="form-control" id="employeement_training_institute" cols="30" rows="3"></textarea></td>
                                <td><input value="" type="text" class="form-control date-picker" name="employeement_training_from[]" /></td>
                                <td><input value="" type="text" class="form-control date-picker" name="employeement_training_to[]"/></td>
                                <td><input value="" type="text" class="form-control" name="employeement_training_duration[]"/></td>
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
                                        '<td>' + number[total_tr] + ' </td>' +
                                        '<td><textarea name="employeement_training_name[]" class="form-control" id="employeement_training_name" cols="30" rows="3"></textarea></td>' +
                                        '<td><textarea name="employeement_training_institute[]" class="form-control" id="employeement_training_institute" cols="30" rows="3"></textarea></td>' +
                                        '<td><input type="text" class="form-control date-picker" name="employeement_training_from[]" /></td>' +
                                        '<td><input type="text" class="form-control date-picker" name="employeement_training_to[]"/></td>' +
                                        '<td><input type="text" class="form-control" name="employeement_training_duration[]"/></td>' +
                                        '<td><textarea rows="3" type="text" name="employeement_training[]" id="emp_office_about" class="form-control"></textarea> </td>'
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
                                    <label>31. Experience on computer</label>
                                </div>
                                <div class="col-sm-8">
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
                                    <label>32. Children amount</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" value="" name="emp_children_amount" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>33. Extra experience </label>
                                </div>
                                <div class="col-sm-8">
                                    <textarea rows="5" type="text" name="emp_extra_experience" class="form-control"></textarea>
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
                            <h4>34. Nominee information</h4>
                        </div>
                        <div class="col-xs-2">
                            <label>A) GPF</label>
                        </div>
                        <div class="col-xs-10">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="50">Sr. no</th>
                                        <th>Name of nominee and relation</th>
                                        <th width="100">Percentile amount</th>
                                    </tr>
                                </thead>
                                <tbody class="body_content">
                                    <tr>
                                        <td width="50">1</td>
                                        <td>
                                            <input type="text" value="" name="emp_gpf_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" value="" name="gpf_percent_amount[]" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <td width="50">2</td>
                                        <td>
                                            <input type="text" value="" name="emp_gpf_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" value="" name="gpf_percent_amount[]" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <td width="50">3</td>
                                        <td>
                                            <input type="text" value="" name="emp_gpf_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" value="" name="gpf_percent_amount[]" class="form-control" /></td>
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
                                    $('.content').height(height + 200);
                                    var total_tr = $(this).parent().parent().parent().siblings('tbody').children('tr').length;
                                    if (total_tr < 10) {
                                        if (total_tr == 9) {
                                            $(this).attr('disabled', 'disabled');
                                        }
                                        var td = '<tr>' +
                                                '<td>' + number[total_tr] + '</td>' +
                                                '<td><input type="text" name="emp_gpf_nomini_name_rel[]" class="form-control" /></td>' +
                                                '<td><input type="text" name="gpf_percent_amount[]" class="form-control" /></td>' +
                                                '</tr>'
                                        $(this).closest('table').children('.body_content').append(td);
                                        event.preventDefault();
                                    }
                                })</script>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                            <label>B) Pention/gratuity</label>
                        </div>
                        <div class="col-xs-10">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="50">Sr. no</th>
                                        <th>Name of nominee and relation</th>
                                        <th width="100">Percentile amount</th>
                                    </tr>
                                </thead>
                                <tbody class="body_content">
                                    <tr>
                                        <td width="50">1</td>
                                        <td>
                                            <input type="text" value="" name="emp_pention_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" value="" name="pention_percent_amount[]" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <td width="50">2</td>
                                        <td>
                                            <input type="text" value="" name="emp_pention_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" value="" name="pention_percent_amount[]" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <td width="50">3</td>
                                        <td>
                                            <input type="text" value="" name="emp_pention_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" value="" name="pention_percent_amount[]" class="form-control" /></td>
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
                                    $('.content').height(height + 200);
                                    var total_tr = $(this).parent().parent().parent().siblings('tbody').children('tr').length;
                                    if (total_tr < 10) {
                                        if (total_tr == 9) {
                                            $(this).attr('disabled', 'disabled');
                                        }
                                        var td = '<tr>' +
                                                '<td>' + number[total_tr] + ' </td>' + '<td><input type="text" name="emp_pention_nomini_name_rel[]" class="form-control" /></td>' +
                                                '<td><input type="text" name="pention_percent_amount[]" class="form-control" /></td></td>' +
                                                '</tr>'
                                        $(this).closest('table').children('.body_content').append(td);
                                        event.preventDefault();
                                    }
                                })</script> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                            <label>C) Welfare fund</label>
                        </div>
                        <div class="col-xs-10">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="50">Sr. no</th>
                                        <th>Name of nominee and relation</th>
                                        <th width="100">Percentile amount</th>
                                    </tr>
                                </thead>
                                <tbody class="body_content">
                                    <tr>
                                        <td width="50">1</td>
                                        <td>
                                            <input type="text" value="" name="emp_walfare_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" value="" name="walfare_percent_amount[]" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <td width="50">2</td>
                                        <td>
                                            <input type="text" value="" name="emp_walfare_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" value="" name="walfare_percent_amount[]" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <td width="50">3</td>
                                        <td>
                                            <input type="text" value="" name="emp_walfare_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" value="" name="walfare_percent_amount[]" class="form-control" /></td>
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
                                    $('.content').height(height + 200);
                                    var total_tr = $(this).parent().parent().parent().siblings('tbody').children('tr').length;
                                    if (total_tr < 10) {
                                        if (total_tr == 9) {
                                            $(this).attr('disabled', 'disabled');
                                        }
                                        var td = '<tr>' +
                                                '<td>' + number[total_tr] + ' </td>' + '<td><input type="text" name="emp_walfare_nomini_name_rel[]" class="form-control" /></td>' +
                                                '<td><input type="text" name="walfare_percent_amount[]" class="form-control" /></td></td>' +
                                                '</tr>'
                                        $(this).closest('table').children('.body_content').append(td);
                                        event.preventDefault();
                                    }
                                })</script>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3">
                            <label>D) Death compensation</label>
                        </div>
                        <div class="col-xs-9">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="50">Sr. no</th>
                                        <th>Name of nominee and relation</th>
                                        <th width="100">Percentile amount</th>
                                    </tr>
                                </thead>
                                <tbody class="body_content">
                                    <tr>
                                        <td width="50">1</td>
                                        <td>
                                            <input type="text" value="" name="emp_dead_loss_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" value="" name="emp_dead_loss_percent_amount[]" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <td width="50">2</td>
                                        <td>
                                            <input type="text" value="" name="emp_dead_loss_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" value="" name="emp_dead_loss_percent_amount[]" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <td width="50">3</td>
                                        <td>
                                            <input type="text" value="" name="emp_dead_loss_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" value="" name="emp_dead_loss_percent_amount[]" class="form-control" /></td>
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
                                    $('.content').height(height + 200);
                                    var total_tr = $(this).parent().parent().parent().siblings('tbody').children('tr').length;
                                    if (total_tr < 10) {
                                        if (total_tr == 9) {
                                            $(this).attr('disabled', 'disabled');
                                        }
                                        var td = '<tr>' +
                                                '<td>' + number[total_tr] + ' </td>' +
                                                '<td><input type="text" name="emp_dead_loss_nomini_name_rel[]" class="form-control" /></td>' +
                                                '<td><input type="text" name="emp_dead_loss_percent_amount[]" class="form-control" /></td></td>' +
                                                '</tr>'
                                        $(this).closest('table').children('.body_content').append(td);
                                        event.preventDefault();
                                    }
                                })</script>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                            <label>E) Joint insurance</label>
                        </div>
                        <div class="col-xs-10">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="50">Sr. no</th>
                                        <th>Name of nominee and relation</th>
                                        <th width="100">Percentile amount</th>
                                    </tr>
                                </thead>
                                <tbody class="body_content">
                                    <tr>
                                        <td width="50">1</td>
                                        <td>
                                            <input type="text" value="" name="emp_bema_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" value="" name="bema_percent_amount[]" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <td width="50">2</td>
                                        <td>
                                            <input type="text" value="" name="emp_bema_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" value="" name="bema_percent_amount[]" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <td width="50">3</td>
                                        <td>
                                            <input type="text" value="" name="emp_bema_nomini_name_rel[]" class="form-control" />
                                        </td>
                                        <td><input type="text" value="" name="bema_percent_amount[]" class="form-control" /></td>
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
                                    $('.content').height(height + 200);
                                    var total_tr = $(this).parent().parent().parent().siblings('tbody').children('tr').length;
                                    if (total_tr < 10) {
                                        if (total_tr == 9) {
                                            $(this).attr('disabled', 'disabled');
                                        }
                                        var td = '<tr>' +
                                                '<td>' + number[total_tr] + ' </td>' +
                                                '<td><input type="text" name="emp_bema_nomini_name_rel[]" class="form-control" /></td>' +
                                                '<td><input type="text" name="bema_percent_amount[]" class="form-control" /></td></td>' +
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
                            <h4 class="text-center">National pay scale-2015 scheduled report</h4>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label for="">1. National ID number</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" value="" name="stp_4_nid" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label for="">2. Divisional office</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" value="" name="stp_4_office_name" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label for="">03. Mobile (registered)</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" value="" name="stp_4_mobile_no" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label for="">4. Date of birth</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" value="" name="stp_4_date_of_birth" id="step_4_emp_birth_date" class="form-control date-picker" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label for="">5) </label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row inside form-group">
                                        <div class="col-xs-5">
                                            <label>A. First joining date</label>
                                        </div>
                                        <div class="col-xs-7">
                                            <input type="text" value="" name="stp_4_first_joining_date" class="form-control date-picker" />
                                        </div>
                                    </div>
                                    <div class="row inside form-group">
                                        <div class="col-xs-5">
                                            <label>B. First joining designation</label>
                                        </div>
                                        <div class="col-xs-7">
                                            <input type="text" value="" name="stp_4_first_joining_designation" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row inside form-group">
                                        <div class="col-xs-5">
                                            <label>C. Employee identification number</label>
                                        </div>
                                        <div class="col-xs-7">
                                            <input type="text" value="" name="stp_4_employee_identy_number" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label for="">6. On 30/06/2015 </label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row inside form-group">
                                        <div class="col-xs-5">
                                            <label for="">A) Total salary</label>
                                        </div>
                                        <div class="col-xs-7">
                                            <input type="text" value="" id="stp_4_taken_main_salary" name="stp_4_taken_main_salary" class="form-control" />
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
                                            <label for="">B) PP (if any)</label>
                                        </div>
                                        <div class="col-xs-7">
                                            <input type="text" value="" id="stp_4_pp" name="stp_4_pp" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label for="">7) Total salary(7A+7B)</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" value="" disabled="disabled" id="stp_4_total_salary_7a_7b" name="stp_4_total_salary_7a_7b" class="form-control " />
                                </div>
                            </div> 
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label for="">8) On 30/06/2015 as national pay scale 2009</label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row inside form-group">
                                        <div class="col-xs-5">
                                            <label for="">A) Grade deserve </label>
                                        </div>
                                        <div class="col-xs-7">
                                            <input type="text" value="" name="stp_4_grade_2009" class="form-control " />
                                        </div>
                                    </div>
                                    <div class="row inside form-group">
                                        <div class="col-xs-5">
                                            <label for="">B) Initial salary of grade deserve</label>
                                        </div>
                                        <div class="col-xs-7">
                                            <input type="text" value="" id="stp_4_grade_initial_salary_2009" name="stp_4_grade_initial_salary_2009" class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label for="">9 ) Total difference between 8-9B</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" disabled="disabled" value="" id="stp_4_total_distance_8_9B" name="stp_4_total_distance_8_9B" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label for="">10) On 01/07/2015 as national pay scale 2015</label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row inside form-group">
                                        <div class="col-xs-5">
                                            <label for="">A) Grade deserve </label>
                                        </div>
                                        <div class="col-xs-7">
                                            <input type="text" value="" name="stp_4_grade_2015" class="form-control " />
                                        </div>
                                    </div>
                                    <div class="row inside form-group">
                                        <div class="col-xs-5">
                                            <label for="">B) Initial salary of grade deserve</label>
                                        </div>
                                        <div class="col-xs-7">
                                            <input type="text" value="" id="stp_4_grade_initial_salary_2015" name="stp_4_grade_initial_salary_2015" class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label for="">11) Total salary10+11B</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" disabled="disabled" value="" id="stp_4_total_salary_10_11b" name="stp_4_total_salary_10_11b" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <label for="">১২ । জাতীয় বেতন স্কেল ২০১৫ খ্রিঃ অনুযায়ী ০১/০৭/২০১৫ তারিখে প্রাপ্য ধাপ</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" value="" name="stp_4_got_step_from_2015" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <label for="">১৩ । বার্ষিক বর্ধিত বেতনের সমপরিমাণ টাকার কম হলে পিপি হিসেবে প্রাপ্য</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" value="" name="stp_4_got_by_pp" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <label for="">১৪ ) ০১/০৭/২০১৫ তারিখে নির্ধারিত মূলবেতন</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" value="" name="stp_4_main_salary_at_01_07_2015" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <label for="">১৫ ) ০১/০৭/২০১৫ খ্রিঃ হতে ৩০/০৬/২০১৬ খ্রিঃ পর্যন্ত প্রাপ্য বার্ষিক বেতন  টাকা বৃদ্ধি যা ১৫/১২/১৫ খ্রিঃ তারিখে প্রদেয় সহ মোট </label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" value="" name="stp_4_total_salary_from_01_30" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <label for="">১৬ ) পরবর্তী বার্ষিক বেতন বৃদ্ধির তারিখ</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" value="" name="stp_4_next_salary_increment_date" class="form-control date-picker" />
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
                changeYear: true, dateFormat: 'dd-mm-yy',
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