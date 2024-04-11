<?php

if($subcategory_provider) {
    switch($subcategory_provider){
        case "Idiomas":
            $filter = $group_category['idiomas'];
            $filter_search = 'idiomas';
            $filter_result = $group_category_publisher['idiomas'];
            $filter_boolean = true;
        break;
        case "Instrumentos":
            $filter = $group_category['instrumentos'];
            $filter_search = 'instrumentos';
            $filter_result = $group_category_publisher['instrumentos'];
            $filter_boolean = true;
        break;
        case "Clases de repaso":
            $filter = $group_category['clases_de_repaso'];
            $filter_search = 'clases_de_repaso';
            $filter_result = $group_category_publisher['clases_de_repaso'];
            $filter_boolean = true;
        break;
        case "Baile":
            $filter = $group_category['baile'];
            $filter_search = 'baile';
            $filter_result = $group_category_publisher['baile'];
            $filter_boolean = true;
        break;
        case "Gim":
            $filter = $group_category['gim'];
            $filter_search = 'gim';
            $filter_result = $group_category_publisher['gim'];
            $filter_boolean = true;
        break;
        case "Artes marciales":
            $filter = $group_category['artes_marciales'];
            $filter_search = 'artes_marciales';
            $filter_result = $group_category_publisher['artes_marciales'];
            $filter_boolean = true;
        break;
        case "De palo":
            $filter = $group_category['De_palo'];
            $filter_search = 'De_palo';
            $filter_result = $group_category_publisher['De_palo'];
            $filter_boolean = true;
        break;
        case "Con balón":
            $filter = $group_category['con_balon'];
            $filter_search = 'con_balon';
            $filter_result = $group_category_publisher['con_balon'];
            $filter_boolean = true;
        break;
        case "Con raqueta":
            $filter = $group_category['con_raqueta'];
            $filter_search = 'con_raqueta';
            $filter_result = $group_category_publisher['con_raqueta'];
            $filter_boolean = true;
        break;
        case "Al agua":
            $filter = $group_category['al_agua'];
            $filter_search = 'al_agua';
            $filter_result = $group_category_publisher['al_agua'];
            $filter_boolean = true;
        break;
        case "Al aire":
            $filter = $group_category['al_aire'];
            $filter_search = 'al_aire';
            $filter_result = $group_category_publisher['al_aire'];
            $filter_boolean = true;
        break;
        case "Sobre ruedas":
            $filter = $group_category['sobre_ruedas'];
            $filter_search = 'sobre_ruedas';
            $filter_result = $group_category_publisher['sobre_ruedas'];
            $filter_boolean = true;
        break;
        case "Mascotas":
            $filter = $group_category['mascotas'];
            $filter_search = 'mascotas';
            $filter_result = $group_category_publisher['mascotas'];
            $filter_boolean = true;
        break;
        case "Niños":
            $filter = $group_category['ninos'];
            $filter_search = 'ninos';
            $filter_result = $group_category_publisher['ninos'];
            $filter_boolean = true;
        break;
        case "Personas mayores":
            $filter = $group_category['personas_mayores'];
            $filter_search = 'personas_mayores';
            $filter_result = $group_category_publisher['personas_mayores'];
            $filter_boolean = true;
        break;
        case "Au pair":
            $filter = $group_category['au_pair'];
            $filter_search = 'au_pair';
            $filter_result = $group_category_publisher['au_pair'];
            $filter_boolean = true;
        break;
        case "Seguridad":
            $filter = $group_category['seguridad'];
            $filter_search = 'seguridad';
            $filter_result = $group_category_publisher['seguridad'];
            $filter_boolean = true;
        break;
        case "Masajes":
            $filter = $group_category['masajes'];
            $filter_search = 'masajes';
            $filter_result = $group_category_publisher['masajes'];
            $filter_boolean = true;
        break;
        case "Peluquería":
            $filter = $group_category['peluqueria'];
            $filter_search = 'peluqueria';
            $filter_result = $group_category_publisher['peluqueria'];
            $filter_boolean = true;
        break;
        case "Tratamientos":
            $filter = $group_category['tratamientos'];
            $filter_search = 'tratamientos';
            $filter_result = $group_category_publisher['tratamientos'];
            $filter_boolean = true;
        break;
        case "Uñas":
            $filter = $group_category['unas_servicio'];
            $filter_search = 'unas_servicio';
            $filter_result = $group_category_publisher['unas_servicio'];
            $filter_boolean = true;
        break;
        case "Depilación":
            $filter = $group_category['depilacion'];
            $filter_search = 'depilacion';
            $filter_result = $group_category_publisher['depilacion'];
            $filter_boolean = true;
        break;
        case "Dental":
            $filter = $group_category['dental'];
            $filter_search = 'dental';
            $filter_result = $group_category_publisher['dental'];
            $filter_boolean = true;
        break;
    };
};

if($filter_boolean){
    $filter_query = [
        'key' => 'categorias_'.$filter_search,
        'value'=> $filter,
        'compare' => '=',
    ];
};

?>