
@if ($errors->any())
    <div>
        @foreach ( $errors->all() as $err )
            <div class="alert alert-success" role="alert">
                {{ $err }}
            </div>
        @endforeach
    </div> 
        
@endif