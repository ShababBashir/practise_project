			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="https://www.themekita.com">
									ThemeKita
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Help
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Licenses
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
					</div>				
				</div>
			</footer>
		</div>
		<!-- Custom template | don't include it in your project! -->
		<div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					<div class="switch-block">
						<h4>Logo Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
							<button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Navbar Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeTopBarColor" data-color="dark"></button>
							<button type="button" class="changeTopBarColor" data-color="blue"></button>
							<button type="button" class="changeTopBarColor" data-color="purple"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
							<button type="button" class="changeTopBarColor" data-color="green"></button>
							<button type="button" class="changeTopBarColor" data-color="orange"></button>
							<button type="button" class="changeTopBarColor" data-color="red"></button>
							<button type="button" class="changeTopBarColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeTopBarColor" data-color="dark2"></button>
							<button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="purple2"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="green2"></button>
							<button type="button" class="changeTopBarColor" data-color="orange2"></button>
							<button type="button" class="changeTopBarColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Sidebar</h4>
						<div class="btnSwitch">
							<button type="button" class="selected changeSideBarColor" data-color="white"></button>
							<button type="button" class="changeSideBarColor" data-color="dark"></button>
							<button type="button" class="changeSideBarColor" data-color="dark2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
							<button type="button" class="changeBackgroundColor" data-color="dark"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div>
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="{{url('js/core/jquery.3.2.1.min.js')}}"></script>
	<script src="{{url('js/core/popper.min.js')}}"></script>
	<script src="{{url('js/core/bootstrap.min.js')}}"></script>
	<!-- jQuery UI -->
	<script src="{{url('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{url('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="{{url('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
	<!-- Chart JS -->
	<script src="{{url('js/plugin/chart.js/chart.min.js')}}"></script>
	<!-- jQuery Sparkline -->
	<script src="{{url('js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>
	<!-- Chart Circle -->
	<script src="{{url('js/plugin/chart-circle/circles.min.js')}}"></script>
	<!-- Datatables -->
	<script src="{{url('js/plugin/datatables/datatables.min.js')}}"></script>
	<!-- Bootstrap Notify -->
	<script src="{{url('js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
	<!-- jQuery Vector Maps -->
	<script src="{{url('js/plugin/jqvmap/jquery.vmap.min.js')}}"></script>
	<script src="{{url('js/plugin/jqvmap/maps/jquery.vmap.world.js')}}"></script>
	<!-- Sweet Alert -->
	<script src="{{url('js/plugin/sweetalert/sweetalert.min.js')}}"></script>
	<!-- Atlantis JS -->
	<script src="{{url('js/atlantis.min.js')}}"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="{{url('js/setting-demo2.js')}}"></script>
	
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});
		});
	</script>
	</body>
</html>