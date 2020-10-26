<div class="c-txtmemories">
  <h1 class="c-txtmemories c-txtmemories__title pb-xs"><?php echo $pagesContent["title"] ?></h1>
  <h2 class="c-txtmemories c-txtmemories__subtitle pb-l"><?php echo $pagesContent["subtitle"] ?></h2>
  <p class="pb-xl c-txtmemories c-txtmemories__paragraph"><?php echo $pagesContent["content"] ?></p>
  <div class="mt-xxl p-l u-border">
    <?php foreach ($pagesContentInfos as $key => $value): ?>
      <p class="c-txtmemories c-txtmemories__infos"><?php echo $value["infos"] ?></p>
    <?php endforeach ?>
  </div>
</div>
