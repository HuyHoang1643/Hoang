<!doctype html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>
  <div class="grid-container">
    <!-- Header -->
  <header class="header">
    <div class="header-left">
      <form action="/students">
    <input class="input" name="key" type="type" placeholder="Search..." />
        <button><i class="fas fa-search"></i></button> 
        </form>
    </div> 
    <div class="header-right">
    <i class="fas fa-bell"></i>
    <i class="fas fa-envelope"></i>
    <i class="fas fa-users"></i>
    </div>
  </header>
  <!-- End Header -->
 <!-- Sidebar -->
 <aside id="sidebar">
 <div class="sidebar-title">
    <p>Student Manager</p>
 </div>
 <ul class="sidebar-list">
 <a href="{{ asset('/dashboard') }}"><li class="sidebar-list-item">Dashboard</li></a>
<a href="{{ asset('/students') }}"><li class="sidebar-list-item">Student management</li></a>
<a href="{{ asset('/teachers') }}"><li class="sidebar-list-item">Teacher management</li></a>
<a href="{{ asset('/courses') }}"><li class="sidebar-list-item">Course management</li></a>
<a href="{{ asset('/grades') }}"><li class="sidebar-list-item">Grade management</li></a>
<a href="{{ asset('/departments') }}"><li class="sidebar-list-item">Department management</li></a>
 </ul>
 </aside>
 <!-- End Sidebar -->
 <!-- Main -->
 <div class="main-content">
    <main>
   @yield('main')
   </main>
   <!-- End Main -->
</div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>