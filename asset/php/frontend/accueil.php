<?php require_once('template.php'); ?>

<main id="accueil">
  <section class="container py-12 w-11/12  mx-auto my-auto">
    <div class="items-center lg:flex">
      <div class="text-center xl:text-left w-full h-full lg:w-1/2">
        <h1 class=" text-white text-2xl md:text-3xl lg:text-5xl">
          Nouvelle génération de Défis
        </h1>
        <h2 class="bg-gradient-to-r from-blue-500 to-green-400 bg-clip-text text-transparent  text-6xl font-black 5xl text-mb-2 lg:text-6xl lg:mb-6 my-5">
          DEFIS VS DONATE
        </h2>
        <p class="py-10 text-white text-2xl">
          Une envie de participer ? alors balance ton défi et participe,
          voyons voir si celui-ci sera tiré et accepté pour être mis en
          avant.
        </p>
      </div>
      <div>
        <?php require_once('../backend/formDefis.php'); ?> //
        <?php require_once('/asset/php/backend/formDefis.php'); ?> // règle pour l'index
    </div>
  </section>
</main>
