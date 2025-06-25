<main>
  <section>
    <img src="<?= $poster_url ?>" style="border-radius: 16px" width="200px" alt="Poster de <?= $title ?>" />
  </section>

  <hgroup>
    <h3><?= $title ?> - <?= $until_message ?></h3>
    <p>Fecha de estreno: <?= $release_date ?></p>
    <p>La siguiente es: <?= $following_production ?></p>
  </hgroup>
</main>