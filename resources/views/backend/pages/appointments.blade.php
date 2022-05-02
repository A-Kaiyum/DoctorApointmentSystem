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
                                <th>Appoint Date</th>
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
                                        <td>{{$appointment->fullName}}</td>
                                        <td>{{$appointment->email}}</td>
                                        <td>{{$appointment->phone}}</td>
                                        <td>{{$appointment->subject}}</td>
                                        <td>{{$appointment->appointDate}}</td>

                                        <td>
                                            @if($appointment->status == 1)
                                                <span class="badge badge-pill badge-success">Accepted</span>
                                            @else
                                                <span class="badge badge-pill badge-danger">Pending</span>
                                            @endif
                                        </td>
                                        <td class="d-flex">

                                            <button  class="btn btn-sm btn-success mr-1"> <i class="fas fa-check" onclick="accept({{$appointment->id}})" > Accept</i></button>
                                            <button type="submit" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash" onclick="reject({{$appointment->id}})"></i>Reject</button>
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
                url: "accept/" + id,
                success: function(response) {

                    location.reload();

                }
            })
        }
        function reject(id) {

            $.ajax({
                type: "DELETE",
                dataType: "json",
                url: "reject/" + id,
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
