@extends('layouts.app')
@section('content')
    <div class="card col-6 offset-3">
        <div class="card-body   ">
            <form method="POST" action="{{route('student.update',$student->id)}}">
                @method('PATCH')
                @csrf
               <center> <h3 class="font-weight-bold "> Student Information</h3></center>
                <br>
                <div class="row">

                    <div class="col">
                        <h4>First name</h4>
                        <input type="text" name="firstName" class="form-control" value="{{$student->firstName}}">
                    </div>
                    <div class="col">
                        <h4>Last name</h4>
                        <input type="text" name="lastName" class="form-control" value=" {{$student->lastName}}">
                    </div>
                </div>
                <br>
                <div class="row">

                    <div class="col">
                        <h4>Age</h4>
                        <input type="text" name="age" class="form-control" value=" {{$student->age}}">
                    </div>

                </div>
                <br>
                <div class="row">

                    <div class="col">
                        <h4>Specialty</h4>
                        <input type="text" name="speciality" class="form-control" value=" {{$student->speciality}}">
                    </div>

                </div>
                <br>
                <button type="submit" class="btn btn-success col-sm-3">Edit</button>

            </form>

        </div>
    </div>

@endsection
