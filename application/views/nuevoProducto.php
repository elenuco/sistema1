<!DOCTYPE html>

<html>
	<head>

		<meta charset="UTF-8" >
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
                         <?php echo $header; ?>
                    </div>

                    
                    <!-- Contenido de la vista es previsto aquí -->            		
                    <form>
           <div class="form-group">
    <label for="exampleInputEmail1">Nombre Producto</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="form-control">marca</label>
    <input type="password" class="form-control" id="form-control" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="form-control">tipo</label>
    <input type="password" class="form-control" id="form-control" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="form-control">longitud</label>
    <input type="password" class="form-control" id="form-control" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="form-control">altitud</label>
    <input type="password" class="form-control" id="form-control" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="form-control">lotitud</label>
    <input type="password" class="form-control" id="form-control" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                    
                    </form>
                    
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

	</body>
</html>