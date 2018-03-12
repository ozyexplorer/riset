<?php
//variabel
//tipe data string
$x = "Ini Riset Saya<br>";
//tipe data integer
$angka = "1000";
$angka2 = 100;
//tipe data float
$angka3 = 2.8;

/*Mencetak Nilai*/
//ForLoop
echo "*For Loop<br>";
for ($i=1; $i < 5 ; $i++){
  echo $x;
}

//Foreach
echo "<br><br>*Foreach Array<br>";
$hewan = ['Anjing', 'Sapi', 'Kuda'];
foreach($hewan as $listhewan){
  echo $listhewan."<br>";
}

//Foreach Associative
echo "<br><br>*Foreach Array Assosiative<br>";
$data = array('Nama' => 'Fata Hasan',
              'Umur' => 20,
        );
foreach($data as $listhewan => $isi){
  echo $listhewan." = ". $isi. "<br>";
}

//While Do and Do While
echo "<br><br>*While Do<br>";
$i = 0;
while($i < count($hewan)){
  echo $hewan[$i]."<br>";
  $i++;
}

echo "<br><br>*Do While<br>";
$i = 0;
do {
  echo $hewan[$i]."<br>";
  $i++;
} while ($i < count($hewan));

//Percabanagan
echo "<br><br>*Percabangan<br>";
$nilai = 78;

//== != < > <= >=

if($nilai<=100 && $nilai >=80){
  echo "Indeks Nilai Anda A<br>";
  if($nilai>=90){
    echo "Anda Mendapatkan Sertifikat Gaes";
  }
}elseif ($nilai<=79 && $nilai >=69){
  echo "Indeks Nilai Anda B";
}elseif ($nilai<=68 && $nilai >=59){
  echo "Indeks Nilai Anda C";
}elseif ($nilai<=58 && $nilai >=40){
  echo "Indeks Nilai Anda D";
}elseif ($nilai<=39 && $nilai >=0){
  echo "Indeks Nilai Anda E";
}else{
  echo "Anda Salah memasukkan Nilai";
}

echo "<br><br>";
//Switch
switch ($nilai) {
  case $nilai<=100 && $nilai >=80:
    echo "Indeks Nilai Anda A<br>";
    if($nilai>=90){
      echo "Anda Mendapatkan Sertifikat Gaes";
    }
    break;
  case $nilai<=79 && $nilai >=69:
    echo "Indeks Nilai Anda B";
    break;
  case $nilai<=68 && $nilai >=59:
    echo "Indeks Nilai Anda C";
    break;
  case $nilai<=58 && $nilai >=40:
    echo "Indeks Nilai Anda D";
    break;
  case $nilai<=39 && $nilai >=0:
    echo "Indeks Nilai Anda E";
    break;
  default:
    echo "Anda Salah memasukkan Nilai";
    break;
}
