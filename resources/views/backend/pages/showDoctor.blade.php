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
                    <tr>
                        <th style="width:200px">Image</th>
                        <td>
                            <div style="width:300px; height:300px;overflow: hidden; margin:auto">
                                <img src="{{asset($doctor->image)}}" class="img-fluid" alt="">
                            </div>
                        </td>
                    </tr>
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
                    <tr>
                        <th style="width:200px">Status</th>
                        <td>
                            @if($doctor->status == 1)
                                <span class="badge badge-pill badge-success">Accepted</span>
                            @else
                                <span class="badge badge-pill badge-danger">Pending</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th style="width:200px">Hello Doc ID</th>
                        <td>{{ $doctor->doctor_id }}</td>
                    </tr>
                    <tr>
                        @if($doctor->status === 0)
                        <th style="width:200px">Action</th>
                        <td class="d-flex">
                            <form action="{{route('admin.doctor.accept',[$doctor->id])}}" method="post">
                                @method('PUT')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-success mr-1"><i class="fas fa-check"></i>Accept</button>
                            </form>
                            <form action="{{route('admin.doctor.reject',[$doctor->id])}}" method="post">
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

    <script>
        $(document).ready(function(e) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        });
        function accept(id) {

            $.ajax({
                type: "put",
                dataType: "json",
                url: "accepted/" + id,
                success: function(response) {

                    location.reload();

                }
            })
        }
        function reject(id) {

            $.ajax({
                type: "DELETE",
                dataType: "json",
                url: "rejected/" + id,
                success: function(response) {

                    location.reload();

                }
            })
        }
    </script>

@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
@endpush

