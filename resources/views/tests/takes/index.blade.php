@extends('layouts.app')

@section('content')
<!-- Page Content -->

<!-- Courses -->
<div class="content">
    <!-- Available Tests -->
    <h2 class="content-heading">
        <i class="si si-star mr-5"></i> My Test Takes
    </h2>
    <div class="row row-deck items-push">
        @foreach($test_takes as $test_take)
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow block-rounded ribbon ribbon-bookmark ribbon-left ribbon-success text-center" href="/tests/takes/{{$test_take->id}}">
                <div class="ribbon-box">{{ $test_take->test->title }}</div>
                <div class="block-content block-content-full">
                    <div class="item item-circle bg-elegance text-elegance-lighter mx-auto my-20">
                        <i class="fa fa-briefcase"></i>
                    </div>
                    <div class="font-size-sm text-muted">
                        {{ $test_take->test->quantity }} questions
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-size-sm text-muted">{{ $test_take->student->name }} finished this {{$test_take->created_at->diffForHumans()}}</div>
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
