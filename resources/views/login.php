<html>
    <head>
        <title> Login </title>
    </head>
    <body>
    <h1>Login</h1>
        <div class="col-xs-offset-3 col-xs-4">
            <form action="http://localhost:8000/login" method="POST">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="email">
                </div>
                <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                </div>    
                <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <p> New here? <a href="http://localhost:8000/register"> Register! </a></p>
    </body>
</html>

