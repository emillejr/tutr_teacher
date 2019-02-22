@extends('layouts.app')

@section('content')
  <!-- Page Content -->
                <div class="content">
                    <div class="progress push" style="height: 12px;">
                        <div id="progress-time-bar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Progress -->
                            <div class="block block-rounded text-center">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">
                                        0 / {{ $test->quantity }}
                                    </h3>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="progress push">
                                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <span class="progress-bar-label">0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Progress -->
                            <div id="start-container" class="block block-rounded">
                                <div class="block-content">
                                    <button id="btn-start-timer" onclick="startTimer()" class="btn btn-block btn-hero btn-noborder btn-rounded btn-success mb-10">Start</button>
                                    <div class="text-center">
                                        <p><span>00:00</span> / {{ $test->duration }}:00</p>
                                    </div>
                                </div>
                            </div>
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
                                        <p>{{ $test->description }}</p>
                                    </div>
                                    <table class="table table-borderless table-striped">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <i class="fa fa-fw fa-users mr-10"></i> {{count($test->takes)}} Takers
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
                                                    <i class="fa fa-fw fa-calendar mr-10"></i> Posted: <b>1 week ago</b>
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
                                </div>
                            </div>
                            <!-- END Test Info -->
                        </div>
                        <div class="col-xl-8">
                            <form action="/tests/{{$test->id}}/take" method="POST">
                            @csrf
                            
                            <!-- Questions -->
                            @foreach ($questions as $question)
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <div>
                                        <p>{{$question->number}}. </p>{!!$question->sentence!!}
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="answer_{{$question->number}}">Your answer:</label>
                                            <select class="form-control select-answer" name="answer_{{$question->number}}" id="">
                                                <option disabled selected value> -- select answer -- </option>
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
                            @endforeach
                            <!-- END Questions -->
                            <!-- End Test -->
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="student_id">Submit as: (only for demonstration purpose)</label>
                                            <select class="form-control select-answer" name="student_id">
                                                <option disabled selected value> -- select student -- </option>
                                                @foreach($students as $student)
                                                <option value="{{$student->id}}">{{$student->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-success mb-10">Finish</button>
                                </div>
                            </div>
                            </form>
                            <!-- END End Test -->
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
@endsection

@section('scripts')
<script>
function startTimer() {
  var elem = document.getElementById("progress-time-bar");
  this.innerHTML = "Finish";
  document.getElementById("btn-start-timer").remove();
  var width = 1;
  var id = setInterval(frame, {{$test->duration}}*60*10);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
    }
  }
}
</script>
@endsection
