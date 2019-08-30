@extends('layouts.app')
@section('content')
    {{--  Navigation  --}}
    @include('partials.navbar')

    {{--  Landing Section  --}}
    <landing-section
        video="@asset('video/sea.mp4')"
        landing_fields='{!! json_encode($landing_fields) !!}'
    ></landing-section>

    <div class="wrapper-small">
        {{--  Projects Section  --}}
        <projects-section
            work_fields='{!! json_encode($work_fields) !!}'
            allProjects='{!! json_encode($projects) !!}'
        ></projects-section>

        {{--  Testimonials Section  --}}
        <testimonials-section
            testimonials_fields='{!! json_encode($testimonials_fields) !!}'
            allTestimonials='{!! json_encode($testimonials) !!}'
        ></testimonials-section>
    </div>

    {{--  About Section  --}}
    <about-section
        about_fields='{!! json_encode($about_fields) !!}'
    ></about-section>

    <div class="wrapper-large">
        {{--  Packages Section  --}}
        <packages-section
            packages_fields='{!! json_encode($packages_fields) !!}'
            allPackages='{!! json_encode($packages) !!}'
        ></packages-section>

        {{--  Contact Section  --}}
        <contact-section
            contact_fields='{!! json_encode($contact_fields) !!}'
            allLinks='{!! json_encode($social_media_links) !!}'
        ></contact-section>
    </div>
@endsection
