<?php
    require_once "../model/todoList.php";
    require_once "../businessLogic/addTodoList.php";

    addTodoList("Martina");
    addTodoList("Eka");
    addTodoList("Hardyanti");

    var_dump($todoList);