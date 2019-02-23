@extends('layouts.app')

@section('content')
  <!-- Page Content -->
                <div class="content">
                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Test Info -->
                            <div class="block block-rounded">
                                <div class="block-header block-header-default text-center">
                                    <h3 class="block-title">
                                        <i class="fa fa-fw fa-info"></i>
                                        {{ $test->title }}
                                    </h3>
                                </div>
                                <div class="block-content">
                                    <div class="text-center">
                                        <p>{{ $test->description }}</p>
                                    </div>
                                    <table class="table table-borderless table-striped">
                                        <tbody>
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
                                                    <i class="fa fa-fw fa-calendar mr-10"></i> Posted: <b>{{ $test->created_at->diffForHumans() }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="fa fa-fw fa-tags mr-10"></i>
                                                    <a class="badge badge-primary" href="javascript:void(0)">{{ $test->topic->name }}</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="block-content row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded mb-10">Edit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Test Info -->
                        </div>
                        <div class="col-xl-8">
                            <form action="/tests/{{$test->id}}/create" method="POST">
                            @csrf
                            
                            <!-- Questions -->
                            @for ($i = 1; $i <= $test->quantity ; $i++)
                            <div class="block block-rounded">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Question <b>#{{$i}}</b> of {{$test->quantity}}</h3>
                                </div>
                                <div class="block-content">
                                    <div class="form-group row">
                                        <label class="col-12" for="input_sentence_{{$i}}">Sentence</label>
                                        <div class="col-12">
                                            <textarea class="js-simplemde" name="input_sentence_{{$i}}" placeholder="Type your question and options here.."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12" for="input_sentence_{{$i}}">Key</label>
                                        <div class="col-12">
                                            <select class="form-control" name="input_key_{{$i}}">
                                                <option disabled selected value>-- Select Key --</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endfor
                            <!-- END Questions -->

                            <!-- Submit -->
                            <div class="block block-rounded">
                                <div class="block-content row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded mb-10">Save as Draft</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-success mb-10">Save & Publish</button>
                                    </div>
                                </div>
                            </div>
                            <!-- END Submit -->
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
@endsection

@section('script_files')

<script src="{{asset('js/plugins/simplemde/simplemde.min.js')}}"></script>
@endsection

@section('scripts')
<script>jQuery(function(){ Codebase.helpers(['simplemde']); });</script>
@endsection

@section('style_files')
<link rel="stylesheet" href="{{asset('js/plugins/simplemde/simplemde.min.css')}}">
@endsection