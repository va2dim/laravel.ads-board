@extends ('layouts.master')

@section ('content')
    <div class="blog-main col-sm-10">
    @foreach($ads as $ad)
        @include('ads.ad')
    @endforeach

        <nav class="blog-pagination">
            {{ $ads->links() }}
        </nav>
    </div>
@endsection