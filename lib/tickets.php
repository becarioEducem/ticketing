<?php
    //TODO #10: COMPLETA AQUESTA FUNCIÓ PER COMPTAR QUANTS TICKETS CONTÉ CADA CATEGORIA
    //? PARAM1: NOM DE LA CATEGORIA
    //? PARAM2: ARRAY DE TICKETS
    //? RETURN: ENTER CORRESPONET AL NÚMERO DE TICKETS QUE CONTÉ LA CATEGORIA
    function categoryCount($category,$tickets) {
        $count = 0;
        //FILL WITH CODE
        return $count;
    }

    //* FUNCIÓ JA COMPLETADA QUE RETORNA EL COLOR CORRESPONENT A LA CATEGORIA
    //* INTERESSA UTILITZAR-LA PER DONAR VALOR A LA VARIABLE $color de ticketSummary.php
    function categoryColor($category){
        $label = 'label-default';
        switch ($category) {
            case 'bug'      : $label = 'bg-red'; break;
            case 'feature'  : $label = 'bg-green'; break;
            case 'ap'       : $label = 'bg-orange'; break;
            case 'info'     : $label = 'bg-blue'; break;
            case 'default'  : $label = 'bg-teal';
        }
        return $label;
    }

    //TODO #11: COMPLETA AQUESTA FUNCÓ PER UTILITZAR-LA COM A NOM D'ETIQUETA DE CATEGORIA
    //? PARAM1: NOM DE LA CATEGORIA
    //? RETURN: TEXT CORRESPONENT AL NOM DE L'ETIQUETA DE CATEGORIA. Exemple: bug -> Error; feature -> Millora
    function categoryName($category){
        $label = 'Altres';
        //FILL WITH CODE
        return $label;
    }

    //! POTS AFEGIR MÉS FUNCIONS SI ÉS NECESARI