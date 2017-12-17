

@if( Session::has( 'success' ))
    <script>
    sweetAlert({
    title: "Urrāā!",
    text: "{{ Session::get( 'success' ) }}",
    type: "success"
    });
    </script>


@elseif( Session::has( 'warning' ))
    <script>
        sweetAlert({
            title: "Uzmanīgi!",
            text: "{{ Session::get( 'warning' ) }}",
            type: "warning"
        });
    </script>


@elseif( Session::has( 'info' ))
    <script>
        sweetAlert({
            title: "Svarīgi!",
            text: "{{ Session::get( 'info' ) }}",
            type: "info"
        });
    </script>

@endif




@if (count($errors) > 0)
    <!-- Form Error List -->
    <script>
        sweetAlert({
            title: "OPS! Kaut kur ir kļūda!",
            text: "{{ $errors->first() }}",
            type: "warning"
        });
    </script>


@endif