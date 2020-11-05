@extends('frontend.master')


@section('main_section')


    		<!-- **********Gallery************-->

<div class="container">
  
	<div class="gallery-section">			
		<h2>GALLERY</h2>
	  </div>

<div class="gallery">

    @foreach($images as $image)
	<div class="mb-3 pics animation all 2">
		<a href="{{asset('storage/'.$image->image)}}" data-fancybox="gallery" data-caption="{{$image->title}}">
	  <img class="img-fluid" src="{{asset('storage/'.$image->image)}}" alt="{{$image->title}}">
     	</a>
    </div>
    @endforeach

	
   </div>
  </div>

					
<!-- End Gallery -->


@endsection