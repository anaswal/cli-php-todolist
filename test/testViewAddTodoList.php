<?php
    require_once "../businessLogic/addTodoList.php";
    require_once "../businessLogic/showTodoList.php";
    require_once "../view/viewAddTodoList.php";
    
    addTodoList("Anas");
    addTodoList("Walyulah");
    
    viewAddTodoList();
    showTodoList();

    addTodoList();