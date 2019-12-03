@extends('layouts.app')
@section('content')
    <h1>{{ get_the_title() }}</h1>
    {!! get_field("project_case_study") !!}
@endsection
