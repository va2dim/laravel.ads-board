<div class="blog-masthead">
    <div class="container">
        <nav class="nav col-sm-8">
            <a class="nav-link active" href="/">Home</a>

            @if (Auth::check())
                <a class="nav-link active" href="/edit">Create Ad</a>
                <a class="nav-link ml-auto" href="">{{ Auth::User()->name }}</a><a class="nav-link" href="/logout">Logout</a>
            @else
                @php
                    $request_uri = substr($_SERVER['REQUEST_URI'], 1, strlen($_SERVER['REQUEST_URI'])-1);
                @endphp

                @if(!is_numeric(($request_uri)))
                    @include('sessions.create')
                @endif
            @endif
        </nav>
    </div>
</div>