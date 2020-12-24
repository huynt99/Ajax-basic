(function ($) {
    $(document).ready(function () {
        $("#sendRegister").click(function (event) {
            event.preventDefault();
            const _data = $(this).parent().serialize();
            $(this).parent()[0].reset();
            $.ajax({
                url: "src/Controllers/RegisterController.php",
                type: "POST",
                data: _data,
                success: function (content) {
                    $("#message").html = "Success";
                }
            })
        });
    });
})(jQuery);