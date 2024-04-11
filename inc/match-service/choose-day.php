<?php

//Choose day and translate in spanish

if ($day) {
    switch ($day) {
        case "Monday":
            $day_date = "Lunes";
            $day_search = 'lunes';
            $schedule = 'horario_lunes';
            $start_time = 'hora_de_inicio_l';
            $end_time = 'hora_final_l';
            break;
        case "Tuesday":
            $day_date = "Martes";
            $day_search = 'martes';
            $schedule = 'horario_martes';
            $start_time = 'hora_de_inicio_m';
            $end_time = 'hora_final_m';
            break;
        case "Wednesday":
            $day_date = "Miércoles";
            $day_search = 'miercoles';
            $schedule = 'horario_miercoles';
            $start_time = 'hora_de_inicio_mm';
            $end_time = 'hora_final_mm';
            break;
        case "Thursday":
            $day_date = "Jueves";
            $day_search = 'jueves';
            $schedule = 'horario_jueves';
            $start_time = 'hora_de_inicio_j';
            $end_time = 'hora_final_j';
            break;
        case "Friday":
            $day_date = "Viernes";
            $day_search = 'viernes';
            $schedule = 'horario_viernes';
            $start_time = 'hora_de_inicio_v';
            $end_time = 'hora_final_v';
            break;
        case "Saturday":
            $day_date = "Sábado";
            $day_search = 'sabado';
            $schedule = 'horario_sabado';
            $start_time = 'hora_de_inicio_s';
            $end_time = 'hora_final_s';
            break;
        case "Sunday":
            $day_date = "Domingo";
            $day_search = 'domingo';
            $schedule = 'horario_domingo';
            $start_time = 'hora_de_inicio_d';
            $end_time = 'hora_final_d';
            break;
    }
    ;
} 

?>