@extends ('layouts.master')

@section ('content')
    <div class="col-sm-8 blog-main">
    @foreach($ads as $ad)
        @include('ads.ad')
    @endforeach

        <nav class="blog-pagination">
            {{ $ads->links() }}
        </nav>
    </div>
@endsection