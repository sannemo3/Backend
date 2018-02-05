<h3>php lab 02</h3>
<?php
$naam = "Karim";
$nederlands = "8.5";
$engels = "7.7";
$rekenen = "6.7";
$programmeren = "8.5";
$databases = "9.4";
$name = "Sophie";
$ned = "8.9";
$eng = "8.7";
$rek = "9.7";
$prog = "9.5";
$data = "9.2";
$som =  $ned + $eng + $rek + $prog + $data;
$som1 = $som /5;
$optelsom = $nederlands + $engels + $rekenen + $programmeren + $databases;
$optelsom1= $optelsom/5 ;
$gemiddelde = round ( $som1, 2);
$gemiddeld = round( $optelsom1, 2);
$gemiddeldegroep = ($gemiddelde + $gemiddeld) /2;

echo <<<text
<table border= '1'>
<caption>
<strong>Rapport</strong>
</caption>
<thead>
<tr><th>Naam</th><th>Nederlands</th><th>Engels</th><th>Rekenen</th><th>Programmeren</th><th>Databases</th><th>Gemiddeld</th></tr>
</thead>
<tbody>
<tr>
<td>$naam</td>
<td>$nederlands</td>
<td>$engels</td>
<td>$rekenen</td>
<td>$programmeren</td>
<td>$databases</td>
<td>$gemiddeld</td>
</tr>
</tbody>
<tbody>
<tr>
<td>$name</td>
<td>$ned</td>
<td>$eng</td>
<td>$rek</td>
<td>$prog</td>
<td>$data</td>
<td>$gemiddelde</td>
</tr>
</tbody>
<tfoot>
<tr><td colspan='6'>Groep gemiddeld</td>
<td>$gemiddeldegroep</td></tr>
</tfoot>
</table>
text;
?>