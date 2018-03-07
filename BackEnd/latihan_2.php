<?php
//variabel
//tipe data string
$x = "Ini Riset Saya<br>";
//tipe data integer
$angka = "1000";
$angka2 = "100";
//tipe data float
$angka3 = "2.8";

/*Mencetak Nilai*/
//Operator Matematik
// + - * / mod ++ --
echo "*Operator Matematik <br>";
$hasil = $angka - $angka2;
echo $hasil."<br>";
echo "Hasil setelah increment = ". $hasil++;
//Metode Math
// min max round
echo "<br><br>*Metode Math <br>";
echo "Hasil setelah diround = ". round($angka3);
//Metode String
// str_replace || str_repeat
echo "<br><br>*Metode String <br>";
echo "Text Asli : ". $x . "<br>";
echo str_repeat(str_replace("Saya", "Kami", $x), 10);

//Array
echo "<br><br>*Array <br>";
$kandang = array('Anjing', 'Sapi', 'Kuda');
$hewan = ['Anjing', 'Sapi', 'Kuda'];

print_r($kandang);
echo "<br>";
echo $kandang[0];

//Metode Array
echo "<br><br>*Metode Array <br>";
sort($hewan);
print_r($hewan);
echo "<br>";
echo "Jumlah Isi Array = ". count($hewan);

//Assosiactive Array
echo "<br><br>*Associative Array <br>";
$data = array('Nama' => 'Fata Hasan',
              'Umur' => 20,
        );
print_r($data);
echo "<br>";
echo "Umur ". $data['Nama']. " Adalah ". $data['Umur'];

//Metode Assosiactive Array
echo "<br><br>*Metode Associative Array <br>";
$data = array('Nama' => 'Fata Hasan',
              'Umur' => 20,
        );
print_r(array_keys($data));
echo "<br>";

//Multi dimensi Array
echo "<br><br>*Multi Dimensi Array <br>";
$data = array(
            array(1,2,3),
            array(4,5,6),
            array(7,8,9)
        );
for ($i=0; $i < 3; $i++) {
  for ($j=0; $j < 3; $j++) {
      echo $data[$i][$j];
      echo " ";
  }
  echo "<br>";
}
echo "<br>";

shuffle($data);
for ($i=0; $i < 3; $i++) {
  for ($j=0; $j < 3; $j++) {
      echo $data[$i][$j];
      echo " ";
  }
  echo "<br>";
}
