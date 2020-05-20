<?php include_once('controller.php'); ?>
<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PayU</title>
</head>

<body>
	<form action="https://secure.payu.com/paygw/UTF/NewPayment" method="POST" name="payform">
		<!-- Inputy widoczne jako type="text" TYLKO do testów w środowisku deweloperskim (aby było widać co wysyłamy) -->
		<input type="text" name="first_name" value="<?php print $create_form['first_name']; ?>"><br>
		<input type="text" name="last_name" value="<?php print $create_form['last_name']; ?>"><br>
		<input type="text" name="amount" value="<?php print $create_form['amount']; ?>"><br>
		<input type="text" name="desc" value="<?php print $create_form['desc']; ?>"><br>
		<input type="text" name="pos_id" value="<?php print $create_form['pos_id']; ?>"><br>
		<input type="text" name="pos_auth_key" value="<?php print $create_form['pos_auth_key']; ?>"><br>
		<input type="text" name="session_id" value="<?php print $create_form['session_id']; ?>"><br>
		<input type="text" name="client_ip" value="<?php print $create_form['client_ip']; ?>"><br>
		<input type="text" name="ts" value="<?php print $create_form['ts']; ?>"><br>
		<input type="text" name="sig" value="<?php print payu_signature($create_form, '13a980d4f851f3d9a1cfc792fb1f5e50'); ?>"><br>
		<input type="submit" value="Zapłać poprzez PayU"><br>
	</form>
</body>

</html>
