<!DOCTYPE html>
<html>
<head>

        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Compteur de visites</title>
        <meta name="description" content="Compteur de visites par JPH33600">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="visites.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
<body>
	<?php
		$monfichier = fopen('compteur.txt', 'r+');

		$pages_vues = fgets($monfichier);
		$pages_vues++;
		fseek($monfichier, 0);
		fputs($monfichier, $pages_vues);
		fclose($monfichier);
	?>

	<div class="jumbotron">
		<?php echo "<p>Cette page a été vue " . $pages_vues . " fois !</p>"; ?>
	</div>
</body>
</html>