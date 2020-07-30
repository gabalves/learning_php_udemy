 <?php
$myfile = fopen("mylalafile.txt", "w") or die("Unable to open file!");
$txt = "This my lala file\n";
fwrite($lalafile, $txt);
$txt = "This my lala file\n";
fwrite($lalafile, $txt);f
fclose($lalafile);
?> 