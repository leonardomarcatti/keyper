<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<main>
   <section>
      <div id="success_error">
         <h2>Successo!</h2>
         <h3>Deseja fazer outro registro?</h3>
         <div>
            <a href="<?= url_to(session()->get('origin')) ?>"><button type="button" class="btn btn-danger">Sim</button></a>
            <a href="<?= url_to('mainPage') ?>"><button type="button" class="btn btn-primary">Não</button></a>
         </div>
      </div>
   </section>
</main>
<?= $this->endSection() ?>