

@if(\Session::has('success'))
    <div class="alert alert-card alert-success" role="alert">
        <strong class="text-capitalize">Success! </strong>
        {{\Illuminate\Support\Facades\Session::get('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(\Session::has('error'))
    <div class="alert alert-card alert-danger" role="alert">
        <strong class="text-capitalize">Error! </strong>
        {{\Illuminate\Support\Facades\Session::get('error')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if($errors->count() > 0 )
    <div class="alert alert-danger" role="alert">
        <strong class="text-capitalize">The following errors have occurred:</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul>
            @foreach( $errors->all() as $message )
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif