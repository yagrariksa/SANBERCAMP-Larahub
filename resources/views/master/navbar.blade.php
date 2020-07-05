<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="justify-content-between collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="{{url('/laraexp')}}">LaraExp</a>
                <a class="nav-item nav-link" href="{{url('/mahasiswa')}}">MahasiswaDB</a>
                {{-- <a class="nav-item nav-link" href="{{url('/larahub')}}">Larahub</a> --}}
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/larahub" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Larahub
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/larahub">HomePage</a>
                        <a class="dropdown-item" href="/larahub/quest">Quest-List</a>
                        <a class="dropdown-item" href="/larahub/quest/add">Make Question</a>
                        {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                    </div>
                </div>
                {{-- <a class="nav-item nav-link" href="#">Pricing</a>
                <a class="nav-item nav-link" href="#">Disabled</a> --}}
            </div>
            @if (!Auth::User())
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="{{url('/larahub/login')}}">Log-In </a>
                <a class="nav-item nav-link" href="{{url('/larahub/register')}}">Register</a>
                {{-- <a class="nav-item nav-link" href="{{url('/larahub/login')}}">to Larahub</a> --}}
            </div>
            @else
                
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    User
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <span class="dropdown-item disabled"><small>loged on</small> {{Auth::User()['name']}}</span>
                    <hr>
                    <a class="dropdown-item" href="#">Edit User</a>
                    <a class="dropdown-item" href="/larahub/logout">Log Out</a>
                    {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                </div>
            </li>
            </ul>
            @endif

        </div>
    </div>

</nav>