@extends('backend.layouts.master')
@section('title','Appointment List')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Appointment List</h3>
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
                                <th>Subject</th>
                                <th>AppointDate</th>
                                <th>Status</th>
                                <th style="width: 40px">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if($appointments->count()>0)
                                <?php $sl = 1; ?>
                                @foreach($appointments as $appointment)
                                    <tr>
                                        <td>{{$sl}}</td>
                                        <td>{{$appointment->fullName}}</td>
                                        <td>{{$appointment->email}}</td>
                                        <td>{{$appointment->phone}}</td>
                                        <td>{{$appointment->subject}}</td>
                                        <td>{{$appointment->appointDate}}</td>

                                        <td style="color: red">{{$appointment->status == 1?'Accepted':'Pending'}}</td>
                                        <td class="d-flex">
                                            <a href="#" class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"> Accept</i></a>
                                            <form action="" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i>Reject</button>
                                            </form>
                                            <a href="" class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i></a>
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
