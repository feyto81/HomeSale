@extends('frontend.layouts.master')
@section('title','Perumahan Sale | findeo')
@section('content')
<div class="clearfix"></div>
<div class="parallax titlebar"
	data-background="{{asset('frontend/images/listings-parallax.jpg')}}"
	data-color="#333333"
	data-color-opacity="0.7"
	data-img-width="800"
	data-img-height="505">

	<div id="titlebar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Perumahan</h2>
					<span>Rumah Di Jual</span>
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li>Di Jual</li>
                            <li>Rumah</li>
						</ul>
					</nav>

				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row sticky-wrapper">
		<div class="col-md-12">
            <form class="" method="GET" action="{{url('perumahan/sale/search')}}">
			<div class="main-search-input margin-bottom-35">
				<input type="text" class="ico-01" name="q" placeholder="Enter city, price" value="{{ old('q') }}"/>
				<button class="button" type="submit">Search</button>
			</div>
			<div class="row margin-bottom-15">
				<div class="col-md-6">
				</div>
				<div class="col-md-6">
					<div class="layout-switcher">
						<a href="#" class="list"><i class="fa fa-th-list"></i></a>
						<a href="#" class="grid"><i class="fa fa-th-large"></i></a>
						<a href="#" class="grid-three active"><i class="fa fa-th"></i></a>
					</div>
				</div>
			</div>
			<div class="listings-container list-layout">
                @foreach($perumahansale as $row)
				<div class="listing-item">
					<a href="{{url('perumahan/sale/details/'.$row->id)}}" class="listing-img-container">
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
							<h4><a href="{{url('perumahan/sale/details/'.$row->id)}}">{{$row->name}}</a></h4>
							<a href="javascipt:void(0)" class="listing-address">
								<i class="fa fa-map-marker"></i>
								{{$row->address}},{{$row->city}},{{$row->provinsi}}
							</a>

							<a href="{{url('perumahan/sale/details/'.$row->id)}}" class="details button border">Details</a>
						</div>

						<ul class="listing-details">
							<li>{{$row->luas}}</li>
							<li>{{$row->bedrooms}} Bedroom</li>
							<li>{{$row->room}} Room</li>
							<li>{{$row->bathroom}} Bathroom</li>
						</ul>

						<div class="listing-footer">
							<a href="#"><i class="fa fa-user"></i> {{$row->Agen->name}}</a>
							<span><i class="fa fa-calendar-o"></i> {{$row->created_at->diffForHumans()}}</span>
						</div>

					</div>

				</div>
                @endforeach
			</div>
			<div class="pagination-container margin-top-20">
				

			</div>
			<!-- Pagination / End -->

		</div>


		
	</div>
</div>
@endsection