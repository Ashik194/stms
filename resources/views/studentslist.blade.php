<div class="card">
    <img src="https://cdn.pixabay.com/photo/2014/03/12/18/45/boys-286245_960_720.jpg" style="height:200px;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Student Management System</h5>
      <p class="card-text">Some quick example text to build on the card title and make....</p>
      <table class="table table-stritped able-hover table-head">
        <thead class="thead-light">
            <tr>
                <th class="col">CNE</th>
                <th class="col">First name</th>
                <th class="col">Last Name</th>
                <th class="col">Age</th>
                <th class="col">Speciality</th>
                <th class="col">Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $students as $student)
            <tr>
                <td>{{ $student->cne }}</td>
                <td>{{ $student->firstName }}</td>
                <td>{{ $student->lastName }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->speciality }}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-info">Show</a>
                    <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
  </div>






