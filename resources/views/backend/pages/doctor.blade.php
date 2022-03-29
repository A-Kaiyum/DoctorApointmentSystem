@extends('backend.layouts.master')
@section('title','Doctor List')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Doctor List</h3>
                            <a href="#" class="btn btn-primary"> Check List</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">#Sl</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th style="width: 40px">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if($doctorList->count()>0)
                                <?php $sl = 1; ?>
                                @foreach($doctorList as $doctor)
                                    <tr>
                                        <td>{{$sl}}</td>
                                        <td>
                                            <div style="width:50px; height:50px;overflow: hidden">
                                                <img src="{{asset($doctor->image)}}" class="img-fluid" alt="">
                                            </div>
                                        </td>
                                        <td>{{$doctor->name}}</td>
                                        <td>{{$doctor->email}}</td>
                                        <td>{{$doctor->phone}}</td>
                                        <td style="color: red">{{$doctor->status}} Pending</td>
                                        <td class="d-flex">
                                            <a href="{{route('admin.doctor.edit',[$doctor->id])}}" class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i></a>
                                            <form action="{{route('admin.doctor.destroy',[$doctor->id])}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i></button>
                                            </form>
                                            <a href="{{route('admin.doctor.show',[$doctor->id])}}" class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    <?php $sl++; ?>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6">
                                        <h5 class="text-center">No doctor Found</h5>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
        </div>
    </div>


@endsection
