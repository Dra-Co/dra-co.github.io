@extends('layouts.app')
@section('content')
<div class="mb-5">
    <h1 class="text-center mt-5 fw-bold fs-big bg-blue text-light py-4"><span class="gang fs-big">stkd</span> Events
    </h1>
    <div class="container">
        @foreach ($events as $event)
        <div class="row justify-content-center" data-aos="{{ ($loop->iteration % 2 == 0)? 'fade-right': 'fade-left' }}"
            data-aos-duration="1000">
            <div class="col-md-3 pt-5">
                <img src="{{ url('/img/tiger'.$event['no'].'.png') }}" alt="Tiger" width="240">
            </div>
            <div class="col-md-8">
                <div class="pt-5" id="{{ $event['url'] }}"></div>
                <h2 class="fw-bold pb-1">{{ $event['name'] }}</h2>
                <p class="pb-1">{{ $event['desc'] }}</p>
                <a href="https://drive.google.com/drive/folders/1oh_SYcwLEX4z9Bn4A4kayaWmQfTa7zQq" target="_blank"
                    class="btn btn-orange" style="width: 150px">Rules</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
