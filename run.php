<?php
// Untuk enkripsi text ke dalam hash md5 saja
// Cocok untuk membuat sebuah password

function Main(){
	system("clear");
	echo " T E X T to M D 5\n";
	echo "------------------\n";
	echo "  @maestroal.dev\n\n";
	echo "Note: Masukkan kata yang ingin di enkripsi.\n";
	echo "@enc >> ";
	$kata = trim(fgets(STDIN));
	echo "\nEnkripsi";
	for($i=0;$i<=4;$i++){
		print ".";
		sleep(1);
	}
	print "berhasil";
	echo "\n\n[*] Text : $kata";
	echo "\n[*] MD5  : ",md5($kata);
	echo "\n\n";
}

Main();
?>
