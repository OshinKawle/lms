@extends("layouts.main")
@section("wrapper")
<div class="container-fluid contwidth">
        <br>
        <div class="row">
            <div class="col-md-2">
                <div class="boxset1">
                    <div class="d-flex">
                        <div class="bgfafa1">
                            <!-- <i class="fa fa-user fafabox1" aria-hidden="true"></i> -->
                            <img class="fafabox1" src="{{asset('admin/assets/images/student.png')}}">
                        </div>
                        <div class="boxp1align">
                            <p class="boxtitlep1">+9% from yesterday</p>
                        </div>

                    </div>
                    <h2 class="boxh1">1k</h2>
                    <h6 class="conth6">Total Number of Student</h6>
                </div>
            </div>


            <div class="col-md-2">
                <div class="boxset2">
                    <div class="d-flex">
                        <div class="bgfafa2">
                            <!-- <i class="fa fa-user fafabox2" aria-hidden="true"></i> -->
                            <img class="fafabox1" src="{{asset('admin/assets/images/badge.png')}}">
                        </div>
                        <div class="boxp2align">
                            <p class="boxtitlep2">+9% from yesterday</p>
                        </div>

                    </div>
                    <h2 class="boxh2">50</h2>
                    <h6 class="conth6">Total Number of Specialization</h6>
                </div>
            </div>


            <div class="col-md-2">
                <div class="boxset3">
                    <div class="d-flex">
                        <div class="bgfafa3">
                            <!-- <i class="fa fa-user fafabox1" aria-hidden="true"></i> -->
                            <img class="fafabox1" src="{{asset('admin/assets/images/subject.png')}}">
                        </div>
                        <div class="boxp3align">
                            <p class="boxtitlep3">+9% from yesterday</p>
                        </div>

                    </div>
                    <h2 class="boxh3">500</h2>
                    <h6 class="conth6">Total Number of Subject</h6>
                </div>
            </div>


            <div class="col-md-2">
                <div class="boxset4">
                    <div class="d-flex">
                        <div class="bgfafa4">
                            <!-- <i class="fa fa-user fafabox4" aria-hidden="true"></i> -->
                            <img class="fafabox1" src="{{asset('admin/assets/images/e-learning.png')}}">
                        </div>
                        <div class="boxp4align">
                            <p class="boxtitlep4">+9% from yesterday</p>
                        </div>

                    </div>
                    <h2 class="boxh4">500</h2>
                    <h6 class="conth6">Total Number of E-books</h6>
                </div>
            </div>


            <div class="col-md-2">
                <div class="boxset5">
                    <div class="d-flex">
                        <div class="bgfafa5">
                            <!-- <i class="fa fa-user fafabox5" aria-hidden="true"></i> -->
                            <img class="fafabox1" src="{{asset('admin/assets/images/test.png')}}">
                        </div>
                        <div class="boxp5align">
                            <p class="boxtitlep5">+9% from yesterday</p>
                        </div>

                    </div>
                    <h2 class="boxh5">2k</h2>
                    <h6 class="conth6">Total Exams Taken</h6>
                </div>
            </div>

            <div class="col-md-2">
                <div class="boxset6">
                    <div class="d-flex">
                        <div class="bgfafa6">
                            <!-- <i class="fa fa-user fafabox6" aria-hidden="true"></i> -->
                            <img class="fafabox1" src="{{asset('admin/assets/images/rupee.png')}}">
                        </div>
                        <div class="boxp6align">
                            <p class="boxtitlep6">+9% from yesterday</p>
                        </div>

                    </div>
                    <h2 class="boxh6">90k</h2>
                    <h6 class="conth6">Total Pending Fees</h6>
                </div>
            </div>


        </div>
    </div>

    <br>


    <div class="container-fluid contwidth">
        <div class="row">
            <div class="col-md-9 ">
                <div class="progressbarbg">
                    <h6 class="pregressH6">Students Count by Semester</h6>

                    <br>

                    <div class="row">
                        <div class="col-md-1">
                            <h6 class="progressh6set">Sem IV</h6>
                        </div>                        
                        <div class="col-md-11">
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-label="Info example" style="width: 88%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-1">
                            <h6 class="progressh6set">Sem III</h6>
                        </div>
                        <div class="col-md-11">
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-label="Danger example" style="width: 58%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-1">
                            <h6 class="progressh6set">Sem II</h6>
                        </div>
                        <div class="col-md-11">
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-label="Warning example" style="width: 80%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-1">
                            <h6 class="progressh6set">Sem I</h6>
                        </div>
                        <div class="col-md-11">
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-label="Success example" style="width: 65%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-1">
                        </div>


                        <div class="col-md-11">
                            <div>
                                <table class="table">
                                    <tbody>
                                        <tr class="bordertr">
                                            <th class="thfont">5k</th>
                                            <th  class="thfont">10k</th>
                                            <th  class="thfont">15k</th>
                                            <th  class="thfont">20k</th>
                                            <th  class="thfont">25k</th>
                                            <th  class="thfont">30k</th>
                                            <th  class="thfont">35k</th>
                                            <th  class="thfont">40k</th>
                                            <th  class="thfont">45k</th>
                                            <th  class="thfont">50k</th>
                                            <th  class="thfont">55k</th>
                                            <th  class="thfont">60k</th>
                                            <th  class="thfont">65k</th>
                                            <th  class="thfont">70k</th>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-3 ">
                <div class="dpubg">
                    <div>
                        <img class="dpulogo" src="{{asset('admin/assets/images/dpu_logo.png')}}">
                    </div>

                    <div class="students">
                        <div class="slide">
                            <center><h1 class="dpuh1">80K+</h1></center>
                            <center>
                                <h6 class="dpusliderh6">Total Students</h6>
                                <p class="dpuPslider">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde,
                                    fugiat.</p>
                            </center>
                        </div>

                        <div class="slide">
                            <center><h1 class="dpuh1">80K+</h1></center>
                            <center>
                                <h6 class="dpusliderh6">Total Students</h6>
                                <p class="dpuPslider">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde,
                                    fugiat.</p>
                            </center>
                        </div>

                        <div class="slide">
                            <center><h1 class="dpuh1">80K+</h1></center>
                            <center>
                                <h6 class="dpusliderh6">Total Students</h6>
                                <p class="dpuPslider">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde,
                                    fugiat.</p>
                            </center>
                        </div>

                        <div class="slide">
                            <center><h1 class="dpuh1">80K+</h1></center>
                            <center>
                                <h6 class="dpusliderh6">Total Students</h6>
                                <p class="dpuPslider">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde,
                                    fugiat.</p>
                            </center>
                        </div>

                        <div class="slide">
                            <center><h1 class="dpuh1">80K+</h1></center>
                            <center>
                                <h6 class="dpusliderh6">Total Students</h6>
                                <p class="dpuPslider">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde,
                                    fugiat.</p>
                            </center>
                        </div>

                        <div class="slide">
                            <center><h1 class="dpuh1">80K+</h1></center>
                            <center>
                                <h6 class="dpusliderh6">Total Students</h6>
                                <p class="dpuPslider">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde,
                                    fugiat.</p>
                            </center>
                        </div>

                        <div class="slide">
                            <center><h1 class="dpuh1">80K+</h1></center>
                            <center>
                                <h6 class="dpusliderh6">Total Students</h6>
                                <p class="dpuPslider">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde,
                                    fugiat.</p>
                            </center>
                        </div>

                        <div class="slide">
                            <center><h1 class="dpuh1">80K+</h1></center>
                            <center>
                                <h6 class="dpusliderh6">Total Students</h6>
                                <p class="dpuPslider">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde,
                                    fugiat.</p>
                            </center>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
        
   