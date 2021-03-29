<?php
    require_once __DIR__ . "/../helper/input.php";
    require_once __DIR__ . "/../businessLogic/removeTodoList.php";
    
    function viewRemoveTodoList() {
        echo "Menghapus TODO" . PHP_EOL;

        $pilihan = input("Nomor (x untuk batalkan) ");

        if($pilihan == "x") {
            echo "Batal menghapus TODO" . PHP_EOL;
        } else {
            $success = removeTodoList($pilihan);

            if ($sucess) {
                echo "Sukses menghapus TODO" . PHP_EOL;
            } else {
                echo "Gagal menghapus TODO nomor $pilihan" . PHP_EOL;
            }
        }
    }