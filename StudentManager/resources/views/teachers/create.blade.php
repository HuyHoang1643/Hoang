@section('title', 'Teacher Create')
@section('main')
<!doctype html>
<html lang="en">
<head>
  <title>New Teacher</title>
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
    <form action="/teachers" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Image</label>
            <input class="form-control" type="file" placeholder="Input Image" name="image" id="image">
        </div>
        <div class="form-group">
            <label for="email">Name</label>
            <input class="form-control" type="text" placeholder="Input Name" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="phonenumber">Phone</label>
            <input class="form-control" type="text" placeholder="Input Phone" name="phonenumber" id="phonenumber">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" placeholder="Input Email" name="email" id="email" >
        </div>
        <label  class="form-label" for="courses">Courses</label>
    <select  class="form-select" multiple name="courses[]" id="courses">
        @foreach($courses as $course)
            <option value="{{$course->id}}">
              {{$course->name}}
            </option>
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
