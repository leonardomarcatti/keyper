<!doctype html>
<html>
   <?= $this->include('templates/head') ?>
   <body>
      <?= $this->include('templates/header') ?>
      <?= $this->renderSection('content') ?>
      <?= $this->include('templates/footer') ?>
   </body>

</html>