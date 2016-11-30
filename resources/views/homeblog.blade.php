@extends('layouts.app-article')

@section('content')
@foreach($articles as $item)
<div class="blog_post margbot50 clearfix" data-animated="fadeInUp">
							<div class="blog_post_img">
								<img src="{{asset('assets/images/blog/hp.jpg')}}" alt="" />
								<a class="zoom" href="blog-post.html" ></a>
							</div>
								<div class="blog_post_descr">
								<div class="blog_post_date">{{$item->created_at}}</div>
								<a class="blog_post_title" href="blog-post.html" >{{$item->title}}</a>
								<ul class="blog_post_info">
									<li><a href="javascript:void(0);" >Admin</a></li>
									<li><a href="javascript:void(0);" >Creative</a></li>
									<li><a href="javascript:void(0);" >3 Comments</a></li>
								</ul>
								<hr>
								<div class="blog_post_content">{!!$item->content!!}.</div>
								<a class="read_more_btn" href="blog-post.html" >Read More</a>
							</div>
							</div>


@endforeach
@endsection



