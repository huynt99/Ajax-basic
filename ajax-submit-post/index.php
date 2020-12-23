<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<div class="container">
    <form method="post" action="handle.php" id="form">
        <input type="text" id="title" name="title" placeholder="Title">
        <textarea name="description" id="description" cols="30" rows="5" placeholder="Description"></textarea>
        <input type="submit" id="submit" value="Submit">
    </form>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="handle.js"></script>

</body>
</html>