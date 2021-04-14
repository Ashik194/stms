<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Student Management System</title>
  </head>
  <body>

    @include('navbar')

    @if($layout == 'index')
        <div class="containter-fluid">
            <div class="row">
                <section class="col">
                    @include("studentslist")
                </section>
                <section class="col"></section>
            </div>
        </div>
    @elseif($layout == 'create')
        <div class="containter-fluid mt-4">
            <div class="row">
                <section class="col-sm-7">
                    @include("studentslist")
                </section>


                <section class="col-sm-5">
                    <div class="card">
                        <img src="https://cdn.pixabay.com/photo/2015/08/05/13/55/children-876543_960_720.jpg" style="height:200px;" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Student Management System</h5>
                          <p class="card-text">Some quick example text to build on the card title and make....</p>
                          <form action="{{ url('/store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                              <label>CNE</label>
                              <input name="cne" type="text" class="form-control" placeholder="Enter CNE">
                            </div>
                            <div class="mb-3">
                                <label>First Name</label>
                                <input name="firstName" type="text" class="form-control" placeholder="Enter your First Name">
                              </div>
                              <div class="mb-3">
                                <label>Last Name</label>
                                <input name="lastName" type="text" class="form-control" placeholder="Enter your Last Name">
                              </div>
                              <div class="mb-3">
                                <label>Age</label>
                                <input name="age" type="text" class="form-control" placeholder="Enter your Age">
                              </div>
                              <div class="mb-3">
                                <label>Speciality</label>
                                <input name="speciality" type="text" class="form-control" placeholder="Enter your Speciality">
                              </div>
                            <input type="submit" class="btn btn-info" value="Save"/>
                            <input type="reset" class="btn btn-warning" value="Reset"/>
                          </form>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    @elseif($layout == 'show')
        <div class="containter-fluid">
            <div class="row">
                <section class="col">
                    @include("studentslist")
                </section>
                <section class="col"></section>
            </div>
        </div>
    @elseif($layout == 'edit')
        <div class="containter-fluid">
            <div class="row">
                <section class="col">
                    @include("studentslist")
                </section>
                <section class="col-sm-5">
                    <div class="card">
                        <img src="https://cdn.pixabay.com/photo/2015/08/05/13/55/children-876543_960_720.jpg" style="height:200px;" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Student Management System</h5>
                          <p class="card-text">Some quick example text to build on the card title and make....</p>
                        <form action="{{ url('/update/'.$student->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                            <label>CNE</label>
                            <input name="cne" type="text" class="form-control" value="{{ $student->cne }}" placeholder="Enter CNE">
                            </div>
                            <div class="mb-3">
                                <label>First Name</label>
                                <input name="firstName" type="text" class="form-control" value="{{ $student->firstName }}" placeholder="Enter your First Name">
                            </div>
                            <div class="mb-3">
                                <label>Last Name</label>
                                <input name="lastName" type="text" class="form-control" value="{{ $student->lastName }}" placeholder="Enter your Last Name">
                            </div>
                            <div class="mb-3">
                                <label>Age</label>
                                <input name="age" type="text" class="form-control" value="{{ $student->age }}" placeholder="Enter your Age">
                            </div>
                            <div class="mb-3">
                                <label>Speciality</label>
                                <input name="speciality" type="text" class="form-control" value="{{ $student->speciality }}" placeholder="Enter your Speciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Update"/>
                            <input type="reset" class="btn btn-warning" value="Reset"/>
                        </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    @endif






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
