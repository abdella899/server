<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    
    



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="returnToHome">Website Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="creatRecipe">Creat New recipe<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="usersContacts">Users Contacts</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="creatRestorant">creatRestorant</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="returnToHome">Website</a>
      </li>
    </ul>
  </div>
</nav>

<br>

<div class="container">
<h2>Users Contacts ({{$counts}})</h2>
<br>




<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Details</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($contacts as $contact)
    <tr>
      <td>{{$contact->name}}</td>
      <td>{{$contact->email}}</td>
      <td><a href="detailsUsersContacts{{$contact->id}}" class="btn btn-sm btn-warning">Details</a></td>
      <td><a href="deleteUsersContacts{{$contact->id}}" class="btn btn-sm btn-danger">Delete</a></td>
    </tr>
  @endforeach
  </tbody>
</table>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>