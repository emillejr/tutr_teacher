@extends('layouts.app')

@section('content')
  <!-- Page Content -->
                <!-- User Info -->
                <div class="bg-image bg-image-bottom" style="background-image: url('assets/media/photos/photo13@2x.jpg');">
                    <div class="bg-primary-dark-op py-30">
                        <div class="content content-full text-center">
                            <!-- Avatar -->
                            <div class="mb-15">
                                <a class="img-link" href="be_pages_generic_profile.html">
                                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="assets/media/avatars/avatar15.jpg" alt="">
                                </a>
                            </div>
                            <!-- END Avatar -->

                            <!-- Personal -->
                            <h1 class="h3 text-white font-w700 mb-10">{{$profile->first_name}} {{$profile->last_name}}</h1>
                            <h2 class="h5 text-white-op">
                                Teacher <a class="text-primary-light" href="javascript:void(0)">{{Auth::user()->institution->name}}</a>
                            </h2>
                            <!-- END Personal -->
                        </div>
                    </div>
                </div>
                <!-- END User Info -->

                <div class="content">
                    <nav class="breadcrumb bg-white push">
                        <a class="breadcrumb-item" href="/">Home</a>
                        <span class="breadcrumb-item active">Profile</span>
                    </nav>
                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Teacher -->
                            <div class="block block-roundedtext-center">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">
                                        <i class="fa fa-fw fa-graduation-cap"></i>
                                        My Account
                                    </h3>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="push">
                                        <img class="img-avatar" src="assets/media/avatars/avatar10.jpg" alt="">
                                    </div>
                                    <div class="font-w600 mb-5">{{ Auth::user()->email }}</div>
                                    <!-- <div class="text-muted">SD 005</div> -->
                                </div>
                            </div>
                            <!-- END Teacher -->
                        </div>
                        <div class="col-xl-8">
                            <!-- Test Info -->
                            <div class="block block-rounded">
                                <div class="block-header block-header-default text-center">
                                    <h3 class="block-title">
                                        <i class="fa fa-fw fa-info"></i>
                                        My Profile
                                    </h3>
                                </div>
                                <div class="block-content">
                                    <table class="table table-borderless table-striped">
                                        <tbody>
                                            <tr>
                                                <td class="text-center">
                                                    <img class="img-avatar img-avatar128" src="{{ asset('media/avatars/avatar0.jpg') }}" alt="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    First Name : <b>{{$profile->first_name}}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Last Name : <b>{{$profile->last_name ?: "-"}}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Gender : <b>{{ $profile->gender ?: "-"}}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Phone : <b>{{ $profile->phone ?: "-"}}</b>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END Test Info -->
                            <!-- Take Test -->
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <a class="btn btn-block btn-hero btn-noborder btn-rounded btn-success mb-10" href="/profile/edit">Edit Profile</a>
                                </div>
                            </div>
                            <!-- END Take Test -->
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
@endsection
