@extends('layouts.app')

@section('content')
    <landing-section video="@asset('video/sea.mp4')" landing_fields='{!! json_encode($landing_fields) !!}'></landing-section>
@endsection
