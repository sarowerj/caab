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
                    <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/all_employees'); ?>">
                            <i class="fa fa-circle"></i> <span>All Employees</span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees'); ?>">
                                    <i class="fa fa-circle"></i> <span>সকল কর্মচারী</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=সশস্ত্র-নিরাপত্তা-প্রহরী'); ?>">
                                    <i class="fa fa-circle"></i> <span>সশস্ত্র নিরাপত্তা প্রহরী</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=এমটি,-ক্লিনার'); ?>">
                                    <i class="fa fa-circle"></i> <span>এমটি, ক্লিনার</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=রাজশাহী-বিমানবন্দর'); ?>">
                                    <i class="fa fa-circle"></i> <span>রাজশাহী বিমানবন্দর</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=সিভিল-ডিভশন-2'); ?>">
                                    <i class="fa fa-circle"></i> <span>সিভিল ডিভশন-2</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=সিভিল-ডিভশন-1'); ?>">
                                    <i class="fa fa-circle"></i> <span>সিভিল ডিভশন-1</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=সিভিল-সার্কেল'); ?>">
                                    <i class="fa fa-circle"></i> <span>সিভিল সার্কেল</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=সম্পত্তি-শাখা'); ?>">
                                    <i class="fa fa-circle"></i> <span>সম্পত্তি শাখা</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=সদস্য-(পরিঃ)'); ?>">
                                    <i class="fa fa-circle"></i> <span>সদস্য (পরিঃ)</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=চেয়ারম্যান-সচিবালয়'); ?>">
                                    <i class="fa fa-circle"></i> <span>চেয়ারম্যান সচিবালয়</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=আইন-শাখা'); ?>">
                                    <i class="fa fa-circle"></i> <span>আইন শাখা</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=সদর-দপ্তর,-এমটি-পুল'); ?>">
                                    <i class="fa fa-circle"></i> <span>সদর দপ্তর, এমটি পুল</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=যোগাযোগ-বিভাগ'); ?>">
                                    <i class="fa fa-circle"></i> <span>যোগাযোগ-বিভাগ</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=এটিএস-এন্ড-এরো-বিভাগ'); ?>">
                                    <i class="fa fa-circle"></i> <span>এটিএস এন্ড এরো বিভাগ</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=পরিকল্পনা-ও-প্রশিক্ষণ-বিভাগ'); ?>">
                                    <i class="fa fa-circle"></i> <span>পরিকল্পনা ও প্রশিক্ষণ বিভাগ</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=এফএস-আর-বিভাগ'); ?>">
                                    <i class="fa fa-circle"></i> <span>এফএস আর বিভাগ</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=অর্থ বিভাগ'); ?>">
                                    <i class="fa fa-circle"></i> <span>অর্থ বিভাগ</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=প্রধান-প্রকৌশলীর-দপ্তর'); ?>">
                                    <i class="fa fa-circle"></i> <span>প্রধান প্রকৌশলীর দপ্তর</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=প্রশাসন-বিভাগ'); ?>">
                                    <i class="fa fa-circle"></i> <span>প্রশাসন বিভাগ</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=অডিট-ভবন'); ?>">
                                    <i class="fa fa-circle"></i> <span>অডিট ভবন</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=জনসংযোগ-বিভাগ'); ?>">
                                    <i class="fa fa-circle"></i> <span>জনসংযোগ বিভাগ</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=প্রশাসন-বিভাগ-২'); ?>">
                                    <i class="fa fa-circle"></i> <span>প্রশাসন বিভাগ-২</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=যোগাযোগ-বিভাগ'); ?>">
                                    <i class="fa fa-circle"></i> <span>যোগাযোগ বিভাগ</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=প্রশাসন-শাখা'); ?>">
                                    <i class="fa fa-circle"></i> <span>প্রশাসন শাখা</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=সিভিল-ডিভিশন-3'); ?>">
                                    <i class="fa fa-circle"></i> <span>সিভিল ডিভিশন-3</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=ই/এম-সার্কেল-2'); ?>">
                                    <i class="fa fa-circle"></i> <span>ই/এম সার্কেল-2</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=ই/এম-বিভাগ-1'); ?>">
                                    <i class="fa fa-circle"></i> <span>ই/এম বিভাগ-1</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=ই/ই/এম-বিভাগ-2'); ?>">
                                    <i class="fa fa-circle"></i> <span>ই/এম বিভাগ-2</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=ই/ই/এম-বিভাগ-3'); ?>">
                                    <i class="fa fa-circle"></i> <span>ই/এম বিভাগ-3</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=পরিচালকের-দপ্তর'); ?>">
                                    <i class="fa fa-circle"></i> <span>পরিচালকের দপ্তর</span>
                                </a>
                            </li>
                            <li class="treeview <?php echo($active == 'all_employees') ? 'active' : ''; ?>">
                                <a href="<?= base_url('admin/all_employees?department=বেসামরিক-বিমান-চলাচল-কর্তৃপক্ষ'); ?>">
                                    <i class="fa fa-circle"></i> <span>বেসামরিক বিমান চলাচল কর্তৃপক্ষ</span>
                                </a>
                            </li>
                        </ul>
                    </li>
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