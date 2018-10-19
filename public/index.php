<?php require "../bootstrap.php";?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!-------METAS------>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!------FMETAS------>
		<!-----Titulo------->
		<title>OOP</title>
		<!-----FTitulo------>
		<!-----CSS---------->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="assets/css/app.css">
		<!-----FCSS--------->
	</head>
	<body class="bg-secondary">
		<!---- HEADERS ------->
		<header class="mb-3">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="/">
					<img src="./assets/images/logo.png"  width="150"  alt="POO AGAIN">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="/?pages=home">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/?pages=contato">Contato</a>
						</li>
					</ul>
					<div>
						<form class="form-inline" method="post" action="/?forms=login">
							<div class="input-group input-group-sm mr-sm-1">
								<div class="input-group-prepend ">
									<span class="input-group-text " id="basic-addon1">@</span>
								</div>
								<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username">
							</div>
							<div class="input-group input-group-sm mr-sm-1">
								<div class="input-group-prepend ">
									<span class="input-group-text" id="basic-addo2">*</span>
								</div>
								<input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password">
							</div>
							<button class="btn btn-success btn-sm mr-sm-1" type="submit">Login</button>
							<a class="btn btn-outline-success btn-sm mr-sm-1" href="/?forms=singup">SING UP</a>
							
						</form>
					</div>
				</div>
			</nav>
		</header>
		<!---- FHEADERS------->
		<!----Div Pages------->
		<div class="container bg-white rounded border shadow-lg">
			<?php
			try {
				require load(); // le as pages
			} catch (Exception $e) {
				echo $e->getMessage(); //se não funcionar retorna erro!  sem informar erro no codigo tal
			}
			?>
		</div>
		<!---FDIV Pages----->
		<!-------JS--------->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="assets/js/app.js" type="text/javascript"></script>
		<!-------FJS-------->
	</body>
</html>