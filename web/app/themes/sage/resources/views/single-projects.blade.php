@extends('layouts.app')
@section('content')
    <div class="singleProject__banner" style="background-image: url('{{get_field("project_banner_image")["url"]}}')">
        <h2 class="singleProject__banner--title">{{ get_the_title() }} </h2>
        <p class="singleProject__banner--smallDesc">{{ get_field("project_small_description") }}</p>
    </div>
    <div class="singleProject__content mx-auto">
        {!! get_field("project_case_study") !!}
    </div>
@endsection
