@extends('layouts.app')
@section('content')
    <landing-section
        video="@asset('video/sea.mp4')"
        landing_fields='{!! json_encode($landing_fields) !!}'
    ></landing-section>

    <div class="wrapper-small">
        <projects-section
            work_fields='{!! json_encode($work_fields) !!}'
            allProjects='{!! json_encode($projects) !!}'
        ></projects-section>

        <testimonials-section
            testimonials_fields='{!! json_encode($testimonials_fields) !!}'
            allTestimonials='{!! json_encode($testimonials) !!}'
        ></testimonials-section>
    </div>

    <about-section
        about_fields='{!! json_encode($about_fields) !!}'
    ></about-section>

    <div class="wrapper-large">
        <packages-section
            packages_fields='{!! json_encode($packages_fields) !!}'
            allPackages='{!! json_encode($packages) !!}'
        ></packages-section>

        <contact-section
            contact_fields='{!! json_encode($contact_fields) !!}'
        ></contact-section>
    </div>
@endsection
