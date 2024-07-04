<?php

// Choose subcategory and filter

if ($category_provider) {
    switch ($category_provider) {
        case "Llar":
            $subcategory_provider = $group_category['llar'];
            $subcategory_search = 'llar';
            $subcategory_result = $group_category_publisher['llar'];

            //Price
            $price = $group_profesional['precio_maximo_por_hora'];
            $price_search = 'precio_por_hora';
            break;
        case "Aprèn":
            $subcategory_provider = $group_category['apren'];
            $subcategory_search = 'apren';
            $subcategory_result = $group_category_publisher['apren'];

            //Price
            $price = $group_profesional['precio_maximo_por_hora'];
            $price_search = 'precio_por_hora';

            //Level
            $level_boolean = true;
            break;
        case "Esport":
            $subcategory_provider = $group_category['esport'];
            $subcategory_search = 'esport';
            $subcategory_result = $group_category_publisher['esport'];

            //Price
            $price = $group_profesional['precio_maximo_por_hora'];
            $price_search = 'precio_por_hora';

            //Level
            $level_boolean = true;
            break;
        case "Ment":
            $subcategory_provider = $group_category['ment'];
            $subcategory_search = 'ment';
            $subcategory_result = $group_category_publisher['ment'];

            //Price
            $price = $group_profesional['precio_maximo_por_hora'];
            $price_search = 'precio_por_hora';
            break;
        case "Cuida els teus":
            $subcategory_provider = $group_category['cuida_els_teus'];
            $subcategory_search = 'cuida_els_teus';
            $subcategory_result = $group_category_publisher['cuida_els_teus'];

            //Price
            if ($subcategory_provider == 'Seguretat' || $subcategory_provider == 'Dietes') {
                $price = $group_profesional['precio_maximo_por_hora'];
                $price_search = 'precio_por_hora';
            } else {
                $price = $group_profesional['precio_maximo_por_servicio'];
                $price_search = 'precio_por_servicio';
            }
            break;
        case "Bellesa":
            $subcategory_provider = $group_category['bellesa'];
            $subcategory_search = 'bellesa';
            $subcategory_result = $group_category_publisher['bellesa'];
            $gender = $group_category['sexo'];
            $nails = $group_category['unas'];
            $hair_removal = $group_category['depilacion_con'];
            //Price
            if ($subcategory_provider == 'Maquillatge') {
                $price = $group_profesional['precio_maximo_por_hora'];
                $price_search = 'precio_por_hora';
            } else {
                $price = $group_profesional['precio_maximo_por_servicio'];
                $price_search = 'precio_por_servicio';
            }
            break;
        case "Contracta":
            $subcategory_provider = $group_category['contracta'];
            $subcategory_search = 'contracta';
            $subcategory_result = $group_category_publisher['contracta'];

            //Price
            $price = $group_profesional['precio_maximo_por_hora'];
            $price_search = 'precio_por_hora';
            break;
        case "Comparteix":
            $subcategory_provider = $group_category['comparteix'];
            $subcategory_search = 'comparteix';
            $subcategory_result = $group_category_publisher['comparteix'];

            //Price
            $price = $group_profesional['precio_maximo_por_hora'];
            $price_search = 'precio_por_hora';
            break;
        case "Esdeveniments":
            $subcategory_provider = $group_category['esdeveniments'];
            $subcategory_search = 'esdeveniments';
            $subcategory_result = $group_category_publisher['esdeveniments'];

            //Price
            $price = $group_profesional['precio_maximo_por_hora'];
            $price_search = 'precio_por_hora';
            break;
    }
}

if($level_boolean){
    $level_query = [
        'key' => 'categorias_nivel',
        'value'=> $level,
        'compare' => '=',
    ];
}

if($gender) {
    $gender_query = [
        'key'=> 'categorias_sexo',
        'value'=> $gender,
        'compare' => '=',
    ];
} 

if($subcategory_provider == 'Uñas'){
    $nails_query = [
        'key'=> 'categorias_unas',
        'value'=> $nails,
        'compare' => '=',
    ];
}

if($subcategory_provider == 'Uñas'){
    $nails_query = [
        'key'=> 'categorias_unas',
        'value'=> $nails,
        'compare' => '=',
    ];
}

if($subcategory_provider == 'Depilación'){
    $hair_removal_query = [
        'key'=> 'categorias_depilacion_con',
        'value'=> $hair_removal,
        'compare' => '=',
    ];
}
 
?>