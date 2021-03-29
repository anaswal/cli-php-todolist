<?php
    require_once "../view/viewShowTodoList.php";
    require_once "../businessLogic/addTodoList.php";

    addTodoList("Anas");
    addTodoList("Walyullah");
    addTodoList("Martina");
    addTodoList("Eka");
    addTodoList("Hardyanti");

    showTodoList();

    viewShowTodoList();