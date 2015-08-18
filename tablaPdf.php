<?php

include("sources/mpdf60/mpdf.php");
$mpdf=new mPDF('win-1252','A4','','',20,15,48,25,10,10);
$mpdf->useOnlyCoreFonts = true;    // false is default
$mpdf->SetProtection(array('print'));
$mpdf->SetTitle("Acme Trading Co. - Invoice");
$mpdf->SetAuthor("Acme Trading Co.");

$mpdf->showWatermarkText = true;
$mpdf->WriteHTML('<watermarkimage src="mdaImagen.jpg" alpha="0.4" size="200,250" />');
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->watermarkTextAlpha = 0.1;
$mpdf->SetDisplayMode('fullpage');

$html = '
<html>
<head>
<style>

td { vertical-align: top; }
.items td {
    border-left: 0.1mm solid #000000;
    border-right: 0.1mm solid #000000;
}
table thead td { background-color: #EEEEEE;
    text-align: center;
    border: 0.1mm solid #000000;
}





.items td.blanktotal {
    background-color: #FFFFFF;
    border: 0mm none #000000;
    border-top: 0.1mm solid #000000;
    border-right: 0.1mm solid #000000;
}
.items td.totals {
    text-align: right;
    border: 0.1mm solid #000000;
}
</style>
</head>
<body>

<!--mpdf



mpdf-->



<table class="items" width="100%" border="1" cellpadding="10" cellspacing="0" bordercolor="#000000">

<thead>
<tr>
<td width="32.5"><b>CIUDADANO</b></td>
<td width="67.5%"><b>ASUNTO</b></td>
</tr>
</thead>
<tbody>
<!-- ITEMS HERE -->
<tr>
<td align="left">MF1234567</td>
<td align="justify">jklñlkjhgf</td>
</tr>
</tbody>
</table>
</body>
</html>
';

$mpdf->WriteHTML($html);

$mpdf->Output(); exit;

exit;

?>