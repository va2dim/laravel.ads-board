@extends('layouts.master')

@section('content')

    <div class="blog-main col-sm-12">

        <form action="/edit" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <fieldset>

            @include('layouts.errors')

                <div class="form-group">
                    <input class="form-control" readonly type="number" id="id" name="id" placeholder="Ads ID" value="">
                    <input class="form-control" type="text" id="title" name="title" placeholder="Title" value="">
                    <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>


            </fieldset>
        </form>


    </div>

@endsection