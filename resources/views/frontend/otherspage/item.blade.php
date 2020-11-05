@extends('frontend.master')


@section('main_section')


            <div class="menu">

                <div class="gallery-section">			
                    <h2>OUR MENU</h2>
                  </div>
            
                <div class="container">
                    <div class="row">

            @foreach($items as $item)
                    <div class="col-lg-3 col-md-4 col-sm-12"> 
                            <div class="card">
                            <a href="view.html"><img src="{{asset('storage/'.$item->image)}}" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h4>{{$item->name}}</h4>
                                        <p>{{\Illuminate\Support\Str::limit($item->desc, 90)}}</p>
                                        <a href="{{url('item',$item->id)}}" class="btn more">Get More</a>
                                    </div>
                            </div>
                    </div>
            @endforeach
            
            
               </div>
              </div>
            </div>


@endsection