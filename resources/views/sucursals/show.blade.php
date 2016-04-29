@extends('layouts.app_')

@section('header')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">

    <script>
        $(function() {
            // run the currently selected effect
            function runEffect() {
                // get effect type from
                var selectedEffect = 'fold';

                // most effect types need no options passed by default
                var options = {};
                // some effects have required parameters
                if ( selectedEffect === "scale" ) {
                    options = { percent: 100 };
                } else if ( selectedEffect === "size" ) {
                    options = { to: { width: 280, height: 185 } };
                }

                // run the effect
                $( "#effect" ).show( selectedEffect, options, 500);
            };

            // run the currently selected effect
            function runEffect2() {
                // get effect type from
                var selectedEffect = "fold";

                // most effect types need no options passed by default
                var options = {};
                // some effects have required parameters
                if ( selectedEffect === "scale" ) {
                    options = { percent: 0 };
                } else if ( selectedEffect === "size" ) {
                    options = { to: { width: 200, height: 60 } };
                }

                // run the effect
                $( "#effect" ).hide( selectedEffect, options, 1000, callback );
            };



            //callback function to bring a hidden box back
            function callback() {
                setTimeout(function() {
                    $( "#effect:visible" ).removeAttr( "style" ).fadeOut();
                }, 1000 );
            };

            // set effect from select menu value
            $( "#button_effect" ).click(function() {
                runEffect();
            });

            $( "#pantalla_cancel" ).click(function() {
                runEffect2();
            });

            $( "#effect" ).hide();
        });
    </script>

@endsection

@section('content')


    @include('sucursals.show_fields')

    <div class="form-group">
           <a href="{!! route('sucursals.index') !!}" class="btn btn-default">Regresar</a>
    </div>
@endsection

@section('footer')
@endsection