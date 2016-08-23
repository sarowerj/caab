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

        </ul>
    </section>
</aside>