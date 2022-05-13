@extends('backend.patients.layouts.master')
@section('title','Post')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Create History</h3>
                    <a href="{{route('patient.history.index')}}" class="btn btn-primary"> Go Back</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div>
                    @include('backend.pages.errors')
                </div>

                <div class="col-lg-12 col-md-6">
                    <form action="{{route('patient.history.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Title</label>
                                <input type="text" name="title" value="{{old('title')}}" class="form-control" id="postTitle" placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                <label for="name">Doctor Name</label>
                                <input type="text" name="doctor" value="{{old('doctor')}}" class="form-control" id="postTitle" placeholder="Enter Doctor Name">
                            </div>
                            <div class="form-group">
                                <label for="name">Appointment Date</label>
                                <input type="text" name="appointedDate" value="{{old('appointedDate')}}" class="form-control" id="postTitle" placeholder="Enter Date 01-02-03">
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="summernote" rows="4" class="form-control" placeholder="Enter Description">
                                    {{old('description')}}
                                    </textarea>
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

