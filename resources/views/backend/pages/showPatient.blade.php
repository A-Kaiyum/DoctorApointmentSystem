@extends('backend.layouts.master')
@section('title','Patient')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Patient Details</h3>
                    <a href="{{route('admin.patient.index')}}" class="btn btn-primary"> Go Back</a>
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
{{--                                <img src="{{asset($patient->image)}}" class="img-fluid" alt="">--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
                    <tr>
                        <th style="width:200px">Patient Name</th>
                        <td>{{$patient->name}}</td>
                    </tr>
<tr>
    <th style="width:200px">Patient Age</th>
    <td>{{$patient->age}}</td>
</tr>
<tr>
    <th style="width:200px">Blood Group</th>
    <td> A+</td>
</tr>
                    <tr>
                        <th style="width:200px">Email</th>
                        <td>{{$patient->email}}</td>
                    </tr>
                    <tr>
                        <th style="width:200px">Phone</th>
                        <td>{!! $patient->phone !!}</td>
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

