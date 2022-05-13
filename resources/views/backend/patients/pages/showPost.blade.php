@extends('backend.patients.layouts.master')
@section('title','Post')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Create history</h3>
                    <a href="{{route('patient.history.index')}}" class="btn btn-primary"> Go Back</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <th style="width:200px">Prescription</th>
                            <td>
                                <div style="width:300px; height:300px;overflow: hidden; margin:auto">
                                    <img src="{{asset($post->image)}}" class="img-fluid" alt="">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th style="width:200px">History Title</th>
                            <td>{{$post->title}}</td>
                        </tr>
                        <tr>
                            <th style="width:200px">Doctor Name </th>
                            <td>{{$post->doctor}}</td>
                        </tr>
                        <tr>
                            <th style="width:200px">Appointment Date </th>
                            <td>{{$post->appointedDate}}</td>
                        </tr>
                        <tr>
                            <th style="width:200px"> Description</th>
                            <td>{!! $post->description !!}</td>
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

