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
<div class="container">
    <table id="root">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </table>
    <form action="handle.php">
        <input type="number" id="from" value="1">   <!--kiem tra min max cua co so du lieu-->
        <input type="number" id="to" value="10">    <!--kiem tra min max cua co so du lieu-->
        <input type="submit" value="Submit" id="submit">
    </form>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="handle.js"></script>

</body>
</html>