<?php

if(isset($_POST['Generate']) && isset($_POST['md5_str'])){
  if($_POST['md5_str']){
    $_SESSION['msg'] = '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">Generate Successfully</div>';
  }else{
    $_SESSION['error'] = '<div class="alert alert-warning alert-dismissible fade show mt-3 text-center" role="alert">Please Enter Your Password!</div>';
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AMAN MUKHI | MD5 Hash Generator</title>
    <link rel="icon" href="<?=  $_SERVER['REQUEST_URI'] ?>/assets/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?=  $_SERVER['REQUEST_URI'] ?>/assets/style.css">

  </head>
  <body class="bg-body-col">
    <div class="row">
      <div class="col-md-2"></div>

      <div class="col-md-8 p-4">

        <div class="card bg-card-col mb-4 mt-5">
          <div class="card-header fw-bold h5">
            MD5 Hash Generator
          </div>
          <form action="#" method="post">
            <div class="card-body row">
              <div class="col-md-2">
                <p class="form-label mt-2 h5 float-right">Password : </p>
              </div>

              <div class="col-md-4">
                <?php 
              if (isset($_SESSION['msg'])) { 
              ?>
                <input class="form-control md-3" type="text" value="<?= $_POST['md5_str']?>" name="md5_str" placeholder="Enter Password" autocomplete="off">
              <?php
              } else{ ?>
                <input class="form-control md-3" type="text" name="md5_str" placeholder="Enter Password" autocomplete="off">
              <?php
              }
              ?>
                
              </div>

              <div class="col-md-6 mt_14">
                <button type="submit" name="Generate" class="btn btn-dark">Generate</button>
                <a href="<?=  $_SERVER['REQUEST_URI'] ?>" class="btn btn-dark">Reset All </a>
              </div>

              <?php 
              if (isset($_SESSION['msg'])) { 
                // echo $_SESSION['msg']; 
                unset($_SESSION['msg']); 
              ?>
              <div class="col-md-2 mt-3 card-text float-right">
                <h4> Result : </h4>

              </div>
              <hr class="col-md-10 mt_3rem">
              <div class="row mb_50">
                
                <p class="col-md-2 card-text float-right">Your Password :</p>
                <p class="col-md-10 ans">
                  <span id="your_password"> <?= $_POST['md5_str']; ?><span>
                  <i onclick="myFunction1()" class="fa fa-clone" aria-hidden="true"></i> 
                </p>
                
                <p class="col-md-2 card-text float-right">MD5 Hash :</p>
                <p class="col-md-10 ans">
                  <span id="md5_hsh"> <?= hash('md5',$_POST['md5_str']); ?><span>
                  <i onclick="myFunction2()" class="fa fa-clone" aria-hidden="true"></i>
                </p> 
                
                <p class="col-md-2 card-text float-right">SHA1 Hash :</p>
                <p class="col-md-10 ans">
                  <span id="sha1_hash"> <?= hash('sha1',$_POST['md5_str']); ?><span>
                  <i onclick="myFunction3()" class="fa fa-clone" aria-hidden="true"></i>
                </p> 

                <p class="col-md-2 card-text float-right">SHA256 Hash :</p>
                <p class="col-md-10 ans">
                  <span id="sha256_hash"> <?= hash('sha256',$_POST['md5_str']); ?><span>
                  <i onclick="myFunction4()" class="fa fa-clone" aria-hidden="true"></i>
                </p> 

              </div>
              <?php
              }else{
                if (isset($_SESSION['error'])) { 
                  echo $_SESSION['error']; 
                  unset($_SESSION['error']); 
                } ?>

                <div class="col-md-2 mt-3 card-text float-right">
                <h4> Result : </h4>

              </div>
              <hr class="col-md-10 mt_3rem">
              <div class="row">
                
                <p class="col-md-2 card-text float-right">Your Password :</p>
                <p class="col-md-10 ans">
                  <span id="your_password"> <span>
                </p>
                
                <p class="col-md-2 card-text float-right">MD5 Hash :</p>
                <p class="col-md-10 ans">
                  <span id="md5_hsh"> <span>
                </p> 
                
                <p class="col-md-2 card-text float-right">SHA1 Hash :</p>
                <p class="col-md-10 ans">
                  <span id="sha1_hash"> <span>
                </p> 

                <p class="col-md-2 card-text float-right">SHA256 Hash :</p>
                <p class="col-md-10 ans">
                  <span id="sha1_hash"> <span>
                </p> 

              </div>
              <?php
              }
              ?>
            </div>
          </form>
        </div>
      
      </div>

      <div class="col-md-2"></div>
    </div>

    <div class="footer">
      <p class="mt-3">Designed And Developed By <a href="https://amanmukhi-portfolio.000webhostapp.com/" class="text-light" style="text-decoration: none;"><strong>AMAN MUKHI<strong></a> </p>
    </div>

    <script src="<?=  $_SERVER['REQUEST_URI'] ?>/assets/main.js"></script>
  </body>
</html>