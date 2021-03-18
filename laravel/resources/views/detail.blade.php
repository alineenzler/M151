<!DOCTYPE html>
<html>
    <head>
        <title>Laravel | Detailpage</title>
        <link rel="stylesheet" href="{{ asset('custom.css') }}">
    </head>
    <body>
        <form action="../products">
            <input class="back-button" type="submit" value="Back" />
        </form>
        <div>
            <h1>{{ $detail->name }}</h1>
            <img class="detail-image" src="{{ $detail->image }}">
            <table id="detail">
                <tr>
                    <th>Preis</th>
                </tr>
                <tr>
                    <td>CHF {{ number_format($detail->price, 2) }}</td>
                </tr>

                <tr>
                    <th>Beschreibung</th>
                </tr>
                <tr>
                    <td>{{ $detail->details }}</td>
                </tr>

                <tr>
                    <th>Gebrauch</th>
                </tr>
                <tr>
                    <td>{{ $detail->manual }}</td>
                </tr>
            </table>
        </div>
    </body>
</html>