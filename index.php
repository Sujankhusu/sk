<?php 
  include 'setting.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>purchnage inisitute management software</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="card" style="width:500px;">
      <img src="img1.jpeg" alt="images" class="card-img-top" >

      <div class="card-body">
          <div class="card-title">
              Purchase thulo  ims
          </div>
          <div class="card-text">
              you can use this software for the tranning center and language class..
          </div>

          <form action="<?php  echo $epay_url ?>" method="POST">
    <input value="1000" name="tAmt" type="hidden">
    <input value="900" name="amt" type="hidden">
    <input value="50" name="txAmt" type="hidden">
    <input value="20" name="psc" type="hidden">
    <input value="30" name="pdc" type="hidden">
    <input value="<?php  echo $merchant_code?>" name="scd" type="hidden">
    <input value="<?php  echo $pid ?>" name="pid" type="hidden">
    <input value="<?php  echo $successurl ?>" type="hidden" name="su">
    <input value="<?php  echo $failedurl ?>" type="hidden" name="fu">
    <input value="Pay with Esewa Rs 10,000" type="submit" class ="btn btn-primary">
    </form>

      </div>
    </div>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>