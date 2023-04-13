<?php

//RECUPERIAMO IL CONTENUTO DEL JSON
$database = file_get_contents(__DIR__ . '/todo-list.json'); // <---- STRINGA !!!

// TRASFORMIAMO IL JSON IN UN ARRAY ASSOCIATIVO 
$todo_list = json_decode($database, true); // <---- ARRAY ASSOCIATIVO !!!


// .........ELABORAZIONE DATI..............









// .........ELABORAZIONE DATI..............


// RESTITUIAMO I DATI JSON 

// DICIAMO ALLA PAGINA CHE SARA' UN JSON 
header('Content-Type: application/json');

// RITRASFORMIAMO L'ARRAY ASSOCIATIVO IN UNA STRINGA (JSON) E LA SCRIVIAMO A SCHERMO 
echo json_encode($todo_list); //  <---- STRINGA !!!