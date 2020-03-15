@extends('layouts.app')

@section('content')


{{--    <div id="fullpage">--}}
{{--        <div class="section">Some section one</div>--}}
{{--        <div class="section">Some section two</div>--}}
{{--        <div class="section">Some section three</div>--}}
{{--        <div class="section">Some section foure</div>--}}
{{--    </div>--}}



{{--<example-component></example-component>--}}




        <div id="fullpage">

            <section class="section fp-auto-height-responsive">

                @include('home_page.home_carousel')
            </section>

            <section class="section fp-auto-height-responsive">

                @include('home_page.our_gole')
            </section>

            <section class="section fp-auto-height-responsive">

                @include('home_page.home_upcoming_event')
            </section>

            <section class="section fp-auto-height-responsive">
                @include('snippets.map.google_map_location')
            </section>

            <section class="section fp-auto-height-responsive">
                @include('.layouts.footer')
            </section>

        </div>



    @endsection

{{--@section('script')--}}



{{--@endsection--}}


