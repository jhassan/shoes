<html>
    <head>
        <title>Shoes</title>
        <!-- load jquery ui css-->
        <link rel="stylesheet" href="css/style.css" />
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript">
        $(function() {
            $( "#shoes_size_code" ).autocomplete({
                source: 'index.php'
            });
        });
        </script>
    </head>
    <body>

        <?php    include_once('front_functions.php');?>
