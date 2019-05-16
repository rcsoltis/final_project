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

if (isset($POST['fname'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $emergency = $_POST['emergency'];
    $accom = $_POST['accom'];
    $getage = $_POST['getage'];
    $getgender = $_POST['getgender'];
    $getrace = $_POST['getrace'];
    $getrole = $_POST['getrole'];


//run try/catch to insert data in database.

    try {
        $sql = 'INSERT INTO registration SET
            fname = :fname,
            lname = :lname,
            email = :email,
            emergency = :emergency,
            accom = :accom,
            getage = :getage,
            getgender = :getgender,
            getrace = :getrace,
            getrole = :getrole';
        
      $s = $pdo->prepare($sql);
      $s->bindValue(':fname', $fname);
      $s->bindValue(':lname', $lname);
      $s->bindValue(':email', $email);
      $s->bindValue(':emergency', $emergency);
      $s->bindValue(':accom', $accom);
      $s->bindValue(':getage', $getage);
      $s->bindValue(':getgender', $getgender);
      $s->bindValue(':getrace', $getrace);
      $s->bindValue(':getrole', $getrole);
      $s->execute();
    }
    catch (PDOException $e)
    {
        $error = 'Error adding submitted info.: ' . $e->getMessage();
        include 'error.html.php';
        exit();
    }

//load the thank you page after the INSERT runs

    include 'success.html.php';
    }

//add else to load the initial page if the if statement is false

else {
    include '../index.html.php';
}