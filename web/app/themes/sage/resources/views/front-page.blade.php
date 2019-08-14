@extends('layouts.app')

@section('content')
    <landing-section
            video="@asset('video/sea.mp4')"
            name="{{$landing_fields->name}}"
            slug="{{$landing_fields->slug}}"
            slug_ending_1="{{$landing_fields->slug_ending_1}}"
            slug_ending_2="{{$landing_fields->slug_ending_2}}"
            slug_ending_3="{{$landing_fields->slug_ending_3}}"
            button_text="{{$landing_fields->button_text}}"
            bottom_text="{{$landing_fields->bottom_text}}"
    ></landing-section>
@endsection
