

<html>
<head><title>Big Mac Online Melksham</title></head>
<body bgcolor="FFFFCC" text=red>

<?php
// Initial form
if ($_REQUEST[current] != 1) {
?>

<h2>Please enter your quantities</h2>
<form method=POST><input type=hidden name=current value=1>
<table border=1>
<tr><td>Big Macs at 1.99</td><td><input name=bigmac size=4></td></tr>
<tr><td>Freedom Fries at 0.99</td><td><input name=fries size=4></td></tr>
<tr><td>Coke at 0.99 </td><td><input name=coke size=4></td></tr>
<tr><td>&nbsp;</td><td><input type=submit value="price it!"></td></tr>
</table></form>

<?php
} else {

// handling results

$bruce =
        $_REQUEST[bigmac] * 1.99 +
        $_REQUEST[fries] * 0.99 +
        $_REQUEST[coke] * 0.99 ;

print ("The total price will be $bruce");

?>
<br>
Please click <a href=?>here</a> to rerun demo
<br>
<?php } ?>

<hr>
Footers ....
</body></html>