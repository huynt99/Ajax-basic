<?php require_once "./src/Views/header.php"; ?>

<form class="ui form" method="post" action="login">
    <div class="field">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email" value="<?php echo isset($_GET['email']) ?
			$_GET['email'] : ''; ?>">
    </div>
    <div class="field">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password">
    </div>
    <button class="ui button" type="submit">Submit</button>
</form>

<?php require_once "./src/Views/footer.php"; ?>

