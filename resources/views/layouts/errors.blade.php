@if(count($errors))
    <div class="form-group">
        <div class="alert alert-danger" style="padding: 6px;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif