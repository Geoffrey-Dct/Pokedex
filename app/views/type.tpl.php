<main>
  <ul class="pokemon-list">
    <?php if (!empty($viewVars['pokemons'])): ?>
      <?php foreach ($viewVars['pokemons'] as $pokemon): ?>
        <li class="pokemon-card">
          <a href="/pokemon/<?=$pokemon['id']?>" class="pokemon-link">
            <img src="<?=$absoluteURL?>/img/<?=$pokemon['numero']?>.png" alt="pokemon" class="pokemon-img">
            <p class="pokemon-name">#<?=$pokemon['numero'] ." ". $pokemon['nom']?></p>
          </a>
        </li>
      <?php endforeach; ?>
    <?php endif ;?>
    <?php if (empty($viewVars['pokemons'])): ?>
      <p>pokemon not found</p>
    <?php endif ;?>
  </ul>
</main>
