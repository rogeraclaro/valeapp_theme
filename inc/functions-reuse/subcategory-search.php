<?php

function category_search_filter($category_search, $category_group, &$subcategory){
    if ($category_search) {
        switch ($category_search) {
            case "Llar":
                $subcategory = $category_group['llar'];
                break;
            case "Aprèn":
                $subcategory = $category_group['apren'];
                break;
            case "Esport":
                $subcategory = $category_group['esport'];
                break;
            case "Ment":
                $subcategory = $category_group['ment'];
                break;
            case "Cuida els teus":
                $subcategory = $category_group['cuida els teus'];
                break;
            case "Bellesa":
                $subcategory = $category_group['bellesa'];
                break;
            case "Contracta":
                $subcategory = $category_group['contracta'];
                break;
            case "Comparteix":
                $subcategory = $category_group['comparteix'];
                break;
            case "Esdeveniments":
                $subcategory = $category_group['esdeveniments'];
                break;
        }
    }
}

?>