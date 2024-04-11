<?php

function filter_rename($filter) {
    $variable = "";
    if($filter) {
        switch($filter) {
            case "Fontaneria":
                $variable = "Fontanería";
            break;
            // case "Fontaneria":
            //     $variable = "Fontanería";
            // break;
            case "Mecanico":
                $variable = "Mecánico";
            break;
        };
    };
    return $variable;
};

