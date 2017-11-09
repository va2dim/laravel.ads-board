
<div class="blog-masthead">
    <div class="container">
        <nav class="nav">
            <a class="nav-link active" href="/">Home</a>

            @if (Auth::check())
                <a class="nav-link active" href="/edit">Create Ad</a>
                <a class="nav-link ml-auto" href="">{{ Auth::User()->name }}</a><a class="nav-link" href="/logout">Logut</a>
            @else
                <a class="nav-link ml-auto" href="/login">Login</a>
            @endif
        </nav>
    </div>
</div>