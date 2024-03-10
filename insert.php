<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Insert Test</title>
</head>
<body>

<div class="container">  
<h1>Insert Test</h1>  
<form  action="process.php" method="POST">
  <div class="form-group row">
    <label for="first_name" class="col-2 col-form-label"></label> 
    <div class="col-10">
      <input id="first_name" name="first_name" placeholder="First Name" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="last_name" class="col-2 col-form-label"></label> 
    <div class="col-10">
      <input id="last_name" name="last_name" placeholder="Last Name" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="age" class="col-2 col-form-label"></label> 
    <div class="col-10">
      <input id="age" name="age" placeholder="Age" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-10">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>  
</div>    
</body>
</html>