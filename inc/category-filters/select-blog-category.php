<?php

function select_category($filter)
{
    $filters = [
        'Esdeveniments' => 'Eventos',
        'Comparteix' => 'Comparte',
        'Contracta' => 'Contrata',
        'Bellesa' => 'Belleza',
        'Cuida_els_teus' => 'Cuidados',
        'Ment' => 'Mente',
        'Esport' => 'Deporte',
        'Aprèn' => 'Aprende',
        'Llar' => 'Hogar'
    ];

    $specific_filters = [
        'Esdeveniments' => [
            'Empreses', 'Noces', 'Comiats_o_aniversari', 
            'Dj_o_musica_en_viu', 'Promocionals', 'Sense_animo_de_lucre'
        ],
        'Comparteix' => [
            'Espai', 'Estudi', 'Consulta', 
            'Equips', 'Material', 'Pista'
        ],
        'Contracta' => [
            'Publicitat', 'Desenvolupament_i_app', 'Analisi_de_dades', 
            'Legal', 'Traduccions', 'Xarxes_socials', 
            'Foto_video', 'Hostaleria', 'Guia_turistic', 
            'Agent_viatges', 'Influencers'
        ],
        'Bellesa' => [
            'Perruqueria', 'Tractaments', 'Ungles', 
            'Maquillatge', 'Depilacio', 'Dental'
        ],
        'Cuida_els_teus' => [
            'Mascotes', 'Nens', 'Gent_gran', 
            'Au_pair', 'Seguretat', 'Massatges', 'Dietes'
        ],
        'Ment' => [
            'Entrenador', 'Psicologia', 'Tarot', 
            'Terapies_de_parella', 'Meditacio', 'Ioga', 
            'Terapies_alternatives'
        ],
        'Esport' => [
            'Gimnas', 'Arts_marcials', 'De_pal', 
            'Amb_pilota', 'Amb_raqueta', 'Al_aigua', 
            'Al_aire', 'Sobre_rodes'
        ],
        'Aprèn' => [
            'Idiomes', 'Instruments', 'Classes_de_repas', 
            'Ball', 'Inversions', 'Pintura', 
            'Fotografia', 'Jocs', 'Poquer', 'Cuina'
        ],
        'Llar' => [
            'Fontaneria', 'Neteja', 'Pintar_cases', 
            'Mudanca', 'Obres', 'Electricitat', 
            'Muntatge_mobles', 'Mecanic', 'Solucions_eco'
        ]
    ];

    if (isset($filters[$filter])) {
        return $filters[$filter];
    }

    foreach ($specific_filters as $category => $values) {
        if (in_array($filter, $values)) {
            return $filters[$category];
        }
    }

    return $filter;
}

?>
