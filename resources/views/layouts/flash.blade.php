@if ($message = Session::get('success'))
    <div class="validateSuccess">
        <h3>{{$message}}</h3>
    </div>
@endif