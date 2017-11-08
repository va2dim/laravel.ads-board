
<div class="blog-masthead">
    <div class="container">
        <nav class="nav">
            <a class="nav-link active" href="/">Домой</a>


            @if (Auth::check())
                <a class="nav-link ml-auto" href="">{{ Auth::User()->name }}</a><a class="nav-link" href="/logout">Выйти</a>
            @else
                <a class="nav-link ml-auto" href="/login">Войти</a>
            @endif
        </nav>
    </div>
</div>