<?php require_once('template.php'); ?>

<main id="accueil">
  <section class="container py-12 w-11/12  mx-auto my-auto lg:flex justify-center items-center">
    <div class="items-center lg:flex justify-center">
      <div class=" w-11/12 mx-auto my-auto text-center xl:text-left h-full lg:w-1/2 mr-20">
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
        <?php include('../backend/formDefis.php'); ?> //
      </div>
  </section>
</main>