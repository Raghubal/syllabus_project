<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syllabus</title>


    <!--Bootstrap css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="assests/css/style.css">

     <!-- ====== Fontawesome CDN Link ====== -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>


</head>
<body>





    <!---Existing code-->
    <div class="container">







                <!--Top Navbar-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <img src="/assests/css/bu_logo.png" width="170" height="30" class="d-inline-block align-top" alt="">
                    <a class="navbar-brand" href="#">Bharathiar University</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Dropdown
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </li>

                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>

                        <!-- profile logout -->
                        <ion-icon name="log-out-outline"></ion-icon>
                    </div>
                  </nav>
                <!--Top Navbar end-->





          <!--TItle of dashbord-->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Uploading Dashboard</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <form action="" method="">
            <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                  <div class="col-lg-3 col-6">
                    <!--dropdown 1-->
                    <div class="dropdown">
                      <select class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" name="year" id="year">
                    <option value="">select Year</option>
                    <?php if(!empty($posts)): ?>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option ><?php echo e($post->year); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                      </select>
                    </div>


                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                    <!-- dropdown 2 -->
                    <div class="dropdown">

                      <select class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" name="semester" id="semester">
                        <option  href="#">select semester</option>
                        <?php if(!empty($posts)): ?>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option ><?php echo e($post->semester); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                      </select>
                    </div>

                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                    <!-- dropdown 3 -->
                    <div class="dropdown">

                      <select class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" name="department" id="department">
                        <option  href="#">select department</option>
                        <?php if(!empty($posts)): ?>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option ><?php echo e($post->department); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                      </select>
                    </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                    <!-- dropdown 4 -->
                    <div class="dropdown">

                      <select class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" name="year">
                        <option  href="#">  select program</option>
                        <?php if(!empty($posts)): ?>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option ><?php echo e($post-> program); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                      </select>
                      <button type="submit">submit</button>
                      </div>
                    </div>
                  </div>
                </form>


                  <!-- ./col -->
                </div>
              </li>
            </ul>
            <hr>

                <!--second-->
                <table>
                  <tr>
                    <th>PDF</th>
                  </tr>
                  <?php if(!empty($posts)): ?>
                  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($posts-> pdf); ?></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                </table>


                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                  <!-- Left col -->
                  
                        

                        
                      <div class="card-body">
                        <div class="tab-content p-0">


                          <!-- Morris chart - Sales -->
                          

                        </div>
                      </div>
                      <!-- /.card-body -->


                    </div>
                    <!-- /.card -->


                          </li>
                        </ul>
                </div>
                      <!-- /.card-body -->
                      <div class="card-footer clearfix">
                        <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Save</button>

                      </div>
                    </div>
                    <!-- /.card -->

        </div>

    </div>

    <!--bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!--popupjs-->

      <script>
        // When the user clicks on div, open the popup
        function myFunction() {
          var popup = document.getElementById("myPopup");
          popup.classList.toggle("show");
        }
        </script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\syllabus\Syllabus\resources\views/filter.blade.php ENDPATH**/ ?>