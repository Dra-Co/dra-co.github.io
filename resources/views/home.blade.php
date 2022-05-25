@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row" style="padding-top: 40px">
        <div class="col-md-6" style="padding-bottom: 100px">
            <img src="{{ url('/img/tiger2.png') }}" alt="Tiger" width="450" class="img ms-3 ps-3">
            <img src="{{ url('/img/cloud.png') }}" alt="Cloud" width="700" class="img2">
        </div>
        <div class="col-md-6">
            <h1 class="gang fs-0">stkd</h1>
            <h5>Sarahsehan dan Temu Karya Daerah (STKD) adalah sebuah kegiatan yang mewadahi muda-mudi daerah melalui
                berbagai perlombaan, dan digelar di tiap PMVBI daerah.</h5>
            <br>
            <a href="/event" class="get-started m-3">
                <span class="circle bg-orange" aria-hidden="true">
                    <span class="in arrow"></span>
                </span>
                <span class="button-text">Get Started</span>
            </a>
        </div>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 70 1440 140" class="m-0 p-0">
    <path fill="#7eb7c8" fill-opacity="1"
        d="M0,160L60,144C160,128,320,96,480,106.7C640,117,800,171,960,176C1120,181,1280,139,1360,117.3L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
    </path>
</svg>
<div class="bg-blue">
    <div class="container">
        <h1 class="text-center text-light pb-4 mb-4 fw-bold">Our Events</h1>
        <div class="row pb-4">
            @foreach ($events as $event)
            <div class="col-md-4 mb-3">
                <div class="card rad-25 mb-3 shadow" data-aos="zoom-out-up">
                    <center>
                        <img src="{{ url('/img/tiger'.$event['no'].'.png') }}" class="top-rad-25" alt="Tiger"
                            width="200">
                        <div class="card-body">
                            <div class="card-height">
                                <h4 class="card-text fw-bold">{{ $event['name'] }}</h4>
                                <p class="fs-7">{{ $event['desc'] }}</p>
                            </div>
                            <a href="/event#{{ $event['url'] }}" class="btn btn-orange fs-6">Read More</a>
                        </div>
                    </center>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 70 1440 140" class="m-0 p-0">
        <path fill="#fff" fill-opacity="1"
            d="M0,160L60,144C160,128,320,96,480,106.7C640,117,800,171,960,176C1120,181,1280,139,1360,117.3L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
        </path>
    </svg>
</div>
<h1 class="text-center pb-4 mb-4 fw-bold">Testimonials</h1>
<div class="accordion container" id="accordionExample">
    <div class="row">
        <div class="col-md-6 mb-5 mt-3">
            @foreach ($testimonials as $testimonial)
            <div class="card p-3 mb-3 btn-orange shadow" tabIndex="1" data-aos="fade-up-right" data-bs-toggle="collapse"
                data-bs-target="#collapse{{ $testimonial['no'] }}" aria-expanded="true"
                aria-controls="collapse{{ $testimonial['no'] }}" style="
            cursor: pointer">
                <div class="d-flex flex-row align-items-center">
                    <img src="{{ url('/img/'. $testimonial['img']) }}" width="50" class="rounded-circle" alt="Person" />
                    <div class="d-flex flex-column ms-3">
                        <span class="fs-5">{{ $testimonial['name'] }}</span>
                        <span class="fs-7">{{ $testimonial['position'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-md-6">
            @foreach ($testimonials as $testimonial)
            <div id="collapse{{ $testimonial['no'] }}" class="collapse {{ ($testimonial['no'] == 'One')? 'show' : '' }}"
                aria-labelledby="heading{{ $testimonial['no'] }}" data-bs-parent="#accordionExample">
                <div class="card-body">
                    <h3>{{ $testimonial['title'] }}</h3>
                    <p class="orange">
                        @for ($i = 0; $i < $testimonial['star']; $i++) <i class="bi bi-star-fill me-1"></i> @endfor
                    </p>
                    <p>
                        {{ $testimonial['desc'] }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
