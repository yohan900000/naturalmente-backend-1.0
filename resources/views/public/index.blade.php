@extends('public.base')

@section('content')
    <section class="brochures">
        <div id="container">

            @if(session('error'))
                <div class="alert" style="margin-top: 0;">
                    <i class="fa-solid fa-circle-xmark error"></i>
                    <div class="text">
                        <b>Une erreur est survenue</b>
                        {{ session('error') }}
                    </div>
                </div>
            @endif

            <div class="brochures__brochures">
                <img src="{{ asset('images/brochures/brochure-1.png') }}" alt="">
            </div>
            <div class="brochures__brochures">
                <img src="{{ asset('images/brochures/brochure-2.png') }}" alt="">
            </div>
            <div class="brochures__brochures">
                <img src="{{ asset('images/brochures/brochure-3.png') }}" alt="">
            </div>
            <div class="brochures__brochures">
                <img src="{{ asset('images/brochures/brochure-4.png') }}" alt="">
            </div>
            <div class="brochures__brochures">
                <img src="{{ asset('images/brochures/brochure-5.png') }}" alt="">
            </div>
            <div class="brochures__brochures">
                <img src="{{ asset('images/brochures/brochure-6.png') }}" alt="">
            </div>
            <div class="brochures__brochures">
                <img src="{{ asset('images/brochures/brochure-7.png') }}" alt="">
            </div>
            <div class="brochures__brochures">
                <img src="{{ asset('images/brochures/brochure-8.png') }}" alt="">
            </div>
        </div>
    </section>
@endsection
