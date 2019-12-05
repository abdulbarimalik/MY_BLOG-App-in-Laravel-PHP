<!-- navbar-expand-md navbar-dark bg-dark -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">
     <div class="navbar-header">      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index">{{config('app.name', 'LSApp')}}</a>
      </div> 
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index">Home</a>
             <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
             -->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services">Services</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="posts">Blog</a>
            </li>
          </ul>  
          <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="posts/create">Create Post</a>
              </li>
          </ul>
        </div> <!-- /.nav-collapse -->
  </div>
</nav>
<br> 
