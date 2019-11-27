<nav class="navbar navbar-expand-lg navbar-light fixed-top " style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link {{set_active_route('home')}}" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{set_active_route('about')}}" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{set_active_route('artisan')}}" href="{{route('artisan')}}">Artisans</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Planet
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="https://laravel.com/">Laravel.com</a>
                    <a class="dropdown-item" href="https://laravel.io/">Laravel.io</a>
                    <a class="dropdown-item" href="https://laracasts.com/">Laracats</a>
                    <a class="dropdown-item" href="https://larajobs.com/">Larajobs</a>
                    <a class="dropdown-item" href="https://laravel-news.com/">Laravel News</a>
                    <a class="dropdown-item" href="https://larachat.co/">Larachat</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link {{set_active_route('contact')}}" href="{{route('contact')}}">Contact</a>
            </li>
        </ul>
        <ul class=" navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
            </li>
        </ul>
    </div>
</nav>
