<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>SMILING STAR ORDER INFO</title>
</head>

<body>
<?php

?>
<h1>SMILING STAR ORDER INFO</h1>


<?php
print_r($orderData);
echo 'oyne' . $orderData['shippingaddress'];
echo 'oyne' . $orderData['shipping_area'];
echo 'oyne' . $orderData['shipping_PIN'];
echo 'oyne' . $orderData['order_date_time'];

$array = json_decode($orderData['cart_data'], true);


echo $array;
?>
</body>

</html>
