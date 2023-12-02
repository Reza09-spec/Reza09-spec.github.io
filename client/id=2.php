<?php
include "../inc/connection.php";
require_once "../plugins/dompdf/autoload.inc.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"SELECT * FROM tb_client WHERE id='2'");
$html = '<hr/><br/>';
$html .= '<table class="table" border="0" width="100%" style="border-collapse: collapse; margin-bottom: 15px;">
<thead style="background-color: #031631; color: white;">
  <tr>
    <th style="padding:0.50rem; text-align: center; font-family: Helvetica; font-size: 14px;">Certificate Code</th>
    <th style="padding:0.50rem; text-align: center; font-family: Helvetica; font-size: 14px;">Training Name</th>
    <th style="padding:0.50rem; text-align: center; font-family: Helvetica; font-size: 14px;">Date</th>
    <th style="padding:0.50rem; text-align: center; font-family: Helvetica; font-size: 14px;">Accreditation Name</th>  
  </tr>
</thead>
<tbody>';
while($row = mysqli_fetch_array($query))
{
$html .= '<tr>
 <td style="padding:1rem; font-family: Helvetica; font-size: 13px;">'.$row['certificate_code'].'</td>
 <td style="padding:1rem; font-family: Helvetica; font-size: 13px;">'.$row['training_name'].'</td>
 <td style="padding:1rem; font-family: Helvetica; font-size: 13px;">'.$row['date'].'</td>
 <td style="padding:1rem; font-family: Helvetica; font-size: 13px;">'.$row['acc_name'].'</td>
</tr>
</tbody>
</table>
<table class="table" border="0" width="100%" style="border-collapse: collapse; margin-bottom: 15px;">
<thead style=" background-color: #031631; color: white;">
  <tr>
    <th style="padding:0.50rem; text-align: center; font-family: Helvetica; font-size: 14px;">Agency Name</th>
    <th style="padding:0.50rem; text-align: center; font-family: Helvetica; font-size: 14px;">Participant Name</th>
  </tr>
</thead>
<tbody><tr>
    <td style="padding:1rem; text-align: center; font-family: Helvetica; font-size: 13px;">'.$row['agency_name'].'</td>
    <td style="padding:1rem; font-family: Helvetica; font-size: 13px;">
        01. NOFRONAL<br/>
        02. IZNILLAH<br/>
        03. FITRI MARDIYAH<br/>
        04. MARYANTO<br/>
        05. FUAD HASAN<br/>
        06. KUSUMA HADI PRIANTO<br/>
        07. HARIAWAN<br/>
        08. TEDY SURIANTO<br/>
        09. HERMAWAN<br/>
        10. ADITYA MAHENDRA<br/>
        11. ZULFIKAR<br/>
        12. FAHMI ROMADHON<br/>
        13. DEDE SYAEFUDIN<br/>
        14. YANUARTO SETIADY<br/>
        15. EDI SUWANTO<br/>
        16. SYURJI<br/>
        17. M MUKSIN<br/>
        18. ARIEF BUDIMAN<br/>
        19. AHMAD KOMAR<br/>
        20. AGUS PUDJIANO<br/>
        21. RUSLAN<br/>
        22. ARIYANTO<br/>
        23. NURHAYADI<br/>
        24. DWI NURDIN MUARIF
    </td>
  </tr>';
}
$html .= '
</tbody>
</table>
<hr/>';
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('LGSCERT ACADEMY Training.pdf');
?>