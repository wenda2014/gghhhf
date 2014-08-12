
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?
$siji=$_POST['r1'];
$loro=$_POST['r2'];

if ($siji=="Soekarno")
{$nilai1=5;}
else
{$nilai1=0;}

if ($loro=="Jakarta")
{$nilai2=5;}
else
{$nilai2=0;}

$totalnilai=$nilai1+$nilai2;
if ($totalnilai==10)
{$grade='PINTER';}
else if ($totalnilai==5)
{$grade='SEDANG-SEDANG SAJA';}
else
{$grade='GOBLOG BANGET';}
echo"Nilai Anda adalah : $totalnilai dan Anda masuk kategori : $grade ";

?>


</body>
</html>
