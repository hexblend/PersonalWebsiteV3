@extends('layouts.app')

@section('content')
    <landing-section video="@asset('video/sea.mp4')" landing_fields='{!! json_encode($landing_fields) !!}'></landing-section>
    <div class="wrapper">
        <projects-section></projects-section>
    </div>
@endsection
