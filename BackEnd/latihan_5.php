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

			<h1>Upload Gambar</h1>

			<section>
				<figure>
          <form class="gambar" action="" method="POST" enctype="multipart/form-data">
						<input type="file" name="gambar" >
						<input type="submit" name="submit" value="Upload">
          </form>
          <br>

          <?php
          //variabel
          if(isset($_POST['submit'])){
						$nama = $_FILES['gambar']['name'];
						$error = $_FILES['gambar']['error'];
						$size = $_FILES['gambar']['size'];
						$asal = $_FILES['gambar']['tmp_name'];
						$format = $_FILES['gambar']['type'];

						if ($error == 0) {
							if ($format == 'image/jpeg') {
								if ($size < 5000000) {
									move_uploaded_file($asal, 'gambar/'.$nama);
									echo "Gambar berhasil diupload";
								}else {
									echo "Gambar Maximal 5 MB";
								}
							}else {
								echo "Gambar harus format JPEG";
							}
						}else {
							echo "Error upload gambar";
						}
					}
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
