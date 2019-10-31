<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
        <div class="flex-center position-ref">
                <div class="content">
                    <div class="title m-b-md">
                        Negodevis
                    </div>
                    <a href="{{ asset('/home')}}" class="a-h">Accueil</a>
                    <a href="{{ asset('/quote')}}" class="a-q" id="app">Les devis</a>
                    <a href="{{ asset('/rules')}}" class="a-r" id="app">Les règles</a>
                    <a href="{{ asset('/param')}}"  class="a-p">Application</a>
                </div>
            </div>

    <section class="rules-section">
        <div>
            <h1 class="negociation-rules-title">
                Règles de la négociation
            </h1>
        </div>
        <div class="rules-container">
            <div class="rules-listing">
                <div class="rule-association">
                    <div id="rule"> 
                        <h3 id="rule-title"></h2>
                        <p id="rule-declaration"></p>
                    </div>
                    <div id="rule-illustration">
                        <img id="rule-img" alt="">
                    </div>
                </div>
                <div class="pagination">
                    <ul class="rules-pagination">
                        <li class="rules-pagination-elmt" id="backward"> < Précédent</li>
                        <li class="rules-pagination-elmt" id="forward">Suivant ></li>
                    </ul>
                    <ul class="rules-pagination shortcuts">
                        <li class="rules-pagination-elmt" id= "backshort" id="backward"> << </li>
                        <li class="rules-pagination-elmt" id= "forshort" id="forward"> >> </li>
                    </ul>
                </div>
                <div class="button-section">
                    <a href="{{ asset('/param') }}"><button class="negotiation-button">Négocier</button></a>
                    <a href="{{ asset('/home') }}"><button class="home-back-button">Accueil</button></a>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/rules.js') }}"></script>
</body> 
<!---Bootstrap--->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>

   
    

