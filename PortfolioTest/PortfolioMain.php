<?php


$conn = mysqli_connect("localhost", "myuser", "mypass", "mydb");



// Check connection

if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}
?>

<!DOCTYPE html>
<head>
  <title>My Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel= "stylesheet" type="text/css" href= "style.css" />
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
   
            
           

            
        
            <div class="container-fluid px-0 ">
                <div class="top">
                    <nav class="navbar navbar-expand-md">
                  
                        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="main-navigation">
                          <ul class="navbar-nav">
                            
                            <li class="nav-item">
                              <a class="nav-link" href="#about">About Me</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#skills">Skills</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#projects">Projects</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#contact">Contact</a>
                            </li>
                          
</li>
                          </ul>
                        </div>
                      </nav>

                      <div class="titleT">
                      <h1>Pui Li Lee</h1>
                      <br> </br>
  <p>Software Development Student</p>
</div>



                </div>


                <div class="bottom" id="about">
                
              
                <div class="row">
                <div class="col-sm">
                    <img src="20201130_173001.jpg " class="img-thumbnail"  >
                    
                  </div>
                  
                  <div class="col-sm">
                  <br>
                  </br>
                    <h4 class="feature-title">About me </h4>
            <p>        </p>
                  <p>Hi! I'm Pui Li Lee </p>
                  <p>I'm currently a student studying Master of Software Development in Victoria University of Wellington.</p>
                  <p>You're welcome to view my past projects in my portfolio website down below or <a href= "https://gitlab.ecs.vuw.ac.nz/leepui" > Gitlab! </a> </p>
                 <br>
                 </br>
                 
                  <h5 class="feature-title">Personal Interest </h5>
                  <p>
                  </p>
                  <p> Travel, playing musical instruments, and learning new stuffs (currently interested in learning new simple cooking recipe!)</p>

</div>
                </div> 
                </div>

                <div class="bottom2" id="skills">
                <div class="row justify-content-center">

                <h5 class="feature-title"> Technical Skills </h5>
                
                <br> </br>

                
                
                
            

</div>

<div class="col-md-6" style="width:700px">

<p> Java  </p>


<div class="progress" >
  <div class="progress-bar" role="progressbar" aria-valuenow="80"
  aria-valuemin="0" aria-valuemax="100" style="width:80%">
    80%
  </div>
</div>

<p> JavaFX  </p>

<div class="progress" >
  <div class="progress-bar" role="progressbar" aria-valuenow="80"
  aria-valuemin="0" aria-valuemax="100" style="width:70%">
    70%
  </div>
</div>

<p> MYSQL  </p>
<div class="progress" >
  <div class="progress-bar" role="progressbar" aria-valuenow="80"
  aria-valuemin="0" aria-valuemax="100" style="width:50%">
    50%
  </div>
</div>

<p>HTML </p>
<div class="progress" >
<div class="progress-bar" role="progressbar" aria-valuenow="80"
  aria-valuemin="0" aria-valuemax="100" style="width:80%">
    80%
  </div>
</div>

<p>JavaScript </p>
<div class="progress" >
<div class="progress-bar" role="progressbar" aria-valuenow="80"
  aria-valuemin="0" aria-valuemax="100" style="width:50%">
    50%
  </div>
</div>

<p>PHP </p>
<div class="progress" >
<div class="progress-bar" role="progressbar" aria-valuenow="80"
  aria-valuemin="0" aria-valuemax="100" style="width:70%">
    70%
  </div>
</div>

<p>Bootstrap  </p>
<div class="progress" >
<div class="progress-bar" role="progressbar" aria-valuenow="80"
  aria-valuemin="0" aria-valuemax="100" style="width:70%">
    70%
  </div>
</div>

<p>Android </p>
<div class="progress" >
<div class="progress-bar" role="progressbar" aria-valuenow="80"
  aria-valuemin="0" aria-valuemax="100" style="width:70%">
    70%
  </div>
