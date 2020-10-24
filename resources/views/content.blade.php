
<div class="container">
    <div class="row">
        @if (count($doctors) === 0)
            <div class="col-12 text-center">
                <div class="alert alert-danger" role="alert">
                   {{__('message')}}
                </div>
            </div>
        @else   
          <div class="col-lg-3 col-md-6 col-sm-12">
             <div class="card banner-card  text-center my-3">
                <img src="/img/recomended.svg" alt="card" class="img-fluid mb-4" style="width: 100%" ;>
                <div class="card-body">
                    <h6 class="mb-4" style="color: white;font-weight:bold;">Don't know how to choose the right therapist?</h6>
                    <hr>
                    <div>
                        <a href="#">
                            <div class="banner-button p-3  m-4">Shezlong Selection</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($doctors as $doctor) 
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card main-card text-center my-3">
            <img src="/img/me.png" alt="" class="img-fluid rounded-circle mx-auto mt-3" style="width: 130px" ;>
            <div class="card-body">
                @if(app()->getLocale()==="en")
                  <h6>{{$doctor['name_en']}}</h6>
                  <small style="color: gray;">{{$doctor['title_en']}}</small>
                @else
                  <h5>{{$doctor['name_ar']}}</h5>
                  <small style="color: gray;">{{$doctor['title_ar']}}</small>
                @endif
                <hr>
                @if($doctor['rate']>=1)
                   <span class="fa fa-star checked"></span>
                @else
                   <span class="fa fa-star unchecked"></span>
                @endif
                @if($doctor['rate']>=2)
                   <span class="fa fa-star checked"></span>
                @else
                   <span class="fa fa-star unchecked"></span>
                @endif
                @if($doctor['rate']>=3)
                   <span class="fa fa-star checked"></span>
                @else
                   <span class="fa fa-star unchecked"></span>
                @endif
                @if($doctor['rate']>=4)
                   <span class="fa fa-star checked"></span>
                @else
                   <span class="fa fa-star unchecked"></span>
                @endif
                @if($doctor['rate']>=5)
                   <span class="fa fa-star checked"></span>
                @else
                   <span class="fa fa-star unchecked"></span>
                @endif
                <span style="color: rgb(224, 110, 17);">({{$doctor['rate']}}) </span>
                <span style="color: gray;"> ({{$doctor['reviews']}} <small>{{__('rev')}}</small>)</span>
                <hr>
                @if(app()->getLocale()==="en")
                   <small style="color: gray;">{{$doctor['spec_en']}}</small>
                @else
                   <small style="color: gray;">{{$doctor['spec_ar']}}</small>
                @endif
                <div class="d-flex justify-content-around align-items-center mt-4">
                    <p><i class="fa fa-money"></i> {{__('egp')}} {{$doctor['fees']}}</p>
                    <p><i class="fa fa-play"></i> {{$doctor['sessions']}}+ {{__('session')}}</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="card-btn col-6 text-center p-3" style="background-color: #3DA8C0;">
                       <a href="#" style="text-decoration: none;color:white;">Book Now</a>
                    </div>
                    <div class="card-btn col-6 text-center p-3" style="background-color:gainsboro;">
                       <a href="#" style="text-decoration: none;color:black;">View Profile</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
      @endforeach
      @endif
    </div>
</div>