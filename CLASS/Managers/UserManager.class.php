<?php

class UserManager {
    
    protected $login;
    protected $password;
	protected $mail;
    
    public function LogIn($LOGIN, $PASSWORD) {
        
        $this->login = $LOGIN;
        $this->password = md5($PASSWORD);
        
        if(self::isExist() && count(self::isExist()) > 0) {
            
            self::log_in();
            return $this->login;
            
        } else {
            
            return false;
            
        }
        
    }
    
    protected function isExist() {
        
        $arr = DatabaseManager::selectBySQL("SELECT * FROM users WHERE username = '{$this->login}' AND password = '{$this->password}' LIMIT 1");
        return $arr;
        
    }
    
    protected function log_in() {
        
        $_SESSION['login'] = $this->login;
        $_SESSION['logged'] = true;
        
    }
    
    public function LogOut() {
        
        $_SESSION['login'] = false;
        $_SESSION['logged'] = false;
        
        session_destroy();
        
    }
}
