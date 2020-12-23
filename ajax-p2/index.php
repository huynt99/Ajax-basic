<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax</title>
</head>
<body>
<form class="ui form" style="padding: 50px" method="post" action="handle.php">
    <div class="field">
        <label for="name">Name</label>
        <input id="name" type="text" name="name" placeholder="Name">
    </div>
    <div class="field">
        <label>Email</label>
        <input id="email" type="email" name="email" placeholder="Email">
    </div>
    <div class="field">
        <label>Pass</label>
        <input id="pass" type="password" name="pass" placeholder="Password">
    </div>
    <button id="submit" class="ui button" type="submit">Submit</button>
</form>
<div id="root"></div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="handle.js"></script>
</body>
</html>