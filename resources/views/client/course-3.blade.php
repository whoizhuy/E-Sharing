@extends('client.layout.dashboard')
@section('css')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
@endsection
@section('content')
    <!-- header section ends -->
    <section class="heading">
        <h3>KHÓA HỌC {{ $item_course->name }}</h3>
        <p><a href="{{ route('client.home') }}">Trang Chủ >></a> Bài Giảng</p>
    </section>

    <!-- course-3 section starts  -->

    <section class="course-3">
        @foreach ($item_course->video as $item_video)
            <div class="box" data-toggle="modal" data-target="#exampleModalCenter{{ $item_video->id }}">
                <div class="video">
                    <i class="fas fa-play"></i>
                    {{-- <img src="https://i.ytimg.com/vi/DiUzrz2G_Cw/maxresdefault.jpg" alt=""> --}}
                    <video src="{{ $item_video->video_path }}"></video>
                </div>
                <div class="content">
                    <h3>{{ $item_video->name }}</h3>
                    <p>Bởi {{ $item_course->user->name }}</p>
                </div>
                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{ $item_video->id }}">
                  Launch demo modal
                </button> --}}
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter{{ $item_video->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">{{ $item_video->name }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" >
                          <video width="100%" controls>
                            <source src="{{ $item_video->video_path }}" type="video/mp4">
                          </video>
                          <h2 class="mt-3">{{ $item_video->desc }}</h2>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

    <!-- footer section starts  -->

@endsection
