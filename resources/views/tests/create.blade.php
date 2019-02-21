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
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control form-control-lg" id="form-title" name="title" placeholder="eg Math Mid-Semester Exam">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control form-control-lg" id="form-description" name="description" rows="8" placeholder="eg This is a mid-semester exam for the 3rd-grade students"></textarea>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-8">
                                                <label for="topic">Topic</label>
                                                <select class="form-control form-control-lg" id="form-topic" name="topic">
                                                    <option value="0">Please select</option>
                                                    <option value="1">Math</option>
                                                    <option value="2">History</option>
                                                    <option value="3">Physics</option>
                                                    <option value="4">Biology</option>
                                                    <option value="5">Chemistry</option>
                                                    <option value="6">English</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-8">
                                                <label for="target">Target Students</label>
                                                <select class="form-control form-control-lg" id="form-target" name="target">
                                                    <option value="0">Please select</option>
                                                    <option value="1">1st Grade</option>
                                                    <option value="2">2nd Grade</option>
                                                    <option value="3">3rd Grade</option>
                                                    <option value="4">4th Grade</option>
                                                    <option value="5">5th Grade</option>
                                                    <option value="6">6th Grade</option>
                                                </select>
                                            </div>
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
                                        <div class="form-group">
                                            <label for="type">Question Type</label>
                                            <select class="form-control form-control-lg" id="form-type" name="type">
                                                <option value="0">Please select</option>
                                                <option value="1">Multiple Choices</option>
                                                <option value="2">Essays</option>
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label for="quantity">Quantity</label>
                                                <div class="input-group">
                                                    <input type="number" class="form-control" id="form-quantity" name="quantity">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            Questions
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label for="duration">Duration</label>
                                                <div class="input-group">
                                                    <input type="number" class="form-control" id="form-duration" name="duration">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            Minutes
                                                        </span>
                                                    </div>
                                                </div>
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
                                <!-- END Form Submission -->
                            </form>
                        </div>
                    </div>
                </div>
<!-- END Page Content -->
@endsection
