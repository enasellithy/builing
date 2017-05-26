@if(count($buAll) > 0)
	@foreach($buAll as $bu)
	    <div class="col-sm-4">
	        <article class="col-item">
	            <div class="photo">
	                
	                
	                <a href="#"> <img src="https://unsplash.it/500/300?image=0" class="img-responsive" alt="Product Image" /> </a>
	            </div>
	            <div class="info">
	                <div class="row">
	                    <div class="price-details col-md-6">
	                        <p class="details">
	                            {{$bu->bu_small_dis}}
	                        </p>
	                        <h1>{{$bu->bu_name}}</h1>
	                        <span class="price-new">{{$bu->bu_price}}</span>
	                    </div>
	                </div>
	                <div class="separator clear-left">
	                    
	                    <p class="btn-add">
	                        <a href="{{url($bu->id.'/show')}}" class="hidden-sm">More</a>
	                    </p>
	                </div>
	                <div class="clearfix"></div>
	            </div>
	        </article>
	    </div>
	@endforeach
@else
<div class="alert alert-danger">No Building</div>
@endif