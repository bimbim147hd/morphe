    window.copyToClipboard = function(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
        VC.notify.show('success', 'Copied!', 5000);
    }
    $(document).ready(function() {
       //Close popup
                $('.close-pop').on('click', function(event){
                      event.preventDefault();
                    $('.pop-up').removeClass('active'); //Hide pop up
                });

        $("#formEmail").validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                    remote: {
                        url: "/check",
                        type: "post",
                        data:
                            {
                                send: function()
                                {
                                    return $('#formEmail :input[name="email"]').val();
                                }
                            }
                    }
                }
            },
            messages: {
                email: {
                    required: "Please enter an email",
                    email: "The email format is not correct",
                    remote: "This email is already signed"
                }
            },
            errorElement : 'div',
            errorLabelContainer: '.errorTxt'
        });
        $('.share-btns a:first-child').click(function() {
            $('.pop-up #group-share').fadeToggle();
            return false;
        });

        // $('footer a').click(function() {
        //     $('body,html').animate({
        //         scrollTop: 0
        //     }, 500);
        //     return false;
        // });
    });