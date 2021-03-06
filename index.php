<?php 
	if(isset($_POST['submit'])) {
		$from = $_POST['email'];
		$to = 'teste@teste.com.br';
		$subject = 'Email signup';
		$body = 'Please, sign me u to the mailing list.';

		if($_POST['email']) {
			$emailError = "<div class="text-danger">Please, enter your email</div>";
		}

		if(!$emailError){
			if(mail ($to, $subject, $from)) {
				$result = 'thank you, we will keep you update'
			} else {
				$result = "sorry, there has been a error, please try again."
			}

		}
	}
	
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="fontawesome/css/fontawesome.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>
 
	<section id="logo">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<img src="img/my-logo.png" class="img-fluid" />
				</div>
			</div>		
		</div>
	</section>
	
	<section id="intro">
		<div class="container">
			<div class="row">	
				<div class="col-md-12 text-center">
					<p> We're working hard and we'll launch in... </p>				
				</div>			
			</div>		
		</div>	
	</section>
	
	<section id="counter">
		<div class="container">
			<div class="row">	
				<div class="col-md-12 text-center">
					<div class="countdown" />			
				</div>			
			</div>		
		</div>	
	</section>
	
	<section id="icons">
		<div class="container">
			<div class="row">	
				<div class="col-md-12 text-center">
				<ul class="list-inline">
					<a href="#" target="_blank"><li class="list-inline-item"><i class="fab fa-twitter-square fa-3x twitter" ></i></li></a>
					<a href="#" target="_blank"><li class="list-inline-item"><i class="fab fa-facebook-square fa-3x facebook" ></i></li></a>
					<a href="#" target="_blank"><li class="list-inline-item"><i class="fab fa-google-plus-square fa-3x google-plus" ></i></li></a>
					<a href="#" target="_blank"><li class="list-inline-item"><i class="fab fa-instagram fa-3x instagram" ></i></li></a>
				</ul>
				</div>			
			</div>		
		</div>	
	</section>
	
	<section id="signup">
		<div class="container">
			<div class="row">	
				<div class="col-md-12 text-center">
					<form class="form-inline" role="form" method="post" action="#signup">
						<input type="email" class="form-control form-control-sm" name="email" placeholder="Enter your email" />
						<button type="submit" class="btn btn-signup btn-sm" name="submit" value="send">Find out more</button>
					</form>					
					<?php echo $emailError ;?>
					<?php echo $result ;?>
				</div>			
			</div>		
		</div>	
	</section>
	
	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.countdown.js"></script>
	
	<script>
		$(function() {
			$('.countdown').countdown({
				date: "December 13, 2018 15:03:26"
			});
		});
	</script>
  </body>
</html>