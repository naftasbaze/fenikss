@if (count($errors) > 0)
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>OPS! Kaut kur ir kļūda!</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    @elseif(session()->has('nosutits'))
    <div class="alert alert-success">
        {{ session()->get('nosutits') }}
        <br><br>
    </div>
@endif
