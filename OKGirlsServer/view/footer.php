</section>
			<!-- Section: Intro -->
		</div>
	</main>
	<!-- Main layout -->

	<!-- Footer -->
	<footer class="page-footer pt-0 mt-5 rgba-stylish-light">
		<!-- Copyright -->
		<div class="footer-copyright py-3 text-center">
			<div class="container-fluid">Developed By : <a href="#" target="_blank"><a href="https://www.facebook.com/mmsoftware100">mmSoftware100</a>
				<br><span>Version 1.0</span>
			</div>
		</div>
	</footer>
	<!-- Footer -->


	
	
	<!-- SCRIPTS -->
	<!-- JQuery -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="js/mdb.min.js"></script>

	
	<script src="js/modernizr.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/underscore.min.js"></script>
	<script src="js/backbone.js"></script>

	<script src="js/rkmCustom.js"></script>

	<!-- Initializations -->
	<script>
		// SideNav Initialization
		    $(".button-collapse").sideNav();
		
		    var container = document.querySelector('.custom-scrollbar');
		    var ps = new PerfectScrollbar(container, {
		      wheelSpeed: 2,
		      wheelPropagation: true,
		      minScrollbarLength: 20
		    });
		
		    // Data Picker Initialization
		    //$('.datepicker').pickadate();
		
		    // Material Select Initialization
		    $(document).ready(function () {
		      
		      $('.mdb-select').material_select();
		
		      $('section').hide();
		      $("#intro_section").show();
		      // login section show
		      // all hide
		
		
		      $('.ui_navigation').click(function(){
		          var link = $(this).attr('href');
		          link = link.substring(1);
		          //alert(link);
		          $('section').hide();
		          $("#"+link).show();
		      });
		    });
		
		    // Tooltips Initialization
		    $(function () {
		      $('[data-toggle="tooltip"]').tooltip()
		    })
	</script>
	<!-- Our JavaScript -->
	<script type="text/javascript" src="js/software_store.js"></script>
	<script type="text/javascript">
		
	</script>
</body>

</html>