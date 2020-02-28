<?php
$myfile = fopen("datafile.txt", "w") or die("Unable to open datafile.txt for writing !");
$txt = "First line in the data file.\n";
fwrite($myfile, $txt);
$txt = "Second line in the data file.\n";
fwrite($myfile, $txt);
fclose($myfile);
echo  "datafile.txt created. <br>";
?>
