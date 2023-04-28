<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center text-danger">Add Student</h1>
                    </div>

                    <div class="card-body">
                        <form action="{{route('student.add')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Student Rollno</label>
                                <input type="text" name="srollno" id="" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Student Name</label>
                                <input type="text" name="sname" id="" class="form-control">
                            </div>

                            <input type="submit" value="AddStudent" class="form-control btn-success">
                        </form>
                    </div>
                </div>
            </div>


           
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="text-center text-danger">Display Student</h1>
                            </div>

                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                     <tr>
                                         <th>Rollno</th>
                                         <th>Student Name</th>           
                                         <th>Actions</th>
                                     </tr>
                                    </thead>
                                    @foreach($data as $data)
                                     <tbody>
                                         <tr>
                                             <td>{{$data->roll_no}}</td>
                                             <td>{{$data->sname}}</td>
                                             <td>
                                                <a href="{{route('student.edit',$data->id)}}" class="btn btn-sm btn-info">Update</a>
                                                <a href="{{route('student.delete',$data->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                             </td>
                                         </tr>
                                     </tbody>
                                     @endforeach
                                 </table>
                            </div>
                        </div>
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>