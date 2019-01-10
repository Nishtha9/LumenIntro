<html>
    <head>
        <title> Register </title>
    </head>
    <body>
    <h1>Register</h1>
        <div class="col-xs-offset-3 col-xs-4">
            <form action="http://localhost:8000/register" method="POST">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="email">
                </div>
                <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                </div> 
                <div class="form-group">
                        <input type="password" class="form-control" name="password2" placeholder="Retype Password">
                </div>      
                <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </body>
</html>

