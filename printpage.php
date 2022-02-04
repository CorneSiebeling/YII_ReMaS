<?php
     require_once("config/config.inc.php");
     require_once(CLASSES_PATH . "rapportage.inc.php");
     $output = '
          <!DOCTYPE html>
          <html>';
     $output .= '
               <head>
                    <meta charset="UTF-8" />
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Superior Waste Recycling </title>
                    <meta name="keywords" content="Recycling bedrijf, Superior Waste, recycling">
                    <meta name="description" content="Superior Waste is een goed recycling bedrijf">
                    <meta name="subject" content="Superior Waste Recycling">
                    <meta name="copyright" content="NewApps">
                    <meta name="language" content="NL">
                    <meta name="robots" content="index,follow">
                    <meta name="author" content="Dik van Dalen">
                    <meta name="designer" content="Dik van Dalen">
                    <meta name="owner" content="Stichting Praktijkleren, Amersfoort">
                    <meta name="pagename" content="Stichting Praktijkleren, Superior Waste">
                    <meta name="rating" content="General">
                    <meta name="revisit-after" content="7 days">
                    <meta name="target" content="all">
                    <meta http-equiv="Expires" content="0">
                    <meta http-equiv="Pragma" content="no-cache">
                    <meta http-equiv="Cache-Control" content="no-cache">
                    <meta http-equiv="imagetoolbar" content="no">
                    <meta http-equiv="x-dns-prefetch-control" content="off">
                    
                    <link rel="stylesheet" href="' . CSS_PATH . 'bootstrap.min.css" />
                    <link rel="stylesheet" href="' . CSS_PATH . 'font-awesome/css/font-awesome.min.css" />
                    <link rel="stylesheet" href="' . CSS_PATH . 'jquery.css" />
                    <link rel="stylesheet" href="' . CSS_PATH . 'jquery.datetimepicker.min.css"  type="text/css" />
                    <link rel="stylesheet" href="' . CSS_PATH . 'style.css"  type="text/css" />
                    
                    <script src="' . JS_PATH . 'jquery.js"></script>
                    <script src="' . JS_PATH . 'bootstrap.min.js"></script>
                    <script src="' . JS_PATH . 'jquery-ui.js"></script>
                    <script src="' . JS_PATH . 'moment.js"></script>
                    <script src="' . JS_PATH . 'jquery.datetimepicker.full.min.js"></script>
                    
                    <script>$(document).ready(function()
                                              {    window.print();
                                              }
                                             ); 
                    </script>
               </head>';
         $output .=	'
               <body lang="nl">';
     // Content
          $printrapport = new clsRapportage($_POST["rapportnr"]);
          $printrapport = $printrapport->getRapport(); 
          $printrapport->getColumnHeader()->DeleteAllColumns();
          $printrapport->setTableDef();
          $output .=    
                   '<div id="main_container"' . $printrapport->getWidthClass() . '>' .
                         $printrapport->getGridHtml(). '
                    </div>
               </body>
          </html>';
              
          echo $output;

?>