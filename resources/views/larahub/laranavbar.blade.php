@if (!Auth::user())
        <a class="btn btn-primary btn-md" href="/larahub/login" role="button">Log-in</a>
        <a class="btn btn-info btn-md" href="/larahub/register" role="button">Register</a>
@endif    
        <a class="btn btn-light btn-md" href="/larahub/quest" role="button">See more Question</a>
        <a class="btn btn-light btn-md" href="/larahub/quest/add">Make Question</a>