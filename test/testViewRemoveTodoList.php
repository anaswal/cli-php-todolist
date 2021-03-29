<?php
    require_once "../businessLogic/addTodoList.php";
    require_once "../businessLogic/showTodoList.php";
    require_once "../model/todoList.php";
    require_once "../view/viewRemoveTodoList.php";

    addTodoList("Anas");
    addTodoList("Walyullah");
    addTodoList("Martina");
    addTodoList("Eka");
    addTodoList("Hardyanti");

    showTodoList();

    viewRemoveTodoList();

    showTodoList();
