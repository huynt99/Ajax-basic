(function ($) {
    $(document).ready(function () {
        $("#submit").click(function (event) {
            event.preventDefault();
            const data = $(event.target).parent();
            $.ajax({
                url: "http://toptra.com/ajax-p2/handle123.php",
                type: "POST",
                data: data.serialize(),
                success: function (data) {
                    $("#root").html(data);
                },
                error: function () {
                    $("#root").html("handle error")
                }
            });
        })
    })
})(jQuery);