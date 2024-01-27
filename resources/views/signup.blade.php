<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Signup</title>
</head>

<body>

    @if($errors->any())
        @foreach($errors->all() as $error)
        <h3 style="color:red">{{$error}}</h3>
        @endforeach
    @endif

    @if(Session::has('fail'))
    <h3 style="color:#ff0000">{{Session::get('fail')}}</h3>
    @endif
    <!-- main form -->
    <h1>Signup</h1><hr>
    <form action="{{url('user_signup')}}" method="POST">
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter the first Name"><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" pattern="\d{5}" title="Please enter exactly 5 numbers" required>
        <br> 
        <input type="reset" value="Reset">
        <input type="submit" value="Signup">
    </form>
    <p>if you have already account plz <a href="{{url('login')}}">login here |</a></p>
</body>

</html>
