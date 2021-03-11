<!DOCTYPE html>
<html>
    <head>
        <title>Laravel | Detailpage</title>
        <link rel="stylesheet" href="{{ asset('custom.css') }}">
    </head>
    <body>
        <a href="../products">Back</a>

        <div>
            <h1>{{ $detail->name }}</h1>
            <img src="{{ $detail->image }}">

            <h3>Preis:</h3>
            <p>{{ $detail->price }}.-</p>

            <h3>Gebrauch:</h3>
            <p>{{ $detail->details }}</p>

            <h3>Beschreibung:</h3>
            <p>{{ $detail->manual }}</p>
        </div>
    </body>
</html>