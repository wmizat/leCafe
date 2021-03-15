<?php
        // require __DIR__.'/./src/config/db.php';
        $db = new db();
        $pdo = $db->connect();
        //echo 'Congratulations Database is working, that great'; //check database connection
        $message = '';
        $id = $_GET['id'];
        $sql = 'DELETE FROM users WHERE id=:id';
        $statement = $pdo->prepare($sql);
        if ($statement->execute([':id' => $id])) {
            //$message = 'data successfully deleted';
            echo '<p class="alert alert-success">data successfully deleted</p>';
            header("refresh:1.5 /");
        }
    