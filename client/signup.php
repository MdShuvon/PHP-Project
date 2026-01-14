<div class = "container">
    <h1 class="hading">Sign Up</h1>
    <form action="./server/requests.php" method="POST">
        <div class="col-6 offset-md-3 margin-bottom-15">
              <label for="username" class="form-label">User Name</label>
              <input type="text" name="username" class="form-control" id="username" placeholder="Enter your user name">
        </div>
        <div class="col-6 offset-md-3 margin-bottom-15">
              <label for="email" class="form-label">User Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="col-6 offset-md-3 margin-bottom-15">
              <label for="password" class="form-label">User Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
        </div>
        <div class="col-6 offset-md-3 margin-bottom-15">
              <label for="address" class="form-label">User Address</label>
              <input type="text" name="address" class="form-control" id="address" placeholder="Enter your address">
        </div>
        <div class="col-6 offset-md-3 margin-bottom-15">
        <button type="submit" name="signup" class="btn btn-primary mt-3">Sign Up</button>
        </div>
    </form>
</div>