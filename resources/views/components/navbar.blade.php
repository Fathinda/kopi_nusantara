
<div class="info">
    <div class="container">
  <p>CoffeNusantara@gmail.com</p>
    <p>Tangerang, Banten</p>
    </div>

</div>

<div class="navbar">
    <div class="container">
        <div class="logo">
        <h1>Coffe </h1>
        <h1 class='nus'>Nusantara</h1>
    </div>
    <ul>
        <li class='{{Route::is("home") ? "active" : ""}}'><a href="{{route('home')}}">home</a></li>
        <li class='{{Route::is("about") ? "active" : ""}}'><a href="{{route('about')}}">About</a></li>
        <li class='{{Route::is("product") ? "active" : ""}}'><a href="{{route('product')}}">Product</a></li>
    </ul>
    </div>
</div>
</div>
