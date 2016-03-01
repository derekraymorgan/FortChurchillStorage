pricing.php<!DOCTYPE html>

<html lang = "en-US">

<?php

	include('includes/sections/header.php');

?>

<div id = 'main_content'>

	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="VAG2KESCYXGKC">
		<table>
			<tr><td><input type="hidden" name="on0" value="Make a Payment">Make a Payment</td></tr><tr><td><select name="os0">
						<option value="5x10 Storage Unit">5x10 Storage Unit $35.00 USD</option>
						<option value="10x10 Storage Unit">10x10 Storage Unit $45.00 USD</option>
						<option value="15x10 Storage Unit">15x10 Storage Unit $55.00 USD</option>
						<option value="20x10 Storage Unit">20x10 Storage Unit $65.00 USD</option>
						<option value="30x10 Storage Unit">30x10 Storage Unit $110.00 USD</option>
						<option value="40x10 Storage Unit">40x10 Storage Unit $130.00 USD</option>
						<option value="Covered RV Parking">Covered RV Parking $40.00 USD</option>
					</select> </td></tr>
			<tr><td><input type="hidden" name="on1" value="Unit number and customer name">Unit number and customer name</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
		</table>
		<input type="hidden" name="currency_code" value="USD">
		<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</form>

	<br>

	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="ND6HDFL9JNFUJ">
		<table>
			<tr><td><input type="hidden" name="on0" value="Monthly Recurring Payments">Monthly Recurring Payments</td></tr><tr><td><select name="os0">
						<option value="5x10 Storage Unit">5x10 Storage Unit : $35.00 USD - monthly</option>
						<option value="10x10 Storage Unit">10x10 Storage Unit : $45.00 USD - monthly</option>
						<option value="15x10 Storage Unit">15x10 Storage Unit : $55.00 USD - monthly</option>
						<option value="20x10 Storage Unit">20x10 Storage Unit : $65.00 USD - monthly</option>
						<option value="30x10 Storage Unit">30x10 Storage Unit : $110.00 USD - monthly</option>
						<option value="40x10 Storage Unit">40x10 Storage Unit : $130.00 USD - monthly</option>
						<option value="Covered RV Parking">Covered RV Parking : $40.00 USD - monthly</option>
					</select> </td></tr>
			<tr><td><input type="hidden" name="on1" value="Unit number and customer name">Enter unit number and customer name below</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
		</table>
		<input type="hidden" name="currency_code" value="USD">
		<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</form>









	<?php

	include('includes/sections/footer.php');

	?>

</div>



</body>

</html>