@extends('front.master')

@section('content')

<section class="team ls section_padding_40 table_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-md-push-6 col-lg-push-6 text-center team_member_photo">
                <img src="front-assets/images/team/01.png" alt="">
            </div>
            <div class="col-lg-1 col-lg-pull-1" style="padding-bottom: 25px;"></div>
            <div class="col-lg-5 col-md-6 col-md-pull-6 col-lg-pull-7" >
                <h2 class="topmargin_-5 bottommargin_25 fontCairo">
                   <strong style="color: #103e55;">   {{__('home.who are we')}}</strong>
                </h2>
                <p class="fontCairo">
                {{__('home.whoweare')}}
                </p>
            </div>
        </div>
    </div>
</section>

<section class="team ls ms section_padding_40 table_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 text-center team_member_photo">
                <img src="front-assets/images/team/02.png" alt="">
            </div>
            <div class="col-lg-1 col-lg-pull-1" style="padding-bottom: 25px;"></div>
            <div class="col-lg-4 col-md-6" style="padding-bottom: 100px;">
                <h2 class="fontCairo" >
                   <strong style="color: #103e55;">{{__('home.message')}}</strong>
                </h2>
                <p class="fontCairo" >
               
                {{__('home.whoweare1')}}
                </p>
            </div>
        </div>
    </div>
</section>

<section class="team ls section_padding_40 table_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-md-push-6 col-lg-push-6 text-center team_member_photo">
                <img src="front-assets/images/team/03.png" alt="">
            </div>
            <div class="col-lg-1 col-lg-pull-1" style="padding-bottom: 25px;"></div>
            <div class="col-lg-5 col-md-6 col-md-pull-6 col-lg-pull-7">
                <h2 class="topmargin_-5 bottommargin_25">
                     <strong class="fontCairo" style=" color: #103e55;">{{__('home.the mission')}}</strong>
                </h2>
                <p>
                {{__('home.whoweare2')}}</p>
             
                
            </div>
        </div>
    </div>
</section>
<section class="team ls ms section_padding_40 table_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 text-center team_member_photo">
                <img src="front-assets/images/team/02.png" alt="">
            </div>
            <div class="col-lg-1 col-lg-pull-1" style="padding-bottom: 25px;"></div>
            <div class="col-lg-5 col-md-6">
              
                <h2 class="topmargin_-5 bottommargin_25 fontCairo" >
                     <strong class="fontCairo" style=" color: #103e55;    ">{{__('home.Value')}}</strong>
                </h2>
                <ul class="fontCairo" >
    <li>{{__('home.whoweare3')}}</li>
    <li>{{__('home.whoweare4')}}</li> 
    <li>{{__('home.whoweare5')}}</li>
</ul>


            </div>
        </div>
    </div>
</section>



@endsection
