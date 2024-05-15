@extends('client.layouts.app')
@section('meta_tag_keyword', $service->meta_keyword)
@section('meta_tag_description', $service->meta_description)
@section('meta_og')
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $service->title }}" />
    <meta property="og:description" content="{{ $service->short_detail }}" />
    <meta property="og:image"
        content="@if (!empty($service->getFirstMediaUrl('service'))) {{ $service->getFirstMediaUrl('service') }} @else {{ asset('images/noimage.jpg') }} @endif" />
@endsection
@section('content')
    <section id="page-content" class="sidebar-right">
        <div class="container">

                {{-- <!-- content -->
                <div class="content">
                    <!-- Blog -->
                    <div id="blog" class="single-post">
                        <!-- Post single item-->
                        <div class="post-item">
                            <div class="post-item-wrap">
                                {{-- <a href="javascript:void(0)" data-lightbox="gallery-image">
                                    <img alt="image" style="height:300px; width:auto; margin:auto; display:block;"
                                        src="@if ($service->getFirstMediaUrl('service')) {{ $service->getFirstMediaUrl('service') }} @else {{ asset('images/no-image.jpg') }} @endif">
                                </a>

                                <div class="post-item-description">
                                    <h2>{{ $service->title }}</h2>
                                    <div class="post-meta">
                                        <span class="post-meta-date">
                                            <i class="fas fa-calendar"></i>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $service->created_at)->format('d F Y H:i') }}
                                            </div>
                                        </span>
                                        <p>{{ $service->short_detail }}</p>
                                        {!! $service->detail !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <section id="page-content" class="sidebar-right">
                    <div class="container">
                        <div class="row">
                            <!-- content -->
                            <div class="content col-lg-9">
                                <!-- Blog -->
                                <div id="blog" class="single-post">
                                    <!-- Post single item-->
                                    <div class="post-item">
                                        <div class="post-item-wrap">
                                            <a href="javascript:void(0)" data-lightbox="gallery-image">
                                                <img alt="image" style="height:300px; width: 100%;  object-fit: fill;"
                                                    src="@if ($service->getFirstMediaUrl('service')) {{ $service->getFirstMediaUrl('service') }} @else {{ asset('images/no-image.jpg') }} @endif">
                                            </a>
                                            <div class="post-item-description">
                                                <h2>{{ $service->title }}</h2>
                                                <div class="post-meta">
                                                    <span class="post-meta-date">
                                                        <i
                                                            class="fas fa-calendar"></i>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $service->created_at)->format('d F Y H:i') }}
                                                    </span>
                                                </div>
                                                <p>{{ $service->short_detail }}</p>
                                                {!! $service->detail !!}
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end: Post single item-->
                                </div>
                            </div>
                            <!-- end: content -->
                            <!-- Sidebar-->
                            <div class=" sticky-sidebar col-lg-3">
                                <div class="widget">
                                    <div class="tabs">
                                        <ul class="nav nav-tabs" id="tabs-posts" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" role="tab"
                                                    aria-controls="featured" aria-selected="false">บริการอื่นๆ</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="tabs-posts-content">
                                            <div class="tab-pane fade show active" id="popular" role="tabpanel"
                                                aria-labelledby="popular-tab">
                                                <div class="post-thumbnail-list">
                                                    @foreach ($rec as $service)
                                                       <a href="{{ route('client.service.show', ['service' => $service->slug]) }}"> <div class="post-thumbnail-entry">
                                                            <img alt=""
                                                                src="@if (empty($service->getFirstMediaUrl('service'))) {{ asset('images/noimage.jpg') }} @else {{ $service->getFirstMediaUrl('service') }} @endif">
                                                            <div class="post-thumbnail-content">
                                                                <span>{{ ($service->title) }}</span>
                                                                <span class="post-category"><i class="fas fa-angle-right"></i>
                                                                    อ่านต่อ...</span>

                                                            </div>
                                                        </div></a>
                                                    @endforeach

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!--end: widget tags -->
                            </div>
                            <!-- end: Sidebar-->
                        </div>
                    </div>
                </section>

        </div>
    </section>
@endsection