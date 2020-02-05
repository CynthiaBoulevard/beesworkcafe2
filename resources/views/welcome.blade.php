

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
    <link href="https://fonts.googleapis.com/css?family=Economica|Kaushan+Script|Sacramento&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Dosis|Open+Sans+Condensed:300&display=swap" rel="stylesheet"> 

    <!-- Javascript -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    </head>




    <body>




    <header class="header">
        <a href="#" class="headericone"></a>
<!-- connexion-------------------------------------->
<div class="connexion">
<div class="flex-center position-ref ">

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Mon compte</a>
                    @else
                        <a href="{{ route('login') }}">Connexion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Inscription</a>
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
            <a class="nav-link" href=" ">Accueil</a>
            </li>
            
            <li class="nav-item">
            <a class="nav-link" href="#lacarte">La carte</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="#descripromo">Promos</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="#actu">Actualités</a>
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

<img src="{{ asset('img/Nom_Seul.png') }}"  href="" class="img1-fluid" alt="Sample photo"  height="40px" >

</div>


</div>



</header>
<!-- navbar------------------------------------------>






<!-- imageprincipal---------------------------------->

<div class="photoprin">

<img src="{{ asset('img/fond1.jpg') }}" class="img1-fluid" alt="Sample photo"  width="1300" height="600px" >

</div>


<!-- imageprincipal---------------------------------->





<!-- texte 1---------------------------------->


<blockquote class="blockquote1 text-center">
<div class="txt1">
    <h2 class="titrebees">Chez Bees work   <div class="caf">Café</div>   </h2>

 


    <p class="textbees">  Café – encas – gouter – bar – Tapas<br>
        Rien de mieux pour se rencontrer, <br>
        finaliser un contrat, fêter un succès que <br>
        de partager autour de la table..</p>


        <!-- <img src="{{ asset('img/rucheclair.png') }}" id="ruchec" class="img1-fluid" alt="Sample photo" width="800" height="600" > -->
        </div>
</blockquote>

<!-- texte 1---------------------------------->




<!-- images foods-------------------------------->
<div class="food">
<div class="imgfood">
<div class="row text-center">


	  <div class="col-sm-3" id="tout1">

      <img src="{{ asset('img/food1.jpg') }}" id="imgfood" class="img1-fluid" alt="Sample photo" width="200" height="200">

      <div class="bloc1">
      <h5 class="titreimg1">Petit déjeuner</h5>
      <p class="txtimg1">
          Un petit déjeuné savoureux <br>
          et équilibré avec des fruits <br>
          et légumes locaux.
      </p>
      </div>
      </div>


	  <div class="col-sm-3"  id="tout2">

      <img src="{{ asset('img/food2.jpg') }}" id="imgfood" class="img1-fluid" alt="Sample photo" width="200" height="200">

      <div class="bloc2">
      <h5 class="titreimg1">Déjeuner</h5>
      <p class="txtimg1">
          Un déjeuné savoureux et <br>
          équilibré avec des fruits <br>
          et légumes locaux.
      </p>
      </div>
      </div>

      <div class="col-sm-3"  id="tout3">

      <img src="{{ asset('img/food3.jpg') }}" id="imgfood" class="img1-fluid" alt="Sample photo" width="200" height="200">

      <div class="bloc3">
      <h5 class="titreimg1">Goûter</h5>
      <p class="txtimg1">
          Un gouté savoureux et <br>
          équilibré avec des fruits <br>
          et légumes locaux.
      </p>
      </div>
      </div>

      <div class="col-sm-3"  id="tout4">

      <img src="{{ asset('img/food4.jpg') }}" id="imgfood" class="img1-fluid" alt="Sample photo" width="200" height="200">

      <div class="bloc4">
      <h5 class="titreimg1">Tapas </h5>
      <p class="txtimg1">
          Des tapas et apéro savoureux <br>
          et équilibré avec des fruits <br>
          et légumes locaux.
      </p>
      </div>
      </div>
</div>
</div>
</div>
<!-- images foods-------------------------------->



<section id="lacarte">
<!-- La carte---------------------------------------->
<div class="lacarte">
<br>
<br>
<br>
<blockquote class="blockquote1 text-center">
        
            <h2 class="titrecarte">La carte</h2> 
            <h6 class="souscarte">bon & équilibré</h6>

