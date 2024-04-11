<?php

// Choose subcategory and filter

if ($category_provider) {
    switch ($category_provider) {
        case "Hogar":
            $subcategory_provider = $group_category['hogar'];
            $subcategory_search = 'hogar';
            $subcategory_result = $group_category_publisher['hogar'];

            //Price
            $price = $group_profesional['precio_maximo_por_hora'];
            $price_search = 'precio_por_hora';
            break;
        case "Aprende":
            $subcategory_provider = $group_category['aprende'];
            $subcategory_search = 'aprende';
            $subcategory_result = $group_category_publisher['aprende'];

            //Price
            $price = $group_profesional['precio_maximo_por_hora'];
            $price_search = 'precio_por_hora';

            //Level
            $level_boolean = true;
            break;
        case "Deporte":
            $subcategory_provider = $group_category['deporte'];
            $subcategory_search = 'deporte';
            $subcategory_result = $group_category_publisher['deporte'];

            //Price
            $price = $group_profesional['precio_maximo_por_hora'];
            $price_search = 'precio_por_hora';

            //Level
            $level_boolean = true;
            break;
        case "Mente":
            $subcategory_provider = $group_category['mente'];
            $subcategory_search = 'mente';
            $subcategory_result = $group_category_publisher['mente'];

            //Price
            $price = $group_profesional['precio_maximo_por_hora'];
            $price_search = 'precio_por_hora';
            break;
        case "Cuidados":
            $subcategory_provider = $group_category['cuidados'];
            $subcategory_search = 'cuidados';
            $subcategory_result = $group_category_publisher['cuidados'];

            //Price
            if ($subcategory_provider == 'Seguridad' || $subcategory_provider == 'Dietas') {
                $price = $group_profesional['precio_maximo_por_hora'];
                $price_search = 'precio_por_hora';
            } else {
                $price = $group_profesional['precio_maximo_por_servicio'];
                $price_search = 'precio_por_servicio';
            }
            break;
        case "Belleza":
            $subcategory_provider = $group_category['belleza'];
            $subcategory_search = 'belleza';
            $subcategory_result = $group_category_publisher['belleza'];
            $gender = $group_category['sexo'];
            $nails = $group_category['unas'];
            $hair_removal = $group_category['depilacion_con'];
            //Price
            if ($subcategory_provider == 'Maquillaje') {
                $price = $group_profesional['precio_maximo_por_hora'];
                $price_search = 'precio_por_hora';
            } else {
                $price = $group_profesional['precio_maximo_por_servicio'];
                $price_search = 'precio_por_servicio';
            }
            break;
        case "Contrata":
            $subcategory_provider = $group_category['contrata'];
            $subcategory_search = 'contrata';
            $subcategory_result = $group_category_publisher['contrata'];

            //Price
            $price = $group_profesional['precio_maximo_por_hora'];
            $price_search = 'precio_por_hora';
            break;
        case "Comparte":
            $subcategory_provider = $group_category['comparte'];
            $subcategory_search = 'comparte';
            $subcategory_result = $group_category_publisher['comparte'];

            //Price
            $price = $group_profesional['precio_maximo_por_hora'];
            $price_search = 'precio_por_hora';
            break;
        case "Eventos":
            $subcategory_provider = $group_category['eventos'];
            $subcategory_search = 'eventos';
            $subcategory_result = $group_category_publisher['eventos'];

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