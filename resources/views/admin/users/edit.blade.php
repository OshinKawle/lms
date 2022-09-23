@extends('layouts.main') 
@section('title', 'Admin User')
@section("wrapper")
<div class="page-wrapper">
    <div class="page-content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h2>Edit User</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <hr/>
                     <div class="card border-top border-0 border-4 border-info">
                        <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                                        </div>
                                        <h5 class="mb-0 text-info">Edit User</h5>
                                    </div>
                                    <hr/>
                                    <form method="post" action="{{ url('team/users/'.$detail->id) }}"  onsubmit="return validateForm('addsstatus')" class="addsstatus" autocomplete="off" enctype="multipart/form-data">
                                    @csrf
                                     {{ method_field('PATCH') }}
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">User Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="banner" name="name" value="{{$detail->name}}" placeholder="User Name">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">User Mobile</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="mobile_number" name="mobile_number" value="{{$detail->mobile_number}}" placeholder="User Mobile">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">User Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="email" name="email" value="{{$detail->email}}" placeholder="User Email">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">User Password</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control " id="password" name="password" value="" placeholder="User Password">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">User Confirm Password</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control " id="confirm-password" name="confirm-password" value="{{old('confirm-password')}}" placeholder="User Confirm Password">
                                        </div>
                                    </div>

                                     <!-- <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">User Role</label>
                                        <div class="col-sm-9">
                                      <select class="form-control input-mandatory select2" id="roles" name="roles[]" >
                                        <option value="">--Select--</option>
                                        @foreach($roles as $role)
                                        <option value="{{$role}}" {{in_array($role,$userRole) ? 'Selected' : ''}}>{{$role}}</option>
                                        @endforeach
                                         
                                    </select>
                                        </div>
                                    </div> -->
                                   
                                   
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-info px-5">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
