<?php
require('controller.php');
$datos = CargarDatosUsuario();
?>
<!DOCTYPE html>
<html lang="Es-es">

<head>
    <title>Examen UF1846</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <link rel="canonical" href="https://mdbootstrap.com/snippets/standard/mdbootstrap/2958490/">
    <link rel="canonical" href="https://mdbootstrap.com/snippets/standard/temp/4628244/">
   

</head>

<body>
<style>
    html,body,.intro {
        height: 100%;
    }
        
    @media (min-width: 550px) and (max-width: 750px) {
        html,body,.intro {
        height: 750px;
        }
    }

    @media (min-width: 800px) and (max-width: 850px) {
        html,body,.intro {
            height: 750px;
        }
    }

    .mask-custom {
        backdrop-filter: blur(15px);
        background-color: rgba(255,255,255,.2);
        border-radius: 3em;
        border: 2px solid rgba(255,255,255,.1);
        background-clip: padding-box;
        box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
    }
    .table{
        width: 100%;
        padding-bottom: 3rem

    }

</style>
<section class="intro">
  <div class="bg-image h-100" style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/glassmorphism-article/img5.jpg');">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-6 col-md-10 col-lg-7 col-xl-6">
            <div class="card mask-custom">
              <div class="card-body p-5 text-white">
                <div class="my-4">

                  <h2 class="text-center mb-5">Nuevo Usuario</h2>
                  <form id="" class="form" method="post" action="controller.php">
                    <div class="row">
                      <div class="col-12 col-md-6 mb-4">
                        <div class="form-outline form-white">
                        <label class="form-label" for="form3Example1">Nombre:</label>
                        <input type="text" name="name" id="name" class="form-control form-control-lg" maxlength="50" min="3" required />
                        </div>
                      </div>
                      <div class="col-12 col-md-6 mb-4">
                        <div class="form-outline form-white">
                        <label class="form-label" for="form3Example2">Apellido</label>
                        <input type="text" id="name" class="form-control form-control-lg"  requierd/>
                        </div>
                      </div>
                    </div>
                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="email">Email address</label>
                        <input type="email" id="email" name="email" class="form-control form-control-lg" required/>
                    </div>

                    <div class="form-check d-flex mb-4">
                        <label class="form-check-label"> Recuerdame </label>
                        <input class="form-check-input" type="checkbox" value="" id="" checked/><br>
                      

                    </div>
                    <input type="hidden" name="accion" value="ENVIO" />
                    <input type="submit" class="btn btn-light btn-block mb-4" value="GUARDAR" />
                    <input type="reset" class="btn btn-light btn-block mb-4" value="RESET" />
                    
                    
                    <div class="text-center">
                    <?php
                        if ($_GET) {
                         if (isset($_GET['msn']) and !empty($_GET['msn'])) {
                            echo $msn = '<div class="alert alert-danger text-center" role="alert">' . $_GET['msn'] . '</div>';
                         }
                        }
                    ?>
                    </div>
                  </form>
                </div>
              </div>
            </div>
         </div>
          <div class="col-6 col-md-10 col-lg-7 col-xl-6">
            <div class="card mask-custom">
              <div class="card-body p-5 text-white">
                <div class="my-4">

                <h2 class="text-center mb-5">Listado Guardados</h2>
                  
                    <div class="row justify-content-center">
                      <div class="col-12" >
                        <div class="form-table form-white">
                        <table id="ListadoGuardados" class="table table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                             if (isset($datos) and !empty($datos)) {
                             foreach ($datos as $dato) {
                                echo '<tr>';
                                echo '<td>' . $dato['rowid'] . '</td>';
                                echo '<td>' . $dato['nombre'] . '</td>';
                                echo '<td>' . $dato['email'] . '</td>';
                                echo '</tr>';
                             }
                             }
                            ?>
                        </tbody>
                        </table>
                        </div>
                     </div>
                    </div>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
</body>

</html>