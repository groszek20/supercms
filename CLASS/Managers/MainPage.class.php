<?php

class MainPage {
    
    private $active_page;
    
    public function __construct($ACTIVE_PAGE) {
        
        $this->active_page = $ACTIVE_PAGE;
        
        switch($this->active_page) {
            
            case 'start':
            require_once $this->active_page.".libray.php";
            break;
            
            case 'artykuly':
            require_once $this->active_page.".libray.php";
            break;
            
            case 'login':
            require_once $this->active_page.".libray.php";
            break;
            
            case 'logout':
            require_once $this->active_page.".libray.php";
            break;
            
            case 'rejestracja':
            require_once $this->active_page.".libray.php";
            break;
            
            case 'przypomnienie-hasla':
            require_once $this->active_page.".libray.php";
            break;
            
            case 'register':
            require_once $this->active_page.".libray.php";
            break;
            
            case 'produkty':
            require_once $this->active_page.".libray.php";
            break;
            
            case 'artykuly':
            require_once $this->active_page.".libray.php";
            break;
            
            case 'kontakt':
            require_once $this->active_page.".libray.php";
            break;
            
            case 'voter':
            require_once $this->active_page.".libray.php";
            break;
            
        }
        
    }
    
}

?>