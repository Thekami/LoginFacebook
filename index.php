<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Facebook Login</title>

	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="main.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="main.css">
</head>
<body>
	<h1>Facebook SDK login con Javascript</h1>

	<a href="#" id="login" class="btn btn-primary">Iniciar sesión</a>

	<script>

	// Load the SDK asynchronously
	  (function(d, s, id) {
	    var js, fjs = d.getElementsByTagName(s)[0];
	    if (d.getElementById(id)) return;
	    js = d.createElement(s); js.id = id;
	    js.src = "//connect.facebook.net/en_US/sdk.js";
	    fjs.parentNode.insertBefore(js, fjs);
	  }(document, 'script', 'facebook-jssdk'));
  
	</script>
</body>
</html>