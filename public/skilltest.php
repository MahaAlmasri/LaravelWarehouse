<?php
function Save()
{
$infile=fopen("input.txt","r");
$outfile = fopen("output.txt", "w");
while(!feof($infile)) {
    $txt=fgets($infile) ;
fwrite($outfile, $txt);
}
fclose($outfile);
fclose($infile);

echo "compleet";
}




?>

<html>
<head>
</head>
<body>
    <button onclick="Save()"> click Me </button>
</body>    


</html>
