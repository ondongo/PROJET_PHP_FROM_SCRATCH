<?php 
namespace App\Core;
abstract class Session{

    public static function openSession(){
        if(session_status()==PHP_SESSION_NONE){
            session_start();
        }
    }
    public static function get(string $key){
        return $_SESSION[$key];
    }

    public static function set(string $key,$data){
          $_SESSION[$key]=$data;
    }

    public static function setUser($user){
          self::set(KEY_USER,$user);
    }

    public static function getUser(){
        return self::get(KEY_USER);
    }

    public static function userExist(){
        return isset($_SESSION[KEY_USER]);
    }

    public static function destroy(){
        session_destroy();
        unset($_SESSION[KEY_USER]);
        $_SESSION=array();
    }

}