@extends('layouts.app')

@section('content')
  <!-- Page Content -->
                <div class="content">
                    <nav class="breadcrumb bg-white push">
                        <a class="breadcrumb-item" href="/tests">Tests</a>
                        <span class="breadcrumb-item active">{{ $test->title}}</span>
                    </nav>
                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Teacher -->
                            <a class="block block-rounded block-link-shadow text-center" href="teacher/{{ $test->teacher->id }}">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">
                                        <i class="fa fa-fw fa-graduation-cap"></i>
                                        Teacher
                                    </h3>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="push">
                                        <img class="img-avatar" src="{{asset('media/avatars/avatar' . $test->teacher->id . '.jpg')}}" alt="">
                                    </div>
                                    <div class="font-w600 mb-5">{{ $test->teacher->name_and_title }}</div>
                                    <!-- <div class="text-muted">SD 005</div> -->
                                </div>
                            </a>
                            <!-- END Teacher -->
                            <!-- Students -->
                            <div class="block block-rounded block-link-shadow text-center">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">
                                        <i class="fa fa-fw fa-users"></i>
                                        Eligible Students
                                    </h3>
                                </div>
                                <div class="block-content block-content-full">
                                    @foreach($students as $student)
                                    <div class="font-w600 mb-5">{{ $student->name }}</div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- END Students -->
                        </div>
                        <div class="col-xl-8">
                            <!-- Test Info -->
                            <div class="block block-rounded">
                                <div class="block-header block-header-default text-center">
                                    <h3 class="block-title">
                                        <i class="fa fa-fw fa-info"></i>
                                        About
                                    </h3>
                                </div>
                                <div class="block-content">
                                    <div class="text-center">
                                        <h3>{{ $test->title }}</h3>
                                        <p>{{ $test->description }}</p>
                                    </div>
                                    <table class="table table-borderless table-striped">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <i class="fa fa-fw fa-tags mr-10"></i>Subject: <b>{{ $test->topic->name }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="fa fa-fw fa-tags mr-10"></i>For: <b>{{ $test->grade_target }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="fa fa-fw fa-users mr-10"></i> <b>{{count($test->takes)}}</b> Takers
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="fa fa-fw fa-puzzle-piece mr-10"></i> Format: <b>{{$test->question_type->name}}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="fa fa-fw fa-list-ol mr-10"></i> Questions: <b>{{ $test->quantity }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="fa fa-fw fa-clock-o mr-10"></i> Test Duration: <b>{{ $test->duration }} minutes</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="fa fa-fw fa-calendar mr-10"></i> Posted: <b>{{ $test->created_at->diffForHumans() ?: '-' }}</b>
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
                                    <a class="btn btn-block btn-hero btn-noborder btn-rounded btn-success mb-10" href="/tests/{{$test->id}}/take">Take this Test</a>
                                </div>
                            </div>
                            <!-- END Take Test -->
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
@endsection
