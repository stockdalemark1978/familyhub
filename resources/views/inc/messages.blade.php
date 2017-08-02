@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert">
            {{$error}}
        </div>
    @endforeach
@endif

@if(count('success'))
    <div class="success">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
        <div class="alert">
            {{session('error')}}
        </div>
@endif