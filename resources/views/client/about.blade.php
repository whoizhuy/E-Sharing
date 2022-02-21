@extends('client.layout.dashboard')
@section('content')
      <!-- header section ends -->

      <section class="heading">
        <h3>VỀ E-SHARING</h3>
        <p><a href="{{ route('client.home') }}">Trang Chủ >></a> VỀ E-SHARING</p>
      </section>
  
      <!-- about section starts  -->
  
      <section class="about">
        <div class="image">
          <img src="images/about-img.png" alt="" />
        </div>
  
        <div class="content">
          <h3>E-SHARING thân thiện, dễ tiếp cận, tiếp thu</h3>
          <p>
            <span style="color: #fa1d86; font-weight: bold">E-SHARING</span> sẽ
            đồng hành cùng bạn xuyên suốt quá trình học tập và làm việc của bạn
          </p>
          <a href="{{ route('client.home') }}" class="btn">Bắt đầu học nào!</a>
        </div>
      </section>
  
      <!-- about section ends -->
@endsection