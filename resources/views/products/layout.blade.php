<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end  mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 7 CRUD Application </title>
   
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">



    
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" >
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" >
      <script src="http://code.jquery.com/jquery-latest.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
      <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

      <link href="{{ asset('css/bulma.imperial.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

  
</head>
      <header>
        <div class="container is-fluid">
            <div class="columns">
               <div class="column is-3">
                  <div class="navbar-brand"><a class="navbar-item brand-text" href="/">Imperial</a></div>
               </div>
               <div class="column is-6">
                  <div class="field has-addons">
                     <div class="control"><a class="is-customsearch"><img src="./img/bar.png" alt=""></a></div>
                     <div class="control"><input class="input" type="text" placeholder="Search here"></div>
                  </div>
               </div>
               <div class="column is-2">
                  <div class="email is-pulled-right">
                     <p>your@email.com</p>
                  </div>
               </div>
               <div class="column is-1">
                  <div class="user"><a href="profile.html"><img src="./img/man.png" alt=""></a></div>
               </div>
            </div>
        </div>
      </header>

      <div class="container is-fluid rightsidebar">
         <div class="columns">
            <div class="column is-3">
               <div id="cssmenu">
                  <h4>Main</h4>
                  <ul>
                     <li><a href="imperial.html"><span>Dashboard</span></a></li>
                     <li><a href="ui-elements.html"><span>UI Elements</span></a></li>
                     <li></li>
                     <li><a href="form.html"><span>Forms</span></a></li>
                     <li><a href="profile.html"><span>Profile</span></a></li>
                     <li><a href="tables.html"><span>Tables</span></a></li>
                     <li><a href="index.html"><span>Logout</span></a></li>
                  </ul>
               </div>
            </div>
            <div class="column is-9">
               <div class="rightsidebar-column">
                  <section class="sectionfour">
                     <div class="columns is-multiline is-mobile">
                        <div class="column is-12">
                           
                           
                            @yield('content')                               
                            
                           

                        </div>                      
                      </div>
                     </div>
                  </section>
                 
                  <section class="sectionsix">
                     <div class="columns">
                        <div class="column is-12">
                           <div class="center-sidebar">
                              <nav class="level">
                                 <div class="level-item has-text-centered">
                                    <div>
                                       <p class="title">534</p>
                                       <p class="heading">Commits in last week</p>
                                    </div>
                                 </div>
                                 <div class="level-item has-text-centered">
                                    <div>
                                       <p class="title">126</p>
                                       <p class="heading">Public gists</p>
                                    </div>
                                 </div>
                                 <div class="level-item has-text-centered">
                                    <div>
                                       <p class="title">680</p>
                                       <p class="heading">New code line</p>
                                    </div>
                                 </div>
                                 <div class="level-item has-text-centered">
                                    <div>
                                       <p class="title">14</p>
                                       <p class="heading">New builds</p>
                                    </div>
                                 </div>
                              </nav>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
            </div>
         </div>
      </div>
      
   </body>
</html>

