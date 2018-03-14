<!DOCTYPE html>
<html>
<head>
	<title>BELAJAR HTML</title>
	<meta charset="utf-8">
	<style type="text/css">
		body {
			font-family: verdana, sans-serif;
			font-size: 12px;
		}

		header, nav, main, aside, footer /*#header, #nav, #main-content, #sidebar-content, #footer*/ {
			border: 1px solid gray;
			margin: 5px;
			padding: 5px;
		}

		main/*#main-content*/ {
			float: left;
			width: 60%;
		}

		aside /*#sidebar-content*/ {
			float: left;
			width: 30%;
		}

		footer /*#footer*/ {
			clear: both;
		}

		header {
			background-color: #33ccff;
		}
	</style>
</head>
<body>

  <?php require_once 'template/header.php';
        include('template/navigation.php');
  ?>


	<main>
		<article>

			<h1>Hitung Volume Tabung</h1>

			<section>
				<figure>
          <form class="" action="" method="GET">
            <input type="text" name="jari" placeholder="Masukkan Jari-Jari">
            <input type="text" name="tinggi" placeholder="Masukkan Tinggi">
            <input type="submit" name="submit" value="Hitung">
          </form>
          <br>

          <?php
          //variabel
          if(isset($_GET['submit'])){
          $phi = 3.14;
          $jarijari = trim($_GET['jari']);
          $tinggi = strip_tags($_GET['tinggi']);
          /*Mencetak Nilai*/
          //Function
          function jarak()
          {
            return "<br>";
          }

          echo jarak();

          $cetakjarijari = function($jarijari)
          {
            echo "Jari-Jarinya : ". $jarijari;
          };

          $cetaktinggi = function($tinggi)
          {
            echo "Tingginya : ". $tinggi;
          };

          function hitung($r, $t)
          {
            global $phi;
            $hasil = $phi * $r * $r * $t;
            return $hasil;
          }
          $cetakjarijari($jarijari);
          echo jarak();
          $cetaktinggi($tinggi);
          echo jarak();
          echo "Volume Tabung Lingkaran Adalah ". hitung($jarijari, $tinggi);
        }
        ?>
				</figure>
			</section>

    <section>
            <h1>Implode</h1>
      <figure>

        <br>

        <?php
          $hewan = ['Anjing', 'Kuda', 'Sapi'];

          echo implode(' ', $hewan);
        ?>
      </figure>
      <h1>Explode</h1>
      <figure>

        <br>

        <?php
          $hewan = 'Anjing Kuda Sapi';
          print_r(explode(' ', $hewan));
        ?>
      </figure>
    </section>
    </article>
	</main>


  <?php
  include_once('template/aside.php');
  require 'template/footer.php'; ?>
	</body>
</html>
