@include('layouts.header')
<div class="content">
                <div class="container-fluid">
                  @yield('content')
                 </div>
 </div>
<footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="http://www.jameelahmed.com.pk">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://www.jameelahmed.com.pk">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.jameelahmed.com.pk">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.jameelahmed.com.pk">Jameel Ahmed</a>
                </div>
            </div>
        </footer>

        </div>
        </div>


</body>

<!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/perfect-scrollbar.min.js') }} " type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }} " type="text/javascript"></script>

<!--  Forms Validations Plugin -->
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>

    <!-- Promise Library for SweetAlert2 working on IE -->
    <script src="{{ asset('js/es6-promise-auto.min.js') }}"></script>

    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="{{ asset('js/moment.min.js') }}"></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="{{ asset('js/bootstrap-datetimepicker.js') }}"></script>

    <!--  Select Picker Plugin -->
    <script src="{{ asset('js/bootstrap-selectpicker.js') }}"></script>

    <!--  Switch and Tags Input Plugins -->
    <script src="{{ asset('js/bootstrap-switch-tags.js') }}"></script>

    <!-- Circle Percentage-chart -->
    <script src="{{ asset('js/jquery.easypiechart.min.js') }}"></script>

    <!--  Charts Plugin -->
    <script src="{{ asset('js/chartist.min.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('js/bootstrap-notify.js') }}"></script>

    <!-- Sweet Alert 2 plugin -->
    <script src="{{ asset('js/sweetalert2.js') }}"></script>

    <!-- Vector Map plugin -->
    <script src="{{ asset('js/jquery-jvectormap.js') }}"></script>

    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Wizard Plugin    -->
    <script src="{{ asset('js/jquery.bootstrap.wizard.min.js') }}"></script>

    <!--  Bootstrap Table Plugin    -->
    <script src="{{ asset('js/bootstrap-table.js') }}"></script>

    <!--  Plugin for DataTables.net  -->
    <script src="{{ asset('js/jquery.datatables.js') }}"></script>

    <!--  Full Calendar Plugin    -->
    <script src="{{ asset('js/fullcalendar.min.js') }}"></script>

    <!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
    <script src="{{ asset('js/paper-dashboard.js') }}"></script>

    <!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
    <script src="{{ asset('js/demo.js') }}"></script>

    <script type="text/javascript">
	    $(document).ready(function() {

	        $('#datatables').DataTable({
	            "pagingType": "full_numbers",
	            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
	            responsive: true,
	            language: {
	            search: "_INPUT_",
		            searchPlaceholder: "Search records",
		        }
	        });


	        var table = $('#datatables').DataTable();
	         /*// Edit record
	         table.on( 'click', '.edit', function () {
	            $tr = $(this).closest('tr');

	            var data = table.row($tr).data();
	            alert( 'You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.' );
	         } );*/

	         // Delete a record
	         table.on( 'click', '.remove', function (e) {
	            $tr = $(this).closest('tr');
	            table.row($tr).remove().draw();
	            e.preventDefault();
	         } );

	        //Like record
	        /*table.on( 'click', '.like', function () {
	            alert('You clicked on Like button');
	         });*/

	    });
	</script>
</html>  


