<!-- resources/views/landing/our_story.blade.php -->

@extends('commons.base')

@section('content')
    <section id="our_story">
    <div class="container p-5">
            <div class="row align-items-center mb-5 pt-5">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <h1 class="title-xl">{{__('our_story.title')}}</h1>
                </div>
            </div>
            <div class="row">
                
                <div class="col-12">
                    <p>{{__('our_story.sample')}}<br>{{__('our_story.sample')}}</p>
                    <p>{{__('our_story.sample')}}</p>
                </div>
               
            </div>
        </div>
    </section>
    
@endsection