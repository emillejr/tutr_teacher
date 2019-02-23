@extends('layouts.app')

@section('content')
<!-- Page Content -->
                <div class="content">
                    <div class="my-50 text-center">
                        <h2 class="font-w700 text-black mb-10">
                            <i class="fa fa-plus text-muted mr-5"></i> Add New Test
                        </h2>
                        <h3 class="h5 text-muted mb-0">
                            This is the first test you are adding to your test bank.
                        </h3>
                    </div>
                    <div class="block block-rounded block-fx-shadow">
                        <div class="block-content">
                            <form action="/tests" method="POST">
                            @csrf
                                <!-- Test Description -->
                                <h2 class="content-heading text-black">Test Description</h2>
                                <div class="row items-push">
                                    <div class="col-lg-3">
                                        <p class="text-muted">
                                            Let's first describe your test
                                        </p>
                                    </div>
                                    <div class="col-lg-7 offset-lg-1">
                                        <div class="form-group {{ $errors->has('title') ? 'is-invalid' : '' }}">

                                            <label for="title">Title</label>
                                            <input type="text" class="form-control form-control-lg" id="form-title" name="title" placeholder="eg Math Mid-Semester Exam" value="{{ old('title')}}">
                                            @if($errors->has('title'))
                                            <div class="invalid-feedback">{{$errors->first('title')}}</div>
                                            @endif

                                            <!-- Danger Alert -->
                                            <!-- <div class="alert alert-danger alert-dismissable" role="alert">
                                                <p class="mb-0">This is an error message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
                                            </div> -->
                                            <!-- END Danger Alert -->

                                        </div>
                                        <div class="form-group {{ $errors->has('description') ? 'is-invalid' : '' }}">
                                            <label for="description">Description</label>
                                            <textarea class="form-control form-control-lg" name="description" rows="4" placeholder="eg This is a mid-semester exam for the 3rd-grade students">{{ old('description') }}</textarea>
                                            @if($errors->has('description'))
                                            <div class="invalid-feedback">{{$errors->first('description')}}</div>
                                            @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('topic') ? 'is-invalid' : '' }}">
                                            <label for="topic">Topic</label>
                                            <select class="form-control form-control-lg" id="form-topic" name="topic">
                                                <option disabled selected value>-- Please select --</option>
                                                <option value="1" {{ old('topic') == 1 ? 'selected' : '' }}>Math</option>
                                                <option value="2" {{ old('topic') == 2 ? 'selected' : '' }}>History</option>
                                                <option value="3" {{ old('topic') == 3 ? 'selected' : '' }}>Physics</option>
                                                <option value="4" {{ old('topic') == 4 ? 'selected' : '' }}>Biology</option>
                                                <option value="5" {{ old('topic') == 5 ? 'selected' : '' }}>Chemistry</option>
                                                <option value="6" {{ old('topic') == 6 ? 'selected' : '' }}>English</option>
                                            </select>
                                            @if($errors->has('topic'))
                                            <div class="invalid-feedback">{{$errors->first('topic')}}</div>
                                            @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('target') ? 'is-invalid' : '' }}">
                                            <label for="target">Target Students</label>
                                            <select class="form-control form-control-lg" id="form-target" name="target">
                                                <option disabled selected value>-- Please select --</option>
                                                <option value="1" {{ old('target') == 1 ? 'selected' : '' }}>1st Grade</option>
                                                <option value="2" {{ old('target') == 2 ? 'selected' : '' }}>2nd Grade</option>
                                                <option value="3" {{ old('target') == 3 ? 'selected' : '' }}>3rd Grade</option>
                                                <option value="4" {{ old('target') == 4 ? 'selected' : '' }}>4th Grade</option>
                                                <option value="5" {{ old('target') == 5 ? 'selected' : '' }}>5th Grade</option>
                                                <option value="6" {{ old('target') == 6 ? 'selected' : '' }}>6th Grade</option>
                                            </select>
                                            @if($errors->has('target'))
                                            <div class="invalid-feedback">{{$errors->first('target')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- END Test Description -->

                                <!-- Questions Info -->
                                <h2 class="content-heading text-black">Questions Info</h2>
                                <div class="row items-push">
                                    <div class="col-lg-3">
                                        <p class="text-muted">
                                            Now set how the test would be
                                        </p>
                                    </div>
                                    <div class="col-lg-7 offset-lg-1">
                                        <div class="form-group {{ $errors->has('type') ? 'is-invalid' : '' }}">
                                            <label for="type">Question Type</label>
                                            <select class="form-control form-control-lg" id="form-type" name="type">
                                                <option disabled selected value>-- Please select --</option>
                                                <option value="1" {{ old('type') == 1 ? 'selected' : '' }}>Multiple Choices</option>
                                                <option value="2" {{ old('type') == 2 ? 'selected' : '' }}>Essays</option>
                                            </select>
                                            @if($errors->has('type'))
                                            <div class="invalid-feedback">{{$errors->first('type')}}</div>
                                            @endif
                                        </div>
                                        <div class="form-group row {{ $errors->has('quantity') ? 'is-invalid' : '' }}">
                                            <div class="col-lg-12">
                                                <label for="quantity">Quantity</label>
                                                <div class="input-group">
                                                    <input type="number" class="form-control" id="form-quantity" name="quantity" min="1" value="{{ old('quantity') }}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            Questions
                                                        </span>
                                                    </div>
                                                </div>
                                                @if($errors->has('quantity'))
                                                <div class="invalid-feedback">{{$errors->first('quantity')}}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row {{ $errors->has('duration') ? 'is-invalid' : '' }}">
                                            <div class="col-lg-12">
                                                <label for="duration">Duration</label>
                                                <div class="input-group">
                                                    <input type="number" class="form-control" id="form-duration" name="duration" min="1" value="{{ old('duration') }}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            Minutes
                                                        </span>
                                                    </div>
                                                </div>
                                                @if($errors->has('duration'))
                                                <div class="invalid-feedback">{{$errors->first('duration')}}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Questions Info -->

                                <!-- Form Submission -->
                                <div class="row items-push">
                                    <div class="col-lg-7 offset-lg-4">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-alt-success">
                                                <i class="fa fa-plus mr-5"></i>
                                                Save Draft & Continue
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row items-push">
                                    <div class="col-lg-7 offset-lg-4">
                                        @if($errors->any())
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </div>
                                </div>
                                <!-- END Form Submission -->
                            </form>
                        </div>
                    </div>
                </div>
<!-- END Page Content -->
@endsection
