<!DOCTYPE html>
<html>
    <head>
        <?php require ('head.php');
        ?>
        <title>
        </title>
    </head>
    <body id="page-top" class="index">
        <?PHP 
            require('navbar.php');

            require($pageToDisplay.'.php');


            require('footer.php');
        ?>

        
            <!-- jQuery -->
    <script src="public/assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="src/assets/js/jqBootstrapValidation.js"></script>
    <script src="src/assets/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="public/assets/js/freelancer.min.js"></script>
    </body>
</html>