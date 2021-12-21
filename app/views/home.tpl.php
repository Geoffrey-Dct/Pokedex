<main>
  <ul class="pokemon-list">
    <?php foreach($viewVars['Pokemons'] as $pokemon) : ?>
      <li class="pokemon-card">
        <a href="<?=$absoluteURL . "/pokemon/" . $pokemon->getId()?>" class="pokemon-link">
          <img src="<?=$absoluteURL . "/img/" . $pokemon->getNumero()?>.png" class="pokemon-img"/>
          <p class="pokemon-name">#<?=$pokemon->getNumero() . " " . $pokemon->getName()?></p>
        </a>
      </li>
   <?php endforeach; ?>
  </ul>
</main>