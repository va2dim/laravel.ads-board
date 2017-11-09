<form class="form-inline ml-auto" method="post">
    {{ csrf_field() }}
    <fieldset>
        @include('layouts.errors')
        <div class="form-group align-top">
            <input class="form-control" type="text" name="name" placeholder="User name">
            <input class="form-control" type="password" name="password" placeholder="password">
            <button class="btn btn-success" type="submit">Login</button>
        </div>
    </fieldset>
</form>



