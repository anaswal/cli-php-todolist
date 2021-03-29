<?php 
    require_once __DIR__ . "/model/todolist.php";
    require_once __DIR__ . "/businessLogic/addTodoList.php";
    require_once __DIR__ . "/businessLogic/showTodoList.php";
    require_once __DIR__ . "/businessLogic/removeTodoList.php";
    require_once __DIR__ . "/view/viewAddTodoList.php";
    require_once __DIR__ . "/view/viewShowTodoList.php";
    require_once __DIR__ . "/view/viewRemoveTodoList.php";
    require_once __DIR__ . "/helper/input.php";
    
    echo "Hello todolist" . PHP_EOL;
    
    viewShowTodoList();