<div class="blog-masthead">
    <div class="container">
        <nav class="nav col-sm-10">
            @php
                $request_uri = substr($_SERVER['REQUEST_URI'], 1, strlen($_SERVER['REQUEST_URI'])-1);
            @endphp

            @if (!empty($request_uri))
                <a class="nav-link active" href="/">Home</a>
            @endif

            @if (!Auth::check())
                @if(!is_numeric(($request_uri)))
                    @include('sessions.create')
                @endif
            @elseif (empty($request_uri))
                <a class="nav-link active" href="/edit">Create Ad</a>
                <span class="nav-link ml-auto">{{ Auth::User()->name }}</span><a class="nav-link" href="/logout">Logout</a>
            @endif
        </nav>
    </div>
</div>