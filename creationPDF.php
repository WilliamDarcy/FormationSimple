<?php
require_once 'dompdf/dompdf_config.inc.php';
include_once 'lib/connexion.php';
include 'dal/dbFormation.php';

EstConnecte();

//Creation d'un PDF
$formations = RechercheToutesFormations(ObtenirIdEnCours());

$html ='<html><body><meta charset=utf-8>';
$html .= '<style>body {color: red;}</style>';
$html .= '<div id="principal"><h2>Vos formations</h2><table>';
$html .= "<thead><tr><td>Titre</td><td class=\"date\">Date </td><td class=\"duree\">Durée</td></tr></thead>";
	
			foreach($formations as $uneFormation)
			{
				
				$html .= "<tr><td> $uneFormation->titre </td><td class='date'>$uneFormation->date </td><td class='duree'>$uneFormation->duree</td>";
			    $html .= '</td>';
				 
			}
		
	$html .= '</table>';
$html .= '</div>';
$html .= '</body></html>';

$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("sample.pdf");