</blockquote>


<!-- image la carte -->


<div class="imglacarte">
<div class="row text-center">

<div class="col-sm-12">


<img src="{{ asset('img/carte.png') }}" id="imgfood" class="img1-fluid" alt="Sample photo" width="800" height="1200">


</div>
</div>
</div>

</section>
</div>
<!-- La carte---------------------------------------->




<!-- les promos-------------------------------------->


      <div class="descripromo" id="descripromo"> 
      <br>
<br>
<br>

      <div class="col-sm-12">
      <blockquote class="blockquote1 text-center">

            <h2 class="titrepromo">Nos promos</h2>

      </blockquote> 

      </div>
      
<div class="promostrio">
        <div class="row text-center">
           
                <div class="col-sm-4">
                   
                     <div class="col1">
                        <h5 class="matin">Promos du matin</h5>
                        <div class="viennois1">
                            <img src="{{ asset('img/viennois1.jpg') }}" id="imgfood" class="img1-fluid" alt="Sample photo" width="200" height="200">
                        </div>
                        
                    </div>
                </div>
    
                    <div class="col-sm-4">

                        <div class="col2">
                            <h5 class="midi">Promos du midi</h5>
                            <div class="viennois2">
                              <img src="{{ asset('img/viennois2.jpg') }}" id="imgfood" class="img1-fluid" alt="Sample photo" width="200" height="200">
                            </div>
                            
                        </div>
                    </div>
    
                    <div class="col-sm-4">

                            <div class="col3">
                            <h5 class="soir">Promos du soir </h5>
                            <div class="viennois3">
                            <img src="{{ asset('img/viennois3.jpg') }}" id="imgfood" class="img1-fluid" alt="Sample photo" width="200" height="200">
                        </div>
                            
                    </div>
                </div>
        </div>
    </div>
</div>
<!-- les promos-------------------------------------->

        





<!-- ACTUALITÉS----------------------------------->
<div id="actu">
<br>
<br>
<br>
<blockquote class="blockquote1 text-center">
        
            <h2 class="titreactu">Les actualités</h2> 
          
</blockquote>


<div class="row text-center" id="imageactu">


	<div class="col-sm-12">

    <img src="{{ asset('img/happy.jpg') }}" class="img1-fluid" alt="Sample photo" width="400" height="400">

    </div>
    </div>
      

    
    



<!-- PARTENAIRE ---------------------------------->

<div class="row text-center">
    <div class="col-sm-12">
        
                <h3 class="parte"> Nos partenaires</h3>

    </div>



<!--ligne 1 --------------------------------------------->

    <div class="col-sm-2">
    <img src="{{ asset('img/alvétable.png') }}" id="exa3" class="img1-fluid" alt="Sample photo" width="100" height="130">
    </div>

    <div class="col-sm-2">
    <img src="{{ asset('img/alvétable.png') }}" id="exa5" class="img1-fluid" alt="Sample photo" width="100" height="130">
    </div>


    <div class="col-sm-2">
    <img src="{{ asset('img/alvétable.png') }}" id="exa9" class="img1-fluid" alt="Sample photo" width="100" height="130">
    </div>

    
    <div class="col-sm-2">
    <img src="{{ asset('img/alvétable.png') }}" id="exa11" class="img1-fluid" alt="Sample photo" width="100" height="130">
    </div>

    <div class="col-sm-2">
    <img src="{{ asset('img/alvétable.png') }}" id="exa12" class="img1-fluid" alt="Sample photo" width="100" height="130">
    </div>



