@extends('client.layout.dashboard')

@section('content')
      <!-- home section starts  -->
      <section class="home">
        <div class="image">
          <img src="images/home-img.png" alt="" />
        </div>
  
        <div class="content">
          <h3>Khoá học dẫn đến thành công</h3>
          <p>
            <span style="color: #fa1d86; font-weight: bold">E-SHARE</span> nơi
            chia sẻ các khoá học chất lượng và nó hoàn toàn
            <span style="color: #fa1d86">miễn phí</span>
          </p>
          <a href="{{ route('client.home') }}" class="btn">Bắt đầu học nào!</a>
        </div>
      </section>
      <!-- home section ends -->
      @foreach ($data_course as $item_course)
      <!-- categories section starts  -->
      <section class="course-2">
        <div class="box">
          <div class="image">
            <img src="{{ $item_course->image_path }}"/>
          </div>
          <div class="content">
            <span>{{ $item_course->name }}</span>
            <a href="#"><h3>Người tạo : {{ $item_course->user->name }}</h3></a>
            <p>{{ $item_course->desc }}</p>
            <a href="{{ route('client.course_single',['id' => $item_course->id ]) }}" class="btn">Xem thêm</a>
            <div class="icons">
              <a href="#"> <i class="fas fa-book"></i>Khóa học gồm {{ $item_course->video->count() }} bài giảng.</a>
              <a href="#"> <i class="fas fa-drum-steelpan"></i>Chủ đề về {{ $item_course->category->name }}</a>
            </div>
          </div>
        </div>
      </section>
      <!-- categories section ends -->
      @endforeach
      <div>{{ $data_course->links() }}</div>
@endsection
