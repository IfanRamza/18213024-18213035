<?php

	header('Content-Disposition: inline; filename="file.png"');
	
	//include library
	require_once ('JPGraph\jpgraph.php');
	require_once ('JPGraph\jpgraph_bar.php'); 
	
	//var
	$datay = array();
	$datax = array();
	$sumy = 0;
	$sumstei = 0;
	$stei = 0;
	$sumfti = 0;
	$fti = 0;
	$sumfmipa = 0; 
	$sumfsrd = 0;
	$sumsbm = 0;
	$sumsf = 0;
	$sumsith = 0;
	$sumftsl = 0;
	$sumfttm = 0;
	$sumfitb = 0;
	$sumfsrd = 0;
	$sumsappk = 0;
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
	$fak = 0;	
	//database connect and query
	$db = mysqli_connect('localhost', 'root','') or die(mysql_error());
	mysqli_select_db($db, 'Graph') or die(mysql_error());
	$sql = mysqli_query($db,'SELECT * FROM ipk') or die(mysql_error());

	// Pushing query result into array
	while($row = mysqli_fetch_array($sql))
	{
		$datay[] = (Float) $row['IPK'];
		//array_push($datay, $row['IPK']);
		$datax[] = $row['Nama'];
		//array_push($datax, $row['Nama']);
		$fakultas[] = $row['Fakultas'];
		$jurusan[] = $row['Jurusan'];
		$nim[] = $row['NIM'];
	} 
	
	function avg($v1,$v2) {
		$avg = $v1/$v2;
		return $avg;
	}

	$max = mysqli_query($db,'SELECT max(No) FROM ipk');
	
	//rata-tara
	for ($i=0;$i<19;$i++) {
		if ($fakultas[$i] == 'STEI') {			// misahin yang STEI
			$sumstei = $sumstei + $datay[$i];
			$stei = $stei +1;
		} else if ($fakultas[$i] == 'FTI') { 	// misahin yang FTI
			$sumfti = $sumfti + $datay[$i];
			$fti = $fti + 1;
		} else if ($fakultas[$i] == 'FITB') {	// misahin yang FITB
			$sumfitb = $sumfitb + $datay[$i];
			$fitb = $fitb + 1;
		} else if ($fakultas[$i] == 'FTTM') {	//misahin yang FTTM
			$sumfttm = $sumfttm + $datay[$i];
			$fttm = $fttm + 1;
		} else if ($fakultas[$i] == 'SF') {		//misahin yang SF
			$sumsf = $sumsf + $datay[$i];
			$sf = $sf + 1;
		} else if ($fakultas[$i] == 'SAPPK') { 	//misahin yang SAPPK
			$sumsappk = $sumsappk + $datay[$i];
			$sappk = $sappk + 1;
		} else if ($fakultas[$i] == 'FTSL') { 	//misahin yang FTSL
			$sumftsl = $sumftsl + $datay[$i];
			$ftsl = $ftsl + 1;
		} else if ($fakultas[$i] == 'FSRD') { 	//misahin yang FSRD
			$sumfsrd = $sumfsrd + $datay[$i];
			$fsrd = $fsrd + 1;
		} else if ($fakultas[$i] == 'FMIPA') { 	//misahin yang FMIPA
			$sumfmipa = $sumfmipa + $datay[$i];
			$fmipa = $fmipa + 1;
		} else if ($fakultas[$i] == 'SBM') { 	//misahin yang SBM
			$sumsbm = $sumsbm + $datay[$i];
			$sbm = $sbm + 1;
		} else if ($fakultas[$i] == 'SITH') {	//misahin yang SITH
			$sumsith = $sumsith + $datay[$i];
			$sith = $sith + 1;
		}
	}
	
	$datax2 = array('STEI', 'FTI', 'FITB', 'FTTM', 'SF', 'SAPPK', 'FTSL', 'FSRD', 'FMIPA', 'SBM', 'SITH');
	
	$xa = array(avg($sumstei,$stei), avg($sumfti,$fti), avg($sumfmipa,$fmipa), avg($sumftsl,$ftsl), avg($sumfttm,$fttm), avg($sumsbm,$sbm), avg($sumfsrd,$fsrd), avg($sumfitb,$fitb), avg($sumsappk,$sappk), avg($sumsf,$sf), avg($sumsith,$sith)) ;
	// Graph Settings 
	$graph = new Graph(1024,768);//,"auto"); 
	$graph->SetScale('textlin', 0.000, 4.000);//, 0, 0, 0, 0); 
	$graph->img->SetMargin(50,30,50,50); 
	$graph->SetShadow();
	
	$graph->title->Set("Rata-rata IPK tiap Fakultas");
	
	$graph->xaxis->SetTickLabels($datax2); 
	$bplot = new BarPlot($xa);
	  
	$bplot->value->Show();
	$bplot->value->SetFont(FF_ARIAL,FS_BOLD);
	$bplot->value->SetAngle(45);
	$bplot->SetLegend("Banyak data");
	$graph->xaxis->SetTickLabels($datax2); 
	$graph->Add($bplot);
	
	$gdImgHandler = $graph->Stroke(_IMG_HANDLER);
 	 
	// Default is PNG so use ".png" as suffix
	$fileName = "file.png";
	$graph->img->Stream($fileName);
	 
	// Send it back to browser
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
