<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col">
        <label for="FirstName" class="form-label">First Name</label>
        <input type="text" class="form-control" aria-label="First Name">
    </div>
    <div class="col">
        <label for="LastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" aria-label="Last Name">
    </div>
    <div class="col">
        <label for="Firstname" class="form-label">Email</label>
        <input type="text" class="form-control" aria-label="First name">
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col">
        <label for="Gender" class="form-label">Gender</label>
        <select class="form-select" aria-label="Default select example">
    <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
    </div>
    <div class="col">
        <label for="Birthdate" class="form-label">Birthdate</label>
        <input type="date" class="form-control" aria-label="Birthdate">
    </div>
    <div class="col">
        <label for="Address" class="form-label">Address</label>
        <input type="text" class="form-control" aria-label="Address">
    </div>
  </div>
</div>

<div class="container d-flex justify-content-end mt-2 mb-2">
    <button type="btn" class="btn btn-primary">Add</button>
</div>

<div class="container">
    <table class="table table-success table-dark">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          <th scope="col">Birthdate</th>
          <th scope="col">Address</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>Male</td>
          <td>1/1/2000</td>
          <td>Cebu City</td>
          <td>
          <button type="button" class="btn btn-warning">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Kyla Jade</td>
          <td>Agua</td>
          <td>@aguakylajade</td>
          <td>Female</td>
          <td>9/5/2004</td>
          <td>Secret</td>
          <td>
          <button type="button" class="btn btn-warning">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>