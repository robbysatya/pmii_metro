  <!-- /.content-wrapper -->
  <footer class="main-footer">
  	<strong>Copyright &copy; 2024 <a href="https://adminlte.io">PMII Kota Metro</a></strong>
  	<div class="float-right d-none d-sm-inline-block">
  		<b>Version</b> 1.0
  	</div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
  	<!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url('assets/'); ?>plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
  	$.widget.bridge('uibutton', $.ui.button)
  </script>
		<!-- DataTables  & Plugins -->
	<script src="<?= base_url('assets/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/jszip/jszip.min.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/pdfmake/pdfmake.min.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/pdfmake/vfs_fonts.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
	<!-- Select2  -->
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="<?= base_url('assets/'); ?>plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="<?= base_url('assets/'); ?>plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="<?= base_url('assets/'); ?>plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?= base_url('assets/'); ?>plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?= base_url('assets/'); ?>plugins/moment/moment.min.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?= base_url('assets/'); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="<?= base_url('assets/'); ?>plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url('assets/'); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/'); ?>dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="<?= base_url('assets/'); ?>dist/js/demo.js"></script> -->
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?= base_url('assets/'); ?>dist/js/pages/dashboard.js"></script>
	<!-- include summernote css/js -->
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

	<script type="text/javascript">
      $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
      });

			$(function () {
					var url = window.location;
					// for single sidebar menu
					$('ul.nav-sidebar a').filter(function () {
							return this.href == url;
					}).addClass('active');

					// for sidebar menu and treeview
					$('ul.nav-treeview a').filter(function () {
							return this.href == url;
					}).parentsUntil(".nav-sidebar > .nav-treeview")
							.css({'display': 'block'})
							.addClass('menu-open').prev('a')
							.addClass('active');
			});

      function redirect(url) {
        location.href = url;
      }

		$(function () {
			$("#example1").DataTable({
				"responsive": true, "lengthChange": false, "autoWidth": false,
				"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
			}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"responsive": true,
			});
		});

	$(document).ready(function(){
		$('#summernote').summernote({
			// set editor height
			placeholder: 'Tulis Berita Disini...',
			tabsize:2,
			height:400,                 // set editor height
			minHeight: 400,             // set minimum height of editor
			maxHeight: 400,       
		});
	});

	$(document).ready(function() {
			$('.kategoriBerita').select2();
	});
</script>
  </body>

  </html>
