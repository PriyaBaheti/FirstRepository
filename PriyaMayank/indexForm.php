<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
<div class="container" style="display:flex;flex-direction:row;flex-wrap:wrap;
justify-content:center;border:3px dashed darkblue;border-radius:8px;padding:1em;margin:2em auto;">

 
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">DOB</th>
    </tr>
  </thead>
  <tbody>
   
    <?php
    include("DBSelect.php");
    if($result->num_rows > 0)
    {
        while($row=$result->fetch_assoc())
        { 
            ?>
             <tr>
            <td><?php echo  $row['id'] ?></td>
            <td><?php echo  $row['name'] ?></td>
            <td><?php echo  $row['dob'] ?></td>
        </tr>
            <?php
        }
        
    }
     ?>
    
<tr><td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertid" >Insert Record </button></td>
<td><button type="button" class="btn btn-secondary"  data-toggle="modal" data-target="#deleteid" >Delete</button></td>
<td><button type="button" class="btn btn-success" >Update </button></td><tr>
</tbody>
</table>
</div>
<div class="modal" tabindex="-1" role="dialog" id="insertid">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Insert Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="DbInsert.php" method="POST">
    <div class="row">
    <div class="col">
    
      <input type="text" class="form-control" name="fname" placeholder="Name">
    </div>
    <div class="col">
      <input type="date" class="form-control" name="dob" placeholder="DOB">
    </div>
  </div>
  <div class="modal-footer">
  <input type="submit"class="btn btn-primary" value="Add"/> 
  </div>
</form>
      </div>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="deleteid">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Insert Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="DbDelete.php" method="POST">
    <div class="row">
    <div class="col">
    
      <input type="text" class="form-control" name="fid" placeholder="ID">
    </div>
  </div>
  <div class="modal-footer">
  <input type="submit"class="btn btn-primary" value="Delete"/> 
  </div>
</form>
      </div>
    </div>
  </div>
</div>
</body>
</html>

