@extends('layouts/app')
@section('header')
    <link href="{{asset('css/com_yj-2ef27bbbf1.css')}}" rel="stylesheet">
    <link href="{{asset('css/com_lf.css')}}" rel="stylesheet">
@stop
@section('content')
    <div class="container-fluid">
        @component('inc.header')
        @endcomponent

        @component('inc.nav')
        @endcomponent

        @component('inc.banner')
        @endcomponent

        @component('inc.notice')
        @endcomponent

        @component('inc.imglist')
        @endcomponent

        @component('inc.newslist')
        @endcomponent

        @component('inc.focusnav')
        @endcomponent

        @component('inc.comlink')
        @endcomponent

        @component('inc.footer')
        @endcomponent
    </div>
@stop
@section('footer')
    <script src="{{ asset('js/com_yj.js') }}"></script>
    <script src="{{ asset('js/com_lf.js') }}"></script>
@stop
