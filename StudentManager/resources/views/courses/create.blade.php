@section('title', 'Teacher Create')
@section('main')
<!doctype html>
<html lang="en">

<head>
  <title>New Course</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <form action="/courses" method="post">
        @csrf
        <div class="form-group">
            <label for="id">ID</label>
            <input class="form-control" type="text" placeholder="Input Id" name="id" id="id">
        </div>
        <div class="form-group">
            <label for="email">Name</label>
            <input class="form-control" type="text" placeholder="Input Course Name" name="name" id="name">
        </div>
        <label for="department_id">Department</label>
    <select name="department_id" id="department_id">
        @foreach($department as $department)
            <option value="{{$department->id}}">{{$department->name}}</option>
        @endforeach
    </select>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
