(function ($) {
    $(document).ready(function () {
        $("#submit").click(function (event) {
            event.preventDefault();
            const $post = $(this).parent().serialize();
            $("#form").trigger("reset");
            $.ajax({
                url: "handle.php",
                type: "post",
                data: $post,
                success: function () {

                }
            })
        });
    });
})(jQuery);