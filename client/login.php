<div class="container">
<h1 class="hading">Login </h1>

<form action="./server/requests.php" method="post">


  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="email" class="form-label">User Email</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="enter user email">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="password" class="form-label">User Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="enter user password">
  </div>
  <div class="col-6 offset-sm-3 margin-bottom-15">
  <button type="submit" name="login" class="btn btn-primary">Login</button>
  </div>

</form>
</div>