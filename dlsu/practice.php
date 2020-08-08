<?php 
    session_start();
    ob_start();
    include 'include/db.php';


    // $nowtime = date("Y-m-d H:i:s");
    // $timeonly = date("H:i:s");
    // $date = date('Y-m-d', strtotime($nowtime . ' + 7 hours'));
    // $time = date('h:i', strtotime($nowtime . ' + 8 hours'));
    // $_SESSION['date']=$date;
    // $_SESSION['time']=$time;

?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>De La Salle University</title>

        <meta name="description" content="De La Salle University (DLSU) is a leading university in the Philippines, renowned for its academic excellence, groundbreaking research, and empowering community engagement.">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>

        <!-- Page Container -->

        <div id="page-container" class="main-content-boxed">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div>
                    <div class="row mx-0">
<div class="container">
    
    <form action="practice_contact.php" method="post" class="ajax">
        <div>
            <input type="text" name="firstname">
        </div>
        <div>
            <input type="text" name="last">
        </div>
        <div>
            <input type="text" name="mid">
        </div>
        <input type="submit" value="send">
    </form>    

    <div id="ok">here</div>
</div>
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Terms Modal -->

        <!-- END Terms Modal -->


        <!-- <script src="include/jquery.js"></script> -->
        <script src="assets/js/codebase.core.min.js"></script>


        <script src="assets/js/codebase.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/op_auth_signup.min.js"></script>
        <script src="practice_query.js"></script>


    </body>
</html>