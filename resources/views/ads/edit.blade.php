@extends('layouts.master')

@section('content')

    <div class="blog-main col-sm-10">

        <form action="/edit" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <fieldset>

            @include('layouts.errors')

                <div class="form-group">
                    <input class="form-control" readonly hidden type="number" id="id" name="id" placeholder="Ad ID" value="{{ $ad->id }}">
                    <input class="form-control" type="text" id="title" name="title" placeholder="Title" value="{{ $ad->title }}">
                    <textarea class="form-control" id="description" name="description" rows="5" placeholder="Description">{{ $ad->description }}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn
                        @if ($ad->id)
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