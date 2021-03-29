<?php
    require_once __DIR__ . "/../businessLogic/showTodoList.php";
    require_once __DIR__ . "/../view/viewRemoveTodoList.php";
    require_once __DIR__ . "/../view/viewAddTodoList.php";
    require_once __DIR__ . "/../helper/input.php";
    require_once __DIR__ . "/../model/todoList.php";

    function viewShowTodoList() {
        while(true) {
            showTodoList();

            echo "MENU" . PHP_EOL;
            echo "1. Tambah Todo" . PHP_EOL;
            echo "2. Hapus Todo" . PHP_EOL;
            echo "x. Keluar" . PHP_EOL;

            $pilihan = input("Pilih : ");

            if ($pilihan == "1") {
                viewAddTodoList();
            } else if ($pilihan == "2") {
                viewRemoveTodoList();
            } else if ($pilihan == "x") {
                break;
            } else {
                echo "Pilihan tidak dimengerti" . PHP_EOL;
            }
        }
        echo "Sampai Jumpa" . PHP_EOL;
    }