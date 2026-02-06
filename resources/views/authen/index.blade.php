<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css_home/style.css">
</head>
<body>
    

    <div class="login">
            <form action="{{route('login')}}" method='post'>
            @csrf

        <div class="log">
            <img src="/assets/81c1d37b8647f884c9ac1c18453cc81c.jpg" alt="">
           <div class="logn">
             <h1>Login</h1>
            <p>Businses Coffe Nusantara </p>
            <ul>
                <li>
                    <label for="">Email</label>
                    <input type="text" name="email" id="">
                    @error('email')
                    <p class='error'>{{$message}}</p>
                    @enderror
                </li>
                <li>
                    <label for="">Password</label>
                    <input type="password" name="password" id="">
                     @error('password')
                    <p class='error'>{{$message}}</p>
                    @enderror
                </li>
                <li>
                    <button type='submit'>Log In</button>
                </li>
            </ul>
           </div>
        </div>
            </form>

    </div>



</body>
</html>