<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shoes</title>
        <!-- load  CSS-->
        <link rel="stylesheet" href="css/bootstrap3.3.5.min.css">
        <link rel="stylesheet" href="css/portfolio-4-col.css">
        <link rel="stylesheet" href="css/style.css">
 
    <script src="bower_components/jquery/dist/jquery.min.js"></script>    
    <script type="text/javascript">
        // $(function() {
        //     $( "#shoes_size_code" ).autocomplete({
        //         source: 'index.php'
        //     });
        // });
    </script>
    <style type="text/css">
        @page  { size: auto;  margin: 0mm; }
        
                    table {
        border-collapse: collapse;
                    }
                    
                    table, th, td {
                                    font-family:Verdana;
                    }
                    .border tr td{ padding: 2px !important;
                    }
                    .border tr th{ padding: 2px !important;
                    }
                    .cursor{ cursor:pointer;}
                    
        </style>
    <style type="text/css" media="print">

    @media  print {
           
                                body {margin:0px !important; padding: 0px !important;}
                    /*#InvoiceDiv, #InvoiceDiv * {
                            visibility: visible;
                    }*/
                    #InvoiceDiv {
                            position: absolute;
                            left: 0px;
                            top: 0px;
                    }
                    body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,p,blockquote,th,td { 
        margin:0;
        padding:0;
    }
    .html,.body {
        margin:0;
        padding:0;
    }
       .noprint{ display: none !important; }
        }
    </style>

</head>
<?php include_once('front_functions.php');?>
<body>
        <!-- Navigation -->
    <div class=""> 
        <div class="bs-example" data-example-id="inverted-navbar">
            <nav class="navbar navbar-inverse">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/shoes/sale">Shoes</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="today_sale">Today Sale</a>
                    </li>
                    <li>
                        <a href="">Return Invoice</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
    </div>
        
