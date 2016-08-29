<div class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php
            if (isset($_REQUEST['q'])) {
                $query = $_REQUEST['q'];
                switch ($query) {
                    case "name":
                        ?>
                        <form method="post" action="<?php echo base_url('admin/search_action'); ?>">
                            <input type="hidden" name="fld_name" value="emp_name" />
                            <div class="form-group">
                                <label for="name">Type Employee Name</label>
                                <input type="text" class="form-control" name="fld_value" id="name" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="search_by_name_btn" value="Search" />
                            </div>

                        </form>
                        <?php
                        break;
                    case "designation":
                        ?>
                        <form method="post" action="<?php echo base_url('admin/search_action'); ?>">
                            <input type="hidden" name="fld_name" value="emp_current_designation" />
                            <div class="form-group">
                                <label for="designation">Type Employee Designation</label>
                                <input type="text" class="form-control" name="fld_value" id="designation" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="search_by_designation_btn" value="Search" />
                            </div>

                        </form>
                        <?php
                        break;
                    case "appointment":
                        ?>
                        <form method="post" action="<?php echo base_url('admin/search_action_double'); ?>">
                            <input type="hidden" name="fld_name" value="emp_apointment_date" />
                            <div class="form-group">
                                <label for="designation">Select date to search by joining date</label>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="text" placeholder="From" class="form-control date-picker" name="fld_value_from" id="apointment_from" />
                                    </div>
                                    <div class="col-xs-6">
                                        <input type="text" placeholder="To" class="form-control date-picker" name="fld_value_to" id="apointment_to" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="search_by_apointment_btn" value="Search" />
                            </div>
                        </form>
                        <?php
                        break;
                    case "retirement":
                        ?>
                        <form method="post" action="<?php echo base_url('admin/search_action_double'); ?>">
                            <input type="hidden" name="fld_name" value="emp_retirement_date" />
                            <div class="form-group">
                                <label for="designation">Select date to search by retirement date</label>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="text" placeholder="From" class="form-control date-picker" name="fld_value_from" id="apointment_from" />
                                    </div>
                                    <div class="col-xs-6">
                                        <input type="text" placeholder="To" class="form-control date-picker" name="fld_value_to" id="apointment_to" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="search_by_retirement_btn" value="Search" />
                            </div>
                        </form>
                        <?php
                        break;
                }
            }
            ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('.date-picker').datepicker({
            changeYear: true,
            dateFormat: 'dd-mm-yy',
            yearRange: '1940:2070'
        });



    });
</script>
