@extends('layout.master')
@section('title','かさネギ.com - ブログ')
@section('navi')
  <li><a href="{{ route('Home.show') }}">ホーム</a></li>
  <li><a href="{{ route('Kasanegi.show') }}">重ね着写真集</a></li>
  <li class="active"><a href="{{ route('Blog.show') }}">運営者のブログ</a></li>
  <li><a href="{{ route('Contact.show') }}">お問い合わせ</a></li>
@endsection
@section('content')
      
<div class="row justify-content-center">
        
        <div class="col-md-8 pt-4">
          
          <div class="row mb-5" data-aos="fade-up">
            <div class="col-12">
              <h2 class="text-white mb-4 text-center">My Blog</h2>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12" data-aos="fade-up">
              <div class="d-flex blog-entry align-items-start">
                <div class="mr-5 img-wrap"><a href="#"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a></div>
                <div>
                  <h2 class="mt-0 mb-2"><a href="#">Advanced Photography Tutorial For Pro</a></h2>
                  <div class="meta mb-3">Posted by James on <a href="#">Feb. 24, 2020</a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aliquid doloremque qui, saepe alias eum?</p>
                </div>
              </div>
            </div>

            <!-- <div class="col-md-12" data-aos="fade-up">
              <div class="d-flex blog-entry align-items-start">
                <div class="mr-5 img-wrap"><a href="#"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a></div>
                <div>
                  <h2 class="mt-0 mb-2"><a href="#">Advanced Photography Tutorial For Pro</a></h2>
                  <div class="meta mb-3">Posted by James on <a href="#">Feb. 24, 2020</a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aliquid doloremque qui, saepe alias eum?</p>
                </div>
              </div>
            </div>

            <div class="col-md-12" data-aos="fade-up">
              <div class="d-flex blog-entry align-items-start">
                <div class="mr-5 img-wrap"><a href="#"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a></div>
                <div>
                  <h2 class="mt-0 mb-2"><a href="#">Advanced Photography Tutorial For Pro</a></h2>
                  <div class="meta mb-3">Posted by James on <a href="#">Feb. 24, 2020</a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aliquid doloremque qui, saepe alias eum?</p>
                </div>
              </div>
            </div>

            <div class="col-md-12" data-aos="fade-up">
              <div class="d-flex blog-entry align-items-start">
                <div class="mr-5 img-wrap"><a href="#"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a></div>
                <div>
                  <h2 class="mt-0 mb-2"><a href="#">Advanced Photography Tutorial For Pro</a></h2>
                  <div class="meta mb-3">Posted by James on <a href="#">Feb. 24, 2020</a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aliquid doloremque qui, saepe alias eum?</p>
                </div>
              </div>
            </div>   -->

            <div class="col-12 text-center">
              <div class="custom-pagination">
                <span>1</span>
                <a href="#">2</a>
                <a href="#">3</a>
                <span>...</span>
                <a href="#">7</a>
              </div>
            </div>
          </div>
        </div>

      </div>
@endsection