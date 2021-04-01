<!DOCTYPE html>
<html>
    <head>
        <title>Laravel | Basket</title>
        <link rel="stylesheet" href="{{ asset('custom.css') }}">
    </head>
    <body>
        <nav>
            <div>
                <h1>Quietscheentchen Onlineshop</h1>
            </div>
        </nav>

        <form action="../products">
            <input class="back-button" type="submit" value="Back" />
        </form>

        <table id="products">
            <tr>
                <th>Name</th>
                <th>Preis</th>
                <th>Details</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>CHF {{ number_format($product->price, 2) }}</td>
                    <td><a href="/product/{{ $product->id }}">show details</a></td>
                </tr>
            @endforeach
        </table>

            <div class="col-6"><br></div>
            <div class="col-2"></div>
            <div class="col-2"></div>
            <div class="col-2">
                <form action="/order">
                    <input class="order-button" type="submit" value="Bestellen" />
                </form>
            </div>
    </body>
</html>