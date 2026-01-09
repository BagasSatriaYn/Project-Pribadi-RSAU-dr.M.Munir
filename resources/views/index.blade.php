@extends('layouts.app')

@section('content')

<!-- Hero Section -->
    @include('sections.hero')   

    <!-- Featured Services Section -->
    @include('sections.featuredservice')

    <!-- Call To Action Section -->
    @include('sections.calltoaction')
    <!-- /Call To Action Section -->

    <!-- About Section -->
    @include('sections.about')
    <!-- /About Section -->

    <!-- Stats Section -->
    @include('sections.stats')
    <!-- /Stats Section -->

    <!-- Features Section -->
    @include('sections.features')
    <!-- /Features Section -->

    <!-- Services Section -->
    @include('sections.services')
    <!-- /Services Section -->

    <!-- Appointment Section -->
    @include('sections.appointment')
    <!-- /Appointment Section -->

    <!-- Tabs Section -->
    @include('sections.tabs')
    <!-- /Tabs Section -->

    <!-- Testimonials Section -->
    @include('sections.testimonials')   
    <!-- /Testimonials Section -->

    <!-- Doctors Section -->
    @include('sections.doctors')
    <!-- /Doctors Section -->

    <!-- Gallery Section -->
    @include('sections.gallery')
    <!-- /Gallery Section -->

    <!-- Faq Section -->
    @include('sections.faq')
    <!-- /Faq Section -->

    <!-- Contact Section -->
    @include('sections.contact')
    <!-- /Contact Section -->

  </main>

@endsection