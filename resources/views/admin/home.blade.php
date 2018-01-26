@extends('layouts.admin')

@section('content')

    {{--Lietotāji--}}
    <div class="row">
        <h1 >
            <small>  Īsa pamācība </small>
        </h1>


        <h3> No kreisās puses izvēlnes izēlies vajadzīgo punktu!</h3>
        <p>  Izmaiņas teksta lauciņos vienmēr jāsaglabā, <br>
            bildes tikai jāiemet lauciņā, saglabāšana notiek automātiski!
        </p>

        <h3>Uzmanību!</h3>
        <p>Attēla izmēram jāatbilst norādītājam vai jābūt lielākam!<br>
            Vēlams izmantot tikai horizontālas bildes!</p>

    </div>



    {{--Apmeklējumi--}}
    <div class="row">
        <h1 >
            Apmeklējumu statistika <small>
                <a href="https://analytics.google.com/analytics/web/#embed/report-home/a112613755w167812294p168007295/">
                    (Google dati)
                </a> </small>
        </h1>


        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder blue">
                {{--<div class="panel-left pull-left blue">
                    <i class="fa fa-google-plus fa-5x"></i>
                </div>--}}
                <div class="panel-body">

                    <section id="auth-button"></section>
                    <section id="view-selector"></section>
                    <section id="timeline"></section>

                </div>
            </div>
        </div>


    </div>
@endsection

@section('scripts')



    <script>
        (function(w,d,s,g,js,fjs){
            g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(cb){this.q.push(cb)}};
            js=d.createElement(s);fjs=d.getElementsByTagName(s)[0];
            js.src='https://apis.google.com/js/platform.js';
            fjs.parentNode.insertBefore(js,fjs);js.onload=function(){g.load('analytics')};
        }(window,document,'script'));
    </script>

    <script>
        gapi.analytics.ready(function() {

            // Step 3: Authorize the user.

            var CLIENT_ID = '1011126961897-ju5c7aqhlicp3b65epn7q4o1pndrkpdq.apps.googleusercontent.com';

            gapi.analytics.auth.authorize({
                container: 'auth-button',
                clientid: CLIENT_ID
            });

            // Step 4: Create the view selector.

            var viewSelector = new gapi.analytics.ViewSelector({
                container: 'view-selector'
            });

            // Step 5: Create the timeline chart.

            var timeline = new gapi.analytics.googleCharts.DataChart({
                reportType: 'ga',
                query: {
                    'dimensions': 'ga:date',
                    'metrics': 'ga:sessions',
                    'start-date': '30daysAgo',
                    'end-date': 'yesterday'
                },
                chart: {
                    type: 'LINE',
                    container: 'timeline'
                }
            });

            // Step 6: Hook up the components to work together.

            gapi.analytics.auth.on('success', function(response) {
                viewSelector.execute();
            });

            viewSelector.on('change', function(ids) {
                var newIds = {
                    query: {
                        ids: ids
                    }
                };
                timeline.set(newIds).execute();
            });
        });
    </script>

@endsection