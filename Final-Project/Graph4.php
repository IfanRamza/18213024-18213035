<?php


	header('Content-Disposition: inline; fileName="JmlMhsperFakl.png"');

	//include library
	require_once ('JPGraph\jpgraph.php');
	require_once ('JPGraph\jpgraph_bar.php');
	
	//var
	$fmipa = 0;
	$fsrd = 0;
	$sbm = 0;
	$sf = 0;
	$sith = 0;
	$ftsl = 0;
	$fttm = 0;
	$fitb = 0;
	$fsrd = 0;
	$sappk= 0;
	$stei = 0;
	$fti = 0;
		
	//database connect and query
	$db = mysqli_connect('localhost', 'root','') or die(mysql_error());
	mysqli_select_db($db, 'Graph') or die(mysql_error());
	$sql = mysqli_query($db,'SELECT * FROM ipk') or die(mysql_error());
	
	while($row = mysqli_fetch_array($sql))
	{
		
		$fakultas[] = $row['Fakultas'];
	} 
	for ($i=0;$i<19;$i++) {
		if ($fakultas[$i] == 'STEI') {			// misahin yang STEI
			$stei = $stei +1;
		} else if ($fakultas[$i] == 'FTI') { 	// misahin yang FTI
			$fti = $fti + 1;
		} else if ($fakultas[$i] == 'FITB') {	// misahin yang FITB
			$fitb = $fitb + 1;
		} else if ($fakultas[$i] == 'FTTM') {	//misahin yang FTTM
			$fttm = $fttm + 1;
		} else if ($fakultas[$i] == 'SF') {		//misahin yang SF
			$sf = $sf + 1;
		} else if ($fakultas[$i] == 'SAPPK') { 	//misahin yang SAPPK
			$sappk = $sappk + 1;
		} else if ($fakultas[$i] == 'FTSL') { 	//misahin yang FTSL
			$ftsl = $ftsl + 1;
		} else if ($fakultas[$i] == 'FSRD') { 	//misahin yang FSRD
			$fsrd = $fsrd + 1;
		} else if ($fakultas[$i] == 'FMIPA') { 	//misahin yang FMIPA
			$fmipa = $fmipa + 1;
		} else if ($fakultas[$i] == 'SBM') { 	//misahin yang SBM
			$sbm = $sbm + 1;
		} else if ($fakultas[$i] == 'SITH') {	//misahin yang SITH
			$sith = $sith + 1;
		}
	}
	
	$datay = array($stei, $fti, $fitb, $fttm, $sf, $sappk, $ftsl, $fsrd, $fmipa, $sbm, $sith);
	$datax = array('STEI', 'FTI', 'FITB', 'FTTM', 'SF', 'SAPPK', 'FTSL', 'FSRD', 'FMIPA', 'SBM', 'SITH');
	
	$graph = new Graph(800,600); 
	$graph->SetScale('textint');
	 
	$graph->img->SetMargin(50,20,30,100); 
	$graph->SetShadow();
	
	
	$graph->title->Set("Jumlah Mhs per Fakultas");
	
	$graph->xaxis->SetTickLabels($datax); 
	$graph->xaxis->SetLabelAngle(45);
	$bplot = new BarPlot($datay);
	  
	$bplot->value->Show();
	$bplot->value->SetFont(FF_ARIAL,FS_BOLD);
	$bplot->value->SetAngle(45);
	$graph->xaxis->SetTickLabels($datax); 
	$graph->Add($bplot); 
	$graph->img->SetImgFormat('png');
	$gdImgHandler = $graph->Stroke(_IMG_HANDLER);
	$fileName = "JmlMhsperFakl.png";
	$graph->img->Stream($fileName);
	$graph->img->Headers();
	$graph->img->Stream();
	
	echo json_encode ($datax);
	echo json_encode ($fakultas);
	echo json_encode ($datay);
	echo json_encode ($nim);
	echo json_encode ($jurusan);
	exit(json_encode ($datax));
	exit(json_encode ($fakultas));
	exit(json_encode ($datay));
	exit(json_encode ($nim));
	exit(json_encode ($jurusan));


?>
