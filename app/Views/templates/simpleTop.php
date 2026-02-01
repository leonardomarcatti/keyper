<!DOCTYPE html>
<html lang="pt-BR">


   <body>
      <header>
         <div id="flash">
            <?php
               if (session()->getFlashdata('message')) { ?>
                  <p><?= session()->getFlashdata('message') ?></p>
            <?php } ?>
         </div>
         <span>
            <h1>Keyper</h1>
            <?php
               if (session()->has('id') && session()->getFlashdata() == null ) { ?>
                  <a href="<?= url_to('logout') ?>">Sair</a>
            <?php } ?>
         </span>
      </header>
      