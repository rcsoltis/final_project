<!doctype html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta charset="utf-8">
    <meta name="author" content="cary soltis">

    <title>Title | Event</title>

    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/helper.css" rel="stylesheet" type="text/css">
    <link href="css/grid.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body onload="initPage();">
    <!-- js event handler automatically runs some code to populate the select item-->

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>

    <?php include 'includes/nav.inc.html.php';?>
    <?php include 'includes/header.inc.html.php';?>

    <main>
        <section>
            <h2>Heading 2 (h2)</h2>
            <div class="section group">
                <p class="col span_6_of_12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p class="col span_6_of_12">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </section>
        <div class="section group">
            <section class="col span_6_of_12" id="event">
                <h2>Heading 2 (h2)</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </section>

            <section class="col span_6_of_12">
                <h2>Heading 2 (h2)</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </section>
        </div>
        <section id="registration">
            <h2>Heading 2 (h2)</h2>
            <form method="post" action=" ">
                <label for="fname">First name:</label><input type="text" id="fname" name="fname"><br>
                <label for="lname">Last name:</label><input type="text" id="lname" name="lname"><br>
                <label for="email">E-mail:</label><input type="email" id="email" name="email"><br>
                <label for="emergency">Emergency Contact:</label><input type="text" id="emergency" name="emergency"><br>
                <label for="accom">Any Accom?:</label><input type="text" id="accom" name="accom"><br>

                <label>Age:</label>
                <select size="1" id="getage" name="getage">
                    <option>Age group</option>
                    <option value="under18">Under 18</option>
                    <option value="18-29">18-29</option>
                    <option value="30-44">30-44</option>
                    <option value="45-59">45-59</option>
                    <option value="60-74">60-74</option>
                    <option value="75-89">75-89</option>
                    <option value="90-104">90-104</option>
                </select><br>

                <label>Gender ID:</label>
                <select id="getgender" name="getgender">
                    <option>Gender ID</option>
                    <option value="non-binary">non-binary</option>
                    <option value="female">female</option>
                    <option value="male">male</option>
                </select><br>

                <label>Race Type:</label>
                <select  id="getrace" name="getrace">
                    <option>Race Type</option>
                     <option value="long course">long course</option>
                     <option value="olympic">olympic</option>
                     <option value="10K">10K</option>
                     <option value="half-marathon">half marathon</option>
                     <option value="sprint">sprint</option>
                    <option value="try-a-tri">try-a-tri</option>
                    <option value="splash-n-dash">spash-n-dash(ages 15 and under)</option>
                </select><br>

                <label>Role:</label>
                <select id="getrole" name="getrole">
                    <option>Race Role</option>
                    <option value="athlete">Athlete</option>
                    <option value="volunteer">Volunteer</option>
                </select><br>

                <input id=mysubmit type="submit" value="Submit">

            </form>

        </section>

        <div class="section group">

            <section class="col span_6_of_12">
                <h2>Heading 2 (h2)</h2>
                <ul>
                    <li>FAQ</li>
                    <li>FAQ</li>
                    <li>FAQ</li>
                    <li>FAQ</li>
                    <li>FAQ</li>
                </ul>
            </section>

            <section class="col span_6_of_12" id="images">
                <h2>Heading 2 (h2)</h2>
                <img src="images/grey-rectangle.png">(Image Gallery)
            </section>
        </div>
    </main>

    <?php include 'includes/footer.inc.html.php';?>

    <!--Link to external JavaScript stylesheet for nav-->

    <script src="js/hamburger.js"></script>
    <!--<script src="js/selects.js"></script>-->
</body>

</html>
