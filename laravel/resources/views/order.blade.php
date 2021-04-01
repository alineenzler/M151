<!DOCTYPE html>
<html>
    <head>
        <title>Laravel | Order</title>
        <link rel="stylesheet" href="{{ asset('custom.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <form>
                        <label>First name:</label> <br> <input type="text" name="firstname"><br>
                        <label>Last name:</label> <br> <input type="text" name="lastname"><br>
                        <label>Email:</label> <br> <input type="text" name="email"><br>
                        <label>Street:</label> <br> <input type="text" name="street"><br>
                        <label>City:</label> <br> <input type="text" name="city"><br>
                        <label>Zip Code:</label> <br> <input type="text" name="zip"><br>
                        <label>Phone number:</label> <br> <input type="text" name="phone"><br>
                    </form>
                    <form action="/success">
                            <input class="order-button" type="submit" value="Bestellen" />
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
