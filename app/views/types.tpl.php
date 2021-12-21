<main>
  <ul class="type-list">
    <?php foreach ($viewVars['types'] as $type): ?>
      <li class="type-list-item" style="background-color: #<?=$type->getColor()?>">
        <a href="/type/<?=$type->getId()?>" class="type-list-item-link"><?=$type->getName()?></a>
      </li>
    <?php endforeach; ?>
  </ul>
</main>