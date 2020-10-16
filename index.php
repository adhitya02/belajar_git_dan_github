<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<style>
		* {
			margin: 0;
			padding: 0;
		}

		body {
			background-color: ghostwhite;
		}

		.container {
			margin: 50px;
		}

		ul li {
			list-style: none;
		}

		ul li a {
			text-decoration: none;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Digital Talent</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="data_pendaftaran.php">Data</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="jumbotron">
  <h1 class="display-4">Digital Talent</h1>
  <p class="lead">Pendaftaran Siswa Baru</p>
  <hr class="my-4">
  <a class="btn btn-primary btn-lg" href="daftar.php" role="button">Daftar sekarang</a>
</div>
</body>
</html>