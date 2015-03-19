<html ng-app="globezones">
<head>
	<title>Globe Zones</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/styles.css" />
    <script type="text/javascript" src="libs/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="libs/angular.min.js"></script>
    <script type="text/javascript" src="libs/angular-route.min.js"></script>
    <script type="text/javascript" src="libs/angular-resource.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</head>
<body>
	<header>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<a href="#/" class="navbar-brand" style="color: purple;">Globe Zones</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#/" class="fa fa-home">Home</a></li>
					<li><a href="#/about" class="fa fa-home">About</a></li>
				</ul>
			</div>
		</nav>
	</header>
    <div class="container">
		<div ng-view></div>
	</div>
</body>
</html>