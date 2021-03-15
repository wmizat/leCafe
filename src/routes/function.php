<?php

//get all users
function getAllUser($db)
{
$sql = 'SELECT * FROM  users';
$stmt = $db->prepare ($sql);
$stmt ->execute();
return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

//get user by id
function getUser($db, $id)
{
$sql = 'SELECT * FROM users where id = $id';
$stmt = $db->prepare ($sql);
$idUser = (int) $id;
$stmt->bindParam(':id', $idUser, PDO::PARAM_INT);
$stmt->execute();
return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

//add new product
function createUser($db, $form_data) {
    $sql = 'INSERT INTO users(name, email)';
    $stmt = $db->prepare ($sql);
    $stmt->bindParam(':name', $form_data['name']);
    $stmt->bindParam(':email', $form_data['email']);
    $stmt->execute();
    return $db->lastInsertID();//insert last number.. continue
    }

//update existing record - insert ID by url
function updateProduct($db, $productId, $form_data) {
    $sql = "UPDATE users SET name=:name, email=:email WHERE id=:id";
    
    // echo $sql;
    $stmt = $db->prepare ($sql);
    $id = (int)$productId;
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':name', $form_data['name']);
    $stmt->bindParam(':email', $form_data['email']);
    $stmt->execute();
    return $stmt->rowCount();
    }
//delete existing record
// function deleteProduct($db, $productId) {
//     $sql = 'DELETE FROM products WHERE id = :id';
//     $stmt = $db->prepare ($sql);
//     $id = (int) $productId;
//     $stmt->bindParam(':id', $id, PDO::PARAM_INT);
//     $stmt->execute();
//     }
    
//delete existing record
function deleteUser($db, $id) {
    $sql = 'DELETE FROM products WHERE id = :id';
    $stmt = $db->prepare ($sql);
    $idUser = (int) $id;
    $stmt->bindParam(':id', $idUser, PDO::PARAM_INT);
    $stmt->execute();
    }
