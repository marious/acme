<?php

class View
{
    public static function make($view, $data = array())
    {
        if (count($data)) {
            extract($data);
        }
        include $_SERVER['DOCUMENT_ROOT'] . 'modern/views/' . $view . '.php';
    }
}
