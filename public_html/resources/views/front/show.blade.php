
@section('meta-title','   ')
@section('meta-keyword','   ')
@section('meta-description','  ')

@extends('front.layout.app')
@section('meta-title', "$gallery->meta_title")
@section('meta-keywords', "$gallery->meta_keywords")
@section('meta-description', "$gallery->meta_description")
@section('content')
<section id="portfolio" class="section-padding" data-scroll-index="5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title mb-30"> <span>Gallery</span>
                    <h2>{{$gallery->name}}</h2>
                    <hr class="line line-hr-secondary">
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($images as $image)
                <div class="col-md-4 col-sm-6 gallery-item mb-4">
                    <a href="{{ asset('assets/front/img/gallery/images/' . $image->image) }}" title="{{ $gallery->name }}" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/front/img/gallery/images/' . $image->image) }}" class="g-image mx-auto d-block" alt="{{ $gallery->name }}">
                            </div>
                            <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
