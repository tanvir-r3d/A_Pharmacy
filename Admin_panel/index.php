
<?php
include_once "../Database/connect.php";
include_once "../Database/Database.php";
spl_autoload_register(function($class){
	include 'layout/Class/'.$class.'.php';
});
$db=new Database;
?>

<!-- head -->
<?php include 'layout/head.php' ?>
<!-- top navbar -->
<?php include 'layout/navbar.php' ?>

<!--/.sidebar-->
<?php include 'layout/sidebar.php' ?>
<!-- main page -->
<?php
if (isset($_REQUEST['page']))
{
	switch ($_REQUEST['page']) {
		case 'pos':
			include 'layout/pos.php';
			break;
		case 'add_medicine':
			include 'layout/add_medicine.php';
			break;

		case 'medicine_list':
			include 'layout/medicine_list.php';
			break;
		case 'add_category':
			include 'layout/add_category.php';
			break;
		case 'category_list':
			include 'layout/category_list.php';
			break;
		case 'add_clients':
			include 'layout/add_clients.php';
			break;
		case 'client_list':
			include 'layout/client_list.php';
			break;
		case 'payment':
			include 'layout/payment.php';
			break;
		case 'add_expanse':
			include 'layout/add_expanse.php';
			break;
		case 'expanse_list':
			include 'layout/expanse_list.php';
			break;
		case 'expanse_category':
			include 'layout/expanse_category.php';
			break;
		case 'report':
			include 'layout/report.php';
			break;
		case 'staff':
			include 'layout/staff.php';
			break;
		case 'settings':
			include 'layout/settings.php';
			break;
		case 'profile':
			include 'layout/profile.php';
			break;
		case 'widgets':
			include 'layout/widgets.php';
			break;
		case 'charts':
			include 'layout/charts.php';
			break;
		case 'elements':
			include 'layout/elements.php';
			break;
		case 'panels':
			include 'layout/panels.php';
			break;
		default:
			include 'index.php';
			break;
	}
}
else
	{
	include 'layout/main.php';
	}
?>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="../Assets/js/jquery-1.11.1.min.js"></script>
	<script src="../Assets/js/bootstrap.min.js"></script>
	<script src="../Assets/js/chart.min.js"></script>
	<script src="../Assets/js/chart-data.js"></script>
	<script src="../Assets/js/easypiechart.js"></script>
	<script src="../Assets/js/easypiechart-data.js"></script>
	<script src="../Assets/js/bootstrap-datepicker.js"></script>
	<script src="../Assets/js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>

</body>
</html>
