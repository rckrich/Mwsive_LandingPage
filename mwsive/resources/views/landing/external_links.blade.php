<!-- resources/views/landing/external_inks.blade.php -->

@extends('commons.base')

@section('content')
    <section id="links">
    <div class="container p-5">
            <div class="row align-items-center pt-5">
                <div class="col-12">
                    <h1 class="title-xl">{{__('tc.title')}}</h1>
                </div>
            </div>
            <div class="row">

                <div class="col-12">
                    <p><a href="{{asset('assets/docs/Mwsive TyC.pdf')}}">{{__('tc.sample1')}}</a></p>
                    <!--
                    <p><a href="https://www.instagram.com/mwsive/?hl=en">{{__('tc.sample2')}}</a></p>
                    <p><a href="https://twitter.com/mwsive">{{__('tc.sample3')}}</a></p>
                    -->
                </div>
            </div>
        </div>
    </section>
@endsection
