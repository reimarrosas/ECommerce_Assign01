<?php
class Controller
{
    public function view($name, $data = [])
    {
        if (file_exists('../app/views/' . $name . '.php')) {
            require_once('../app/views/' . $name . '.php');
        } else {
            echo '../app/views/' . $name . '.php does not exists';
        }
    }
}
