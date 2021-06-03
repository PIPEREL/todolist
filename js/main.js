$(function() {


    $("#send-form").click(function(e) {

        if ($("#name").val() == "") {
            Lobibox.notify("warning", {
                size: 'mini',
                rounded: true,
                delayIndicator: false,
                position: 'bottom right',
                msg: 'Merci de saisir le titre'
            });
            e.preventDefault();
            return;
        }

        if ($("#message").val() == "") {
            Lobibox.notify("error", {
                size: 'mini',
                rounded: true,
                delayIndicator: false,
                position: 'bottom right',
                msg: 'Merci de saisir la description'
            });
            e.preventDefault();
            return;
        }

    });

});