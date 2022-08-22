@extends('landy-theme::layout.index')
@section('mainContent')
    @include('landy-theme::components.landy-landingpage-content')
    @include('landy-theme::components.landy-story-content')
    @include('landy-theme::components.landy-service-content')
    @include('landy-theme::components.landy-video-content')
    @include('landy-theme::components.landy-portfolio-content')
    @include('landy-theme::components.landy-pricing-content')
    @include('landy-theme::components.landy-team-content')
    @include('landy-theme::components.landy-call-action-content')
    @include('landy-theme::components.landy-review-content')
    @include('landy-theme::components.landy-news-content')
    @include('landy-theme::components.landy-client-content')
    @include('landy-theme::components.landy-contact-content')
    <!-- Maps -->
    <div class="container mx-auto w-full mb-20">
        <div class="flex justify-center pt-10 lg:pt-20">
            <div id="googleMap" class=" w-full h-52 lg:h-[512px]"></div>
        </div>
    </div>
    @include('landy-theme::components.landy-footer')

@endsection