<!-- ligne 2 ----------------------------------->

    <div class="col-sm-2">
    <img src="{{ asset('img/alvétable.png') }}" id="exa14" class="img1-fluid" alt="Sample photo" width="100" height="130">
    </div>

    <div class="col-sm-2">
    <img src="{{ asset('img/alvétable.png') }}" id="exa15" class="img1-fluid" alt="Sample photo" width="100" height="130">
    </div>


    <div class="col-sm-2">
    <img src="{{ asset('img/alvétable.png') }}" id="exa17" class="img1-fluid" alt="Sample photo" width="100" height="130">
    </div>

    <div class="col-sm-2">
    <img src="{{ asset('img/alvétable.png') }}" id="exa18" class="img1-fluid" alt="Sample photo" width="100" height="130">
    </div>


    <div class="col-sm-2" >
    <img src="{{ asset('img/alvétable.png') }}" id="exa19" class="img1-fluid" alt="Sample photo" width="100" height="130">
    </div>

    <div class="col-sm-2">
    <img src="{{ asset('img/alvétable.png') }}" id="exa20" class="img1-fluid" alt="Sample photo" width="100" height="130">
    </div>

      

    </div>
    
    </div>
    </div>
<!-- les actualités----------------------------------->










<!-- présentation BW---------------------------------->

<div id="apropos">
<br>


<blockquote class="blockquote1 text-center">

    <h1 class="titreapropos">Bees Work Café</h1>

    <h5 class="soustitreapropo">Qui sommes nous ?</h5>

</blockquote>



<div class="row text-center">


	  <div class="col-sm-6" id="fondtxt">
      <img src="{{ asset('img/grdalvé.png') }}" id="fondalvéole1" class="img1-fluid" alt="Sample photo" width="700" height="800">

      <p class="txtapropos">
      BEES WORK est une structure<br> 
      innovante en Guyane qui réunit un espace de <br>
      « Coworking » (espaces de travail partagés, tiers lieux), un espace <br>
      « restauration » de type « Maison & équilibrée » et une « plateforme <br>
      collaborative de réservation d’espaces de travail en ligne » sur place <br>
      et nomades.   L’objectif est d’offrir une alternative à l’environnement <br>
      de travail classique en donnant l’accès aux travailleurs autonomes dits<br>
    « nomades » à des espaces de travail, dédiés et/ou collectifs, <br>
    équipés,connectés avec la possibilité de se restaurer sur place. <br>
      BEES WORK fait référence aux abeilles qui CO-llaborent au sein de <br>
      leur unité de vie qu’est la Ruche. Les abeilles sont réputées <br>
      travailleuses et ne prennent dans la nature que ce qu’elles <br>
      consomment. Cette efficacité est le symbole d'une <br>
      nouvelle forme de consommation souhaitée et mise <br>
      en avant dans ce concept.
      </p>
      </div>


	  <div class="col-sm-6">

      <img src="{{ asset('img/photofacade.png') }}" id="photo1facade" class="img1-fluid" alt="Sample photo" width="400" height="500">

      </div>

</div>





<div class="row text-center">


	  <div class="col-sm-6">
      

      
      </div>


	  <div class="col-sm-6" id="fondtxt1">

      <img src="{{ asset('img/grdalvé.png') }}" id="fondalvéole2" class="img1-fluid" alt="Sample photo" width="600" height="700">

      <p class="txt1apropos">
      Dans les activités Bees-« Ness »,<br> 
      nous privilégions les échanges, la mutualisation,<br>
      le réseau et l’économie de partage. La plateforme collaborative <br>
      en ligne bees-work.com est le site sur lequel trouver son espace <br>
      de travail nomade et flexible idéal : du bureau permanant à la  <br>
      salle de réunion ponctuelle, nous mettons en relation propriétaires <br>
      d’entreprise et travailleurs nomades. Ce service est facile et <br>
      rapide. Cette plateforme permettra aussi d’enregistrer son profil <br>
      Extranet, de communiquer sur des événements comme les <br>
      #AfterWork,#NetWork, #PitchMe, déjeuners communautaires ou <br>
      des ateliers, séminaires thématiques…).

      </p>
      </div>

</div>





<div class="row text-center">


	  <div class="col-sm-6" id="fondtxt2">
      
      <img src="{{ asset('img/grdalvé.png') }}" id="fondalvéole3" class="img1-fluid" alt="Sample photo" width="500" height="600">



<p class="txt2apropos">
Dans l'activité Bees Work « café », <br>
nous proposons une restauration de type <br>
« Food Tech » (gestion des commandes automatisées). <br>
Ce sera un service complémentaire qui sera en partie <br>
sous-traité avec des acteurs locaux dont c’est le <br>
savoir-faire avec le choix de mettre en avant,<br>
une nourriture guyanaise à tendance équilibré <br>
car, dans le feu de l’action, on a souvent <br>
tendance à oublier de se nourrir sainement.

