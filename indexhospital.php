<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:rgba(222, 230, 115, 0.555)">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Rajagiri</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="file:///C:/xampp/htdocs/tril/index.html#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="file:///C:/xampp/htdocs/tril/indexhospital.html">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <table class="table">
        <h1><b><center>
            Hospital Details</center></b>
        </h1>
        <tr>
            <td>Patient Name</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" class="form-control">
            </td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>EMail ID</td>
            <td><input type="email" class="form-control"></td>
        </tr>
        <tr>
            <td>Pin Code</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Place</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Visited Doctor</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Symptoms</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Disease Digagnoysed</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Emergency Phone Number</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn btn-secondary">Submit</button></td>
        </tr>
    </table>
</body>
</html>