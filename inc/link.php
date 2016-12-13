<title>BootFlat</title>
	<link rel="stylesheet" type="text/css" href="css/output/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/output/ripple.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap-material-design-master/dist/css/ripples.min.css">
	<link href="stylesheet" type="text/css" href="Ripple.js-develop/dist/ripple.min.css"> -->
	
			<!-- <script type="text/javascript" src="ripple.min.js"></script> -->
			<!-- Latest compiled and minified CSS -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

		<!-- Optional theme --><!-- 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

		<!-- Latest compiled and minified JavaScript -->
		<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
	
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<script type="text/javascript" src="js/ripple.js"></script>

  		<script >
  			$(document).ready(function() {
				  	$.ripple(".nav li a , .btn-group ,.btn" ,{
				    debug: false, // Turn Ripple.js logging on/off
				    on: 'mousedown', // The event to trigger a ripple effect

				    opacity: 0.4, // The opacity of the ripple
				    color: "auto", // Set the background color. If set to "auto", it will use the text color
				    multi: false, // Allow multiple ripples per element

				    duration: 0.7, // The duration of the ripple

				    // Filter function for modifying the speed of the ripple
				    rate: function(pxPerSecond) {
				        return pxPerSecond;
				    },

				    easing: 'linear' // The CSS3 easing function of the ripple
					});
  			})

  		</script>