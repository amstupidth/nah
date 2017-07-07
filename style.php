<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!--<link rel="stylesheet" href="bootstrap/fonts/font.css">-->
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-select.min.css">
<script src="bootstrap/js/filter.js"></script>
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/bootstrap-select.js"></script>
<script src="bootstrap/js/jquery-3.1.1.min.js" type="text/javascript"></script>

<!--<script src="https://code.highcharts.com/highcharts.js"></script>-->
<!--<script src="https://code.highcharts.com/modules/data.js"></script>-->
<!--<script src="https://code.highcharts.com/modules/exporting.js"></script>-->
<!--<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin' >-->

<link rel='stylesheet' type='text/css' href='bootstrap/fonts/fonts.css' >
<link rel="stylesheet" href="bootstrap/fonts/font-awesome.min.css" >
<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/datatables.min.css"/>
<script type="text/javascript" src="bootstrap/js/datatables.min.js"></script>-->
<link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
<script type="text/javascript" src="datatables/datatables.min.js"></script>

<link href="dist/css/bootstrap-datepicker3.css" rel="stylesheet" />
<script src="dist/js/bootstrap-datepicker-custom.js"></script>
<script src="dist/locales/bootstrap-datepicker.th.min.js" charset="UTF-8"></script>

<script>
$(document).ready(function () {
		$('.datepicker').datepicker({
				format: 'yyyy-mm-dd',
				todayBtn: false,
				language: 'th',
				thaiyear: true
		}).datepicker("setDate", "0");
});
</script>
<style>
	/* navbar-top */
	body {
		font-family: 'Kanit', sans-serif;
		font: 400 14px 'Kanit', sans-serif;
		line-height: 1.8;
		margin: 0px;
		padding: 0px;
		position: relative;
	}
	h2 {
		font-size: 24px;
		text-transform: uppercase;
		color: #303030;
		font-weight: 600;
		margin-bottom: 30px;
	}
	h4 {
		font-size: 19px;
		line-height: 1.375em;
		color: #303030;
		font-weight: 400;
		margin-bottom: 30px;
	}  
	.jumbotron {
		background-color: #82012f;
		/*color: #fff;*/
		padding: 100px 25px;
	}
	.container-fluid {
			padding-top: 50px ;
	}
	.text-white {
			color: #FFF;
	}
	.bg-grey {
			background-color: #f6f6f6;
	}
	.bg-skf {
			color: #FFF !important;
			background-color: #82012f;
	}
	.logo-small {
			color: #82012f;
			font-size: 50px;
	}
	.logo {
			color: #82012f;
			font-size: 200px;
	}
	.thumbnail {
			padding: 0 0 15px 0;
			border: none;
			border-radius: 0;
	}
	.thumbnail img {
			width: 100%;
			height: 100%;
			margin-bottom: 10px;
	}
	.carousel-control.right, .carousel-control.left {
			background-image: none;
			color: #82012f;
	}
	.carousel-indicators li {
			border-color: #82012f;
	}
	.carousel-indicators li.active {
			background-color: #82012f;
	}
	.item h4 {
			font-size: 19px;
			line-height: 1.375em;
			font-weight: 400;
			margin: 70px 0;
	}
	.item span {
			font-style: normal;
	}
	.panel {
			border: 1px solid #82012f;
			border-radius:0 !important;
			transition: box-shadow 0.5s;
	}
	.panel:hover {
			box-shadow: 5px 0px 40px rgba(0,0,0, .2);
	}
