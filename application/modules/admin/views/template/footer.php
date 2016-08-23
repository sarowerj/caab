<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <!--b>Version</b> 1.0.0-->
        {elapsed_time} seconds
    </div>
    <strong>Copyright &copy; 2016 <a target="_blank" href="javascript:void(0)">Civil Aviation</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar BG -->
<div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->


<!-- Bootstrap 3.3.5 -->
<script src="<?php echo base_url(); ?>assets/common/js/bootstrap.min.js"></script>

<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>

<!-- Bootstrap Tags input-->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
<script src="https://rawgit.com/twitter/typeahead.js/master/dist/bloodhound.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/admin/js/app.min.js"></script> 

<script type="text/javascript">
    var cities = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        prefetch: '<?= base_url('assets/plugins/bootstrap-tagsinput/examples/assets/cities.json'); ?>'
    });
    cities.initialize();

    var elt = $('#emp_extra_experience');
    elt.tagsinput({
        itemValue: 'value',
        itemText: 'text',
        typeaheadjs: {
            name: 'cities',
            displayKey: 'text',
            source: cities.ttAdapter()
        }
    });
    /*elt.tagsinput('add', {"value": 1, "text": "Amsterdam", "continent": "Europe"});*/
</script>


</body>
</html>