(function ($) {
    $(document).ready(function () {
        $("#submit").click(function (event) {
            event.preventDefault();
            $.ajax({
                url: "handle.php",
                type: "GET",
                data: {
                    from: $("#from").val(),
                    to: $("#to").val()
                },
                success: function (aRow) {
                    $("#root").html(aRow);
                }
            });
        })
    })
})(jQuery);