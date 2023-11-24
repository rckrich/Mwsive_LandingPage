<!-- resources/views/landing/our_story.blade.php -->

@extends('commons.base')

@section('content')
    <section id="our_story">
    <div class="container p-5">
            <div class="row align-items-center pt-5">
                <div class="col-12">
                    <h1 class="title-xl">{{__('our_story.title')}}</h1>
                </div>
            </div>
            <div class="row">

                <div class="col-12">
                    <p>{{__('our_story.paragraph1')}}</p>
                    <p>{{__('our_story.paragraph2')}}</p>
                    <p>{{__('our_story.paragraph3')}}</p>
                </div>

            </div>
        </div>
    </section>

@endsection
