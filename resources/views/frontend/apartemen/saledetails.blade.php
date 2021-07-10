@extends('frontend.layouts.master')
@section('title','Detail | Apartemen')
@section('content')
<div class="clearfix"></div>

<div id="titlebar" class="property-titlebar margin-bottom-0">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<a href="{{url('/')}}" class="back-to-listings"></a>
				<div class="property-title">
					<h2>{{$apartemen->name}} <span class="property-badge">Di {{$apartemen->status}}</span></h2>
					<span>
						<a href="javascript:void(0)" class="listing-address">
							<i class="fa fa-map-marker"></i>
							{{$apartemen->address}},
                            {{$apartemen->city}},
                            {{$apartemen->provinsi}}
						</a>
					</span>
				</div>

				<div class="property-pricing">
					<div class="property-price">@currency($apartemen->price)</div>
					<div class="sub-price">{{$apartemen->luas}}</div>
				</div>


			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row margin-bottom-50">
		<div class="col-md-12">
			<div class="property-slider default">
				<a href="{{asset('uploads/'.$apartemen->thumbnail)}}" data-background-image="{{asset('uploads/'.$apartemen->thumbnail)}}" class="item mfp-gallery"></a>
				<a href="{{asset('uploads/'.$apartemen->gambar1)}}" data-background-image="{{asset('uploads/'.$apartemen->gambar1)}}" class="item mfp-gallery"></a>
				<a href="{{asset('uploads/'.$apartemen->gambar2)}}" data-background-image="{{asset('uploads/'.$apartemen->gambar2)}}" class="item mfp-gallery"></a>
                <a href="{{asset('uploads/'.$apartemen->gambar3)}}" data-background-image="{{asset('uploads/'.$apartemen->gambar3)}}" class="item mfp-gallery"></a>
                
			</div>
			<div class="property-slider-nav">
				<div class="item"><img src="{{asset('uploads/'.$apartemen->thumbnail)}}" alt=""></div>
				<div class="item"><img src="{{asset('uploads/'.$apartemen->gambar1)}}" alt=""></div>
				<div class="item"><img src="{{asset('uploads/'.$apartemen->gambar2)}}" alt=""></div>
                <div class="item"><img src="{{asset('uploads/'.$apartemen->gambar3)}}" alt=""></div>
                
				
			</div>

		</div>
	</div>
</div>


<div class="container">
	<div class="row">

		<!-- Property Description -->
		<div class="col-lg-8 col-md-7 sp-content">
			<div class="property-description">

				<!-- Main Features -->
				<ul class="property-main-features">
					<li>Area <span>{{$apartemen->luas}}</span></li>
					<li>Rooms <span>{{$apartemen->room}}</span></li>
					<li>Bedrooms <span>{{$apartemen->bedrooms}}</span></li>
					<li>Bathrooms <span>{{$apartemen->bathrooms}}</span></li>
				</ul>


				<!-- Description -->
				<h3 class="desc-headline">Description</h3>
				<div class="show-more">
					<p>
						{{$apartemen->description}}
					</p>
					<a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a>
				</div>
				<h3 class="desc-headline">Details</h3>
				<ul class="property-features margin-top-0">
					{{$apartemen->details}}
				</ul>


				<!-- Features -->
				<h3 class="desc-headline">Features</h3>
				<ul class="property-features checkboxes margin-top-0">
					{{$apartemen->features}}
				</ul>
				<h3 class="desc-headline no-border">Video</h3>
				<div class="responsive-iframe">
                    <iframe width="560" height="315" src="{{$apartemen->video_link}}" frameborder="0" allowfullscreen></iframe>
				</div>

				
				<!-- Location -->
				<h3 class="desc-headline no-border" id="location">Location</h3>
				<div id="propertyMap-container">
                    <iframe src="{{$apartemen->location}}" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-5 sp-sidebar">
			<div class="sidebar sticky right">
				<div class="widget margin-bottom-30">
					<div class="clearfix"></div>
				</div>
				<div class="widget">

                    <!-- Agent Widget -->
                    <h4 class="text-center"><a href="#">Agen</a></h4>
                    <br>
					<div class="agent-widget">
						<div class="agent-title">
							<div class="agent-photo"><img src="{{asset('avatar_agen/'.$apartemen->Agen->picture)}}" alt="" /></div>
							<div class="agent-details">
                                <h4><a href="#">{{$apartemen->Agen->name}}</a></h4>
                                <small><span>Anggota Sejak {{$apartemen->Agen->created_at->diffForHumans()}}</span></small>
								
							</div>
							<div class="clearfix"></div>
                        </div>
                        <a class="button fullwidth margin-top-5" href="tel:{{$apartemen->Agen->email}}"><i class="im im-icon-Email"></i>{{$apartemen->Agen->email}}</a>
						<a class="button fullwidth margin-top-5" href="tel:{{$apartemen->Agen->phone}}"><i class="sl sl-icon-call-in"></i>{{$apartemen->Agen->phone}}</a>
						<a class="button fullwidth margin-top-5" href="tel:{{$apartemen->Agen->no_wa}}"><i class="fa fa-whatsapp"></i>{{$apartemen->Agen->no_wa}}</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection