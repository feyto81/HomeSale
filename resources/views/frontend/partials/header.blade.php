<header id="header-container">
	<div id="top-bar">
		<div class="container">
			<div class="left-side">
				<ul class="top-bar-menu">
					<li><i class="fa fa-phone"></i> (123) 123-456 </li>
					<li><i class="fa fa-envelope"></i> <a href="#">office@example.com</a></li>
					
				</ul>
			</div>
			<div class="right-side">
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="pinterest" href="#"><i class="icon-pinterest"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div id="header">
		<div class="container">
			<div class="left-side">
				<div id="logo" style="margin-bottom: 10px">
					<a href="{{url('/')}}"><img src="{{asset('frontend/images/logo.png')}}" alt=""></a>
				</div>
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>
				<nav id="navigation" class="style-1">
					<ul id="responsive">
						<li>
							<a class="current" href="{{url('/')}}">Home</a>
						</li>
						<li><a href="#">Di Jual</a>
							<ul>
								<li><a href="{{url('perumahan/sale')}}">Rumah</a></li>
								<li><a href="{{url('apartemen/sale')}}">Apartemen</a></li>
							</ul>
						</li>
						<li><a href="#">Di Sewa</a>
							<ul>
								<li><a href="{{url('perumahan/sewa')}}">Rumah</a></li>
								<li><a href="{{url('apartemen/sewa')}}">Apartemen</a></li>
							</ul>
						</li>
						
					</ul>
				</nav>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</header>