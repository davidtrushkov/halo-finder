/** Open Register Modal **/
$(document).ready(function(){
    $('.register').click(function(){
        $('#register-modal')
            .modal({
                blurring: true,
                transition: 'horizontal flip'
            }).modal('show');
    });
});


/** Check the registration modal for validation **/
$(function () {
    $('#register-form').form({
            fields: {
                gamertag: {
                    identifier: 'gamertag',
                    rules: [{
                        type: 'empty',
                        prompt: 'Please enter a Gamertag'
                    },
                        {
                            type: 'minLength[1]',
                            prompt: 'Your gamertag must be atleast 2 characters'
                        },
                        {
                            type: 'maxLength[16]',
                            prompt: 'Your gamertag must be no more than 16 characters'
                        }]
                },
                email: {
                    identifier: 'email',
                    rules: [
                        {
                            type: 'email',
                            prompt: 'Please enter a email'
                        },

                        {
                            type: 'maxLength[255]',
                            prompt: 'Your email cannot be more than 255 characters'
                        }
                    ]
                },
                password: {
                    identifier: 'password',
                    rules: [{
                        type: 'minLength[6]',
                        prompt: 'Please enter a password with atleast 6 characters'
                    },
                        {
                            type: 'empty',
                            prompt: 'Your password cannot be empty'
                        }]
                },
                password_confirmation: {
                    identifier: 'password_confirmation',
                    rules: [{
                        type: 'match[password]',
                        prompt: 'Your Passwords do not match'
                    },
                        {
                            type: 'empty',
                            prompt: 'Your password cannot be empty'
                        }]
                }
            }
        }
        //, {
        //    onSuccess : function (e) {
        //        e.preventDefault();
        //        console.log('Registered Successfully!');
        //    }
        //}
    );
});


/** Open Login Modal **/
$(document).ready(function(){
    $('.login').click(function(){
        $('#login-modal')
            .modal({
                blurring: true,
                transition: 'horizontal flip'
            }).modal('show');
    });
});

/** Check the login modal for validation **/
$(function () {
    $('#login-form').form({
            fields: {
                email: {
                    identifier: 'email',
                    rules: [
                        {
                            type: 'email',
                            prompt: 'Please enter a email'
                        },
                        {
                            type: 'maxLength[255]',
                            prompt: 'Your email cannot be more than 255 characters'
                        }
                    ]
                },
                loginPassword: {
                    identifier: 'loginPassword',
                    rules: [
                        {
                            type: 'minLength[6]',
                            prompt: 'Please enter a password with atleast 6 characters'
                        },
                        {
                            type: 'empty',
                            prompt: 'Your password cannot be empty'
                        }
                    ]
                }
            }
        }
    );
});

/** Close message **/
$('.message .close')
    .on('click', function() {
        $(this)
            .closest('.message')
            .transition('fade')
        ;
    })
;


/** Submit a form **/
jQuery(function($) {
    $('submit').click(function () {
        var $form = $(this);

        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: $form.serialize(),
            success: function(data){
                // $target.html(data);
            }
        });
        event.preventDefault();
    });
});