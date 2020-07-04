@if (!Auth::user())
        <a class="btn btn-primary btn-lg" href="/larahub/login" role="button">Log-in</a>
        <a class="btn btn-info btn-lg" href="/larahub/register" role="button">Register</a>
        <a class="btn btn-success btn-lg" href="/larahub/quest" role="button">See more Question</a>
@else
        <a class="btn btn-success btn-lg" href="/larahub/quest" role="button">See more Question</a>
        <a class="btn btn-danger btn-lg" href="/larahub/logout" role="button">Log Out</a>
@endif    