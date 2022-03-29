@extends('backend.layouts.master')
@section('title','patient')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Create patient</h3>
                    <a href="{{route('admin.patient.index')}}" class="btn btn-primary">Back To List</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div>
                    @include('backend.pages.errors')
                </div>

                <div class="col-lg-12 col-md-6">
                    <form action="{{route('admin.patient.update',[$patient->id])}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{$patient->name}}" class="form-control" id="patientName" placeholder="Enter patient name">
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="email" name="email" value="{{$patient->email}}" class="form-control" id="patientEmail" placeholder="Enter patient name">
                            </div>
                            <div class="form-group">
                                <label for="name">Phone</label>
                                <input type="phone" name="phone" value="{{$patient->phone}}" class="form-control" id="patientPassword" placeholder="Enter patient phone">
                            </div>

                            <div class="form-group">
                                <label for="name">Status</label>
                                <input type="text" name="status" value="{{$patient->status}}" class="form-control" id="patientPassword" placeholder="Enter patient status">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>

    </div>

@endsection



