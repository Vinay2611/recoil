$( function () {
    //Validate
    $("#login_form").validate({
        //debug: true,
        rules: {
            // simple rule, converted to {required:true}
            username: "required",
            password: "required"
        },
        messages: {
            username: "Please enter user's email id",
            password: "Please enter user's password"
        },
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "controller/login_process",
                data: $(form).serialize(),
                success: function ( data ) {
                    var data = JSON.parse(data);
                    console.log(data);
                    console.log(typeof data.valid);
                    if (data.valid) {
                        $('#message').html("<h6>Logged in successfully!</h6>")
                            .fadeIn(1500, function () {
                                $('#message');
                            });
                        setTimeout( function () {
                            location.href = "home.php";
                        }, 1500);
                    }else {
                        $('#message').html("<h6>"+ data.message +"</h6>")
                            .fadeIn()
                            .fadeOut(3000);
                    }
                    //$(form).html("<div id='message'></div>");
                }
            });
            return false; // required to block normal submit since you used ajax
        }
    });

}); //Document load