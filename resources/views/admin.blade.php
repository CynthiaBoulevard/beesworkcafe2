<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Bees work café</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- typos -->
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Allura|Petit+Formal+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300&display=swap" rel="stylesheet">

    </head>




    <body>

<!-- connexion-------------------------------------->
<div class="connexion">
<div class="flex-center position-ref ">

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

</div>

<!-- connexion--------------------------------------->



<!-- navbar------------------------------------------>
<div class="bar menu">
<div class="navbarnav">



<div class="row text-center">

<div class="col-sm-12">
        <nav class="navbar navbar-expand-sm navbar-light bg-faded">

            <!-- Links -->
            
            <div class="collapse navbar-collapse justify-content-center" id="nav-content">   

            <ul class="navbar-nav">


            <li class="nav-item">
            <a class="nav-link" href="http://127.0.0.1:8000/ ">Accueil</a>
            </li>
            
            <li class="nav-item">
            <a class="nav-link" href="#lacarte">La carte</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="">Promos</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="">Actualités</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="#apropos">À propos</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="#contactform">Contact</a>
            </li>

            </ul>
        </nav>
    </div>
</div>
</div>
</div>

<div class="logo">

<img src="{{ asset('img/Nom_Seul.png') }}" class="img1-fluid" alt="Sample photo"  height="40px" >

</div>

</div>
<!-- navbar------------------------------------------>






<!-- imageprincipal---------------------------------->

<div class="content">


</div>


<!-- imageprincipal---------------------------------->





<!-- texte 1---------------------------------->


<blockquote class="blockquote1 text-center">
    <h2 class="titrebees">Chez Bees work café</h2>

    <h6 class="soustitrebees">prennez une pause</h6>

    <p class="textbees">  Café – encas – gouter – bar – <br>
        Tapas Rien de mieux pour se rencontrer, <br>
        finaliser un contrat, fêter un succès que <br>
        de partager autour de la table..</p>
</blockquote>

<!-- texte 1---------------------------------->




<!-- images foods-------------------------------->
<div class="food">
<div class="imgfood">
<div class="row text-center">
    
	  <div class="col-sm-3">

      <img src="{{ asset('img/food1.jpg') }}" class="img1-fluid" alt="Sample photo" width="200" height="200">

      </div>

	  <div class="col-sm-3">

      <img src="{{ asset('img/food2.jpg') }}" class="img1-fluid" alt="Sample photo" width="200" height="200">

      </div>

      <div class="col-sm-3">

      <img src="{{ asset('img/food3.jpg') }}" class="img1-fluid" alt="Sample photo" width="200" height="200">

      </div>

      <div class="col-sm-3">

      <img src="{{ asset('img/food4.jpg') }}" class="img1-fluid" alt="Sample photo" width="200" height="200">

      </div>
</div>
</div>
</div>
<!-- images foods-------------------------------->




<!-- La carte---------------------------------------->
<div class="lacarte">
<blockquote class="blockquote1 text-center">
        
            <h2 class="titrecarte">La carte</h2> 
            <h6 class="souscarte">bon & équilibré</h6>

</blockquote>


<!-- image la carte -->
<section id="lacarte">
<div class="imglacarte">
<div class="row text-center">

<div class="col-sm-12">


<img src="{{ asset('img/carte.png') }}" class="img1-fluid" alt="Sample photo" width="800" height="1200">


</div>
</div>
</div>

</section>
</div>
<!-- La carte---------------------------------------->




<!-- les promos-------------------------------------->


      <div class="descripromo"> 

      <div class="col-sm-12">
      <blockquote class="blockquote1 text-center">

            <h2 class="titrepromo">Nos promos du moment</h2>

      </blockquote> 

      </div>
      
