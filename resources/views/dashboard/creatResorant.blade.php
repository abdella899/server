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
<h2>Add Resturant ({{$count}})</h2>
<br>

    <form method="get" action="storeRestorant">
    <div class="form-group">
        <label for="recipe title">Resturant image link</label>
        <input type="text" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Resturant image link" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Resturant Name</label>
        <input type="text" name="name"class="form-control" id="exampleInputPassword1" placeholder="Resturant Name" required>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Resturant Description</label>
      <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="6" placeholder="Resturant Description" required></textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Restaurant times</label>
        <input type="text" name="time" class="form-control" id="exampleInputPassword1" placeholder="Restaurant times" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">The location of the restaurant</label>
        <input type="text" name="location" class="form-control" id="exampleInputPassword1" placeholder="Restaurant times" required>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">The State of the restaurant</label>
      <select class="form-control" name="state" id="exampleFormControlSelect1" required>
        <option value="Alabama">Alabama</option>
        <option value="Alaska">Alaska</option>
        <option value="Arizona">Arizona</option>
        <option value="Arkansas">Arkansas</option>
        <option value="California">California</option>
        <option value="Colorado">Colorado</option>
        <option value="Connecticut">Connecticut</option>
        <option value="Delaware">Delaware</option>
        <option value="Florida">Florida</option>
        <option value="Georgia">Georgia</option>
        <option value="Hawaii">Hawaii</option>
        <option value="Idaho">Idaho</option>
        <option value="Illinois">Illinois</option>
        <option value="Indiana">Indiana</option>
        <option value="Iowa">Iowa</option>
        <option value="Kansas">Kansas</option>
        <option value="Kentucky">Kentucky</option>
        <option value="Louisiana">Louisiana</option>
        <option value="Maine">Maine</option>
        <option value="Maryland">Maryland</option>
        <option value="Massachusetts">Massachusetts</option>
        <option value="Michigan">Michigan</option>
        <option value="Minnesota">Minnesota</option>
        <option value="Mississippi">Mississippi</option>
        <option value="Missouri">Missouri</option>
        <option value="Montana">Montana</option>
        <option value="Nebraska">Nebraska</option>
        <option value="Nevada">Nevada</option>
        <option value="New Hampshire">New Hampshire</option>
        <option value="New Jersey">New Jersey</option>
        <option value="New Mexico">New Mexico</option>
        <option value="New York">New York</option>
        <option value="North Carolina">North Carolina</option>
        <option value="North Dakota">North Dakota</option>
        <option value="Ohio">Ohio</option>
        <option value="Oklahoma">Oklahoma</option>
        <option value="Oregon">Oregon</option>
        <option value="Pennsylvania">Pennsylvania</option>
        <option value="Rhode Island">Rhode Island</option>
        <option value="South Carolina">South Carolina</option>
        <option value="South Dakota">South Dakota</option>
        <option value="Tennessee">Tennessee</option>
        <option value="Texas">Texas</option>
        <option value="Utah">Utah</option>
        <option value="Vermont">Vermont</option>
        <option value="Virginia">Virginia</option>
        <option value="Washington">Washington</option>
        <option value="West Virginia">West Virginia</option>
        <option value="Wisconsin">Wisconsin</option>
        <option value="Wyoming">Wyoming</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">You rate the restaurant</label>
      <select class="form-control" name="rate" id="exampleFormControlSelect1" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary btn-sm btn-block">Save</button>
    </form>


<br>
<br>
<br>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Details</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($restorants as $restorant)
    <tr>
      <td><img src="{{$restorant->image}}" alt="" width="200" height="160"></td>
      <td><br><br><br>{{$restorant->name}}</td>
      <td><br><br><br><a href="detailsRestorant{{$restorant->id}}" class="btn btn-sm btn-warning">Details</a></td>
      <td><br><br><br><a href="deleteRestorant{{$restorant->id}}" class="btn btn-sm btn-danger">Delete</a></td>
    </tr>
    <tr>
  @endforeach
  </tbody>
</table>



</div>


<br>
<br>
<br>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>