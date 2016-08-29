<!-- Left Navigation Start-->
<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">

            <div class="pull-left info">
                <p><?= $username; ?></p>
            </div>
        </div>

        <ul class="sidebar-menu">
            <li class="treeview <?php echo($meta == 'dashboard') ? 'active' : ''; ?>">
                <a href="<?php echo base_url(); ?>admin">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview <?php echo($meta == 'employee') ? 'active' : ''; ?>">
                <a href="<?php echo base_url(); ?>admin">
                    <i class="fa fa-puzzle-piece"></i> <span>Employees</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview <?php echo($active == 'new_employee') ? 'active' : ''; ?>">
                        <a href="<?php echo base_url('admin/new_employee'); ?>">
                            <i class="fa fa-circle"></i> <span>Add New Employee</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="treeview <?php echo($meta == 'search') ? 'active' : ''; ?>">
                <a href="javascript:void(0)">
                    <i class="fa fa-puzzle-piece"></i> <span>Search</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview <?php echo($active == 'emp_name') ? 'active' : ''; ?>">
                        <a href="<?php echo base_url('admin/search?q=name'); ?>">
                            <i class="fa fa-circle"></i> <span>Search by Name</span>
                        </a>
                    </li>
                    <li class="treeview <?php echo($active == 'emp_current_designation') ? 'active' : ''; ?>">
                        <a href="<?php echo base_url('admin/search?q=designation'); ?>">
                            <i class="fa fa-circle"></i> <span>Search by Designation</span>
                        </a>
                    </li>
                    <li class="treeview <?php echo($active == 'emp_apointment_date') ? 'active' : ''; ?>">
                        <a href="<?php echo base_url('admin/search?q=appointment'); ?>">
                            <i class="fa fa-circle"></i> <span>Search by Appointment</span>
                        </a>
                    </li>
                    <li class="treeview <?php echo($active == 'emp_retirement_date') ? 'active' : ''; ?>">
                        <a href="<?php echo base_url('admin/search?q=retirement'); ?>">
                            <i class="fa fa-circle"></i> <span>Search by Retirement</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>