/*	.panel-footer .btn:hover {
			border: 1px solid #82012f;
			background-color: #fff !important;
			color: #82012f;
	}*/
	.panel-heading-skf {
			color: #fff !important;
			background-color: #82012f !important;
			padding: 10px;
			border-bottom: 1px solid transparent;
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
	}
	.panel-footer {
			background-color: white !important;
	}
	.panel-footer h3 {
			font-size: 32px;
	}
	.panel-footer h4 {
			color: #aaa;
			font-size: 14px;
	}
	.panel-footer .btn {
			margin: 15px 0;
			background-color: #82012f;
			color: #fff;
	}
	.navbar {
			margin-bottom: 0;
			background-color: #82012f;
			z-index: 9999;
			border: 0;
			font-size: 12px !important;
			line-height: 1.42857143 !important;
			/*letter-spacing: 4px;*/
			border-radius: 0;
			/*font-family: Montserrat, sans-serif;*/
	}
	.navbar li a, .navbar .navbar-brand {
			color: #fff !important;
	}
	.navbar-nav li a:hover, .navbar-nav li.active a {
			color: #82012f !important;
			background-color: #fff !important;
	}
	.navbar-default .navbar-toggle {
			border-color: transparent;
			color: #fff !important;
	}
	footer .glyphicon {
			font-size: 20px;
			margin-bottom: 20px;
			color: #82012f;
	}
	.slideanim {visibility:hidden;}
	.slide {
			animation-name: slide;
			-webkit-animation-name: slide;
			animation-duration: 1s;
			-webkit-animation-duration: 1s;
			visibility: visible;
	}
	@keyframes slide {
		0% {
			opacity: 0;
			transform: translateY(70%);
		} 
		100% {
			opacity: 1;
			transform: translateY(0%);
		}
	}
	@-webkit-keyframes slide {
		0% {
			opacity: 0;
			-webkit-transform: translateY(70%);
		} 
		100% {
			opacity: 1;
			-webkit-transform: translateY(0%);
		}
	}
	@media screen and (max-width: 768px) {
		.col-sm-4 {
			text-align: center;
/*      margin: 25px 0;*/
		}
		.btn-lg {
				width: 100%;
				margin-bottom: 35px;
		}
	}
	@media screen and (max-width: 480px) {
		.logo {
				font-size: 150px;
		}
	}
	#ellipsis {
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	}
	/* navbar-side */
	.nav-side-menu {
		overflow: auto;
		font-family: 'Kanit', verdana;
		font-size: 12px;
		font-weight: 200;
		/*background-color: #2e353d;*/
		background-color: #82012f;
		/*padding-top: 50px;*/
		position: fixed;
		top: 0px;
		/*width: 230px;*/
		height: 100%;
		color: #e1ffff;
	}
	.nav-side-menu .brand {
		background-color: #82012f;
		line-height: 50px;
		display: block;
		text-align: center;
		font-size: 14px;
	}
	.nav-side-menu .toggle-btn {
		display: compact;
	}
	.nav-side-menu ul,
	.nav-side-menu li {
		list-style: none;
		padding: 0px;
		margin: 0px;
		line-height: 35px;
		cursor: pointer;
		 
	.collapsed{
		.arrow:before{
			font-family: FontAwesome;
			content: "\f053";
			display: inline-block;
			padding-left:10px;
			padding-right: 10px;
			vertical-align: middle;
			float:right;
		}
	}
	}
	.nav-side-menu ul :not(collapsed) .arrow:before,
	.nav-side-menu li :not(collapsed) .arrow:before {
		font-family: FontAwesome;
		content: "\f078";
		display: inline-block;
		padding-left: 10px;
		padding-right: 10px;
		vertical-align: middle;
		float: right;
	}
	.nav-side-menu ul .active,
	.nav-side-menu li .active {
		border-left: 3px solid #d19b3d;
		background-color: #4f5b69;
	}
	.nav-side-menu ul .sub-menu li.active,
	.nav-side-menu li .sub-menu li.active {
		color: #d19b3d;
	}
	.nav-side-menu ul .sub-menu li.active a,
	.nav-side-menu li .sub-menu li.active a {
		color: #d19b3d;
	}
	.nav-side-menu ul .sub-menu li,
	.nav-side-menu li .sub-menu li {
		background-color: #82012f;
		border: none;
		line-height: 28px;
		border-bottom: 1px solid #23282e;
		margin-left: 0px;
	}
	.nav-side-menu ul .sub-menu li:hover,
	.nav-side-menu li .sub-menu li:hover {
		background-color: #020203;
	}
	.nav-side-menu ul .sub-menu li:before,
	.nav-side-menu li .sub-menu li:before {
		font-family: FontAwesome;
		content: "\f105";
		display: inline-block;
		padding-left: 10px;
		padding-right: 10px;
		vertical-align: middle;
	}
	.nav-side-menu li {
		padding-left: 0px;
		border-left: 3px solid #2e353d;
		border-bottom: 1px solid #23282e;
	}
	.nav-side-menu li a {
		text-decoration: none;
		color: #e1ffff;
	}
	.nav-side-menu li a i {
		padding-left: 10px;
		width: 20px;
		padding-right: 20px;
	}
	.nav-side-menu li:hover {
		border-left: 3px solid #d19b3d;
		background-color: #82012f;
		-webkit-transition: all 1s ease;
		-moz-transition: all 1s ease;
		-o-transition: all 1s ease;
		-ms-transition: all 1s ease;
		transition: all 1s ease;
	}
	@media (max-width: 767px) {
		.nav-side-menu {
			position: relative;
			width: 100%;
			margin-bottom: 10px;
		}
		.nav-side-menu .toggle-btn {
			display: block;
			cursor: pointer;
			position: absolute;
			right: 10px;
			top: 10px;
			z-index: 10 !important;
			padding: 3px;
			background-color: #ffffff;
			color: #000;
			width: 40px;
			text-align: center;
		}
		.brand {
			text-align: left !important;
			font-size: 22px;
			padding-left: 20px;
			line-height: 50px !important;
		}
	}
	@media (min-width: 767px) {
		.nav-side-menu .menu-list .menu-content {
			display: block;
		}
	}
	
