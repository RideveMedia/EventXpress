@extends('layouts.app') <!-- or welcome.blade.php if you have a main layout -->

@section('content')
<section class="gallery-section pt-5 pb-5">
    <div class="container">
        <div class="row g-3">
            <div class="col-md-4">
                <a href="{{ asset('img/gallery/image1.jpg') }}" target="_blank">
                    <img src="{{ asset('img/gallery/image1.jpg') }}" class="img-fluid rounded" alt="Gallery Image">
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset('img/gallery/image2.jpg') }}" target="_blank">
                    <img src="{{ asset('img/gallery/image2.jpg') }}" class="img-fluid rounded" alt="Gallery Image">
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset('img/gallery/image3.jpg') }}" target="_blank">
                    <img src="{{ asset('img/gallery/image3.jpg') }}" class="img-fluid rounded" alt="Gallery Image">
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset('img/gallery/image3.jpg') }}" target="_blank">
                    <img src="{{ asset('img/gallery/image3.jpg') }}" class="img-fluid rounded" alt="Gallery Image">
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset('img/gallery/image3.jpg') }}" target="_blank">
                    <img src="{{ asset('img/gallery/image3.jpg') }}" class="img-fluid rounded" alt="Gallery Image">
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset('img/gallery/image3.jpg') }}" target="_blank">
                    <img src="{{ asset('img/gallery/image3.jpg') }}" class="img-fluid rounded" alt="Gallery Image">
                </a>
            </div>
            <!-- Add more images the same way -->
        </div>
    </div>
</section>
@endsection
