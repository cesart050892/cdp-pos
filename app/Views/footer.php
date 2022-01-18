<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; POS <?php echo date('Y');?></div>
            <div>
                &middot;
                <a href="https://github.com/cesart050892" target="_blank">Github</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>

<script src="<?php echo base_url(); ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/js/scripts.js"></script>
<script src="<?php echo base_url(); ?>/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/demo/datatables-demo.js"></script>
<script>
    $('#modal-confirma').on('show.bs.modal', function(e){
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
</script>
</body>

</html>