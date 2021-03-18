<!DOCTYPE html>
<html>
    <head>
        <title>Laravel | All Products</title>
        <link rel="stylesheet" href="{{ asset('custom.css') }}">
    </head>
    <body>
        <h1>Quietscheentchen Onlineshop</h1>
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
    </body>
</html>