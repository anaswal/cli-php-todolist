<?php
    require_once "../model/todoList.php";
    require_once "../businessLogic/removeTodoList.php";
    require_once "../businessLogic/addTodoList.php";
    require_once "../businessLogic/showTodoList.php";
    
    addTodoList("Martina");
    addTodoList("Eka");
    addTodoList("Hardyanti");
    addTodoList("Anas");
    addTodoList("Walyullah");

    showTodoList();

    removeTodoList(3);

    showTodoList();

    removeTodoList(5);
    $success = removeTodoList(5); // tidak ada key ke 5
    var_dump($success);