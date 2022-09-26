@extends("layouts.main")
@section("wrapper")
    <div class="container-fluid mastercont">
        <br> <br>
        <div class="row">
            <div class="col-md-2">
                <div>
                </div>
            </div>
            <div class="col-md-7">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a class="breadcrumbmenu" href="#">Master</a></li>
                      <li class="breadcrumb-item "><a class="breadcrumbmenu" href="">Course</a></li>
                    
                    </ol>
                </nav>
            </div>
            <div class="col-md-3">
                <div class="d-flex">
                    <div>
                        <a href="" ><button class="bulkbutton">Bulk Upload <img class="bulkicon img-fluid" src="{{asset('admin/assets/images/uload_icon.png')}}"></button></a>
                    </div>
                    <div>
                        <a href="{{ url('master/course/create') }}"><button  class="unibutton">Add Course<img class="addkicon img-fluid"
                                src="{{asset('admin/assets/images/plus_icon.png')}}"></button></a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row mastertabtop">
            @include("admin.master.sidebar")
            <br>
            <div class="col-md-10">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-uni" role="tabpanel"
                        aria-labelledby="v-pills-uni-tab" tabindex="0">
                        <div style="overflow-x:scroll; width:100%;">
                            <table class="table table-bordered table-responsive" style="border-bottom: 1px solid;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>University</th>
                                        <th>Course</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @php 
                                  $page=1;
                                  if(Request::input('page'))
                                  $page=Request::input('page');
                                  $sort = $lists->perPage();
                               @endphp
                                <tbody>
                                   @foreach($lists as $key=>$list)
                                    <tr>
                                        <td>{{ $sort*($page-1)+($key+1) }}</td>
                                        <td>{{isset($list->univercity) ? $list->univercity->name : ''}}</td>
                                        <td>{{$list->name}}</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                           <a href="{{url('master/course/'.$list->id.'/edit')}}" class="btn btn-warning btn-sm">Edit</a> </td>
                                        
                                        @can('user-delete')
                                        <td><a href="{{url('master/course/delete/'.$list->id)}}" 
                                            class="btn btn-danger btn-sm"
                                         onclick="return confirm('Do you really Want to Delete the  User ?')">DELETE</a></td>
                                        @endcan
                                       
                                        
                                    </tr>
                                   @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </div>

@endsection