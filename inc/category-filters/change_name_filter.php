<?php
function change_filter($title){
    $variable = "";
    if($title) {
        switch($title) {
            case "empresas":
                $variable = "Empreses";
            break;
            case "bodas":
                $variable = "Noces";
            break;
            case "despedidas-o-cumpleanos":
                $variable = "Comiats o aniversari";
            break;
            case "dj-o-musica-en-vivo":
                $variable = "DJ o música en viu";
            break;
            case "promocionales":
                $variable = "Promocionals";
            break;
            case "sin-animo-de-lucro":
                $variable = "Sense anim de lucre";
            break;

            case "espacio":
                $variable = "Espai";
            break;
            case "estudio":
                $variable = "Estudi";
            break;
            case "consulta":
                $variable = "Consulta";
            break;
            case "equipos":
                $variable = "Equips";
            break;
            case "material":
                $variable = "Material";
            break;
            case "pista":
                $variable = "Pista";
            break;

            case "publicidad":
                $variable = "Publicitat";
            break;
            case "desarrollo-y-app":
                $variable = "Desarrollo y app";
            break;
            case "analisis-de-datos":
                $variable = "Anàlisi de dades";
            break;
            case "legal":
                $variable = "Legal";
            break;
            case "traducciones":
                $variable = "Traduccions";
            break;
            case "redes-sociales":
                $variable = "Xarxes socials";
            break;
            case "foto-video":
                $variable = "Foto vídeo";
            break;
            case "agente-viajes":
                $variable = "Agent viatges";
            break;
            case "hosteleria":
                $variable = "Hostaleria";
            break;
            case "guia-turistico":
                $variable = "Guía turístico";
            break;
            case "influencers":
                $variable = "Influencers";
            break;

            case "peluqueria":
                $variable = "Perruqueria";
            break;
            case "tratamientos":
                $variable = "Tractaments";
            break;
            case "unas":
                $variable = "Ungles";
            break;
            case "maquillaje":
                $variable = "Maquillatge";
            break;
            case "depilacion":
                $variable = "Depilació";
            break;
            case "dental":
                $variable = "Dental";
            break;

            case "mascotas":
                $variable = "Mascotes";
            break;
            case "ninos":
                $variable = "Nens";
            break;
            case "Gent gran":
                $variable = "personas-mayores";
            break;
            case "Au pair":
                $variable = "au-pair";
            break;
            case "Seguretat":
                $variable = "seguridad";
            break;
            case "Masajes":
                $variable = "masajes";
            break;
            case "Dietes":
                $variable = "dietas";
            break;

            case "coach":
                $variable = "Entrenador";
            break;
            case "psicologia":
                $variable = "Psicologia";
            break;
            case "tarot":
                $variable = "Tarot";
            break;
            case "terapias-de-pareja":
                $variable = "Teràpies de parella";
            break;
            case "meditacion":
                $variable = "Meditació";
            break;
            case "yoga":
                $variable = "Ioga";
            break;
            case "terapias-alternativas":
                $variable = "Teràpies alternatives";
            break;

            case "gim":
                $variable = "Gimnàs";
            break;
            case "artes-marciales":
                $variable = "Arts marcials";
            break;
            case "de-palo":
                $variable = "De pal";
            break;
            case "con-balon":
                $variable = "Amb pilota";
            break;
            case "con-raqueta":
                $variable = "Amb raqueta";
            break;
            case "al-agua":
                $variable = "A l'aigua";
            break;
            case "al-aire":
                $variable = "A l'aire";
            break;
            case "sobre-ruedas":
                $variable = "Sobre rodes";
            break;

            case "idiomas":
                $variable = "Idiomes";
            break;
            case "instrumentos":
                $variable = "Instruments";
            break;
            case "clases-de-repaso":
                $variable = "Classes de repàs";
            break;
            case "baile":
                $variable = "Ball";
            break;
            case "inversiones":
                $variable = "Inversions";
            break;
            case "pintura":
                $variable = "Pintura";
            break;
            case "fotografia":
                $variable = "Fotografia";
            break;
            case "gaming":
                $variable = "Jocs";
            break;
            case "poker":
                $variable = "Pòquer";
            break;
            case "cocina":
                $variable = "Cuina";
            break;

            case "fontaneria":
                $variable = "Lampista";
            break;
            case "limpieza":
                $variable = "Neteja";
            break;
            case "pintura":
                $variable = "Pintar cases";
            break;
            case "mudanza":
                $variable = "Mudança";
            break;
            case "obras":
                $variable = "Obres";
            break;
            case "electricidad":
                $variable = "Electricitat";
            break;
            case "montaje-muebles":
                $variable = "Muntatge mobles";
            break;
            case "mecanico":
                $variable = "Mecànic";
            break;
            case "soluciones-eco":
                $variable = "Solucions ECO";
            break;
        };
    };
    return $variable;
}