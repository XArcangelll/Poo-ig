<?php

namespace Diego\Poo\utils;

class UUID{

    public static function generate(){
        return uniqid();
    }

}