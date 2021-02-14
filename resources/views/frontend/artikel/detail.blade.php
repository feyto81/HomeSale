@extends('frontend.layouts.master')
@section('title','List Artikel | Home Sale')

@section('content')
<div class="clearfix"></div>

<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Artikel</h2>
				<span>Keep up to date with the latest news</span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Artikel</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>



<!-- Content
================================================== -->
<div class="container">

	<!-- Blog Posts -->
	<div class="blog-page">
	<div class="row">


		<!-- Post Content -->
		<div class="col-md-8">


			<!-- Blog Post -->
			<div class="blog-post single-post">

				<!-- Img -->
				<img class="post-img" src="{{asset('uploads/'.$artikel_detail->gambar)}}" alt="">


				<!-- Content -->
				<div class="post-content">
					<h3>{{$artikel_detail->judul}}</h3>

					<ul class="post-meta">
						<li>{{date('d F Y',strtotime($artikel_detail->updated_at))}}</li>
						
					</ul>

					<p>{{$artikel_detail->content}}</p>

					

				</div>
			</div>
	</div>
	</div>
</div>
@endsection