
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome - <?php echo $userRow['userName' ]; ?></title>
	<link rel="stylesheet" href="style/style.css">
		<!-- Bootstrap -->
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


	<nav class="mynav nav navbar-expand-lg  fixed-top text-light">
  <a class="navbar-brand text-light"  href="home.php">The Big Library</a>
  <ul class="justify-content-center navbar-nav collapse navbar-collapse" id="nav-bar">
    <li class="nav-item active">
      <a class="nav-link text-light"  href="home.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light" href="create.php">Create</a>
    </li>

    	           <li class="nav-item">Hi <?php echo $userRow['userName' ]; ?></li>
			<li class="nav-item">         
           <a  class="nav-link text-light" href="logout.php?logout">Sign Out</a></li>



 

  </ul>
</nav>


	
	
	
	
	<div id="hero">
		
	</div>
	<div id="container" class="container ml-6">
	<!-- 	<H1 class="text-center text-dark mb-2"> There you go!</H1> -->

