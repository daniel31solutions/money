<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Money Converter</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	<!-- materialize -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<link href="/css/app.css" rel="stylesheet" />
    </head>

    <body>

	<main id="app" class="container">

	    <div class="row light" style="display:flex;height: 250px;align-items:center;text-align:center">
		<div class="col s12">
		    <i class="material-icons primary-text">image</i>
		</div>
	    </div>

	    <div class="divider"></div>

	    <!-- O componente -->
	    <div class="row section">
		<div class="col s12">
		    <converter :inicial="2000" :filtro="['LTC','USD','ARS']"></converter>
		</div>
	    </div>

	    <div class="divider"></div>

	    <div class="row light" style="display:flex;height: 250px;align-items:center;text-align:center">
		<div class="col s12 primary-text">
		    <i class="material-icons primary-text">image</i>
		</div>
	    </div>
	</main>

	<!-- Importe seu app.js -->
	<script src="/js/app.js"></script>
    </body>
</html>
