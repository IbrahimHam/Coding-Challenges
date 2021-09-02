<html>
	<head>
		<title>PHP Test</title>
 	</head>
	<style>
	.container {
		position: absolute;
		top: 50%;
		left: 50%;
		-moz-transform: translateX(-50%) translateY(-50%);
		-webkit-transform: translateX(-50%) translateY(-50%);
		transform: translateX(-50%) translateY(-50%);
	}
	.button {
		background-color: grey;
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
	} 
	</style>
<body>
	<div class="container">
		<button class="button" id="q1">question1</button>
		<button class="button" id="q2">question2</button>
		<button class="button" id="q3">question3</button>
	</div>
</body>

<script>
    var btn = document.getElementById('q1');
    btn.addEventListener('click', function() {
      document.location.href = './question1.php';
    });
    var btn = document.getElementById('q2');
    btn.addEventListener('click', function() {
      document.location.href = './question2.php';
    });
    var btn = document.getElementById('q3');
    btn.addEventListener('click', function() {
      document.location.href = './question3.php'
    });
</script>

</html>