<div class="promostrio">
        <div class="row text-center">
           
                <div class="col-sm-4">
                   
                     <div class="col1">
                        <h5 class="matin">PROMOS DU MATIN </h5>
                        <div class="viennois1">
                            <img src="{{ asset('img/viennois1.jpg') }}" class="img1-fluid" alt="Sample photo" width="200" height="200">
                        </div>
                        <p class="txt1">Sed convallis diam eu lacinia eleifend <br> 
                            venenatis eu ipsum in ultrices <br>
                            Aenean metus odio.</p>
                    </div>
                </div>
    
                    <div class="col-sm-4">

                        <div class="col2">
                            <h5 class="midi">PROMOS DU MIDI</h5>
                            <div class="viennois2">
                              <img src="{{ asset('img/viennois2.jpg') }}" class="img1-fluid" alt="Sample photo" width="200" height="200">
                            </div>
                            <p class="txt2"> Sed convallis diam eu lacinia eleifend <br> 
                                venenatis eu ipsum in ultrices <br>
                                Aenean metus odio.</p>
                        </div>
                    </div>
    
                    <div class="col-sm-4">

                            <div class="col3">
                            <h5 class="soir">PROMOS DU SOIR </h5>
                            <div class="viennois3">
                            <img src="{{ asset('img/viennois3.jpg') }}" class="img1-fluid" alt="Sample photo" width="200" height="200">
                        </div>
                            <p class="txt3">Sed convallis diam eu lacinia eleifend <br> 
                                venenatis eu ipsum in ultrices <br>
                                Aenean metus odio.</p>
                    </div>
                </div>
        </div>
    </div>
</div>
<!-- les promos-------------------------------------->

        


<!-- les actualités----------------------------------->
<blockquote class="blockquote1 text-center">
        
            <h2 class="titreactu">Les actualités</h2> 
          

    </blockquote>

    <div class="imageactu">
    <div class="row text-center">

            <div class="col-sm-4">
                <div class="port1"> 
                    <img src="images/feuille1c.jpg" class="img-fluid" alt="Sample photo" width="250" height="250" >
                </div> 
            </div>

            <div class="col-sm-4">
                <div class="port2"> 
                    <img src="images/feuille2c.jpg" class="img-fluid" alt="Sample photo" width="250" height="250">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="port3"> 
                    <img src="images/feuille3c.jpg" class="img-fluid" alt="Sample photo" width="250" height="250" >
                </div>
            </div>
    </div>

    <div class="row text-center">
            <div class="col-sm-4">
                <div class="port4"> 
                    <img src="images/paradisc.jpg" class="img-fluid" alt="Sample photo" width="250" height="250">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="port5"> 
                    <img src="images/paradis2c.jpg" class="img-fluid" alt="Sample photo" width="250" height="250">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="port6"> 
                    <img src="images/paradis3c.jpg" class="img-fluid" alt="Sample photo" width="250" height="250">
                </div>
            </div>
    </div>
    </div>
<!-- les actualités----------------------------------->



<!-- présentation BW---------------------------------->
<section id="apropos">
<blockquote class="blockquote1 text-center">

    <h1 class="titreapropos">Bees Work Café</h1>

    <h5 class="soustitreapropo">Qui sommes nous ? </h5>


            <!-- <div class="col-sm-6"> -->

    <p class="text1apropo"> 


BEES WORK est une structure innovante en Guyane qui réunit un espace de « Coworking » <br> 
(espaces de travail partagés, tiers lieux), un espace « restauration » de type « Maison <br>
& équilibrée » et une « plateforme collaborative de réservation d’espaces de travail en <br>
ligne » sur place et nomades.   L’objectif est d’offrir une alternative à l’environnement <br>
de travail classique en donnant l’accès aux travailleurs autonomes dits « nomades » à des <br>
espaces de travail, dédiés et/ou collectifs, équipés, connectés avec la possibilité de se <br>
restaurer sur place.<br>

</div>



BEES WORK fait référence aux abeilles qui CO-llaborent au sein de leur unité de vie qu’est <br>
la Ruche. Les abeilles sont réputées travailleuses et ne prennent dans la nature que ce <br>
qu’elles consomment. <br>

Cette efficacité est le symbole d'une nouvelle forme de consommation souhaitée et mise en <br>
avant dans ce concept.<br>

