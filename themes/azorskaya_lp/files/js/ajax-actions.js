//contact form
$(document).ready(function () {
    $(function () {
        $(".btn1, .btn2, .btn3").click(function () {
        	var has_error = 0 ;
            var name = $(".name").val();
            var time = $(".time").val();
            var message = $(".message").val();
            var phone = $(".phone").val();
            /*var atpos = phone.indexOf("@");
            var dotpos = phone.lastIndexOf(".");*/
            var dataString = '&name=' + name + '&phone=' + phone + '&time=' + time + '&message=' + message;

            $('input.name, input.time, input.phone').focus(function () {
                $(this).css({
                    "background-color": "#fff"
                });
            });
            /*$('textarea').focus(function () {
                $(this).css({
                    "background-color": "#fff"
                });
            });*/

            if ($(".name").val().length == 0) {
           		has_error = 1 ;
                $('.name').css({
                    "background-color": "#ffd6d6"
                });
            }
            if($(".phone").val().length == 0) {
            has_error = 1 ;
                $('.phone').css({
                    "background-color": "#ffd6d6"
                });
            }
           /* if(atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= phone.length) {
            has_error = 1 ;
                $('.phone').css({
                    "background-color": "#ffd6d6"
                });
            }*/
            if($(".time").val().length == 0) {
            has_error = 1 ;
                $('.time').css({
                    "background-color": "#ffd6d6"
                });
            }
           /* if($(".message").val().length == 0) {
            has_error = 1 ;
                $('#message').css({
                    "background-color": "#ffd6d6"
                });
            } */
            if(has_error == 0 ) {
               $.ajax({
                   type: "POST",
                    url: "contact.php",
                    data: dataString,
                    success: function () {
                        $('.success').css({
                            "display": "inline-block"
                        });
                       /* $('input[type=text],textarea').val('');*/
                    }
                });
            }
            return false;
        });
    });
});