<?php

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

class AddonLoader {
    
    public static $javaScriptBegin = "<script type=\"text/javascript\">\n\n";
    public static $javaScriptEnd = "\n\n</script>\n\n";
    public static $jQueryBegin = "\$(function() {\n\n";
    public static $jQueryEnd = "\n});\n\n";
    
    public static function slider() {
        
        $slider = '
            
                var bottom_border = "-90px";
    
                $("#login-form span.title").click(function() {
                    
                    if($("#login-form").css("top") == bottom_border) {
                        
                        $("#login-form").animate({
                            top: "0px"
                        }, 300)
                        
                        //console.log($("#login-form").css("top"));
                        
                    } else {
                        
                        $("#login-form").animate({
                            top: "-90px"
                        }, 300)
                        
                    }
                    
                });
            
            ';
            
            return $slider;
        
    }
    
    public static function validate() {
        
        $validator = '
        
            $("#reg-form").validate({
	   
                debug: true,
                submitHandler: function(form) {

                    form.submit();
                    //alert("Użytkownik gotowy do rejestracji w systemie :)");
                        
                },
                errorElement: "div",
    			errorContainer: $("#warning, #summary"),
    			errorPlacement: function(error, element) {
    				error.appendTo( element.parent("td").next("td") );
    			},
                success: function(label) {
                 label.addClass("valid").text("Dane wprowadzone poprawnie!")
               },
                messages: {
                
                    name: {
                        required: \'To pole jest obowiązkowe!\',
                        minlength: \'Podano mniej niż 3 znaki\',
                        maxlength: \'Podano więcej niż 20 znaków\'
                    },
                    surname: {
                        required: \'To pole jest obowiązkowe!\',
                        maxlength: \'Podano więcej niż 25 znaków\'
                    },
                    nick: {
                        required: \'To pole jest obowiązkowe!\',
                        minlength: \'Podano mniej niż 5 znaki\',
                        maxlength: \'Podano więcej niż 25 znaków\'
                    },
                    pass1: {
                        required: \'To pole jest obowiązkowe!\',
                        minlength: \'Podano mniej niż 5 znaków\',
                        maxlength: \'Podano więcej niż 50 znaków\'
                    },
                    pass2: {
                        required: \'To pole jest obowiązkowe!\',
                        minlength: \'Podano mniej niż 5 znaków\',
                        maxlength: \'Podano więcej niż 50 znaków\',
                        equalTo: \'To powtórzone hasło musi być identyczne z oryginalnym\'
                    },
                    mail: {
                        required: \'To pole jest obowiązkowe!\',
                        email: \'Podano nie prawidłowy e-mail\'
                    }
                },
               rules: {
                pass1: true,
                pass2: {
                  equalTo: "#pass1"
                }
              }
	});
            
        ';
        
        return $validator;
        
    }
    
    static public function validatePw() {
        
        $lostpw = '
        
            $("#lostpw-form").validate({
	   
                debug: true,
                submitHandler: function(form) {

                    form.submit();
                    //alert("Użytkownik gotowy do przypomnienia hasła!");
                        
                },
                errorElement: "div",
    			errorContainer: $("#warning, #summary"),
    			errorPlacement: function(error, element) {
    				error.appendTo( element.parent("td").next("td") );
    			},
                success: function(label) {
                 label.addClass("valid").text("Dane wprowadzone poprawnie!")
               },
                messages: {
                
                    nick: {
                        required: \'To pole jest obowiązkowe!\',
                        minlength: \'Podano mniej niż 5 znaki\',
                        maxlength: \'Podano więcej niż 25 znaków\'
                    },
                    mail: {
                        required: \'To pole jest obowiązkowe!\',
                        email: \'Podano nie prawidłowy e-mail\'
                    }
                }
	});
        
        ';
        
        return $lostpw;
        
    }
    
    static public function validateContact() {
        
        $contact = '
            
            $("#kontakt-form").validate({
	   
                debug: true,
                submitHandler: function(form) {

                    //form.submit();
                    alert("Mail gotowy do wysłania!");
                        
                },
                errorElement: "div",
    			errorContainer: $("#warning, #summary"),
    			errorPlacement: function(error, element) {
    				error.appendTo( element.parent("td").next("td") );
    			},
                success: function(label) {
                 label.addClass("valid").text("Dane wprowadzone poprawnie!")
               },
                messages: {
                
                    name: {
                        required: \'To pole jest obowiązkowe!\',
                        minlength: \'Podano mniej niż 3 znaki\'
                    },
                    surname: {
                        required: \'To pole jest obowiązkowe!\',
                        email: \'Podano nie prawidłowy adres e-mail\'
                    },
                    subject: {
                        required: \'To pole jest obowiązkowe!\',
                        minlength: \'Podano mniej niż 10 znaków\'
                    },
                    msg: {
                        required: \'To pole jest obowiązkowe!\',
                        minlength: \'Podano mniej niż 20 znaków\'
                    }
                }
	});
        
        ';
        
        return $contact;
        
    }
    
    static public function ExecRating() {
        
        $rate = "$('.rating').allRating({
                   theme: 'star',
                   input:'radio',
                   onClickEvent: function(input) {
                        
                        var form = $(input).closest(\"form\");
                        var datas = 'rating=true&' + input.attr('name') + '=' + input.val();
                        
                        $.ajax({
                  			type: \"POST\",
                   			url: form.attr('action'),
                   			processdata: false,
                   			data: datas,
                			success: function(data) {

                                alert(input.val());
                			
                			}
                        });
                        
                   }
               });
                
                $('a[href=#top]').click(function(){
                    $('html, body').animate({scrollTop:0}, 'slow', 'linear', function() { $('#login-form span.title').trigger('click'); });
                    return false;
                });
                
                ";
        
        return $rate;
        
    }
    
    static public function load($ADDON) {
        
        switch($ADDON) {
            
            case "Start":
            
            if(isset($_SESSION['logged']) !== true) {
            
                echo static::$javaScriptBegin;
                echo static::$jQueryBegin;
                
                echo static::slider();
                
                echo static::$jQueryEnd;
                echo static::$javaScriptEnd;
                
            }
            
            break;
            
            case "Rejestracja":
            
                echo static::$javaScriptBegin;
                echo static::$jQueryBegin;
                
                echo static::validate();
                
                if(isset($_SESSION['logged']) !== true) {
                    echo static::slider();
                }
                
                echo static::$jQueryEnd;
                echo static::$javaScriptEnd;
            
            break;
            
            case "Przypomnienie-hasla":
            
                echo static::$javaScriptBegin;
                echo static::$jQueryBegin;
                
                echo static::validatePw();
                
                if(isset($_SESSION['logged']) !== true) {
                    echo static::slider();
                }
                
                echo static::$jQueryEnd;
                echo static::$javaScriptEnd;
            
            break;
            
            case "Artykuly":
            
                echo static::$javaScriptBegin;
                echo static::$jQueryBegin;
                
                echo static::ExecRating();
                
                if(isset($_SESSION['logged']) !== true) {
                    echo static::slider();
                }
                
                echo static::$jQueryEnd;
                echo static::$javaScriptEnd;
            
            break;
            
            case "Kontakt":
            
                echo static::$javaScriptBegin;
                echo static::$jQueryBegin;
                
                echo static::validateContact();
                
                if(isset($_SESSION['logged']) !== true) {
                    echo static::slider();
                }
                
                echo static::$jQueryEnd;
                echo static::$javaScriptEnd;
            
            break;
            
        }
        
    }
    
}

?>