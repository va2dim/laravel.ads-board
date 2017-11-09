<div class="blog-post">
    <h2 class="blog-post-title">
        @php
            $request_uri = substr($_SERVER['REQUEST_URI'], 1, strlen($_SERVER['REQUEST_URI'])-1);
        @endphp

        @if(!is_numeric(($request_uri)))
            <a href="/{{ $ad->id }}">
        @endif

                {{ $ad->title }}

        @if(!is_numeric(($request_uri)))
            </a>
        @endif
    </h2>
    <p class="blog-post-meta">Publicated by {{ $ad->user->name }}, {{ $ad->created_at->toFormattedDateString() }}
        @if(Auth::check())
            @if(Auth::User()->name == $ad->user->name)
                <a class="btn btn-primary" href="/edit/{{ $ad->id }}">Edit</a>
                <a class="btn btn-danger" href="/delete/{{ $ad->id }}">Delete</a>
            @endif
        @endif
    </p>
    <div>{{ $ad->description }}</div>
</div>