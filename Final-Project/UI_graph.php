<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Visualisasi data | KM-ITB </title>

	<link href="css/association.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/half-slider.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
	if(isset($_POST['formSubmit'])) 
	{
		$varCountry = $_POST['formCountry'];
		$errorMessage = "";
		
		if(empty($varCountry)) 
		{
			$errorMessage = "<li>You forgot to select an option!</li>";
		}
		
		if($errorMessage != "") 
		{
			echo("<p>There was an error with your form:</p>\n");
			echo("<ul>" . $errorMessage . "</ul>\n");
		} 
		else 
		{
			// note that both methods can't be demonstrated at the same time
			// comment out the method you don't want to demonstrate

			// method 1: switch
			$redir = "US.html";
			switch($varCountry)
			{
				case "Data Mahasiswa": $redir = "UI_DataMahasiswa.php"; break;
				case "Rata-rata IPK Tiap Fakultas": $redir = "UI_GrafikFakultas.html"; break;
				case "IPKMhs": $redir = "UI_GrafikMahasiswa.html"; break;
				
				default: echo("Error!"); exit(); break;
			}
			echo " redirecting to: $redir ";
			header("Location: $redir");
			// end method 1
			// method 2: dynamic redirect
			//header("Location: " . $varCountry . ".html");
			// end method 2
			exit();
		}
	}
?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <div class="title">
					<a class="navbar-brand" href="#">KM-ITB</a>
				</div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
				<div class="menu-bar">
					<div class= "logo">
						<img id="logo-img" src="assets/logo.gif"></img>
					</div>
					<div class= "menu">
							<ul class="nav nav-pills">
								<li><a href="index.html">Home</a></li>
								<li><a href="#">Event</a></li>
								<li><a href="#">Open Data</a></li>
								<li><a href="#">Kader</a></li>
							</ul>
					</div>
				</div>
            </div>
        </div>
	</div>
	
	<div class="container">
	<div class="about">
		<div class="col-md-6 ab1">
			<div class="about-left">
				<img id="kiri-abt" src="assets/dua/kiri.png"></img>
			</div>
			<div class="a-text-left">
				<div class= "a-text-header-left">
					
				</div>
				<div class="a-text-content-left">
					<p>Isi suka-suka. Gambar dihapus juga bebas. Cuma contoh</p>
				</div>
			</div>
		</div>
		<div class="col-md-6 ab2">
			<div class="about-right">
				<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
						<label for='formCountry'>Silahkan pilih data yang ingin dilihat</label><br>
						<select name="formCountry">
							<option value="Data Mahasiswa">Data Mahasiswa</option>
							<option value="Rata-rata IPK Tiap Fakultas">Grafik rata-rata IPK Tiap Fakultas</option>
							<option value="IPKMhs">Jumlah Mahasiswa Tiap Fakultas</option>
						</select> 
						<input type="submit" name="formSubmit" value="Submit" />
					</form>
			</div>
			<div class="a-text-right">
				<div class= "a-text-header-right">
					
				</div>
				<div class= "a-text-content-right">
					
				</div>
			</div>
			</div>
	</div>
	</div>

    <!-- Page Content -->
    <div class="container">
	<div class="center">
		<div class="social-media">
			<a href='https://www.facebook.com/ITB.KM'><img id="icon-fb" src="assets/home/icon-fb.png"></img></a>
			<a href='http://mail.google.com'><img id="icon-mail" src="assets/home/icon-mail.png"></img></a>
			<a href='https://www.instagram.com/km_itb/'><img id="icon-ig" src="assets/home/icon-ig.png"></img></a>	
		</div>
	</div>
	</div>
	
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="copyright">
						<p>Sistem dan Teknologi Informasi 2013</p>
					</div>
            </div>
            <!-- /.row -->
        </footer>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
