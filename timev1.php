,<?php
//coded by Syahrul R.
system("clear");
echo "----------------------------\n";
echo "|- Tools name : KnowDays   |\n";
echo "|- Author     : Syahrul R. |\n";
echo "|- version    : 1.1        |\n";
echo "----------------------------\n";
echo "Support by : https://bocah-programmer.xyz\n";
echo "\nMenu :\n";
echo "1. Know the day of birth from the date of birth\n";
echo "2. Know the day ahead\n";
echo "3. Know the day back\n";
echo "4. Know the Difference of days\n";
echo "Input your choice :";
$pilih = trim(fgets(STDIN));

if ($pilih == 1) {
echo "\nNote: Enter only with numbers.!\n\n";
echo "Enter your date of birth : ";
$tanggal = trim(fgets(STDIN));
echo "Enter the month of birth : ";
$bulan = trim(fgets(STDIN));
echo "Enter year of birth : ";
$tahun = trim(fgets(STDIN));
echo "-------------------------\n";
echo "Date  : $tanggal $bulan $tahun\n";
echo "Day : ". date('l', mktime(0,0,0,$bulan,$tanggal,$tahun))."\n";
echo "-------------------------\n";
}
else if ($pilih == 2) {
echo "\nNote: Enter only with numbers.!\n\n";
echo "Input day : ";
$day = trim(fgets(STDIN));
echo "-------------------------\n";
echo "$day the day ahead is the day : " . date('l', time()+60*60*24*$day)."\n";
echo "-------------------------\n";
}
else if ($pilih == 3) {
echo "\nNote: Enter only with numbers.!\n\n";
echo "Input the day : ";
$day = trim(fgets(STDIN));
echo "-------------------------\n";
echo "$day backward days are : " . date('l' , time()-60*60*24*$day)."\n";
echo "-------------------------\n";
}
else if ($pilih == 4) {
echo "ex : ".date("d-m-20y")."\n";
echo "Input first date : ";
$input1 = trim(fgets(STDIN));
echo "Input second date : ";
$input2 = trim(fgets(STDIN));

$tgl1 = New DateTime("$input1");
$tgl2 = New DateTime("$input2");
$hasil = $tgl1->diff($tgl2)->days;
echo "-----------------------\n";
echo "Difference days from $input1 to $input2\n";
echo "Result : ".$hasil." day\n";
echo "-----------------------\n";
}
else {
echo "Your Input Not Valid\n";
}
?>
