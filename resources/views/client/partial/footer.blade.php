<section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>Khám phá</h3>
        <a href="{{ route('client.home') }}"> <i class="fas fa-arrow-right"></i> Trang chủ </a>
        <a href="{{ route('client.about') }}">
          <i class="fas fa-arrow-right"></i> Về I-SHARE
        </a>
        <a href="{{ route('client.contact') }}">
          <i class="fas fa-arrow-right"></i> Liên hệ
        </a>
      </div>

      <div class="box">
        <h3>Khoá học</h3>
        @foreach ($course_footer as $course_footer_item)
          <a href="{{ route('client.course_single',['id' =>  $course_footer_item->id]) }}"> <i class="fas fa-arrow-right"></i>{{ $course_footer_item->name }}</a>          
        @endforeach
      </div>
      

      <div class="box">
        <h3>Theo dõi chúng tôi</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
        <a href="https://github.com/ductwok/PHP_laravel_nhom9/tree/main/objectCourse"> <i class="fab fa-github"></i> Github </a>
        <a href="#"> <i class="far fa-envelope"></i> ishare@gmail.com </a>
      </div>
    </div>

    
  </section>