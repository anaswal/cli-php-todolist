<?php
    require_once "../businessLogic/showTodoList.php";
    require_once "../model/todoList.php";

    $todoList[1] = "Belajar PHP dasar";
    $todoList[2] = "Belajar PHP oop";
    $todoList[3] = "Belajar PHP web";

    showTodoList();