</div>
</div>



</div>

<div class="center" id="projects">

<h6 class="text-center">Previous Projects </h6>
<br> </br>
  <div class="row pt-4">
            <div class="col-lg-4 col-md-4 co-sm-12">
            <img src="bugworldscreenshoot.png"  alt="bugWorld" class="img-fluid" onclick="picFunction(this)">
</div>
<div class="col-lg-4 col-md-4 col-sm-12">
            <img src="androidscreenshoot1.png"  alt="android" class="img-fluid" onclick="picFunction(this)">
</div>
<div class="col-lg-4 col-md-4 col-sm-12">
            <img src="webCVscreenshoot.png"  alt="webCVS" class="img-fluid" onclick="picFunction(this)">
</div>
<div class="col-lg-4 col-md-4 col-sm-12">
            <img src="guessinggamescreenshoot.png"  alt="guessingGame" class="img-fluid" onclick="picFunction(this)">
</div>
            </div>
            <div class="imgcontainer">
  <!-- Close the image -->
  <span id="close-btn" class="close">X</span>

  <!-- Expanded image -->
  <img id="imgExpand" style="width:100%">

</div>

</div>

              <div class="bottom3" id="contact">
              <div class="row justify-content-center">
              
<div class="form-group col-md-4 col-md-offset-5 align-center">    
                    <h7 class="feature-title">Want to get in touch?</h7>
                    <br> </br>
                    <p>Feel free to contact me by filling up the form below! I'll make sure to reply ASAP!   </p>
                    <br> </br>
                    <form action="PortfolioMain.php" method="POST" class="form-horizontal">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name" name="pplname" required>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" rows="4" name="textfeedback" required></textarea>
                    </div>
                    <input type="submit" class="btn btn-secondary btn-block" value="Send" name="Sub">
                
                   
                
                  </form>    
                <?php
                
  if (isset($_POST["Sub"])){
  $name = (($_POST["pplname"]));

  $email = ( ($_POST["email"]));
  
  $text = (($_POST["textfeedback"]));

  
                
  
  // if (empty($name)){
  //   $errors['nameE'] = "<p style='color:red'>Enter name</p>" ;
  // }
  
  // if (empty($email)){
  //   $errors['emailE'] = "<p style='color:red'>Enter email</p>" ;
  // }
  
  // if(empty($textfeedback)){
  //   $errors['textE'] = "<p style='color:red'>Enter text</p>" ;
  // }
  
  
  
  
  $sql = "INSERT INTO pfcontact VALUES ('$name', '$email','$text', default)";
  
  
  if ($conn->query($sql)===TRUE){
  
  echo "New record created successfully";
  
  } else {
  
  echo "Error: " . $sql. "<br>" .$conn->error;
  
  }
  
  
  $conn->close();
}
                ?>
                 <p><?php if(isset($errors['nameE'])) echo $errors['nameE']; ?></p>
                    <p><?php if(isset($errors['emailE'])) echo $errors['emailE']; ?></p>
                    <p><?php if(isset($errors['textE'])) echo $errors['textE']; ?></p>
                  

</div>

</div>
                </div>

                
<footer class="page-footer">
  <div class="container" >
  
    <div class="row justify-content-center">
      <div class="col-md-4 col-md-offset-5 align-center">
      <h6 class="text-uppercase font-weight-bold">Contact Info</h6>
      <p>leepui@vuw.ac.co.nz
      <br/>+ 64 275 479 225
      <br/> <a href= "https://gitlab.ecs.vuw.ac.nz/leepui" > https://gitlab.ecs.vuw.ac.nz/leepui </a> 
      <br/> <a href="linkedin.com/in/pui-li-lee-1457481b8" > linkedin.com/in/pui-li-lee-1457481b8 </a>
      </p>
            </div>
    </div>
  </div>
</footer>

<script src="webCVj.js"></script>
<script src="portfolio.js"></script>
<script src="gallery.js"></script>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>

</html>