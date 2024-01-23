<!-- resources/views/landing/home.blade.php -->

@extends('commons.base')

@section('content')
    <section id="main_banner">
        <img id="web_banner" src="{{asset('assets/img/main_banner.png')}}"/>
        <img id="mobile_banner" src="{{asset('assets/img/main_banner_mobile.png')}}"/>
    </section>

    <section id="characteristics" class="p-lg-5 p-md-5 p-sm-3 p-3">
        <div class="row p-lg-5 p-md-5 p-sm-3 p-3">
            <div class="col-12 px-3 py-5">
                <h1 class="text-dark text-center">{{__('general.characteristics.title')}}</h1>
            </div>

            <div class="col-12 p-3">
                <img class="image-card w-100" src="{{asset('assets/img/characteristics_1.png')}}" />
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 p-3">
                <img class="image-card w-100" src="{{asset('assets/img/characteristics_2.png')}}" />
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 p-3">
                <img class="image-card w-100" src="{{asset('assets/img/characteristics_3.png')}}" />
            </div>
            <div class="col-12 p-3">
                <img class="image-card w-100" src="{{asset('assets/img/characteristics_4.png')}}" />
            </div>
        </div>
    </section>

    <section id="usage" class="p-lg-5 p-md-5 p-sm-3 p-3">
        <div class="row text-center">
            <div class="col-12 p-3">
                <h1 class="text-dark">{{__('general.usage.title')}}</h1>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 py-lg-5 py-3 px-lg-0 px-md-0 px-sm-5 px-5 align-self-start mb-auto">
                <div class="px-lg-5 px-3 pb-lg-5 pb-md-5 pb-3">
                    <h2 class="pb-3"><b>{{__('general.usage.surf')}}</b></h2>
                    <img class="w-100 pb-lg-5 pb-md-5 pb-0" src="{{asset('assets/img/SURF.gif')}}" />
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 py-lg-5 py-3 px-lg-0 px-md-0 px-sm-5 px-5 align-self-end mt-auto">
                <div class="px-lg-5 px-3 pt-lg-5 pt-md-5 pt-3">
                    <h2 class="pb-3"><b>{{__('general.usage.pick')}}</b></h2>
                    <img class="w-100" src="{{asset('assets/img/PIK.gif')}}" />
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 py-lg-5 py-3 px-lg-0 px-md-0 px-sm-5 px-5 align-self-start mb-auto">
                <div class="px-lg-5 px-3 pb-lg-5 pb-md-5 pb-3">
                    <h2 class="pb-3"><b>{{__('general.usage.swipe')}}</b></h2>
                    <img class="w-100 pb-lg-5 pb-md-5 pb-0" src="{{asset('assets/img/SWIPE.gif')}}" />
                </div>
            </div>
        </div>
    </section>

    <section id="discoverability">
        <img class="back_img" src="{{asset('assets/img/discoverability.png')}}"/>
        <div class="container p-lg-5 p-md-5 p-sm-3 p-3">
            <div class="content row mx-auto p-5">
                <div class="row col-12 mx-auto align-items-center">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 p-3 mx-auto">
                        <img class="image w-100" src="{{asset('assets/img/IMG_surf.png')}}" />
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 p-3 mx-auto text-left">
                        <h1 class="text-light"><b>{{__('general.discoverability.title')}}</b></h1>
                        <p class="text-light">{{__('general.discoverability.p1')}}</p>
                        <p class="text-light">{{__('general.discoverability.p2')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="activities" class="p-lg-5 p-md-3 p-sm-3 p-3">
        <div class="row mx-auto">
            <div class="row col-10 mx-auto my-10rem">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 p-3 mx-auto">
                    <div class="card text-center h-100">
                        <div class="card-img mx-auto mt-5 p-3">
                            <img class="mx-auto w-100" src="{{asset('assets/icons/Icon_Explore.png')}}"/>
                        </div>
                        <div class="card-body mb-5">
                            <p class="card-title">{{__('general.activities.a1_title')}}</p>
                            <p class="card-text">{{__('general.activities.a1_text')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 p-3 mx-auto">
                    <div class="card text-center h-100">
                        <div class="card-img mx-auto mt-5 p-3">
                            <img class="mx-auto w-100" src="{{asset('assets/icons/Icon_surf.png')}}"/>
                        </div>
                        <div class="card-body mb-5">
                            <p class="card-title">{{__('general.activities.a2_title')}}</p>
                            <p class="card-text">{{__('general.activities.a2_text')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 p-3 mx-auto">
                    <div class="card text-center h-100">
                        <div class="card-img mx-auto mt-5 p-3">
                            <img class="mx-auto w-100" src="{{asset('assets/icons/Icon_COMPITE.png')}}"/>
                        </div>
                        <div class="card-body mb-5">
                            <p class="card-title">{{__('general.activities.a3_title')}}</p>
                            <p class="card-text">{{__('general.activities.a3_text')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
