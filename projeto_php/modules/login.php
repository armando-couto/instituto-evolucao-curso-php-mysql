<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login do Sistema</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="../public/css/signin.css">
</head>
<body>
	<?php if ( isset($_GET['errors']) && !empty($_GET['errors'])) :?>
		<?php foreach ($_GET['errors'] as $error): ?>
			<div class="alert alert-info" role="alert" style="width: 500px;">
				<strong>Ops!</strong>
				<?php echo $error; ?>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>

	<div class="container">
      <form action="../library/logar.php" method="post" class="form-signin" role="form">
        <h2 class="form-signin-heading">Sistema de PHP</h2>
        <input type="text" name="email" class="form-control" placeholder="Email" required autofocus />
        <input type="password" name="password" placeholder="Senha" class="form-control" required />
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Relembre
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Logar</button>
      </form>	
	</div>
</body>
</html>