<div class="container">
<h1 class="hading">Ask a Question</h1>

<form action="./server/requests.php" method="post">


  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Enter your questions!">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="descriptions" class="form-label">Descriptions</label>
    <textarea name="descriptions" class="form-control" id="descriptions" placeholder="Enter the description of your question!"></textarea>
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="category" class="form-label">Category</label>
   <?php include('category.php'); ?>
  </div>


  <div class="col-6 offset-sm-3 margin-bottom-15">
  <button type="submit" name="ask" class="btn btn-primary">Ask Question</button>
  </div>

</form>
</div>