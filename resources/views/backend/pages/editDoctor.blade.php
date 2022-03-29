@extends('backend.layouts.master')
@section('title','Doctor')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title"></h3>
                    <a href="{{route('admin.doctor.index')}}" class="btn btn-primary">Back To List</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div>
                    @include('backend.pages.errors')
                </div>

                <div class="col-lg-12 col-md-6">
                    <form action="{{route('admin.doctor.update',[$doctor->id])}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{$doctor->name}}" class="form-control" id="doctorName" placeholder="Enter doctor name">
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="email" name="email" value="{{$doctor->email}}" class="form-control" id="doctorEmail" placeholder="Enter doctor name">
                            </div>
                            <div class="form-group">
                                <label for="name">Phone</label>
                                <input type="phone" name="phone" value="{{$doctor->phone}}" class="form-control" id="doctorPassword" placeholder="Enter doctor phone">
                            </div>

                            <div class="form-group">
                                <label for="name">Status</label>
                                <input type="text" name="status" value="{{$doctor->status}}" class="form-control" id="doctorPassword" placeholder="Enter doctor status">
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



