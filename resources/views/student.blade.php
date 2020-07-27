@extends('layouts.app')
@section('content')
  <div class="row">
      <div class="card col-7 " style="margin-right: 20px;margin-left: 40px">
          <br>
          <div class="row ">
              <br>
              <div class="col-sm-12 ">
                  <img src="https://cdn.pixabay.com/photo/2015/05/31/15/14/woman-792162_1280.jpg " style="width: 100%;height: 50%" alt="">
                  <center><h1 class="font-weight-bold">Students list</h1></center>
                  <div class="row">
                      <br>

                      <br>
                      <table class="table col-12 float-right">
                          <thead class="thead-dark">
                          <tr>

                              <th scope="col">First name</th>
                              <th scope="col">Last name</th>
                              <th scope="col">Age</th>
                              <th scope="col">Speciality</th>
                              <th scope="col">action</th>

                          </tr>
                          </thead>
                          <tbody>
                          @foreach($student as $student)
                              <tr>
                                  <th scope="row">{{$student->firstName}}</th>
                                  <td>{{$student->lastName}}</td>
                                  <td>{{$student->age}}</td>
                                  <td>{{$student->speciality}}</td>
                                  <td class="justify-content-between">

                                      <div class="row">
                                          <div class="pr-3">
                                              <form action="{{ route('student.show', $student->id)}}"  method="post">
                                                  @csrf
                                                  @method('GET')
                                                  <button class="btn btn-success " type="submit">Edit</button>
                                              </form>
                                          </div>
                                          <form action="{{ route('student.destroy', $student->id)}}" method="post">
                                              @csrf
                                              @method('DELETE')
                                              <button class="btn btn-danger " type="submit">Delete</button>
                                          </form>
                                      </div>
                                  </td>
                              </tr>
                          @endforeach
                          </tbody>
                      </table>

                  </div>

              </div>
          </div>
      </div>
      <div class="card  col-4 "style="margin-left: 20px;margin-right: 20px">
          <div class="row">
              <div class="col-sm-12">
                  <br>
                  <img src="https://cdn.pixabay.com/photo/2018/01/17/07/06/laptop-3087585_1280.jpg" style="width: 100%;height: 50%" alt="">
                  <center><h1 class="font-weight-bold">Add a student</h1></center>
                  <div>
                      @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div><br />
                      @endif
                      <form method="post" action="{{ route('student.store') }}">
                          @csrf
                          <div class="row">
                              <div class="form-group   offset-2 col-8">
                                  <label for="first_name">First Name:</label>
                                  <input required type="text" class="form-control" name="firstName"/>
                              </div>
                          </div>
                          <div class="row">
                              <div class="form-group  offset-2  col-8">
                                  <label for="last_name">Last Name:</label>
                                  <input required type="text" class="form-control" name="lastName"/>
                              </div>
                          </div>

                          <div class="row">
                              <div class="form-group  offset-2  col-8">
                                  <label for="email">Age:</label>
                                  <input required type="number" class="form-control" name="age"/>
                              </div>
                          </div>
                          <div class="row">
                              <div class="form-group  offset-2  col-8">
                                  <label for="city">Specility:</label>
                                  <input required type="text" class="form-control" name="speciality"/>
                              </div>
                          </div>



                      <center>    <button type="submit"  class="   btn btn-primary">Add Student</button></center>
                      </form>
                  </div>
                  <br>
              </div>
          </div>
      </div>
  </div>
@endsection
