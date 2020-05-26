<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Paul Michels</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Paul Michels portfolio">   
    
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
    
    <!-- FontAwesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.6.3/js/all.js" integrity="sha384-EIHISlAOj4zgYieurP0SdoiBYfGJKkgWedPHH4jCzpCXLmzVsw1ouK59MuUtP4a1" crossorigin="anonymous"></script>
    
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    
    <!-- github calendar css -->
    <link rel="stylesheet" href="assets/plugins/github-calendar/dist/github-calendar.css">
    <!-- github acitivity css -->    
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css">
    <link rel="stylesheet" href="assets/plugins/github-activity/github-activity-0.1.5.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    
</head> 

<body>
    <!-- ******HEADER****** --> 
    <header class="header">
        <div class="container clearfix">
            <img style="border-radius: 100%; height: 200px; width: 200px;" class="profile-image img-fluid float-left" src="assets/images/projects/profile.png" alt="Paul Michels"/>
            <div class="profile-content float-left">
                <h1 class="name">Paul Michels</h1>
                <h2 class="desc">Ingénieur en informatique en apprentissage</h2>   
                <ul class="social list-inline">
                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/paul-michels-774678162/"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="list-inline-item"><a href="https://github.com/paulmichels"><i class="fab fa-github-alt"></i></a></li>
                </ul> 
            </div><!--//profile-->        
        </div><!--//container-->
    </header><!--//header-->
    
    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-lg-8 col-12">
                <!-- <section class="about section">
                    <div class="section-inner">
                        <h2 class="heading">A propos de moi</h2>
                        <div class="content">
                            <p></p>
                         
                        </div>
                    </div>                
                </section>-->
    
               <section class="latest section">
                    <div class="section-inner">
                        <h2 class="heading">Projets</h2>
                        <div class="content">    
                                               
                            <div class="item featured text-center">
                                <h3 class="title"><a href="https://github.com/paulmichels/Piscine_bluetooth" target="_blank">Piscine connect&eacute;e</a></h3>
                                <p class="summary">Application mobile (Java, XML)</p>
                                <div class="featured-image has-ribbon">
                                    <a href="https://github.com/paulmichels/Piscine_bluetooth" target="_blank">
                                    <img class="img-fluid project-image" src="assets/images/projects/piscine_ble.png" alt="project name" />
                                    </a>
                                    <div class="ribbon">
                                        <div class="text">Android</div>
                                    </div>
                                </div>
                                    
                                <div class="desc text-left">                                    
                                    <p>Projet de fin d'&eacute;tudes du BTS SNIR. L'application Android consiste à se connecter à un flotteur équipé d'une carte Genuino disposé dans une piscine via Bluetooth Low Energy. Une fois la connection établie, on récupère 4 données : le pH, le taux de chlore, le potentiel d'oxydo réduction ainsi que le résultat de l'équation de Nernst. Le rapport de projet se trouve dans le repertoire principal.</p>
                                </div><!--//desc-->         
                                <a class="btn btn-cta-secondary" href="https://github.com/paulmichels/Piscine_bluetooth" target="_blank">&nbsp;Acc&eacute;der&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
                            </div><!--//item-->


                            <hr class="divider" />
                            <div class="item row">
                                <a class="col-md-4 col-12" href="https://github.com/paulmichels/Braumed" target="_blank">
                                <img class="img-fluid project-image" src="assets/images/projects/braum.jpg" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-12">
                                    <h3 class="title"><a href="https://github.com/paulmichels/Braumed" target="_blank">Braumed</a></h3>
                                    <p class="mb-2">Application mobile (Java, XML)</p>
                                    <p>Application interagissant avec l'API de Riot Games, permettant à l'utilisateur de recevoir un exercice sportif en fonction de son score sur sa dernière partie de League of Legends</p>
                                    <p><a class="more-link" href="https://github.com/paulmichels/Braumed" target="_blank"><i class="fas fa-external-link-alt"></i>Voir le projet</a></p>
                                </div><!--//desc-->                          
                            </div><!--//item-->                  

                            <hr class="divider" />
                            <div class="item row">
                                <a class="col-md-4 col-12" href="https://github.com/paulmichels/Appstud" target="_blank">
                                <img class="img-fluid project-image" src="assets/images/projects/appstud.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-12">
                                    <h3 class="title"><a href="https://github.com/paulmichels/Appstud" target="_blank">Appstud</a></h3>
                                    <p class="mb-2">Application mobile (Java, XML)</p>
                                    <p>Application developpée dans le cadre du processus de recrutement de l'entreprise Appstud. Utilise l'API Google Maps pour trouver les bars ouverts à 2 kilomètres de rayon.</p>
                                    <p><a class="more-link" href="https://github.com/paulmichels/Appstud" target="_blank"><i class="fas fa-external-link-alt"></i>Voir le projet</a></p>
                                </div><!--//desc-->                          
                            </div><!--//item-->                      
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                
                </section><!--//section-->
                                
                <section class="experience section">
                    <div class="section-inner">
                        <h2 class="heading">Exp&eacute;riences professionnelles</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title">Apprenti ing&eacute;nieur en informatique - <span class="year">(Septembre 2018 - Aujourd'hui)</span></h3>
                                <p>Abyss CAD, Pertuis, France</p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title">Equipier polyvalent - <span class="year">(F&eacute;vrier 2017 - Mai 2018)</span></h3>
                                <p>Burger King, Marseille, France</p>
                            </div><!--//item-->
                            
                            <div class="item">
                                <h3 class="title">Agent contractuel - <span class="year">(Avril 2016 - Ao&ucirc;t 2016)</span></h3>
                                <p>Direction d&eacute;partementale des Territoires et de la Mer, Marseille, France</p>
                            </div><!--//item-->
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section><!--//section-->
                <section class="github section">
                    <div class="section-inner">
                        <h2 class="heading">Mes contributions GitHub</h2> 
                        
                        <div id="github-graph" class="github-graph">
				            <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/3.0.2/es6-promise.min.js"></script>
				            <script src="https://cdnjs.cloudflare.com/ajax/libs/fetch/0.10.1/fetch.min.js"></script>
				            <script src="assets/js/main.js"></script>
				            <script src="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.min.js"></script>
				            <link rel="stylesheet" href="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.css"/>
							<script> GitHubCalendar(".calendar", "paulmichels"); </script>
                        </div><!--//github-graph-->

                        <!--//Usage: https://caseyscarborough.com/projects/github-activity/ -->                       
                    	<div id="feed" class="ghfeed">
    						<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css">
							<link rel="stylesheet" href="assets/js/node_modules/github-feed/github-activity-0.1.5.min.css">
							<script src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
	    					<script>
	    						GitHubActivity.feed({
									username: "paulmichels",
									//repository: "your-repo", // optional
									selector: "#feed",
									limit: 20 // optional
								});
	    					</script>
                        </div><!--//ghfeed-->
                        
                    </div><!--//secton-inner-->
                </section><!--//section-->
            </div><!--//primary-->


            <div class="secondary col-lg-4 col-12">
                 <aside class="info aside section">
                    <div class="section-inner">
                        <h2 class="heading">Informations</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-map-marker-alt"></i><span class="sr-only">Location:</span>Aix-en-Provence</li>
                                <li><i class="fas fa-envelope"></i><span class="sr-only">Email:</span>paul_michels@hotmail.fr</li>
                            </ul>
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//aside-->
                
                <aside class="skills aside section">
                    <div class="section-inner">
                        <h2 class="heading">Comp&eacute;tences</h2>
                        <div class="content">
                            <!-- <p class="intro"></p> -->
                            
                            <div class="skillset">
                               
                                <div class="item">
                                    <h3 class="level-title">Android (Java, Kotlin, XML)<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true">&Eacute;lev&eacute;</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="86%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">PHP, SQL<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true">Bon niveau</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="75%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">HTML5, Javascript, CSS<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true">Bon niveau</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="66%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">C, C++<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true">Bon niveau</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="75%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">mySQL<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true">Bonnes comp&eacute;tences</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="60%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Unity (C#)<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true">En progression...</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="30%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                            </div>              
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//section-->
                
                <aside class="testimonials aside section">
                    <div class="section-inner">
                        <h2 class="heading">Recommendations</h2>
                        <div class="content">
                            <div class="item">
                                <blockquote class="quote">                                  
                                    <p><i class="fas fa-quote-left"></i> Tr&egrave;s bon &eacute;l&eacute;ment, curieux, efficace et pers&eacute;v&eacute;rant. Paul poss&egrave;de toutes les qualit&eacute;s pour aller loin dans le monde de l'informatique.</p>
                                </blockquote>                
                                <p class="source"><span class="name">Luc Antonelli</span><br /><span class="title">Professeur S.I.I (Sciences Industrielles de l'Ingénieur)</span></p>                                                             
                            </div><!--//item-->
                            
                            <p><a class="more-link" href="https://www.linkedin.com/in/paul-michels-774678162/"><i class="fas fa-external-link-alt"></i>Linkedin</a></p>
                            
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                
                <aside class="education aside section">
                    <div class="section-inner">
                        <h2 class="heading">Dipl&ocirc;mes et formations</h2>
                        <div class="content">
                            <div class="item">                      
                                <h3 class="title"><i class="fas fa-graduation-cap"></i> Ingénieur en informatique STMN</h3>
                                <h4 class="university">Conservatoire National des Arts et M&eacute;tiers <span class="year">(2018-2021)</span></h4>
                                <h4 class="university">Université de Toulon, La Garde</h4>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fas fa-graduation-cap"></i> BTS Syst&egrave;mes Num&eacute;riques</h3>
                                <h4 class="university">Lyc&eacute;e du Rempart, Marseille <span class="year">(2016-2018)</span></h4>
                                <h4 class="university">Major d'acad&eacute;mie </h4>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fas fa-graduation-cap"></i> Licence Science et Vie</h3>
                                <h4 class="university"> Facult&eacute; de Saint-Charles, Marseille <span class="year">(2014-2016)</span></h4>
                                <h4 class="university">Non termin&eacute;</h4>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fas fa-graduation-cap"></i> PACES</h3>
                                <h4 class="university"> Facult&eacute; de la Timone, Marseille <span class="year">(2013-2014)</span></h4>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fas fa-graduation-cap"></i> Baccalaur&eacute;at s&eacute;rie scientifique</h3>
                                <h4 class="university">Lyc&eacute;e Aix-Valabre, Gardanne <span class="year">(2013)</span></h4>
                            </div><!--//item-->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                            
                <aside class="languages aside section">
                    <div class="section-inner">
                        <h2 class="heading">Langues</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li class="item">
                                    <span class="title"><strong>Français :</strong></span>
                                    <span class="level">Langue natale <br class="visible-xs"/><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span>
                                </li><!--//item-->
                                <li class="item">
                                    <span class="title"><strong>Anglais :</strong></span>
                                    <span class="level">TOEIC en préparation <br class="visible-sm visible-xs"/><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span>
                                </li><!--//item-->
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                                
                <aside class="list music aside section">
                    <div class="section-inner">
                        <h2 class="heading">Centres d'int&eacute;r&ecirc;t</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-guitar"></i> Guitare</li>
                                <li><i class="fas fa-music"></i> Chant</li>
                                <li><i class="fas fa-desktop"></i> Programmation</li>
                                <li><i class="fas fa-gamepad"></i> Jeux vid&eacute;os</li>
                                <li><i class="fas fa-running"></i> Sport</li>
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
              
            </div><!--//secondary-->    
        </div><!--//row-->
    </div><!--//masonry-->
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="container text-center">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out our commercial license options via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed by <a href="https://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script src="assets/plugins/jquery-3.3.1.min.js"></script>
    <script src="assets/plugins/popper.min.js"></script> 
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <script src="assets/plugins/jquery-rss/dist/jquery.rss.min.js"></script> 
    <!-- github calendar plugin -->
    <script src="assets/plugins/github-calendar/dist/github-calendar.min.js"></script>
    <!-- github activity plugin -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
    <!-- custom js -->
    <script src="assets/js/main.js"></script>            
</body>
</html> 

