
<div class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <?php
        foreach ($dept as $single_dept) {
            ?>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="<?= base_url('admin/employees/'.$single_dept->slug); ?>">
                    <div class="info-box bg-green">
                        <span class="info-box-icon"><i class="fa fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text"><?php echo $single_dept->dept; ?></span> 
                       </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                </a>
            </div>
            <?php
        }
        ?>

    </div>
</div>