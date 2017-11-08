@extends('layouts.master')

@section('content')

    <div class="col-sm-12">

        <form method="post" >
            {{ csrf_field() }}
            <fieldset>
                @include('layouts.errors')
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Введите имя">
                    <input class="form-control" type="password" name="password" placeholder="пароль">
                    <button class="btn btn-success" type="submit">Войти</button>
                </div>
            </fieldset>
        </form>
    </div>

@endsection('content')