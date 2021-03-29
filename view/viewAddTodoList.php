<?php
    require_once __DIR__ . "/../helper/input.php";
    require_once __DIR__ . "/../businessLogic/addTodoList.php";
    require_once __DIR__ . "/../model/todoList.php";
    function viewAddTodoList() {
        echo "MENAMBAH TODO" . PHP_EOL;

        $todo = input("Todo (x untuk batal) ");

        addTodoList($todo);

        if ($todo == "x") {
            echo "Batal menambah todo" . PHP_EOL;
        } else {
            addTodoList($todo);
        }
    } 