<?php

//connect to the database

try
{
   $pdo = new PDO('mysql:host=localhost;dbname=rcsoltis_cas222db', 'rcsoltis_cas222', 'p@ssw0rd');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"'); 
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include 'error.html.php';
    exit();
}

//  If statement only runs if the First Name field has been submitted and creates form fields stored as variables.

if (!empty($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $e_mail = $_POST['e_mail'];
    $comment = $_POST['comment'];
    $role_type = $_POST['role_type'];


//run try/catch to insert data in database.

    try {
        $sql = 'INSERT INTO comments SET
            firstname = :firstname,
            lastname = :lastname,
            e_mail = :e_mail,
            comment = :comment,
            role_type = :role_type';
        
      $s = $pdo->prepare($sql);
      $s->bindValue(':firstname', $firstname);
      $s->bindValue(':lastname', $lastname);
      $s->bindValue(':e_mail', $e_mail);
      $s->bindValue(':comment', $comment);
      $s->bindValue(':role_type', $role_type);
      $s->execute();
    }
    catch (PDOException $e)
    {
        $error = 'Error adding submitted info: ' . $e->getMessage();
        include 'error.html.php';
        exit();
    }

//load the thank you page after the INSERT runs
    include 'success.html.php';
    }

//add else to load the initial page if the if statement is false

else {

    header('Location: ../index.php');
}
