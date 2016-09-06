<?php

//bestPHP框架

echo 'hello word';


function scanD($dir){
    $list = scandir($dir);
    foreach ($list as $value) {
        if (is_dir($value)) {
            touch($dir .'/'. $value. '/'. '.gitkeep');
            $list = scandir($dir .'/'. $value);
            foreach ($list as $value2) {
                if (is_dir($value)) {
                    touch($dir .'/'. $value. '/'. $value2 .'/' . '.gitkeep');
                }
            }

        } else {

        }
    }
}

scanD('./');