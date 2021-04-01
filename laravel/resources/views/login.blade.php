@csrf
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel | Login</title>
        <link rel="stylesheet" href="{{ asset('custom.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <form method="post">
                        @csrf
                        <label>Email:</label> <br> <input type="text" name="email"><br>
                        <label>Password:</label> <br> <input type="text" name="password"><br>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
