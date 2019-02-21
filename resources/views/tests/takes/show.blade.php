@extends('layouts.app')

@section('content')
  <!-- Page Content -->
                <div class="content">
                    <nav class="breadcrumb bg-white push">
                        <a class="breadcrumb-item" href="/tests">Tests</a>
                        <a class="breadcrumb-item" href="/tests/takes">Takes</a>
                        <span class="breadcrumb-item active">{{ $test_take->id}}</span>
                    </nav>
                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Test Details -->
                            <a class="block block-rounded block-link-shadow text-center" href="#">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">
                                        <i class="fa fa-fw fa-graduation-cap"></i>
                                        {{ $test_take->test->title }}
                                    </h3>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="push">
                                        <img class="img-avatar" src="assets/media/avatars/avatar10.jpg" alt="">
                                    </div>
                                    <div class="font-w600 mb-5">{{ $test_take->student->name }} took this test {{ $test_take->created_at->diffForHumans() }}</div>
                                    <!-- <div class="text-muted">SD 005</div> -->
                                </div>
                            </a>
                            <!-- END Test Details -->
                            <!-- Test Take Score -->
                            <div class="block block-rounded block-link-shadow text-center">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">
                                        <i class="fa fa-fw fa-graduation-cap"></i>
                                        Score
                                    </h3>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="push">
                                        <img class="img-avatar" src="assets/media/avatars/avatar10.jpg" alt="">
                                    </div>
                                    <div class="font-w600 mb-5">Lorem ipsum</div>
                                    <!-- <div class="text-muted">SD 005</div> -->
                                </div>
                            </div>
                            <!-- END Test Take Score -->
                        </div>
                        <div class="col-xl-8">
                            <!-- Answers -->
                            <div class="block block-rounded">
                                <div class="block-header block-header-default text-center">
                                    <h3 class="block-title">
                                        <i class="fa fa-fw fa-info"></i>
                                        {{ $test_take->student->name }}'s Answers
                                    </h3>
                                </div>
                                <div class="block-content">
                                    <table class="table table-borderless table-striped">
                                        <tbody>
                                            @foreach($test_take->answers as $answer)
                                            <tr>
                                                <td style="width:20px;">
                                                    {{$answer->number}}.
                                                </td>
                                                <td>
                                                    {{$answer->answer}}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END Answers -->
                            <!-- Questions -->
                            <div class="block block-rounded">
                                <div class="block-header block-header-default text-center">
                                    <h3 class="block-title">
                                        <i class="fa fa-fw fa-info"></i>
                                        Questions
                                    </h3>
                                </div>
                                <div class="block-content">
                                    <table class="table table-borderless table-striped">
                                        <tbody>
                                            @foreach($test_take->test->questions as $question)
                                            <tr>
                                                <td style="width:20px;">
                                                    {{$question->number}}.
                                                </td>
                                                <td>
                                                    {!!$question->sentence!!}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:20px;">
                                                </td>
                                                <td>
                                                    {!!$question->options!!}

                                                    Right Answer: <b>{{$question->key}}</b>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END Questions -->
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
@endsection
