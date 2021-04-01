<!DOCTYPE html>
<html>
    <head>
        <title>Laravel | All Products</title>
        <link rel="stylesheet" href="{{ asset('custom.css') }}">
    </head>
    <body>
        <nav>
            <div>
                <h1>Quietscheentchen Onlineshop</h1>
            </div>
        </nav>

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

            <div class="col-6">
                <form action="/basket">
                    <input class="order-button" type="submit" value="Warenkorb" />
                </form>
            </div>
            <div class="col-2 align-right">
                <form action="/login">
                    <input class="reg-button" type="submit" value="Login" />
                </form>
            </div>
            <div class="col-2 align-right">
                <form action="/register">
                    <input class="reg-button" type="submit" value="Register" />
                </form>
            </div>
            <div class="col-2 align-right">
                <form action="/logout">
                    <input class="reg-button" type="submit" value="Log Out" />
                </form>
            </div>
    </body>
</html>