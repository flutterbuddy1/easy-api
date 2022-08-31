<?php

namespace Flutterbuddy1\EasyApi;

class EasyApi 
{    
    static public function api()
    {
        require __DIR__."/routes/api.php";
    }
}