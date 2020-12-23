<?php
if ($_POST) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = substr(md5($_POST['pass']), 0, 10);

	?>

    <table style="padding-left: 50px;">
        <tr>
            <td>Name</td>
            <td><?php echo $name ?></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><?php echo $email; ?></td>
        </tr>

        <tr>
            <td>Sub Pass</td>
            <td><?php echo $pass ?></td>
        </tr>
    </table>
	<?php

}
