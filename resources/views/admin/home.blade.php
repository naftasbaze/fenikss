@extends('layouts.admin')

@section('content')

        {{--Lietotāji--}}
        <div class="row">
            <h1 >
                Lietotāju statistika <small></small>
            </h1>

            {{--@foreach($statLitotaji as $nos=>$stat)
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-boder blue">
                        <div class="panel-left pull-left blue">
                            <i class="fa {{$stat['ikn']}} fa-5x"></i>
                        </div>
                        <div class="panel-right">

                            @if($stat['lnk'])
                                <a href="{{{url('/admin/' . $stat['lnk'])}}}">
                                    <h3>{{$stat['ver']}} </h3>
                                    <strong>{{$nos}}</strong>
                                </a>
                            @else
                                <h3>{{$stat['ver']}} </h3>
                                <strong>{{$nos}}</strong>
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach--}}

        </div>


        {{--Komentāri--}}
        <div class="row">
            <h1 >
                Komentāru statistika <small></small>
            </h1>

           {{-- @foreach($statKomenti as $nos=>$stat)
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-boder blue">
                        <div class="panel-left pull-left blue">
                            <i class="fa {{$stat['ikn']}} fa-5x"></i>
                        </div>
                        <div class="panel-right">
                            @if($stat['lnk'])
                                <a href="{{{url('/admin/' . $stat['lnk'])}}}">
                                    <h3>{{$stat['ver']}} </h3>
                                    <strong>{{$nos}}</strong>
                                </a>
                            @else
                                <h3>{{$stat['ver']}} </h3>
                                <strong>{{$nos}}</strong>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach--}}

        </div>

        {{--Skola--}}
        <div class="row">
            <h1 >
                Skolas statistika <small></small>
            </h1>

            {{--@foreach($statSkola as $nos=>$stat)
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-boder blue">
                        <div class="panel-left pull-left blue">
                            <i class="fa {{$stat['ikn']}} fa-5x"></i>
                        </div>
                        <div class="panel-right">
                            @if($stat['lnk'])
                                <a href="{{{url('/admin/' . $stat['lnk'])}}}">
                                    <h3>{{$stat['ver']}} </h3>
                                    <strong>{{$nos}}</strong>
                                </a>
                            @else
                                <h3>{{$stat['ver']}} </h3>
                                <strong>{{$nos}}</strong>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach--}}

        </div>

        {{--Apmeklējumi--}}
        <div class="row">
            <h1 >
                Apmeklējumu statistika <small>(Google dati)</small>
            </h1>


                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-boder blue">
                        {{--<div class="panel-left pull-left blue">
                            <i class="fa fa-google-plus fa-5x"></i>
                        </div>--}}
                        <div class="panel-body">

                                <div id="embed-api-auth-container"></div>
                                <div id="chart-container"></div>
                                <div id="view-selector-container"></div>

                        </div>
                    </div>
                </div>


        </div>
@endsection

@section('scripts')

    <script>
        (function(w,d,s,g,js,fs){
            g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(f){this.q.push(f);}};
            js=d.createElement(s);fs=d.getElementsByTagName(s)[0];
            js.src='https://apis.google.com/js/platform.js';
            fs.parentNode.insertBefore(js,fs);js.onload=function(){g.load('analytics');};
        }(window,document,'script'));
    </script>

    <script>
        gapi.analytics.ready(function() {
            /**
             * Authorize the user immediately if the user has already granted access.
             * If no access has been created, render an authorize button inside the
             * element with the ID "embed-api-auth-container".
             */
            gapi.analytics.auth.authorize({
                container: 'embed-api-auth-container',
                clientid: '1078637523065-vbk88it0bp62lu1iijjcqi2ohivmebc1.apps.googleusercontent.com'
            });
            /**
             * Create a new ViewSelector instance to be rendered inside of an
             * element with the id "view-selector-container".
             */
            var viewSelector = new gapi.analytics.ViewSelector({
                container: 'view-selector-container'
            });
            // Render the view selector to the page.
            viewSelector.execute();
            /**
             * Create a new DataChart instance with the given query parameters
             * and Google chart options. It will be rendered inside an element
             * with the id "chart-container".
             */
            var dataChart = new gapi.analytics.googleCharts.DataChart({
                query: {
                    metrics: 'ga:sessions',
                    dimensions: 'ga:date',
                    'start-date': '30daysAgo',
                    'end-date': 'yesterday'
                },
                chart: {
                    container: 'chart-container',
                    type: 'LINE',
                    options: {
                        width: '100%'
                    }
                }
            });
            /**
             * Render the dataChart on the page whenever a new view is selected.
             */
            viewSelector.on('change', function(ids) {
                dataChart.set({query: {ids: ids}}).execute();
            });
        });
    </script>

@endsection