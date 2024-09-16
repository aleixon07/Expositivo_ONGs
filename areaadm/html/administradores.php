<?php

include "conection.php";


session_start();

//if(!isset($_SESSION['login'])){
//  header("Location: ../../index.html");
//  exit();
//}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width FULL WIDTH-->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords"
    content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
  <meta name="description"
    content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
  <meta name="robots" content="noindex,nofollow" />
  <title>Área administrativa ADM's</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png" />
  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="../assets/extra-libs/multicheck/multicheck.css" />
  <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" />
  <link href="../dist/css/style.min.css" rel="stylesheet" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">

          <!-- ============================================================== -->
          <!-- Toggle which is visible on mobile only -->
          <!-- ============================================================== -->
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
              class="ti-menu ti-close"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-start me-auto">
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
            </li>

            <!-- ============================================================== -->
            <!-- Search -->
            <!-- ============================================================== -->
            <li class="nav-item search-box">
              <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i
                  class="mdi mdi-magnify fs-4"></i></a>
              <form class="app-search position-absolute">
                <input type="text" class="form-control" placeholder="Search &amp; enter" />
                <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
              </form>
            </li>
          </ul>

          <!-- ============================================================== -->
          <!-- User profile and search -->
          <!-- ============================================================== -->
          
            <a class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
          
              <a class="dropdown-item" href="logout.php"><i class="fa fa-power-off me-1 ms-1"></i> Logout</a>
 
            
            </ul>
          </li>
          <!-- ============================================================== -->
          <!-- User profile and search -->
          <!-- ============================================================== -->
          </ul>
        </div>
      </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" id="aside" data-sidebarbg="skin5">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav" class="pt-4">


            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="administradores.php"
                aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span
                  class="hide-menu">Administradores</span></a>
            </li>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="categorias.php"
                aria-expanded="false"><i class="mdi mdi-relative-scale"></i><span
                  class="hide-menu">Categorias</span></a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="ongs.php" 
                aria-expanded="false"><i class="mdi mdi-border-inside"></i><span 
                  class="hide-menu">ONG's</span></a>
            </li>

          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Administradores</h4>
            <div class="ms-auto text-end">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"></a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-12">
            
              <div class="card-body">
                <h5 class="card-title mb-0"></h5>
              </div>
              <div class="text-start">
              <button onclick="toggleForm()" class=" btn border border-dark mb-3 btn-primary" style="border-radius: 25px;">+ Adicionar</button>

              </div>

              <div id="formContainer" class="fade-in mb-5" style="display: none;">
                    
                <form action="crud/adicionar_adm.php" method="POST" class="w-50">
                  <div class="col mb-2">
                    <label for="">Nome</label>
                    <input required type="text" name="nome" class="form-control border border-dark" placeholder="Digite o nome" >
                  </div>
                  <div class="col mb-2">
                    <label for="">Email</label>
                    <input required type="email" name="email" class="form-control border border-dark" placeholder="Digite o e-mail">
                  </div>
                  <div class="col me-2">
                    <label for="">Senha</label>
                    <input required type="password" name="senha" class="form-control border border-dark" placeholder="Digite a senha">
                  </div>
                  <div class="mt-3 text-center">
                  <button class="btn btn-success text-dark border border-dark" type="submit" style="border-radius: 5px;">Enviar</button>
                  <a class="btn btn-danger text-dark border border-dark" onclick="toggleForm()" style="border-radius: 5px;">Fechar</a>

                  </div>
                  
                </form>
              </div>
                
              <table class="table border border-2 border-dark w-75">
                <thead class="table-dark">
                  <tr>
                    <th scope="col" class="text-light">Nome</th>

                    <th scope="col " class="text-light">Email</th>
                    <th scope="col"></th>

                  </tr>
                </thead>
                <tbody class="table-light">
                  <?php

                        $sql = "SELECT * FROM administrador";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {

                            while ($row = $result->fetch_assoc()) {

                        ?>
                  <tr>
                    <td class="text-capitalize">
                      <?php echo $row["nome"]; ?>
                    </td>

                    <td>
                      <?php echo $row["email"]; ?>
                    </td>
                    <td>
                      <button data-bs-toggle="modal" data-bs-target="#modal<?php echo $row["id_administrador"]; ?>"
                        class='btn border border-dark border-opacity-25 rounded'><i class="bi bi-pencil-fill"></i></button>

                      <button onclick='AlertDeletAdm(<?php echo $row["id_administrador"]; ?>)'
                        class='btn rounded border border-dark border-opacity-25'><i
                          class="bi bi-trash-fill"></i></button>
                    </td>
                  </tr>

                  <!-- Modal editar -->
                  <div class="modal fade" id="modal<?php echo $row["id_administrador"]; ?>" tabindex="-1" aria-labelledby="modal
                    <?php echo $row_adm["id"]; ?>" aria-hidden="true">
                    <div class="modal-dialog ">
                      <div class="modal-content">
                        <div class="modal-header border border-dark bg-dark">
                          <h5 class="modal-title text-light" id="modal_adicionar">Editando Administrador</h5>
                        </div>
                        <div class="modal-body border-top border-dark  ">
                          <form action="crud/edit_adm.php" method="POST">
                            <label for="" class="text-dark ms-2"><strong>Nome</strong></label>
                            <input type="text" name="nome" id="nome" class="form-control border border-dark mb-3"
                              value="<?php echo $row["nome"]; ?>" required placeholder="Insira o nome">


                            <label for="" class="text-dark ms-2"><strong>Email</strong></label>
                            <input type="email" name="email" id="email" class="form-control border border-dark"
                              value="<?php echo $row["email"]; ?>" required placeholder="Insira o email">

                            <input type="hidden" name="id" id="id" value="<?php echo $row["id_administrador"]; ?>">
                        </div>
                        <div class="modal-footer border">
                          <button type="button" class="btn text-light  bg-danger   border border-dark"
                            data-bs-dismiss="modal">Fechar</button>
                          <button type="submit" class="btn bg-success text-light border border-dark">Editar</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                      
                            }
                        }
                        ?>
                </tbody>
              </table>
           



          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
      <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by
        <a href="https://www.wrappixel.com">WrapPixel</a>.
      </footer>
      <!-- ============================================================== -->
      <!-- End footer -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
  <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
  <!--Wave Effects -->
  <script src="../dist/js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="../dist/js/sidebarmenu.js"></script>
  <!--Custom JavaScript -->
  <script src="../dist/js/custom.min.js"></script>
  <!-- this page js -->
  <script src="../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
  <script src="../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
  <script src="../assets/extra-libs/DataTables/datatables.min.js"></script>
  <script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $("#zero_config").DataTable();
  </script>
   <script>
        function AlertDeletAdm(id) {
            Swal.fire({
                title: 'Tem certeza?',
                text: 'Você não será capaz de reverter isso!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, excluir!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `crud/delet_adm.php?id=${id}`;
                }
            });
        }
    </script>
    <?php

    if (!isset($_GET['alert'])) {
    } else if ($_GET['alert'] == md5(1)) {

    ?>
        <script>
            // Função para mostrar o SweetAlert
            Swal.fire({
                title: "Concluído!",
                text: "Administrador adicionado com sucesso.",
                icon: "success"

            }).then((result) => {
                // Verifica se o usuário clicou em "OK"
                // Muda a URL após o SweetAlert ser fechado
                window.location.href = "administradores.php";

            });
        </script>

    <?php } else if ($_GET['alert'] == md5(2)) {

    ?>
        <script>
            // Função para mostrar o SweetAlert
            Swal.fire({
                title: "Concluído!",
                text: "Administrador excluído com sucesso.",
                icon: "success"

            }).then((result) => {
                // Verifica se o usuário clicou em "OK"
                // Muda a URL após o SweetAlert ser fechado
                window.location.href = "administradores.php";

            });
        </script>

    <?php } else if ($_GET['alert'] == md5(3)) {

    ?>
        <script>
            // Função para mostrar o SweetAlert
            Swal.fire({
                title: "Concluído!",
                text: "Administrador editado com sucesso.",
                icon: "success"

            }).then((result) => {
                // Verifica se o usuário clicou em "OK"
                // Muda a URL após o SweetAlert ser fechado
                window.location.href = "administradores.php";

            });
        </script>

    <?php }else if ($_GET['alert'] == md5(4)) {

?>
    <script>
        // Função para mostrar o SweetAlert
        Swal.fire({
            title: "Atenção!",
            text: "Você não pode se excluir!",
            icon: "error"

        }).then((result) => {
            // Verifica se o usuário clicou em "OK"
            // Muda a URL após o SweetAlert ser fechado
            window.location.href = "administradores.php";

        });
    </script>

<?php }else if ($_GET['alert'] == md5(5)) {

?>
    <script>
        // Função para mostrar o SweetAlert
        Swal.fire({
            title: "Atenção!",
            text: "Esse email já foi cadastrado!",
            icon: "error"

        }).then((result) => {
            // Verifica se o usuário clicou em "OK"
            // Muda a URL após o SweetAlert ser fechado
            window.location.href = "administradores.php";

        });
    </script>

<?php } ?>

<script>
        function toggleForm() {
            const formContainer = document.getElementById('formContainer');

            if (formContainer.style.display === 'none') {
                // Se o formulário está oculto, exibimos com animação de impressão
                formContainer.style.display = 'block';
                formContainer.classList.add('print-in');
            } else {
                // Se o formulário está visível, ocultamos imediatamente
                formContainer.style.display = 'none';
                formContainer.classList.remove('print-in');
            }
        }
    </script>
</body>

</html>