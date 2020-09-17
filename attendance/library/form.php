<div class="container-fluid">
          <div class="row justify-content-center custom-margin">
              <div class="col-md-4 col-sm-6">
                  <form action="submit.php" method="POST" class="shadow-lg p-4 text-white">
                  <div class="form-group">
                    <label for="email" class="font-weight-bold">Email address</label>
                    <input type="email" class="form-control" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" aria-describedby="emailHelp" placeholder="Enter email" required = "true">
                  </div>
                  <div class="form-group">
                    <label for="name" class="font-weight-bold">Name</label>
                    <input type="name" name="name" class="form-control" id="name" placeholder="Name" required = "true">
                  </div>
                   <div class="form-group">
                    <label for="roll" class="font-weight-bold">Roll No</label>
                    <input type="name" name="roll" class="form-control" id="roll" placeholder="Roll No" required = "true"> <?php if (isset($_GET['m1'])){
                                    echo $_GET['m1'];
                                    } ?>
                  </div>   
                  <!--<div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>-->
                   <button type="submit" name="submit" class="btn btn-primary btn-block mt-4 font-weight-bold">Submit</button>
                </form>
                  
              </div>
          </div>
          
        
      </div>