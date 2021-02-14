@extends('frontend.layouts.master')
@section('title','Home | findeo')
@section('content')
<div class="clearfix"></div>
<div class="parallax" data-background="{{asset('frontend/images/listing-05.jpg')}}" data-color="#36383e" data-color-opacity="0.45" data-img-width="2500" data-img-height="1600">
	<div class="parallax-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-search-container">
						<h2>Find Your Dream Home</h2>
						<form class="main-search-form">
							
						</form>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3 class="headline margin-bottom-25 margin-top-65">Newly Added</h3>
		</div>
		<div class="col-md-12">
			<div class="carousel">
                @foreach($perumahan as $row)
				<div class="carousel-item">
                  
					<div class="listing-item">

						<a href="{{url('perumahan/detail/'.$row->id)}}" class="listing-img-container">

							<div class="listing-badges">
								<span>Di {{$row->status}}</span>
							</div>

							<div class="listing-img-content">
								<span class="listing-price">@currency($row->price) <i>{{$row->name}}</i></span>
							</div>
							<img src="{{asset('uploads/'.$row->thumbnail)}}" alt="">
						</a>
						
						<div class="listing-content">

							<div class="listing-title">
								<h4><a href="{{url('perumahan/detail/'.$row->id)}}">{{$row->name}}</a></h4>
								<a href="javascipt:void(0)" class="listing-address">
									<i class="fa fa-map-marker"></i>
									{{$row->address}},{{$row->city}},{{$row->provinsi}}
								</a>
							</div>

							<ul class="listing-features">
								<li>Area <span>{{$row->luas}}</span></li>
								<li>Bedrooms <span>{{$row->bedrooms}}</span></li>
								<li>Bathrooms <span>{{$row->bathrooms}}</span></li>
							</ul>
							<div class="listing-footer">
								<a href="#"><i class="fa fa-user"></i> {{$row->Agen->name}}</a>
								<span><i class="fa fa-calendar-o"></i> {{$row->created_at->diffForHumans()}}</span>
							</div>

						</div>

                    </div>
                    
                    
                </div>
                @endforeach
			</div>
		</div>
	</div>
</div>

<section class="fullwidth margin-top-95 margin-bottom-0">
	<h3 class="headline-box">Articles</h3>
	<div class="container">
		<div class="row">
			@foreach($artikel as $p)
			<div class="col-md-4">
				<div class="blog-post">
					<a href="{{route('artikel.details',$p->slug)}}" class="post-img">
						<img src="{{asset('uploads/'.$p->gambar)}}" alt="">
					</a>
					<div class="post-content">
						<h3><a href="{{route('artikel.details',$p->slug)}}">{{$p->judul}}</a></h3>
						<p>{{ \Illuminate\Support\Str::limit(strip_tags($p->content),50) }}</p>
						<a href="{{route('artikel.details',$p->slug)}}" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
			@endforeach
			
		</div>
	</div>
</section>
@endsection