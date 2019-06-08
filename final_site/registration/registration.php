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

if (!empty($_POST['fname'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $emergencyName = $_POST['emergencyName'];
    $emergencyNum = $_POST['emergencyNum'];
    $accom = $_POST['accom'];
    $getage = $_POST['getage'];
    $getgender = $_POST['getgender'];
    $getrace1 = $_POST['getrace1'];
    $getrace2 = $_POST['getrace2'];
    $getrole = $_POST['getrole'];


//run try/catch to insert data in database.

    try {
        $sql = 'INSERT INTO registration SET
            fname = :fname,
            lname = :lname,
            email = :email,
            emergencyName = :emergencyName,
            emergencyNum = :emergencyNum,
            accom = :accom,
            getage = :getage,
            getgender = :getgender,
            getrace1 = :getrace1,
            getrace2 = :getrace2,
            getrole = :getrole';
        
      $s = $pdo->prepare($sql);
      $s->bindValue(':fname', $fname);
      $s->bindValue(':lname', $lname);
      $s->bindValue(':email', $email);
      $s->bindValue(':emergencyName', $emergencyName);
      $s->bindValue(':emergencyNum', $emergencyNum);
      $s->bindValue(':accom', $accom);
      $s->bindValue(':getage', $getage);
      $s->bindValue(':getgender', $getgender);
      $s->bindValue(':getrace1', $getrace1);
      $s->bindValue(':getrace2', $getrace2);
      $s->bindValue(':getrole', $getrole);
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
