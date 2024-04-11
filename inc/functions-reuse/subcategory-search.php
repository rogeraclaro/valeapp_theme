<?php

function category_search_filter($category_search, $category_group, &$subcategory){
    if ($category_search) {
        switch ($category_search) {
            case "Hogar":
                $subcategory = $category_group['hogar'];
                break;
            case "Aprende":
                $subcategory = $category_group['aprende'];
                break;
            case "Deporte":
                $subcategory = $category_group['deporte'];
                break;
            case "Mente":
                $subcategory = $category_group['mente'];
                break;
            case "Cuidados":
                $subcategory = $category_group['cuidados'];
                break;
            case "Belleza":
                $subcategory = $category_group['belleza'];
                break;
            case "Contrata":
                $subcategory = $category_group['contrata'];
                break;
            case "Comparte":
                $subcategory = $category_group['comparte'];
                break;
            case "Eventos":
                $subcategory = $category_group['eventos'];
                break;
        }
    }
}

?>