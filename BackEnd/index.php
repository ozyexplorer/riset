<?php
session_start();
if ( isset($_SESSION['username'])) {

 ?>
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

			<h1>Daftar Pelajaran</h1>
			<dialog open>
				ini website tutorial ngoding
			</dialog>

			<section>
				<figure>
					<img src="assets/img/html.png" height="100" width="100">
					<figcaption>HTML untuk pemula</figcaption>
					<details open>
						<summary>
							Info selengkapnya
						</summary>
						<p>HTML adalah kepanjangan dari Hypertext Markup Language dan merupakan salah satu bahasa yang paling banyak digunakan dalam mebuat halaman web.</p>
						<fieldset>
							<legend>Ini adalah video HTML5</legend>
						<video height="300" width="700" controls poster="assets/img/html.png" >
							<source src="assets/media/intro.mp4" type="video/mp4">
							browser anda tidak mendukung
						</video>
						</fieldset>
					</details>
				</figure>
			</section>

			<section>
				<figure>
					<img src="assets/img/css.png" height="100" width="120">
					<figcaption>CSS untuk pemula</figcaption>
					<details>
						<summary>
							Info selengkapnya
						</summary>
						<p>Dalam bahasa bakunya, seperti di kutip dari wikipedia, CSS adalah “kumpulan kode yang digunakan untuk mendefenisikan desain dari bahasa markup” , dimana bahasa markup ini salah satunya adalah HTML.</p>
					</details>
				</figure>
			</section>

			<section>
				<figure>
					<img src="assets/img/js.png" height="100" width="100">
					<figcaption>Javascript untuk pemula</figcaption>
					<details>
						<summary>
							Info selengkapnya
						</summary>
						<p>JavaScript adalah bahasa pemrograman tingkat tinggi dan dinamis. JavaScript populer di internet dan dapat bekerja di sebagian besar penjelajah web populer seperti Internet Explorer, Mozilla Firefox, Netscape dan Opera. Wikipedia</p>
					</details>
				</figure>
			</section>
		</article>
	</main>


  <?php
  include_once('template/aside.php');
  require 'template/footer.php'; ?>

	</body>
</html>
<?php
}else{
	header('Location:login.php');
	// echo "Login dulu gan";
	// echo "<a href='login.php'></a>";
}
