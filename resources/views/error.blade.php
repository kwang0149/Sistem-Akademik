<!DOCTYPE html>
<html lang="en">
    <html lang="en">
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="description" content="">
          <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
          <meta name="generator" content="Hugo 0.88.1">
          <title>Error</title>
      
          {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      
      
          <!-- Bootstrap core CSS -->
      
          <!-- <style>
            .bd-placeholder-img {
              font-size: 1.125rem;
              text-anchor: middle;
              -webkit-user-select: none;
              -moz-user-select: none;
              user-select: none;
            }
      
            @media (min-width: 768px) {
              .bd-placeholder-img-lg {
                font-size: 3.5rem;
              }
            }
          </style> -->
      
      
          <!-- Custom styles for this template -->
          <link href="dashboard.css" rel="stylesheet">
        </head>
<body style="height:100%">
    <header class="navbar  sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-light" href="#">Siakad</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}
        <div class="navbar-nav">
          <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">
                    <span class='text-white mx-3'>Logout</span>
    
                </button>
              </form>
              </li>
        </div>
      </header>
      <div class="container">
        <div
          class="row align-items-center  text-dark text-center"
          style="min-height: 100vh">
          <div class="col-md-12">
            <h1>RESTRICTED</h1>
          </div>
        </div>
      </div>
      {{-- <div class="border d-flex aligns-items-center justify-content-center" style="height:100%" >
        <h1>RESTRICTED</h1>
   </div> --}}
    
</body>
</html>
