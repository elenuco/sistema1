<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">
    <title></title>

    <?php echo $css; ?>

</head>

<body>

    <div id="preloader">
        <div class="loader"></div>
    </div>

    <!-- Contenedor de la página:
        Widgets y contenido es a partir de este div -->
    <div class="page-container">

        <!-- Sidebar -->
        <div class="sidebar-menu">
            
        </div>

        <!-- Contenido de la página -->
        <div class="main-content">

            <!-- Header -->
            <div class="header-area">
               
            </div>


            <!-- Contenido de la vista es previsto aquí -->
            <div class="container my-5">

                <table id="dataTable" style="text-align: center; border-radius: 40px;" class="table table-hover">
                    <thead>
                        <tr class="thead thead-dark ">
                            <th hidden=""></th>
                            <th scope="col">nombre de producto</th>
                            <th scope="col">marca</th>
                            <th scope="col">tipo </th>
                            <th scope="col">fecha de registro</th>
                            <th scope="col">Acciones</th>

                        </tr>

                    </thead>
                    <tbody>
                    <?php foreach ($producto as $r) : ?>
                            <tr>
                                <td hidden="id_producto"><?= $r->id_producto; ?></td>
                                <td><?= $r->nombre_producto; ?></td>
                                <td><?= $r->marca; ?></td>
                                <td><?= $r->tipo; ?></td>
                                <td><?= $r->fecha_registro; ?></td>
                                <td>
                                    <div class="dropdown show">
                                        <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acciones</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a href="<?php echo base_url(); ?>productos_controller/eliminar_usuario?id_producto=<?= $r->id_producto; ?>" class="dropdown-item btn btn-info">Eliminar</a>

                                            <a href="<?php echo base_url(); ?>usuarios_control/accion_usuario?id_producto=<?= $r->id_producto; ?>" class="dropdown-item btn btn-secondary">
                                                Editar
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>

            <div class="offset-area">
            <?php echo $rightbar?>
            </div>
             
            <footer>
            <?php echo $footer; ?>
            </footer>

        </div>

    </div>
    <!-- ./page-container end -->
    <?php echo $scripts; ?>
            <script type="text/javascript">
            $(document).ready(function() {
              $('#dataTable').DataTable();
            });
            </script>
</body>

</html>