<!-- resources/views/landing/faq.blade.php -->

@extends('commons.base')

@section('content')
<section id="faq">
    <div class="container p-5">
        <div class="row align-items-center pt-5">
            <div class="col-12">
                <h1 class="">{{__('faq.title')}}</h1>
            </div>
        </div>
        <div class="row">

            <div class="col-12 pt-3">

                <div class="accordion" id="accordionFAQ">
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                {{__('faq.q1')}}
                            </div>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                <p>{{__('faq.r1')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                {{__('faq.q2')}}
                            </div>
                        </div>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                <p>{{__('faq.r2')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                {{__('faq.q3')}}
                            </div>
                        </div>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                <p>{{__('faq.r3_1')}}</p>
                                <p>{{__('faq.r3_2')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                {{__('faq.q4')}}
                            </div>
                        </div>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                <p>{{__('faq.r4')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                {{__('faq.q5')}}
                            </div>
                        </div>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                <p>{{__('faq.r5')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
