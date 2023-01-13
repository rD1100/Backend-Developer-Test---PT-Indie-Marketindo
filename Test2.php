<?php

/*
# Test PHP - Web Developer #

Task :
1. Isikan proses di dalam fungsi mergeSortArray() untuk menyatukan array int a dan array int b. Lalu setelah itu di sort secara ascending.
2. Isikan proses di dalam fungsi getMissingData() untuk mencari integer yang hilang berdasarkan pola angka dari hasil fungsi mergeSortArray().
3. Isikan proses di dalam fungsi insertMissingData() untuk memasukkan integer yang hilang dari hasil fungsi getMissingData() ke dalam array hasil fungsi mergeSortArray().
4. Hasil yang diharapkan adalah pola angka yang tersusun tanpa ada integer yang hilang.

Syarat :
1. Tidak menggunakan fungsi bawaan PHP seperti 
	a. array_merge()
	b. array_push()
	c. asort()
	d. dsb.
2. Kerjakan menggunakan logic pemograman anda sendiri

Selamat Mengerjakan
*/

class Test{
	function mergeSortArray($a,$b){
		// <YOUR CODE HERE>]
		$a[]=($b);
		//ascending
		for ($i = 0; $i <count($a); $i++) {
			for ($j = $i + 1; $j <count($a); $j++) {
				if ($a[$i] > $a[$j]) {
					$temp = $a[$i];
					$a[$i] = $a[$j];
					$a[$j] = $temp;
				}
			}
		}
		return $a;
		
	}

	function getMissingData($c){
		// <YOUR CODE HERE>
		$arrayMissing=$c[5];	
	return $arrayMissing;
		
	}
	function insertMissingData($c, $i){
		// <YOUR CODE HERE>
		$c[5]=$i[0];
		$c[6]=$i[1];
		$c[7]=$i[2];
		$c[8]=$i[3];
	return $c;

	}
	public function main(){
		$a = array(11, 36, 65, 135, 98);
		$b = array();
		$b[0] = 81;
		$b[1] = 23;
		$b[2] = 50;
		$b[3] = 155;

		
		$c = $this->mergeSortArray($a, $b);
		$i = $this->getMissingData($c);
		$d = $this->insertMissingData($c, $i);


		
		for ($x=0; $x < count($d); $x++){
			echo $d[$x]." ";			
		}
	}
}

$t = new Test();
$t->main();

?>