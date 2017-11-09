@extends('layouts.master')

@section('content')

    <div class="blog-main col-sm-12">

        <form action="/edit" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <fieldset>

            @include('layouts.errors')

                <div class="form-group">
                    <input class="form-control" readonly hidden type="number" id="id" name="id" placeholder="Ads ID" value="{{ $ad->id }}">
                    <input class="form-control" type="text" id="title" name="title" placeholder="Title" value="{{ $ad->title }}">
                    <textarea class="form-control" id="description" name="description" placeholder="Description">{{ $ad->description }}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn
                        @if ($ad)
                            btn-primary"> Edit
                        @else
                            btn-success"> Create
                        @endif
                    </button>
                </div>


            </fieldset>
        </form>


    </div>

@endsection