/*    Promotion CSS   */
	.column {
		float: left;
		width: 20%;
		margin-bottom: 15px;
		padding: 0 8px;
	}
	@media (max-width: 650px) {
		.column {
			width: 100%;
			display: block;
		}
	}
	.card {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	}
	.title {
		color: grey;
	}	
</style>
<?php
function count_order($od_code) {
	require 'con_db.php';
	$query = "SELECT COUNT(od_item_code) as od_item_code FROM skf_order_item WHERE od_item_code = '$od_code'";
	$result= mysqli_query($conn, $query);
	$fetch = mysqli_fetch_assoc($result);
	return $fetch['od_item_code'];
}
function sum_order($od_code) {
	require 'con_db.php';
	$query = "SELECT SUM(od_item_cost) as od_item_cost FROM skf_order_item WHERE od_item_code = '$od_code'";
	$result= mysqli_query($conn, $query);
	$fetch = mysqli_fetch_assoc($result);
	return $fetch['od_item_cost'];
}
function sum_rpt_value($result) {
	require 'con_db.php';
	$query = "SELECT
					skf_order_item.pd_item_code,
					skf_order_item.od_item_code,
					skf_order.od_branch,
					skf_order.od_date,
					skf_order.od_status,
					skf_order_item.od_item_price,
					Sum(skf_order_item.od_item_qty) AS od_item_qty,
					Sum(skf_order_item.od_item_cost) AS od_item_cost,
					skf_order_item.od_item_ctrl,
					skf_product.*
					FROM
					skf_order_item
					LEFT JOIN skf_order ON skf_order_item.od_item_code = skf_order.od_code
					LEFT JOIN skf_product ON skf_order_item.pd_item_code = skf_product.pd_code $result";
	$result= mysqli_query($conn, $query);
	$fetch = mysqli_fetch_assoc($result);
	return $fetch['od_item_cost'];
}
function date_only($datetime) {
	$result = explode(" ", $datetime, 2);
	return $result['0'];
}
function time_only($datetime) {
	$result = explode(" ", $datetime, 2);
	return $result['1'];
}
?>



