@extends('frontend.master')


@section('main_section')


<div class="menu-view">
    <div class="container">
        <div class="row">	
        
        <div class="col-lg-12">
                
                <div class="row">
                    <div class="col-lg-6">
                          <img src="{{asset('storage/'.$items->image)}}">
                        </div>
                        <div class="col-lg-6">
                           <div class="menu-view-detail">
                              <h4>{{$items->name}}</h4>
                              <p> {!!($items->desc)!!} </p>
                           </div>
                        </div>

                        </div>	
             </div>           
        </div>
    </div>
</div>

</div>


<style>

.menu-view {
    margin-bottom: 35px;
    margin-top: 20px;
}

    </style>

@endsection