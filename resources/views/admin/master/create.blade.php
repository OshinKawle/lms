@extends("layouts.main")
@section("wrapper")
    <div class="container-fluid mastercont">
        <br>
        <br>
        <div class="row">
            <div class="col-md-2">
                
            </div>
            <div class="col-md-7">
                <div>
                    <a class="backbtn" href="{{ url('master/course') }}"><i class="fa fa-long-arrow-left" style="margin-right:5px;" aria-hidden="true"></i>Back</a>
               </div>

               <br>

               <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a class="breadcrumbmenu" href="{{url('master/course')}}">Master</a></li>
                  <li class="breadcrumb-item "><a class="breadcrumbmenu" href="{{url('master/course')}}">course</a></li>
                  <li class="breadcrumb-item active breadcrumbactivemenu"  aria-current="page">Add</li>
                </ol>
            </nav>
            </div>
            
        </div>
        <br>
        <div class="row mastertabtop">
          @include("admin.master.sidebar")
            <div class="col-md-10">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-uni" role="tabpanel"
                        aria-labelledby="v-pills-uni-tab" tabindex="0">
                        <div class="formbd">
                            <form action="{{url('master/course')}}" method="POST" onsubmit="return validateForm('addsstatus')">
                                @csrf
                                
                                <div class="row">
                                    <div class="col-md-3">
                                        <div>
                                            <p style="margin-bottom: 5px;"><strong>Univercity</strong></p>
                                           <!--  <input class="form-control input-mandatory" type="text" name="name"
                                                placeholder="Enter course "> -->
                                                <select class="form-control input-mandatory"  name="univercity_id">
                                                    <option value="">Select Univercity</option>
                                                    @foreach($univercity as $univercitys)
                                                    <option value="{{$univercitys->id}}">{{$univercitys->name}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>
                                      <div class="col-md-3">
                                        <div>
                                            <p style="margin-bottom: 5px;"><strong>course</strong></p>
                                            <input class="form-control input-mandatory" type="text" name="name"
                                                placeholder="Enter course ">
                                        </div>
                                    </div>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-3">
                                        <div>
                                            <button class="btn btn-primary cancelbtn">Cancel</button>
                                            <button class="btn btn-primary savebtn" type="submit">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                       
                    </div>

                   
                </div>
            </div>
        </div>        
    </div>


@endsection