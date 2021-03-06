<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Main | Top Site</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" href="icon.png" type="image/x-icon"/>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-white">
	  <a class="navbar-brand text-dark font-weight-bold" href="index.php"><img src="icon.png" width="35" height="35"> Top Site</a>
	  <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link text-dark font-weight-bold" href="index.php">Main<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link text-dark" href="about.php">About</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Contacts
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Link 1</a>
	          <a class="dropdown-item" href="#">Link 2</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Link 3</a>
	        </div>
	      </li>
	    </ul>
	    <button type="button" class="btn btn-outline-danger mr-2 my-sm-0" data-toggle="modal" data-target="#sign_up">Sign Up</button>
	    <button type="button" class="btn btn-outline-primary mr-5 my-sm-0" data-toggle="modal" data-target="#sign_in">Sign In</button>

<!--Начало модального окна (Рег.)-->
<div class="modal fade" id="sign_up" tabindex="-1" role="dialog" aria-labelledby="sign_upLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sign_upLabel">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  <form action="check.php" method="post">
        Email
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="modal-body">
        Password
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="modal-footer">
        <button name="btn-sign" type="submit" class="btn btn-success">Sign Up</button>
      </div>
		</form>
    </div>
  </div>
</div>
<!--Конец модального окна-->

<!--Начало модального окна (Вход)-->
<div class="modal fade" id="sign_in" tabindex="-1" role="dialog" aria-labelledby="sign_inLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sign_inLabel">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <form action="login.php" method="post">
                Email
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="modal-body">
            Password
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Restore password</button>
          <button name="btn-login" type="submit" class="btn btn-success">Sign In</button>
      </div>
    </div>
  </div>
</div>
<!--Конец модального окна-->


<!--Начало формы поиска-->
        <form_search class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        </form_search>
<!--Конец формы поиска-->

      </div>
    </nav>

<!--Начало Jumbotron-->
<div class="jumbotron">
      <div class="jumbotron text-center">
  <h1 class="font-weight-bold">About</h1>
      </div>
   </div>
<!--Конец Jumbotron-->
    
<!--Начало контента-->
    <div class="container-fluid my-2">
        <div class="row">
            <div class="col-sm-8">
                <div class="row my-2">
                    <div class="col">
                        <div class="card mb-2 shadow-lg bg-white rounded">
                          <div class="card-body">
                            <p class="card-text">No description.</p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 my-2">
                <div class="card mb-2 shadow-lg bg-white rounded">
                  <div class="card-body">
                    <nav class="nav flex-column">
                      <a class="nav-link active" href="#">Link 1</a>
                      <a class="nav-link" href="#">Link 2</a>
                      <a class="nav-link" href="#">Link 3</a>
                    </nav>
                  </div>
                </div>
            </div>
        </div>
    </div>
<!--Конец контента-->

<!--Начало подвала-->
<div class="d-flex flex-column">
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>2020 &copy; Top Site</small>
    </div>
  </footer>
</div>
<!--Конец подвала-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>