@extends('layouts.app')

@section('content')
<!-- Page Content -->

<!-- Courses -->
<div class="content">
    <!-- Available Tests -->
    <h2 class="content-heading">
        <a href="tests/create/" class="btn btn-sm btn-rounded btn-alt-secondary float-right">Make a New Test</a>
        <i class="si si-star mr-5"></i> Currently Available Tests
    </h2>
    <div class="row row-deck items-push">
        @foreach($tests as $test)
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow block-rounded ribbon ribbon-bookmark ribbon-left ribbon-success text-center" href="/tests/{{$test->id}}">
                <div class="ribbon-box">{{ $test->topic->name }}</div>
                <div class="block-content block-content-full">
                    <div class="font-w600">{{ $test->title }}</div>
                    <div class="item item-circle bg-elegance text-elegance-lighter mx-auto my-20">
                        <i class="fa fa-briefcase"></i>
                    </div>
                    <div class="font-w600">{{ $test->description }}</div>
                    
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-size-sm text-muted">{{ $test->quantity }} {{ $test->question_type->name }} &bull; {{ $test->duration }} minutes</div>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-size-sm text-muted">
                        (0 students have finished this)
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <!-- END Available Tests -->
</div>
<!-- END Courses -->

<!-- END Page Content -->
@endsection
