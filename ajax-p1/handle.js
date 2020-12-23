(function ($) {
    $(document).ready(function () {
        $("#submit").click(function (event) {
            event.preventDefault();

            const name = $("#name").val();
            const email = $("#email").val();
            const pass = $("#pass").val();

            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
            document.getElementById('pass').value = '';
            $.ajax({
                url: "http://toptra.com/ajax-p1/handle.php",
                type: "POST",
                data: {
                    name: name,
                    email: email,
                    pass: pass
                },
                success: function (content) {
                    $("#hello").html('Register successfully');
                },
            })
        });
    });
})(jQuery);
