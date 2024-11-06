<?php
$listadoTarefas = [
    [
        "id" => 1,
        "descripcion" => "Tarefa1 con espazos",
        "estado" => "Pendente de realizar "
    ],
    [
        "id" => 2,
        "descripcion" => "Tarefa2 con car@cteres especiais e espazos",
        "estado" => "En proceso por re@lizar`"
    ],
    [
        "id" => 3,
        "descripcion" => "Tarefa3 con espazos e caracteres especi```ais º",
        "estado" => "Completada @ t@refa``"
    ]
];

function novaTarefa(&$listadoTarefas){
    $novoArray = [
            "id" => 4,
            "descripcion" => "Tarefa4 con espazos",
            "estado" => "Pendente de realizar "
    ];

    array_push($listadoTarefas, $novoArray);
}


function filtrar($texto){
    return trim(preg_replace("/[^a-zA-Z0-9\s]/", "", $texto)); 
}

function comprobacion($texto){
    if(empty($texto)){
        return false;
    }

    if(strlen($texto) < 2){
        return false;
    }

    if (!preg_match("/[a-zA-Z]/", $texto)) {
        return false;
    }

    return true; 
}


function devolverTareas($listadoTarefas){
    foreach($listadoTarefas as $tarefas){

        $descripcionFiltrada = filtrar($tarefas["descripcion"]);
        $estadoFiltrado = filtrar($tarefas["estado"]);

        /*echo "Descripción filtrada: $descripcionFiltrada</br>"; Comento os "echo" para que no saian reflexados no exercicio 7.
        echo "Estado filtrado: $estadoFiltrado</br>";*/

        if(comprobacion($descripcionFiltrada)){
            //echo "A descripción é válida.</br>";
            return true;
        } else {
            //echo "A descripción NON é válida.</br>";
            return false;
        }

        if(comprobacion($estadoFiltrado)){
            //echo "O estado é válido.</br>";
            return true;
        } else {
            //echo "O estado NOn é válido.</br>";
            return false;
        }

        //echo "<br>"; 
    }
}

novaTarefa($listadoTarefas);


devolverTareas($listadoTarefas);

?>
