@extends('backend.layouts.master')
@section('title','Registration List')
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th style="width: 150px">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if($appointments->count()>0)
                                <?php $sl = 1; ?>
                                @foreach($appointments as $appointment)
                                    <tr>
                                        <td>{{$sl}}</td>
                                        <td>{{$appointment->name}}</td>
                                        <td>{{$appointment->email}}</td>
                                        <td>{{$appointment->phone}}</td>
                                        <td>
                                                <span class="badge badge-pill badge-danger">Pending</span>
                                        </td>
                                        <td class="d-flex">

{{--                                            <button  class="btn btn-sm btn-success mr-1"> <i class="fas fa-check" onclick="accept({{$appointment->id}})" > Accept</i></button>--}}
{{--                                            <button type="submit" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash" onclick="reject({{$appointment->id}})"></i>Reject</button>--}}
                                                <a href="{{route('admin.hospital.hospitalShow',[$appointment->id])}}" class="btn btn-sm btn-primary mr-1"> <i class="fas fa-eye">View</i></a>
                                        </td>
                                    </tr>
                                    <?php $sl++; ?>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6">
                                        <h5 class="text-center">No appointment Found</h5>
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


