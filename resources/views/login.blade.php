<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Login</title>
</head>

<body>
    @if(Session::has('success'))
    <h2 style="color:#00ff00">{{Session::get('success')}}</h2>
    @endif

    @if(Session::has('fail'))
    <h3 style="color:#ff0000">{{Session::get('fail')}}</h3>
    @endif
    <h1>login</h1>
    <hr>
    <form action="{{url('login_user')}}" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" pattern="\d{5}" title="Please enter exactly 5 numbers" required><br>
        <input type="reset" value="Reset">
        <input type="submit" value="Log In">

    </form>
<p>if you don't have account so click to <a href="{{url('signup')}}">Signup |</a></p>
</body>

</html>
