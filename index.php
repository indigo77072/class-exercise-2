<!DOCTYPE html>
<html lang="en">
<head>

  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body style="background-color:#b3ffd9">

<div class="jumbotron text-center" style="margin-bottom:0; background-color:#1affff;">
  <h1 style="color:white;">Indigo Emanuel</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">About ME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Favorite Class</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Least Favorite Class</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
     <div class="thumbnial"> <img src="indigoCruise.jpg" class="rounded-circle" width="150px" height="150px"/></div>
      <p>I'm cool. Ur not. Sorry not Sorry</p>
      <h3>My Favorite Sites</h3>
      <p>Here are a few of my favorite sites.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="https://www.w3schools.com/bootstrap/">W3schools</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.poptropica.com/">Poptropica</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.youtube.com/">Youtube</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="https://www.crunchyroll.com/videos/anime">CrunchyRoll</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Most Favorite Class</h2>

      <div class="thumbnial"> <img src="codingClass.jpg" class="" width="300px" height="200px" /> </div>
      <p>Coding Class</p>
      <p>I luv itt bc it is fun. yes</p>
      <br>
      <h2>Least Favorite Class</h2>
      <div class="thumbnial"> <img src="english.jpg" class="" width="300px" height="200px" /> </div>
      <p>English class</p>
      <p>Ion like it bc it borin</p>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0; background-color:#b3c6ff" >
  <p><strong>You made it to the bottom! </p>
</div>

</body>
</html>
