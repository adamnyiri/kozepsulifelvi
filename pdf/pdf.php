<?php

try {

	
	$dbh = new PDO('mysql:host=localhost;dbname=kozepfelvi', 'kozepfelvi', 'beadando123,',
				array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
   
	$sql = "SELECT jelentkezo.nev, kepzes.nev as 'kepzes', jelentkezes.sorrend, jelentkezes.szerzett from jelentkezes inner join jelentkezo on jelentkezes.jelentkezoid=jelentkezo.id inner join kepzes on kepzes.id = jelentkezes.kepzesid";     
	$sth = $dbh->query($sql);
	$rows = $sth->fetchAll(PDO::FETCH_ASSOC);
}
	catch (PDOException $e) {
	echo "Hiba: ".$e->getMessage();
}


require_once('tcpdf/tcpdf.php');


$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nyiri Ádám E9TTLG');
$pdf->SetTitle('Felvételi Pontszámok');
$pdf->SetSubject('Pontszám export');
$pdf->SetKeywords('TCPDF, PDF, felveteli pontszamok');
$pdf->SetHeaderData("nje.png", 25, "Pontszámok", "Nyíri Ádám (E9TTLG)\nLétrehozva:\n".date('Y.m.d',time()));
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->SetFont('helvetica', '', 10);
$pdf->AddPage();

// create the HTML content
$html  = '
<html>
	<head>
		<style>
			table {border-collapse: collapse;}
			th {font-weight: border: 1px solid red; text-align: center;}
			td {border: 1px solid blue;}
		</style>
	</head>
	<body>
		<h1 style="text-align: center; color: blue;">Középiskolai felvélteli pontszámok</h1>
		<table>
			<tr style="background-color: red; color: white;">
			<th >&nbsp;<br>Jelentkezö neve</th>
			<th >&nbsp;<br>Képzés neve</th>
			<th >&nbsp;<br>Sorrend</th>
			<th >&nbsp;<br>Szerzett pontszám</th>            
			</tr>
';
			$i=1;
foreach($rows as $row) {
	if($i)
		$html .= '
			<tr style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 255);">
		';
	else					
		$html .= '
			<tr style="background-color: rgb(0, 0, 255); color: rgb(255, 255, 255);">
		';
	$j=0;
	foreach($row as $cell) {
		if($j==0)
			$html .= '
				<td style="text-align: right;">
			';
		else if($j < 4)
			$html .= '
				<td style="text-align: left;">
			';
		else if($j == 4)
			$html .= '
				<td style="text-align: left;">
			';
		$html .= $cell;
		$html .= '
				</td>
		';
		$j++;
	}
	$html .= '
			</tr>
	';
	$i = !$i;
}
$html .= '
		</table>
	<body>
</html>';

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('pontszam.pdf', 'I');



