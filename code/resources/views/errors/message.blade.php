@if($errors->any())
    <ul class="alert alert__danger">
        @foreach($errors->all() as $error)
            <li class="alert__text">{{ $error }}</li>
        @endforeach
    </ul>
@endif