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
            <img class="detail-image" src="{{ $detail->image }}">
            <table id="detail">
                <tr>
                    <th>Preis</th>
                </tr>
                <tr>
                    <td>CHF {{ $detail->price }}</td>
                </tr>

                <tr>
                    <th>Gebrauch</th>
                </tr>
                <tr>
                    <td>{{ $detail->details }}</td>
                </tr>

                <tr>
                    <th>Beschreibung</th>
                </tr>
                <tr>
                    <td>{{ $detail->manual }}</td>
                </tr>
            </table>
        </div>
    </body>
</html>