</p>
      
      </div>
      <img src="{{ asset('img/alvétable.png') }}" id="alvétable" class="img1-fluid" alt="Sample photo" width="250" height="300">


	  <div class="col-sm-6">

      <img src="{{ asset('img/photofacade.png') }}" id="photofacade" class="img1-fluid" alt="Sample photo" width="400" height="500">

      </div>

</div>

</div>
<!-- présentation BW---------------------------------->
















<!--  contact------------------------------------------------->
<div class="contact">

<div class="row text-center">
<div class="col-sm-12" >

<h5 class="titre3">Informations pratiques</h5>

     
</div>
</div>

<div class="row text-center">
    <div class="col-sm-4">
    <img src="{{ asset('img/tel.png') }}"  class="img1-fluid" alt="Sample photo" width="350" height="400">
    <p class="tel">
    - lundi au mercredi de 7h à 20h <br>
    - Jeudi de 7h à 22h   <br>
    - Vendredi de 7h à 1h <br> 
    <br>
       06 94 28 28 25  
    </p>
    </div>

    <div class="col-sm-4">
    <img src="{{ asset('img/lieu.png') }}"  class="img1-fluid" alt="Sample photo" width="350" height="400">
    <p class="lieu">
    12 allée Université Yale Immeuble Wassaï - <br>
    (BÂt A) ZAC Hibiscus, 97300 <br>
    Cayenne Guyane Française           
    </p><br>
    <a href="https://www.google.fr/maps/place/Bees+Work/@4.9355192,-52.3020525,18.25z/data=!4m5!3m4!1s0x8d123b772151917f:0xad9db558dcc608b9!8m2!3d4.9356532!4d-52.3012007?shorturl=1">Voir le plan</a>
    </div>

    <div class="col-sm-4">
    <img src="{{ asset('img/@.png') }}"  class="img1-fluid" alt="Sample photo" width="350" height="400">

    <div class="aro">
      <a href="https://www.facebook.com/beesworkcoworking/">Facebook </a> <br>
      <a href="https://twitter.com/beesworker">Twitter</a> <br>
      <a href="https://www.linkedin.com/in/rachelle-baissi-b23623110/?trk=pub-pbmap">LinkedIn</a> <br> 
      <a href="https://www.instagram.com/beeswork/">Instagram</a><br>
      <br>
       06 94 28 28 25  
    </div>

    </div>
    </div>




</div>











<!-- formulaire -->


<div id=contactform > 
    <br>
    <br>
@extends('template')
@section('contenu')
    <br>
    <div class="container "  >
        <div class="row card text-white bg-dark">
            <h4 class="card-header">Contactez-moi</h4>
            <div class="card-body">
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control  @error('entreprise') is-invalid @enderror" name="entreprise" id="entreprise" placeholder="Votre entreprise" value="{{ old('entreprise') }}">
                        @error('entreprise')
                      
                            <div class="invalid-feedback">{{ $message }}</div>
                          
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control  @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Votre nom" value="{{ old('nom') }}">
                        @error('nom')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control  @error('prenom') is-invalid @enderror" name="prenom" id="prenom" placeholder="Votre prenom" value="{{ old('prenom') }}">
                        @error('prenom')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control  @error('adresse') is-invalid @enderror" name="adresse" id="adresse" placeholder="Votre adresse" value="{{ old('adresse') }}">
                        @error('adresse')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control  @error('ville') is-invalid @enderror" name="ville" id="ville" placeholder="Votre ville" value="{{ old('ville') }}">
                        @error('ville')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="numeric" class="form-control  @error('code postal') is-invalid @enderror" name="code postal" id="code postal" placeholder="Votre code postal" value="{{ old('code postal') }}">
                        @error('code postal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control  @error('text') is-invalid @enderror" name="telephone" id="téléphone" placeholder="Votre téléphone" value="{{ old('téléphone') }}">
                        @error('téléphone')
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
                    <button type="submit" class="btn btn-secondary">Envoyer !</button>
                </form>
            </div>
        </div>
    </div>
@endsection
<div>
         
<div>




</body>




</html>

