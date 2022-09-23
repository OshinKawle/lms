@extends("layouts_new.main_new")
@section("style")
    <link href="{{asset('assets/plugins/highcharts/css/highcharts.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    @endsection
        @section("wrapper")
        <div class="page-wrapper">
            <div class="page-content">
                <div class="row row-cols-1 row-cols-lg-4">
                    <div class="col">
                        <div class="card radius-10 overflow-hidden bg-gradient-cosmic">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-white">Total Customer</p>
                                        <h5 class="mb-0 text-white">{{ __('3,612')}}</h5>
                                    </div>
                                    <div class="ms-auto text-white"><i class='bx bx-cart font-30'></i>
                                    </div>
                                </div>
                                <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 46%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 overflow-hidden bg-gradient-burning">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-white">Total Technican</p>
                                        <h5 class="mb-0 text-white">{{ __('35,500')}}</h5>
                                    </div>
                                    <div class="ms-auto text-white"><i class='bx bx-wallet font-30'></i>
                                    </div>
                                </div>
                                <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 72%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 overflow-hidden bg-gradient-Ohhappiness">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-white">Total Booking</p>
                                        <h5 class="mb-0 text-white">{{ __('865')}}</h5>
                                    </div>
                                    <div class="ms-auto text-white"><i class='bx bx-bulb font-30'></i>
                                    </div>
                                </div>
                                <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 68%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 overflow-hidden bg-gradient-moonlit">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-white">Total Revenue</p>
                                        <h5 class="mb-0 text-white">869</h5>
                                    </div>
                                    <div class="ms-auto text-white"><i class='bx bx-chat font-30'></i>
                                    </div>
                                </div>
                                <div class="progress  bg-white-2 radius-10 mt-4" style="height:4.5px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 66%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end row-->
            
                <div class="row">
                  <div class="col-12 col-lg-8 d-flex">
                     <div class="card radius-10 w-100">
                         <div class="card-body">
                         <div id="chart12" class="d-none" ></div>
                            <div class="d-flex align-items-center">
                                <div>
                                    <h6 class="mb-0">Total Number Of Users All Over The World</h6>
                                </div>
                                <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                                </div>
                            </div>
                            <div class="" id="geographic-map"></div>
                         </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-4 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h6 class="mb-0">Impressions By Country</h6>
                                </div>
                                <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-top-countries mb-3 p-3">

                            <div class="row mb-4">
                                <div class="col-2">
                                    <img src="{{asset('assets/images/icons/united-states.png')}}" width="42" alt="">
                                </div>
                                <div class="col">
                                    <p class="mb-2">United States <strong class="float-end">445,85</strong></p>
                                    <div class="progress radius-10" style="height:6px;">
                                        <div class="progress-bar bg-gradient-blues" role="progressbar" style="width: 86%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-2">
                                    <img src="{{asset('assets/images/icons/germany.png')}}" width="42" alt="">
                                </div>
                                <div class="col">
                                    <p class="mb-2">Germany <strong class="float-end">683,46</strong></p>
                                    <div class="progress radius-10" style="height:6px;">
                                        <div class="progress-bar bg-gradient-cosmic" role="progressbar" style="width: 66%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-2">
                                    <img src="{{asset('assets/images/icons/canada.png')}}" width="42" alt="">
                                </div>
                                <div class="col">
                                    <p class="mb-2">Canada <strong class="float-end">982,43</strong></p>
                                    <div class="progress radius-10" style="height:6px;">
                                        <div class="progress-bar bg-gradient-burning" role="progressbar" style="width: 56%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-2">
                                    <img src="{{asset('assets/images/icons/india.png')}}" width="42" alt="">
                                </div>
                                <div class="col">
                                    <p class="mb-2">India <strong class="float-end">852,35</strong></p>
                                    <div class="progress radius-10" style="height:6px;">
                                        <div class="progress-bar bg-gradient-lush" role="progressbar" style="width: 45%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-2">
                                    <img src="{{asset('assets/images/icons/netherlands.png')}}" width="42" alt="">
                                </div>
                                <div class="col">
                                    <p class="mb-2">Netherlands <strong class="float-end">785,24</strong></p>
                                    <div class="progress radius-10" style="height:6px;">
                                        <div class="progress-bar bg-gradient-kyoto" role="progressbar" style="width: 38%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-2">
                                    <img src="{{asset('assets/images/icons/malaysia.png')}}" width="42" alt="">
                                </div>
                                <div class="col">
                                    <p class="mb-2">Malaysia <strong class="float-end">387,56</strong></p>
                                    <div class="progress radius-10" style="height:6px;">
                                        <div class="progress-bar bg-gradient-moonlit" role="progressbar" style="width: 28%"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                 </div>
              </div><!--end row-->
              <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="card radius-10">
                            <div class="card-header border-bottom-0 bg-transparent">
                                <div class="d-lg-flex align-items-center">
                                    <div>
                                        <h6 class="font-weight-bold mb-2 mb-lg-0">Total Number Astrologer</h6>
                                    </div>
                                    <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chart2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card radius-10 bg-primary">
                            <div class="card-body">
                                <h6 class="text-white">Total Product Sales</h6>
                                <h4 class="font-weight-bold text-white">3467</h4>
                                <div id="chart3"></div>
                            </div>
                        </div>
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="revenue-by-channel">
                                    <h6 class="mb-4 font-weight-bold">Revenue by Channel</h6>
                                    <div class="progress-wrapper">
                                        <div class="d-flex align-items-center">
                                            <div class="text-secondary">Direct</div>
                                            <div class="ms-auto pe-4">$1,24,685</div>
                                            <div class="text-success">65.6%</div>
                                        </div>
                                        <div class="progress mt-2" style="height:3px;">
                                            <div class="progress-bar" role="progressbar" style="width: 65%"></div>
                                        </div>
                                    </div>
                                    <div class="progress-wrapper mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="text-secondary">Referral</div>
                                            <div class="ms-auto pe-4">$1,22,863</div>
                                            <div class="text-success">45.6%</div>
                                        </div>
                                        <div class="progress mt-2" style="height:3px;">
                                            <div class="progress-bar" role="progressbar" style="width: 55%"></div>
                                        </div>
                                    </div>
                                    <div class="progress-wrapper mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="text-secondary">Social</div>
                                            <div class="ms-auto pe-4">$1,24,685</div>
                                            <div class="text-danger">25.2%</div>
                                        </div>
                                        <div class="progress mt-2" style="height:3px;">
                                            <div class="progress-bar" role="progressbar" style="width: 35%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
                <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card radius-10">
                    <div class="card-header border-bottom-0 bg-transparent">
                        <div class="d-lg-flex align-items-center">
                            <div>
                                <h6 class="font-weight-bold mb-2 mb-lg-0">Todays Revenue</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <div id="todayProfit"></div>
                    </div>
                </div>
            </div>
                    <div class="col-12 col-md-4">
                    <div class="card radius-10">
                    <div class="card-header border-bottom-0 bg-transparent">
                        <div class="d-lg-flex align-items-center">
                            <div>
                                <h6 class="font-weight-bold mb-2 mb-lg-0">Net Revenue</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <div id="netProfit"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                    <div class="card radius-10">
                    <div class="card-header border-bottom-0 bg-transparent">
                        <div class="d-lg-flex align-items-center">
                            <div>
                                <h6 class="font-weight-bold mb-2 mb-lg-0">Total Revenue</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <div id="totalProfit"></div>
                    </div>
                </div>
            </div>
            </div><!--end row-->   
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card radius-10">
                    <div class="card-header border-bottom-0 bg-transparent">
                        <div class="d-lg-flex align-items-center">
                            <div>
                                <h6 class="font-weight-bold mb-2 mb-lg-0">Todays Call</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <div id="todysCall"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                    <div class="card radius-10 bg-primary">
                    <div class="card-header border-bottom-0 ">
                        <div class="d-lg-flex align-items-center">
                            <div>
                                <h6 class="text-white font-weight-bold mb-2 mb-lg-0">Weekly Call</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <div id="weeklyCall"></div>
                    </div>
                </div>
            </div>
</div><!--end row--> 
<div class="row">
                <div class="col-12 col-md-6">
                    <div class="card radius-10 bg-gradient-Ohhappiness">
                    <div class="card-header border-bottom-0 bg-transparent">
                        <div class="d-lg-flex align-items-center">
                            <div>
                                <h6 class="text-white font-weight-bold mb-2 mb-lg-0">Todays Total Chats</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <div id="todaysChat"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                    <div class="card radius-10 bg-transparent">
                    <div class="card-header border-bottom-0">
                        <div class="d-lg-flex align-items-center">
                            <div>
                                <h6 class="font-weight-bold mb-2 mb-lg-0">Weekly Total Chats</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <div id="weeklyChat"></div>
                    </div>
                </div>
            </div>
</div><!--end row--> 
                

                
                    <!-- </div>
                </div>
            </div> -->
        </div>
        @endsection
        
   