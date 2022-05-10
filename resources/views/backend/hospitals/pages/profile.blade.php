@extends('backend.layouts.master')
@section('title','Patient List')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src={{$profile->image}} alt="User
                                     profile picture">
                            </div>
                            <h3 class="profile-username text-center">{{$profile->name}}</h3>
                            @if(auth()->user()->status === 1)
                                <p class="text-light text-center badge-success">Approved</p>
                            @elseif(auth()->user()->status === 0)
                                <p class="text-light text-center badge-danger">Pending</p>
                            @elseif(auth()->user()->status === null)
                                <p class="text-light text-center badge-primary">Submit Your Profle Information</p>
                            @endif
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <p>{{$profile->email}}</p>
                                </li>
                                <li class="list-group-item">
                                    <p>{{$profile->phone}}</p>
                                </li>
                                <li class="list-group-item">

                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary btn-block"><b>Active</b></a>
                        </div>

                    </div>

{{--                    <div class="card card-primary">--}}
{{--                        <div class="card-header">--}}
{{--                            <h3 class="card-title">About Me</h3>--}}
{{--                        </div>--}}

{{--                        <div class="card-body">--}}
{{--                            <strong><i class="fas fa-book mr-1"></i> Education</strong>--}}
{{--                            <p class="text-muted">--}}
{{--                                B.S. in Computer Science from the University of Tennessee at Knoxville--}}
{{--                            </p>--}}
{{--                            <hr>--}}
{{--                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>--}}
{{--                            <p class="text-muted">Malibu, California</p>--}}
{{--                            <hr>--}}
{{--                            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>--}}
{{--                            <p class="text-muted">--}}
{{--                                <span class="tag tag-danger">UI Design</span>--}}
{{--                                <span class="tag tag-success">Coding</span>--}}
{{--                                <span class="tag tag-info">Javascript</span>--}}
{{--                                <span class="tag tag-warning">PHP</span>--}}
{{--                                <span class="tag tag-primary">Node.js</span>--}}
{{--                            </p>--}}
{{--                            <hr>--}}
{{--                            <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>--}}
{{--                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam--}}
{{--                                fermentum enim neque.</p>--}}
{{--                        </div>--}}

{{--                    </div>--}}

                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Change Password</a>
                                </li>
                                <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Timeline</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane" id="activity">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Current Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputName"
                                                       placeholder="Enter Current Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">New Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputEmail"
                                                       placeholder="Enter New Password">
                                            </div>
                                        </div>
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                </form>

                                </div>

                                <div class="tab-pane active" id="timeline">

                                    <div class="timeline timeline-inverse">

                                        <div class="time-label">
<span class="bg-danger">
10 Feb. 2014
</span>
                                        </div>


                                        <div>
                                            <i class="fas fa-envelope bg-primary"></i>
                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 12:05</span>
                                                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an
                                                    email</h3>
                                                <div class="timeline-body">
                                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                    weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                    jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                    quora plaxo ideeli hulu weebly balihoo...
                                                </div>
                                                <div class="timeline-footer">
                                                    <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                </div>
                                            </div>
                                        </div>


                                        <div>
                                            <i class="fas fa-user bg-info"></i>
                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>
                                                <h3 class="timeline-header border-0"><a href="#">Sarah Young</a>
                                                    accepted your friend request
                                                </h3>
                                            </div>
                                        </div>


                                        <div>
                                            <i class="fas fa-comments bg-warning"></i>
                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>
                                                <h3 class="timeline-header"><a href="#">Jay White</a> commented on your
                                                    post</h3>
                                                <div class="timeline-body">
                                                    Take me to your leader!
                                                    Switzerland is small and neutral!
                                                    We are more like Germany, ambitious and misunderstood!
                                                </div>
                                                <div class="timeline-footer">
                                                    <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="time-label">
<span class="bg-success">
3 Jan. 2014
</span>
                                        </div>


                                        <div>
                                            <i class="fas fa-camera bg-purple"></i>
                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 2 days ago</span>
                                                <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos
                                                </h3>
                                                <div class="timeline-body">

                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <i class="far fa-clock bg-gray"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="settings">
                                    <form  class="form-horizontal"  action="{{route('hospital.profileUpdate',$profile->id)}}" method="post" enctype="multipart/form-data" >
                                        @csrf
                                        @method('put')

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName"
                                                       placeholder="Name" name="name" value={{$profile->name}}>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Hospital ID</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName"
                                                       placeholder="Registration ID" name="hospital_id" value={{$profile->hospital_id}}>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail"
                                                       placeholder="Email" name="email" value="{{$profile->email}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName2"
                                                       placeholder="Phone Number" name="phone" value="{{$profile->phone}}">
                                            </div>
                                        </div>
{{--                                        <div class="form-group row">--}}
{{--                                            <label for="inputExperience"--}}
{{--                                                   class="col-sm-2 col-form-label">Description</label>--}}
{{--                                            <div class="col-sm-10">--}}
{{--                                                <textarea name="description" class="form-control" id="summernote"--}}
{{--                                                          placeholder="Experience" value="{{$profile->description}}"></textarea>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-2 col-form-label">Profile Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" id="inputSkills"
                                                       placeholder="Photo" name="image" value="{{$profile->image}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection
