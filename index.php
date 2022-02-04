<?php
     require_once("config/config.inc.php");
     
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
                    
                    <script src="' . JS_PATH . 'functions.js"></script>
               </head>';
         $output .=	'
               <body lang="nl">
                         <div class="container-fluid">';
     // Top	
     $output .= '             <nav class="navbar bg-success">
                                   <div class="container-fluid">
                                        <div class="navbar-header">
                                             <span class="navbar-brand">ReMaS&nbsp&nbsp;Superior Waste Recycling</span>
                                        </div>
                                        <div>
                                             <span class="nav navbar-nav navbar-right navbar-text">
                                                  versie: 1.00&nbsp&nbsp;<span id="ingelogd_als"></span>&nbsp&nbsp;
                                                  <span id="menu_knop_uitloggen" class="fa fa-sign-out btn btn-success hidden" 
                                                        onclick="Logout()"></span>&nbsp&nbsp;&nbsp&nbsp;
                                             </span>
                                        </div>
                                   </div>
                              </nav>
                         </div>
                         
                         <div class="container-fluid">';
     // Menu
     $output .= '             <div class="row">
                                   <div id="menu_links" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 sidebar">' .
                                       '<img class="img-responsive" src="images/superiorwaste.png">' . // [[320]]
                                       '<ul class="nav nav-sidebar">
                                             <li id="menu_knop_inname" class="menu_knop hidden">
                                                  <a href="#"
                                                     onclick="LoadMainContainer(' . "'inname.php'" . ')">Inname
                                                  </a>
                                             </li>
                                             <li id="menu_knop_verwerking" class="menu_knop hidden">
                                                  <a href="#" 
                                                     onclick="LoadMainContainer(' . "'ontleden.php'" . ')">Verwerking
                                                  </a>
                                             </li>
                                             <li id="menu_knop_uitgifte" class="menu_knop hidden">
                                                  <a href="#"
                                                     onclick="LoadMainContainer(' . "'uitgifte.php'" . ')">Uitgifte
                                                  </a>
                                             </li>
                                             <li id="menu_knop_rapportage" class="menu_knop hidden">
                                                  <a href="#" id="sub_menu_knop_rapportage" data-toggle="collapse" 
                                                     data-target="#submenu_rapportage" aria-expanded="false">Rapportage
                                                  </a>     
                                                  <ul class="nav collapse sub_menu" id="submenu_rapportage" role="menu" 
                                                      aria-labelledby="menu_knop_rapportage">
                                                       <li>
                                                            <a href="#"
                                                               onclick="LoadMainContainer(' . "'rapportage.php?r=1'" . ')">Inkoop <!--[[330]]-->
                                                            </a>
                                                       </li>
                                                       <li>
                                                            <a href="#" 
                                                               onclick="LoadMainContainer(' . "'rapportage.php?r=2'" . ')">Werkvoorraad
                                                            </a>
                                                       </li>
                                                       <li>
                                                            <a href="#"
                                                               onclick="LoadMainContainer(' . "'rapportage.php?r=3'" . ')">Verkoop <!--[[330]]-->
                                                            </a>
                                                       </li>
                                                       <li>
                                                            <a href="#"
                                                               onclick="LoadMainContainer(' . "'rapportage.php?r=4'" . ')">Rendement
                                                            </a>
                                                       </li>
                                                  </ul>
                                             </li>   
                                             <li id="menu_knop_onderhoud" class="menu_knop hidden">
                                                  <a href="#" id="sub_menu_knop_onderhoud" data-toggle="collapse" 
                                                     data-target="#submenu_onderhoud" aria-expanded="false">Onderhoud
                                                  </a>
                                                  <ul class="nav collapse sub_menu" id="submenu_onderhoud" role="menu" aria-labelledby="menu_knop_onderhoud">
                                                       <li id="menu_knop_gebruikers" class="menu_knop hidden">
                                                            <a href="#" id="sub_menu_knop_gebruikers" data-toggle="collapse" 
                                                               data-target="#submenu_gebruikers" aria-expanded="false">Medewerkers
                                                            </a>
                                                            <ul class="nav collapse sub_menu" id="submenu_gebruikers" role="menu" aria-labelledby="menu_knop_gebruikers">
                                                                 <li>
                                                                      <a href="#"
                                                                         onclick="LoadMainContainer(' . "'gebruikers.php'" . ')">&nbsp;&nbsp;&nbsp;&nbsp;Gebruikers
                                                                      </a>
                                                                 </li>
                                                                 <li>
                                                                      <a href="#" 
                                                                         onclick="LoadMainContainer(' . "'rollen.php'" . ')">&nbsp;&nbsp;&nbsp;&nbsp;Rollen
                                                                      </a>
                                                                 </li>
                                                            </ul>
                                                       </li>
                                                       <li>
                                                            <a href="#" 
                                                               onclick="LoadMainContainer(' . "'apparaten.php'" . ')">Apparaten</a>
                                                       </li>
                                                       <li>
                                                            <a href="#"
                                                               onclick="LoadMainContainer(' . "'onderdelen.php'" . ')">Onderdelen</a>
                                                       </li>
                                                       <li>
                                                            <a href="#" 
                                                               onclick="LoadMainContainer(' . "'innameswijzigen.php'" . ')">Innames</a>
                                                       </li>
                                                       <li>
                                                            <a href="#" 
                                                               onclick="LoadMainContainer(' . "'uitgifteswijzigen.php'" . ')">Uitgiftes</a>
                                                       </li>
                                                       </li>
                                                  </ul>
                                             </li>
                                        </ul>
                                   </div>';


     // Content
     $output .= '                  <div id="main_container" class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                        Laden .....
                                   </div>
                                   <div id="grid_bottom">&nbsp;</div>
                              </div>
                              
                         </div>';
     // Modal dialog                    
     $output .= '        <div id="modal_dialog">
                         </div>
                         
                         <div id="status_container" class="hidden">
                         </div>';  
     // Footer
     $output .= '
                         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center container">
                              <div style="margin-top:5%">
                                   <i>Stichting Praktijkleren</i> Amersfoort &copy 2017
                              </div>
                         </div>
               </body>
          </html>';
              
     echo $output;
?>