<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Liste Des Personnes</div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Identifiant</th>
                                <th>Parent_id</th>
                                <th>Order</th>
                                <th>Nom</th>

                            </tr>
                            @foreach($liste_utilisateurs as $utilisateur)
                                <tr>
                                    <td>{{$personne->id}}</td>
                                    <td>{{$personne->parent_id}}</td>
                                    <td>{{$personne->order}}</td>
                                    <td>{{$personne->nom}}</td>
                            
                                </tr>
                            @endforeach
                        </table>
                        
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>