<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Aman Blood Bank</title>
    <style>
    .main{
      background-color: black;
      height: 100vh;
    }
    .text{
      color: #fff;
    display: flex;
    justify-content: center;
    flex-direction: column;
    margin-left: 2rem;
    width: 42rem;
    }
    .text h2 span{
      color: red;
    }
    
    </style>
  </head>
  <?php include './header.php';
    include './db.php';
  ?>
  <body>
    <section class="main">
<div class="header" style="display: flex;">
  
  <div class="text" >
    <h2>Donate <span>Blood</span> To help People around You.</h2>
    <h2>A drop for you, an ocean for someone else.</h2>
    <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quas impedit cum provident 
      tempore expedita dolor quaerat magnam at alias? Aliquid porro cumque sint ullam, nemo atque inventore at vero?</p>
  </div>
  <div class="img">
  <iframe src="https://giphy.com/embed/BnYUdo7egvvpQczm3W" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/BnYUdo7egvvpQczm3W">via GIPHY</a></p>
  </div>
</div>
    </section>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>