- Dans les activités Bees-« Ness », nous privilégions les échanges, la mutualisation, le <br>
réseau et l’économie de partage.<br>

- La plateforme collaborative en ligne bees-work.com est le site sur lequel trouver son <br>
espace de travail nomade et flexible idéal : du bureau permanant à la salle de réunion <br>
ponctuelle, nous mettons en relation propriétaires d’entreprise et travailleurs nomades. <br>
Ce service est facile et rapide. Cette plateforme permettra aussi d’enregistrer son profil <br>
Extranet, de communiquer sur des événements comme les #AfterWork, #NetWork, #PitchMe, <br>
déjeuners communautaires ou des ateliers, séminaires thématiques…).<br>

-Dans l'activité Bees-« Cuit », nous proposons une restauration de type « Food Tech » <br>
(gestion des commandes automatisées). Ce sera un service complémentaire qui sera en <br>
partie sous-traité avec des acteurs locaux dont c’est le savoir-faire avec le choix <br>
de mettre en avant, une nourriture guyanaise à tendance équilibré car, dans le feu de <br>
l’action, on a souvent tendance à oublier de se nourrir sainement.<br>

Ainsi, Bees Work accompagnera l’entrée des entreprises et travailleurs nomades dans <br>
l’ère de l’économie numérique et collaborative en formant un écosystème d’innovation <br>
dynamique et ambitieux qui réunit toutes les conditions pour travailler de manière <br>
flexible dans un espace professionnel et dans la plus grande convivialité.</p>
</blockquote>
</section>

<!-- présentation BW---------------------------------->



<!-- animation vidéo, espace de coworking---------------------------------->

<div class="video">
<div class="row text-center">
<div class="col-sm-12">


<p>ici viendra la vidéo</p>

</div>
</div>
</div>


<!-- bouton  -->
<!-- <div class="row text-center">
            <div class="col-sm-12"><button type="button" class="btn btn-outline-secondary" id="bouton1">VOIR PLUS DE PROJETS</button></div>
    </div> -->
<!-- animation vidéo, espace de coworking---------------------------------->



<!--  contact------------------------------------------------->
<footer>
  <section id="contactform">
  <div class="info">
        <div class="row text-center">
            
           

            <!-- informations pratiques -->
                <div class="col-sm-12" id="infopratique"> 
                    <h5 class="titre3">Informations pratiques</h5>
                    <p class="info">
                    Coworking du lundi au vendredi de 8h à 18h Bees Coffee <br>
                    "la Cafet" de 7h à 20h du lundi au mercredi, de 7h à 22h <br>
                    le Jeudi et de 7h à 1h vendredi 
                    </p>
                </div>

        </div>
    </div>

    </section>
<!-- formulaire -->

<div class="row text-center">

<div class="formu">

<div class="col-sm-12">



@extends('template')
    @section('contenu')
        <br>
        <div class="container">
            <div class="row card text-white bg-dark">
                <h4 class="card-header">Une demande? Contacter nous!</h4>
                <div class="card-body">
                    
                    <form action="{{ route('contact.create') }}" method="POST">
                        @csrf


                        <div class="form-group">
                            <input type="text" class="form-control  @error('text') is-invalid @enderror" name="entreprise" id="entreprise" placeholder="Entreprise*" value="{{ old('entreprise') }}">
                            @error('Entreprise')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>



                        <div class="form-group">
                            <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="Votre email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        
                        <div class="form-group">
                            <textarea class="form-control  @error('message') is-invalid @enderror" name="message" id="message" placeholder="Votre message">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <textarea class="form-control  @error('message') is-invalid @enderror" name="message" id="message" placeholder="Votre message">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>




                        <button type="submit" class="btn btn-secondary">Envoyer !</button>


                    
                    </form>

                </div>
            </div>
        </div>
    @endsection



</div>
</div>
</div>
<!-- contact------------------------------------------------->




        
        
    
</footer>











        
        








<!-- HTML------------------------------------------------------------------------------------------->




 
<!-- STYLES CSS------------------------------------------------------------------------------------->

  </body>
</html>

