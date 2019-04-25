<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  {{-- bootstrap css CDN --}}
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  {{-- bootstrap js CDN --}}
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <title> Admin Panel </title>
</head>
<body>
<div class="container">
  <!-- user list -->
  <div class="col-md-offset-0 col-md-13">
    <br>
    <div class="row">
      <center> <h1> <b> Users List </b> </h1> </center>
      <br>
    </div> 

    <!-- error message using laravel errors -->
    {{-- display success message --}}
    @if (Session::has('success'))
      <div class="alert alert-success">
        <strong>Success:</strong> {{ Session::get('success') }}
      </div>
    @endif

    {{-- display error message --}}
    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Error:</strong>
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="row"> 

      <form action="{{ route('admin.store') }}" method='POST'>
      {{ csrf_field() }}

        <div class="col-md-2">
          <input type="text" name='newUserName' class='form-control' placeholder="User Name">
        </div>

        <div class="col-md-2">
          <input type="text" name='newUserEmail' class='form-control' placeholder="Email">
        </div>

        <div class="col-md-2">
          <input type="text" name='newUserPassword' class='form-control' placeholder="Password">
        </div>

        <div class="col-md-2">
          <input type="text" name='newUserPhone' class='form-control'placeholder="Phone">
        </div>

        <div class="col-md-2">
          <input type="text" name='newUserAddress' class='form-control'placeholder="Address">
        </div>

        <div class="col-md-2">
          <input type="submit" class='btn btn-primary btn-block' value='Add User'>
        </div>

      </form>
    </div>

    {{-- display stored users --}}
    @if (count($storedUsers) > 0)
      <table class="table">
        <thead>
          <th>User #</th>
          <th>Name</th>
          <th>Email</th>
          <th>Password</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Edit</th>
          <th>Delete</th>
        </thead>

        <tbody>
          @foreach ($storedUsers as $storedUser)
            <tr>
              <th>{{ $storedUser->id }}</th>
              <td>{{ $storedUser->name }}</td>
              <td>{{ $storedUser->email }}</td>
              <td>{{ $storedUser->password }}</td>
              <td>{{ $storedUser->phone }}</td>
              <td>{{ $storedUser->address }}</td>
              <td>
                <a href="{{ route('admin.edit', ['users'=>$storedUser->id]) }}" class='btn btn-primary'> Edit </a>
              </td>
              <td>
                <form action="{{ route('admin.destroy', ['user'=>$storedUser->id]) }}" method='POST'>
                  {{ csrf_field() }}
                  <input type="hidden" name='_method' value='DELETE'>
                  <input type="submit" class='btn btn-danger' value='Delete'>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif

  </div>
</div>


</body>
</html>