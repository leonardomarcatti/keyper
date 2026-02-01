<header>
   <div>
      <p id="flash"><?= session()->getFlashdata('message') ?? '' ?></p>
   </div>
   <span>
      <h1>Keyper</h1>
      <?php
      if (session()->has('id') && session()->getFlashdata() == null) { ?>
         <a href="<?= url_to('logout') ?>">Sair</a>
      <?php } ?>
   </span>
   <?php
   if (session()->has('id') && session()->getFlashdata('message') == null) { ?>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
         <div class="container-fluid" id="navbar">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
               <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Relatórios
                     </a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= url_to('reportKey') ?>">Chaves</a></li>
                        <li><a class="dropdown-item" href="<?= url_to('reportUser') ?>">Usuários</a></li>
                        <?php
                        if (session()->get('boss') == 1) { ?>
                           <li><a class="dropdown-item" href="<?= url_to('reportStaff') ?>">Prevenção</a></li>
                        <?php  };
                        ?>
                     </ul>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Cadastros
                     </a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= url_to('register_key') ?>">Chaves</a></li>
                        <li><a class="dropdown-item" href="<?= url_to('registerUser') ?>">Usuários</a></li>
                        <?php
                        if (session()->get('boss') == 1) { ?>
                           <li><a class="dropdown-item" href="<?= url_to('registerStaff') ?>">Prevenção</a></li>
                        <?php  };
                        ?>
                     </ul>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Chaves
                     </a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= url_to('taken') ?>">Empréstimo</a></li>
                        <li><a class="dropdown-item" href="<?= url_to('transfer') ?>">Transferência</a></li>
                        <li><a class="dropdown-item" href="<?= url_to('return') ?>">Devolução</a></li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="<?= url_to('setup') ?>">Configurações</a>
                  </li>
               </ul>
            </div>
            <small>Bem vindo <?= strtoupper(session()->get('name')) ?></small>
         </div>
      </nav>
   <?php }
   ?>
</header>