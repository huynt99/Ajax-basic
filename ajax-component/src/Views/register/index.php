<?php require_once "./src/Views/header.php"; ?>

    <form class="ui form" method="post" action="?route=register">
        <div class="field">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Name">
        </div>
        <div class="field">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email">
        </div>
        <div class="field">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password">
        </div>
        <button id="sendRegister" class="ui button" type="submit">Submit</button>
    </form>

<?php require_once "./src/Views/footer.php"; ?>