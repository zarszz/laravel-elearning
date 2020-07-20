@extends('layouts.front')
@section('content')

<!--::review_part start::-->
<section class="special_cource padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <h2>Podcast</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($podcasts as $item)
            <div class="col-sm-6 col-lg-4 mb-2">
                <a href="{{ route('podcast.detail',Crypt::encrypt($item->id)) }}">
                    <div class="single_special_cource">
                        <img src="http://img.youtube.com/vi/{{ $item->url_podcast }}/0.jpg" class="special_img" alt="">
                        <div class="special_cource_text">
                            <div class="d-flex justify-content-between">
                                <div class="btn_4">
                                    Podcast
                                </div>
                                <a href="{{ route('podcast.detail',Crypt::encrypt($item->id)) }}"
                                    class="btn btn-secondary">Lihat</a>
                            </div>
                            <a href="{{ route('podcast.detail',Crypt::encrypt($item->id)) }}">
                                <h3>{{ $item->name_podcast }}</h3>
                            </a>
                            <div style="white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;">{!! $item->description_podcast !!}</div>
                        </div>

                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="row mt-3">
            <div class="col-md-12 d-flex justify-content-center">
                {{
                    $podcasts->links()
                }}
            </div>
        </div>
    </div>
</section>

@endsection