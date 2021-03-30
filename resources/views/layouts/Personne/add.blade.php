@extends('layouts.app')

@section('content')
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
                    <div class="card-header">Formulaire D'Ajout de Personne</div>
                    <form method="POST" action="{{url('persistpersonne')}}">
                        @csrf
                    <div class="card-body">
                                <label class="control-label">Parent_id</label>
                                <input class="form-control" type="text" name="parent" id="parent">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Order</label>
                                <input class="form-control" type="text" name="order" id="order">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Nom</label>
                                <input class="form-control" type="text" name="nom" id="nom">
                            </div>
                    
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="connexion" id="connexion" value="Connexion">

                            </div>
                            </form>
                            </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
@endsection
