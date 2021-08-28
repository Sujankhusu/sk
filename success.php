<?php
 include 'setting.php';
 /*
 echo "<h1> Payment success</h1>";

  $oid= $_GET['oid'];
  $amt = $_GET['amt'];
  $ref = $_GET['refId'];
   
  echo "<br>";
  echo "Order ID: ".$oid."<br>";
  echo "Amount: ".$amt."<br>";
  echo  "Refernce: ".$ref."<br>";
  */
  
  $ref = $_GET['refId'];
 
  $data =[  
    'amt'=> $actualamount,
    'rid'=> $ref,
    'pid'=> "thuolotech7777",
    'scd'=> $merchant_code
  ];

    $curl = curl_init($fraudcheck_url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    if(strpos($response,"Success" )!==false){
      header("Location: index.php ");
    }
    curl_close($curl);

?>