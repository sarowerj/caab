<div class="page-content all_employee">
    <!-- END PAGE HEADER-->
    <div class="content container-fluid">
        <div class="header">
            <h3 class="main_title">কর্মকর্তা/কর্মচারির জীবন বৃত্তান্ত</h3>
        </div>
        <div class="content">
            <div class="row all_items">
                <?php
                foreach ($employees as $single_user) {
                    ?>
                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                        <div class="item">
                            <h4><a href="<?php echo base_url('admin/employee/'.$single_user['id']); ?>"><?php echo ($single_user['emp_name']!='')?$single_user['emp_name']:'No Name'; ?></a></h4>
                            <h6><?php echo ($single_user['emp_current_designation']!='')?$single_user['emp_current_designation']:'&nbsp;' ?></h6>
                            <a href="<?php echo base_url('admin/employee/'.$single_user['id']); ?>" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>