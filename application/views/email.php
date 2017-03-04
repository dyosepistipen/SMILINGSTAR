<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>SMILING STAR ORDER INFO</title>
</head>

<body>
<?php

?>
<h2 style="color:green;text-align: center;">Your order is placed successfully.</h2>


<table class="table table-bordered">
  <tbody>
  <tr class="techSpecRow">
    <th colspan="100">Order Details</th>
  </tr>
  <tr>
    <td><b>Shipping Address</b></td>
    <td colspan="10"><?php
      echo $orderData['shippingaddress']; ?></td>
  </tr>
  <tr>
    <td><b>Shipping Area</b></td>
    <td colspan="10">
      <?php
      echo $orderData['shipping_area']; ?>

    </td>
  </tr>
  <tr>
    <td><b>Shipping PIN</b></td>
    <td colspan="10"><?php
      echo $orderData['shipping_PIN']; ?></td>
  </tr>
  </tbody>
</table>
</body>

</html>
