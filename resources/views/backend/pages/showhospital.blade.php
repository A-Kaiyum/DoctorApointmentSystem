@extends('backend.layouts.master')
@section('title','Patient')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Patient Details</h3>
                    <a href="{{route('admin.hospital')}}" class="btn btn-primary"> Go Back</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width:200px">Image</th>
                        <td>
                            <div style="width:300px; height:300px;overflow: hidden; margin:auto">
                                <img src="{{asset($hospital->image)}}" class="img-fluid" alt="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th style="width:200px">Hospital Name</th>
                        <td>{{$hospital->name}}</td>
                    </tr>
                    <tr>
                        <th style="width:200px">Hospital ID</th>
                        <td>{{$hospital->hospital_id}}</td>
                    </tr>

                    <tr>
                        <th style="width:200px">Email</th>
                        <td>{{$hospital->email}}</td>
                    </tr>
                    <tr>
                        <th style="width:200px">Phone</th>
                        <td>{!! $hospital->phone !!}</td>
                    </tr>
                    <tr>
                        <th style="width:200px">Status</th>
                        <td>
                            @if($hospital->status == 1)
                                <span class="badge badge-pill badge-success">Accepted</span>
                            @else
                                <span class="badge badge-pill badge-danger">Pending</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        @if($hospital->status === 0)
                            <th style="width:200px">Action</th>
                            <td class="d-flex">
                                <form action="{{route('admin.hospital.accept',[$hospital->id])}}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-success mr-1"><i class="fas fa-check"></i>Accept</button>
                                </form>
                                <form action="{{route('admin.hospital.reject',[$hospital->id])}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i>Reject</button>
                                </form>
                            </td>
                        @endif
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

