<?php

class visitor {
    public function isvisited(){
        if(isset($_COOKIE['counter'])){
            return true;
        }else {
            setcookie("counter", 1, time()+3600); 
            return false;
        }
    }
    
}