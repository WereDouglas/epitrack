
    <script type="text/javascript">
        window.jQuery || document.write("<script src='<?= base_url(); ?>assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
    </script>
<script src="<?= base_url(); ?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function () {
    $("#example1").DataTable();

});
</script>
<script src="<?= base_url(); ?>tinymce/tinymce.min.js"></script>
<script>tinymce.init({selector: 'textarea'});</script>