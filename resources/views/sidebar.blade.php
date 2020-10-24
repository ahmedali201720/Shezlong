<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-12 mb-5 py-5">
            <div class="sidebar-head d-flex justify-content-between align-items-center px-3 py-2">
            <div style="color: white;">{{__('filter')}}</div>
            <div><button class="sidebar-clear-btn">{{__('clear')}}</button></div>
            </div>
            <div class="d-flex px-3 py-2" style="background-color:white;">
                <div style="color:#3DA8C0;"><span><i class="far fa-clock" style="color:#3DA8C0;"></i></span> {{__('availability')}}</div>
            </div>
            <div class="d-flex justify-content-around align-items-center px-3 py-2" style="background-color:white;">
                <div class="form-check">
                   <input type="checkbox" class="form-check-input" id="check1">
                   <label class="form-check-label" for="check1">{{__('today')}}</label>
                </div>
                <div class="form-check">
                   <input type="checkbox" class="form-check-input" id="check2">
                   <label class="form-check-label" for="check2">{{__('this_week')}}</label>
                </div>
            </div>
            <div class="d-flex px-3 py-2" style="background-color:white;">
                <div style="color:#3DA8C0;"><i class="fa fa-clock" style="color:#3DA8C0;"></i> {{__('availability_from')}}</div>
            </div>
            <div class="d-flex justify-content-around align-items-center px-3 py-2" style="background-color:white;">
                <div class="form-group">
                   <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
            </div>
            <div class="d-flex px-3 py-2" style="background-color:white;">
                <div style="color:#3DA8C0;"><i class="fa fa-clock" style="color:#3DA8C0;"></i> {{__('availability_to')}}</div>
            </div>
            <div class="d-flex justify-content-around align-items-center px-3 py-2" style="background-color:white;">
                <div class="form-group">
                   <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
            </div>
            <div class="d-flex px-3 py-2" style="background-color:white;">
                <div style="color:#3DA8C0;"><i class="fa fa-clock" style="color:#3DA8C0;"></i> {{__('duration')}} </div>
            </div>
            <div class="d-flex justify-content-around align-items-center px-3 py-2" style="background-color:white;">
                <div class="form-check">
                   <input type="checkbox" class="form-check-input" id="check1">
                   <label class="form-check-label" for="check1">30 {{__('min')}}</label>
                </div>
                <div class="form-check">
                   <input type="checkbox" class="form-check-input" id="check2">
                   <label class="form-check-label" for="check2">60 {{__('min')}}</label>
                </div>
            </div>
            <div class="d-flex px-3 py-2" style="background-color:white;">
                <div style="color:#3DA8C0;"><i class="fa fa-mars-double" style="color:#3DA8C0;"></i> {{__('gender')}} </div>
            </div>
            <div class="d-flex justify-content-around align-items-center px-3 py-2" style="background-color:white;">
                <div class="form-check">
                   <input type="checkbox" class="form-check-input" id="check1">
                   <label class="form-check-label" for="check1">{{__('male')}}</label>
                </div>
                <div class="form-check">
                   <input type="checkbox" class="form-check-input" id="check2">
                   <label class="form-check-label" for="check2">{{__('female')}}</label>
                </div>
            </div>
            <div class="d-flex px-3 py-2" style="background-color:white;">
                <div style="color:#3DA8C0;"><span class="fa fa-star"></span> {{__('rating')}}</div>
            </div>
            <div class="d-flex justify-content-around align-items-center px-3 py-2" style="background-color:white;">
                <div class="stars">
                    <span class="fa fa-star checked star" id="1"></span>
                    <span class="fa fa-star checked star" id="2"></span>
                    <span class="fa fa-star checked star" id="3"></span>
                    <span class="fa fa-star unchecked star" id="4"></span>
                    <span class="fa fa-star unchecked star" id="5"></span>
                </div>
                <div id="result">
                    3<span>/5</span>
                </div>
            </div>
            <div class="d-flex px-3 py-2" style="background-color:white;">
                <div style="color:#3DA8C0;"><span class="fa fa-money"></span> {{__('session_fees')}} ({{__('egp')}})</div>
            </div>
            <div class="d-flex flex-column px-3 py-2" style="background-color:white;">
                <p class="p-2 m-1 badge" id="less 150">
                   {{__('less_150')}}
                </p>
                <p class="p-2 m-1 badge" id="from 150 to 200">
                   {{__('from_150_to_200')}}
                </p>
                <p class="p-2 m-1 badge" id="from 200 to 300">
                   {{__('from_200_to_300')}}
                </p>
                <p class="p-2 m-1 badge" id="from 300 to 500">
                   {{__('from_300_to_500')}}
                </p>
                <p class="p-2 m-1 badge" id="more 500">
                   {{__('above_500')}}
                </p>
            </div>
        </div>
    </div>
</div>