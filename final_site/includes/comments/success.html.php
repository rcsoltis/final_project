<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ace In The Hole Comments or Questions</title>
    <meta name="description" content="register for the most inclusive multi-sport event in the nation.">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/reset.css" rel="stylesheet" type="text/css">
    <link href="../../css/helper.css" rel="stylesheet" type="text/css">
    <link href="../../css/grid.css" rel="stylesheet" type="text/css">
    <link href="../../css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <nav>
        <ul id="navLinks">
            <!--Links default hidden in mobile-->
            <li><a href="../../index.php">Back to Home</a></li>
        </ul>

    </nav>

</head>

<body>

    <main>
        <h1>Thank you!</h1>
        <p>Our records show you submitted the following:<br>
            First Name: <?php echo htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8'); ?>
            <!-- print first name from form submission here --><br>
            Last Name: <?php echo htmlspecialchars ($lastname, ENT_QUOTES, 'UTF-8'); ?>
            <!-- print last name from form submission here --><br>
            E-mail: <?php echo htmlspecialchars ($e_mail, ENT_QUOTES, 'UTF-8'); ?>
            <!-- print email from form submission here --><br>
            Comment or Question: <?php echo htmlspecialchars ($comment, ENT_QUOTES, 'UTF-8'); ?><br>
            Role: <?php echo htmlspecialchars ($role_type, ENT_QUOTES, 'UTF-8'); ?>
            <!-- print race role from form submission here --><br>
        </p>
    </main>
</body>

</html>
