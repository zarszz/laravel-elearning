@extends('layouts.front')
@section('content')
{{-- <section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Course Details</h2>
                        <p>Home<span>/</span>Course Details</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- breadcrumb start-->

<!--================ Start Course Details Area =================-->
<section class="course_details_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 course_details_left">
                <div class="main_image">
                    <img class="img-fluid" src="img/single_cource.png" alt="">
                </div>
                <div class="content_wrapper">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/{{ $podcast->url_podcast }}" allowfullscreen></iframe>
                    </div>
                    <h4 class="title_top">{{ $podcast->name_podcast }}</h4>
                </div>
            </div>


            <div class="col-lg-4 right-contents">
                <div class="sidebar_top mt-3">
                    <ul>
                        <li>
                            {!! $podcast->description_podcast !!}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Course Details Area =================-->
@endsection