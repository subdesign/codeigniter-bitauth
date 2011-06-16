<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Bitauth Example: Reset Password</title>
</head>
<body>
    <?php
		echo form_open('bitauth/reset_password');

		echo form_label('Current Password', 'current_password');
		echo form_password('current_password', NULL, array('id' => 'current_password'));
		echo form_label('New Password', 'new_password');
		echo form_password('new_password', NULL, array('id' => 'new_password'));
		echo form_label('Confirm New Password', 'confirm_password');
		echo form_password('confirm_password', NULL, array('id' => 'confirm_password'));
		echo form_submit('Reset Password');

		echo validation_errors();

		echo form_close();
	?>
</body>
</html>