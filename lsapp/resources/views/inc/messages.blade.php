<!-- Check for errors -->
@if(count($errors)>0) 
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>  
    @endforeach
@endif
<!-- Check for Session errors -->
<!-- Check for Session Success -->
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
<!-- Check for Session Failure / Error -->
@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif