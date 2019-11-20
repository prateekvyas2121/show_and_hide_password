<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Submit form using ajax</title>
  </head>
  <body>
<div class="container" style="margin-top: 10%;" >
	<h2 align="center" >LOGIN Form</h2>
	<div style="margin-left: 24%;" class="row">
		<div  class="col-md-8 card">
		<!-- BOOTSTRAP FORM START -->
		    <form id="login_form" method="post" > 
			  <div class="form-group row">
			    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
			    <div class="col-sm-10">
			      <input type="text"  class="form-control" id="staticEmail" value="">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
			    </div>
			  </div>
			  <div class="form-group row">
			  	<div class="col-sm-10">
				    <button class="btn btn-success" id="show_password" type="submit">
				    	Show Password
				    </button>
				</div>
			  </div>
			</form>
		<!-- BOOTSTRAP FORM END  -->
		</div>

	</div>
</div>

    <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$("#show_password").click(function (e) {
			e.preventDefault();
			// alert("hi");
			var password = $("#inputPassword");
			// alert(password)
			var pwd_field_type = password.attr('type');
			// alert(pwd_field_type);
			if (pwd_field_type=='password') {
				$("#inputPassword").prop('type','text');
				// alert("working fine")
				$(this).text("Hide")
			}
			else{
				$("#inputPassword").prop('type','password');
				// alert("working fine")
				$(this).text("Show")
			}

		})
	});
</script>

  </body>
</html>