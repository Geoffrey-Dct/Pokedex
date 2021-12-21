<main>
  <h2 class="subtitle"><?=$viewVars['Pokemon']->getName()?> Details</h2>
  <div class="details-container">
    <img src="<?=$absoluteURL . "/img/" . $viewVars['Pokemon']->getNumero() . ".png"?>" alt="<?=$viewVars['Pokemon']->getName()?>" class="details-img">
    <div class="details-card">
      <p class="details-card-subtitle details-name">#<?=$viewVars['Pokemon']->getNumero()?> <?=$viewVars['Pokemon']->getName()?></p>
      <ul class="details-card-types">
        <?php foreach ($viewVars['PokemonTypes'] as $pokemonType): ?>
          <li class="details-card-type <?=$pokemonType['name']?>" style="background-color:#<?=$pokemonType['color']?>"><?=$pokemonType['name']?></li>
        <?php endforeach; ?>
      </ul>
      <p class="details-card-subtitle">Statistics</p>
      <ul class="details-card-list">
          <li class="details-card-list-item">
            <span class="list-item-name">PV</span>
            <span class="details-card-value"><?=$viewVars['Pokemon']->getPv()?></span>
            <div class="progress-bar">
              <div class="progress-bar-left" style="width: <?=($viewVars['Pokemon']->getPv()* 100) / 255?>%"></div>
            </div>
          </li>
          <li class="details-card-list-item">
            <span class="list-item-name">Attack</span>
            <span class="details-card-value"><?=$viewVars['Pokemon']->getAttaque()?></span>
            <div class="progress-bar">
              <div class="progress-bar-left" style="width: <?=($viewVars['Pokemon']->getAttaque()* 100) / 255?>%"></div>
            </div>
          </li>
          <li class="details-card-list-item">
            <span class="list-item-name">Defense</span>
            <span class="details-card-value"><?=$viewVars['Pokemon']->getDefense()?></span>
            <div class="progress-bar">
              <div class="progress-bar-left" style="width: <?=($viewVars['Pokemon']->getDefense()* 100) / 255?>%"></div>
            </div>
          </li>
          <li class="details-card-list-item">
            <span class="list-item-name">Attack Spe.</span>
            <span class="details-card-value"><?=$viewVars['Pokemon']->getAttaque_spe()?></span>
            <div class="progress-bar">
              <div class="progress-bar-left" style="width: <?=($viewVars['Pokemon']->getAttaque_spe()* 100) / 255?>%"></div>
            </div>
          </li>
          <li class="details-card-list-item">
            <span class="list-item-name">Defense Spe.</span>
            <span class="details-card-value"><?=$viewVars['Pokemon']->getDefense_spe()?></span>
            <div class="progress-bar">
              <div class="progress-bar-left" style="width: <?=($viewVars['Pokemon']->getDefense_spe()* 100) / 255?>%"></div>
            </div>
          </li>
          <li class="details-card-list-item">
            <span class="list-item-name">Speed</span>
            <span class="details-card-value"><?=$viewVars['Pokemon']->getVitesse()?></span>
            <div class="progress-bar">
              <div class="progress-bar-left" style="width: <?=($viewVars['Pokemon']->getVitesse()* 100) / 255?>%"></div>
            </div>
          </li>
      </ul>
    </div>
  </div>
</main>