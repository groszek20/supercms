<?php

class AddonLoader {

    public static $javaScriptBegin = "<script type=\"text/javascript\">\n\n";
    public static $javaScriptEnd = "\n\n</script>\n\n";
    public static $jQueryBegin = "\$(function() {\n\n";
    public static $jQueryEnd = "\n});\n\n";

    static public function load($ADDON) {
        switch ($ADDON) {
            
            case "LoginSlider";
                echo static::$javaScriptBegin;
                echo static::$jQueryBegin;
                echo '
                    
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
                echo static::$jQueryEnd;
                echo static::$javaScriptEnd;
                break;
        }
    }

}
