<?php

class Session
{
    public function __construct()
    {
        ini_set("session.gc_maxlifetime", 1800);
        ini_set("session.cookie_lifetime", 0);
        session_set_cookie_params(0);
        session_start();
    }
    public function existsData($index)
    {
        return isset($_SESSION[$index]);
    }

    public function getData($index)
    {
        return $_SESSION[$index] ?? null;
    }
    public function addData($index, $data)
    {
        $_SESSION[$index] = $data;
    }
    public function removeData($index)
    {
        unset($_SESSION[$index]);
    }
}