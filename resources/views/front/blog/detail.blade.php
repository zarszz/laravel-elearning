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
                    <img src="{{ asset('storage/'.$blog->thumbnail_blog) }}" width="400" alt="">
                    <h4 class="title_top">{{ $blog->name_blog }}</h4>
                    {!! $blog->content_blog !!}
                </div>
            </div>


            <div class="col-lg-4 right-contents">
                <div class="sidebar_top mt-3">
                    <ul>
                        <li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Course Details Area =================-->
@endsection