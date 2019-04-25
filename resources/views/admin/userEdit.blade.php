<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  {{-- bootstrap css CDN --}}
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  {{-- bootstrap js CDN --}}
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <title>Todo List App</title>
</head>
<body>
<div class="container">
  <div class="col-md-offset-2 col-md-8">
    <div class="row">
      <h1> Edit User </h1>
    </div>

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
      <form action="{{ route('admin.update', [$usernameUnderEdit->id]) }}" method='POST'>
      {{ csrf_field() }}
      <input type="hidden" name='_method' value='PUT'>

        <div class="form-group">
          <h4> <b> Username: </b> </h4>
          <input type="text" name='updatedUserName' class='form-control input-lg' value='{{ $usernameUnderEdit->name }}'>
        </div>

        <div class="form-group">
          <h4> <b> Email: </b> </h4>
          <input type="text" name='updatedEmail' class='form-control input-lg' value='{{ $usernameUnderEdit->email }}'>
        </div>

        <div class="form-group">
          <h4> <b> Password: </b> </h4>
          <input type="text" name='updatedPassword' class='form-control input-lg' value='{{ $usernameUnderEdit->password }}'>
        </div>

        <div class="form-group">
          <h4> <b> Phone: </b> </h4>
          <input type="text" name='updatedPhone' class='form-control input-lg' value='{{ $usernameUnderEdit->phone }}'>
        </div>

        <div class="form-group">
          <h4> <b> Address: </b> </h4>
          <input type="text" name='updatedAddress' class='form-control input-lg' value='{{ $usernameUnderEdit->address }}'>
        </div>

        <div class="form-group">
          <input type="submit" value='Save Changes' class='btn btn-success btn-lg'>
          <a href="{{ route('admin.index') }}" class='btn btn-danger btn-lg pull-right'>Go Back</a>
        </div>
      </form>
    </div>

 
  </div>
</div>
</body>
</html>