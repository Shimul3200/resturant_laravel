@extends('frontend.master')



@section('main_section')

  
 <!-- Slider Start -->

	
<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleControls" data-slide-to="1"></li>
        <li data-target="#carouselExampleControls" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div id="home" class="first-section" style="background-image:url('{{asset('frontend/images/slider/home1.jpg')}}');">
                <div class="dtab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-right">
                                
                            </div>
                        </div><!-- end row -->            
                    </div><!-- end container -->
                </div>
            </div><!-- end section -->
        </div>
        <div class="carousel-item">
            <div id="home" class="first-section" style="background-image:url('{{asset('frontend/images/slider/home2.jpg')}}');">
                <div class="dtab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-left">
                            
                            </div>
                        </div><!-- end row -->            
                    </div><!-- end container -->
                </div>
            </div><!-- end section -->
        </div>
        <div class="carousel-item">
            <div id="home" class="first-section" style="background-image:url('{{asset('frontend/images/slider/home3.jpg')}}');">
                <div class="dtab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-center">
                            
                            </div>
                        </div><!-- end row -->            
                    </div><!-- end container -->
                </div>
            </div><!-- end section -->
        </div>
        <!-- Left Control -->
        <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <!-- Right Control -->
        <a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!---------------- Start Welcome ------------------>

<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="title">
                <h4>- Wellcome To -</h4>
                <h2>Zeerah Restaurant</h2>
                <div class="desc">
                <span>Welcome to Zeerah Bangladeshi and Indian cuisine, where you will enjoy a meal that is refreshingly different. Our award winning chef Salik Ahmed offer a wide range of mouth-watering dishes from our extensive and acclaimed menu. We supply a succulent array of starters along with vegetarian, meat and fish dished accompanied by our own exotic rice and bread recipes.</span>
                </div>
            </div>
            </div>
        </div>
        
            <div class="about-img">
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <div class="img1">  <img src="{{asset('frontend/images/img/1.jpg')}}"></div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="img2">  <img src="{{asset('frontend/images/img/2.jpg')}}"></div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="img3">  <img src="{{asset('frontend/images/img/3.jpg')}}"></div>
                    </div>
            </div>
             
        </div>
    </div>
</div>


<!---------------- Start banner ------------------>
<div class="bennar-area single-slide" id="our_story">
    <div class="container">
        <div class="row">
        
			<div class="col-lg-6 col-sm-12">
                <div class="opening_time">
					<div class="row">
						<div class="col-lg-6 col-sm-12">
							<div class="logo">
							<i class="fa fa-clock-o"> </i>
							</div>
						</div>
						<div class="col-lg-6 col-sm-12">
							<div class="time">
								<h4>Opening Times</h4>
								<div class="detail">
								<p>Sun to Thurs : 5:30pm to 10:30pm</p>
								<p>Fri, Sat : 5:30pm to 11:30pm</p>
							   </div> 
							</div> 
						</div>
					</div>
                </div>
                

               <div class="about">
				   <h3>About Us</h3>
				   
			       <p>Zeerah Restaurant is located in the heart of Melbourne Village in Derbyshire, we are a small family run business which has been operating in Melbourne for just over 10 years.</p>
				   <p>Our head chef, Salik Ahmed (BCA Chef of the year) has over 20 years of Experience in cooking authentic Indian and Bangladeshi food. Chef Salik freshly prepares each dish from the finest ingredients and will be delighted to customise a meal to your own requirements as everything is cooked fresh to order. Authentic recipes are strictly adhered to and bring you distinctly different tastes to every single dish. Our traditional dishes are rooted in the soil of Bengal and Northern India and are prepared in our restaurant as in our own homes. We at Zeerah look forward to being of service to you now and in the future. We hope you have a memorable experience with us.</p>
			   </div>
            </div>


            <div class="col-lg-6 col-sm-12">
		
                <div class="title_voucher">
					<div class="row">					
						<div class="col-lg-12  col-sm-12">					
								<h2>Gift Voucher Available</h2>							
						</div>
					</div>
				</div>
		
                <div class="voucher">
					<div class="row">					
					
						<div class="col-lg-12  col-sm-12">							
								<img src="{{asset('frontend/images/img/b2.jpg')}}">
						</div>
					</div>
				</div>

				<div class="voucher voucher2">
					<div class="row">					
					
						<div class="col-lg-12  col-sm-12">							
								<img src="{{asset('frontend/images/img/b1.jpg')}}">
						</div>
					</div>
                </div>
                <div class="voucher voucher2">
					<div class="row">					
						<div class="col-lg-12  col-sm-12">							
								<img src="{{asset('frontend/images/img/b3.jpeg')}}">
						</div>
					</div>
				</div>


            </div>
            
        </div>
    </div>
</div>

<!--------------- end banner area ---------------->

<div class="offer">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<div class="offer-title">
				<h2>Our Menu</h2>
				<div class="desc">
                    <span>Welcome to Zeerah Bangladeshi and Indian cuisine, where you will enjoy a meal that is refreshingly different. Our award winning chef Salik Ahmed offer a wide range of mouth-watering dishes from our extensive and acclaimed menu.</span>
					</div>
			</div>
			</div>
		</div>
		<div class="row">	
		
		<div class="col-lg-12">
					
				<div class="owl-carousel owl-theme">
					@foreach($items as $item)
					<div class="item"><a href="{{url('item')}}"><img src="{{asset('storage/'.$item->image)}}"></a></div>
			
					@endforeach

					
				</div>
	     	
		</div>	
			 
		</div>
	</div>
</div>

<!---------------- Start Award Section ------------------>

<div class="award">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<div class="award-title">
				<h2>Our Award</h2>
			</div>
			</div>
		</div>
		<div class="row">	
		
		<div class="col-lg-12">
			<div class="award-box">			
				<div class="row">
					<div class="col-lg-7">
						  <img src="{{asset('frontend/images/img/award.jpeg')}}">
						</div>
						<div class="col-lg-5">
						   <div class="award-detail">
							  <h4>Try our award Winning Chef</h4>
							  <p>Our head chef, Salik Ahmed (BCA Chef of the year 2013) has over 20 years of Experience in cooking authentic Indian and Bangladeshi food.</p>
						   </div>
						</div>

						</div>	
	     	</div>
		</div>	
			 
		</div>
	</div>
</div>


@endsection
