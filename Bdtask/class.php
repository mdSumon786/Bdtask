<!DOCTYPE html>
<html lang="en">
<head>
  <title>User For</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <form>
    <h1>User details</h1>
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" id="usr">
    </div>
    <label for="">Gender</label>
        <label><input type="radio" name="gender">Male</label>
        <label><input type="radio" name="gender">Female</label>
        <label><input type="radio" name="gender" disabled>Other</label>
    <div class="form-group">
      <label >Age</label>
      <input type="number" class="form-control">
    </div>
    <div class="form-group">
        <label >Eduction</label>
        <input type="text" class="form-control">
      </div>
      <div class="form-group">
        <label >Designation</label>
        <input type="text" class="form-control">
      </div>
      <div class="form-group">
        <label >DOB</label>
        <input type="date" class="form-control">
      </div>
      <div class="button">
        <button type="submit" class="btn btn-primary ">Submit</button>
      </div>
  </form>
</div>
  <script>

  </script>
</body>
</html>