@extends('backend.layouts.master')
@section('title','Doctor')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Doctor Details</h3>
                    <a href="{{route('admin.doctor.index')}}" class="btn btn-primary"> Go Back</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-bordered">
                    <tbody>
{{--                    <tr>--}}
{{--                        <th style="width:200px">Image</th>--}}
{{--                        <td>--}}
{{--                            <div style="width:300px; height:300px;overflow: hidden; margin:auto">--}}
{{--                                <img src="{{asset($doctor->image)}}" class="img-fluid" alt="">--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
                    <tr>
                        <th style="width:200px">Doctor Name</th>
                        <td>{{$doctor->name}}</td>
                    </tr>
                    <tr>
                        <th style="width:200px">Age</th>
                        <td>{{$doctor->age}}</td>
                    </tr>
                    <tr>
                        <th style="width:200px">Email</th>
                        <td>{{$doctor->email}}</td>
                    </tr>
                    <tr>
                        <th style="width:200px">Phone</th>
                        <td>{{ $doctor->phone }}</td>
                    </tr>
                    <tr>
                        <th style="width:200px">Hospital Name</th>
                        <td>{{ $doctor->hospitalName }}</td>
                    </tr>
                    <tr>
                        <th style="width:200px">Designation</th>
                        <td>{{ $doctor->designation }}</td>
                    </tr>
                    <tr>
                        <th style="width:200px">Department</th>
                        <td>{{ $doctor->department }}</td>
                    </tr>
                    <tr>
                        <th style="width:200px">Degree</th>
                        <td>{{ $doctor->degree }}</td>
                    </tr>
                    </tbody>


                </table>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    </div>

    </div>

@endsection

