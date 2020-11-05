@extends('frontend.master')


@section('main_section')

    
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


			</div>
			<div class="col-lg-6 col-sm-12">
               <div class="about">
				   <h3>About Us</h3>
				   
			       <p>Zeerah Restaurant is located in the heart of Melbourne Village in Derbyshire, we are a small family run business which has been operating in Melbourne for just over 10 years.</p>
				   <p>Curry Tonight is located in the heart of Castle Donington; only a short distance from East Midlands Airport and Donington Park.

					Our head chef, Koysor Miah, freshly prepares each dish from the finest ingredients and will be delighted to customise a meal to your own particular requirements as everything is cooked fresh to order. Authentic recipes are strictly adhered to and bring you distinctly different tastes to every single dish. Our traditional dishes are rooted in the soil of Bengal and Northern India and are prepared in our restaurant as in our own homes. We look forward to being of service to you now and in the future. We hope you have a memorable experience.</p>
			   </div>
            </div>
        </div>
    </div>
</div>

<!--------------- end banner area ---------------->

<style>
  .bennar-area {
  
    margin-top: 0px !important;
}
</style>

@endsection