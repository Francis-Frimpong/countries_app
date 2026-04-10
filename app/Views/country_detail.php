
<?php require_once __DIR__ .'/../Views/partials/header.php';?>

<div class="container">

    <div class="mt-4">
      <button class="btn-back">← Back</button>
    </div>

    <div class="details-container">

      <!-- Flag -->
      <div class="col-md-6">
        <img src="<?= htmlspecialchars($country['flags']['png']) ?>" class="flag" alt="Ghana">
      </div>

      <!-- Details -->
      <div class="col-md-6 details mt-4 mt-md-0">
        <div class="details-title"><?= htmlspecialchars($country['name']['common']) ?></div>

        <div class="row">
          <div class="col-md-6">
            <p><span>Native Name:</span> <?= htmlspecialchars($country['name']['common']) ?></p>
            <p><span>Population:</span> <?= htmlspecialchars($country['population']) ?></p>
            <p><span>Region:</span> <?= htmlspecialchars($country['region']) ?></p>
            <p><span>Sub Region:</span> <?= htmlspecialchars($country['subregion']) ?></p>
            <p><span>Capital:</span> <?= htmlspecialchars($country['capital'][0]) ?? 'N/A' ?></p>
          </div>

          <div class="col-md-6 mt-3 mt-md-0">
            <p><span>Top Level Domain:</span><?= htmlspecialchars(implode(', ', $country['tld'] ?? [])) ?></p>

            <?php
              $currencies = [];

              if (!empty($country['currencies'])) {
                  foreach ($country['currencies'] as $currency) {
                      $currencies[] = $currency['name'];
                  }
              }
            ?>
            <p><span>Currencies:</span> <?=  htmlspecialchars(implode(', ', $currencies)) ?></p>

            <p><span>Languages:</span> <?= htmlspecialchars(implode(', ', array_values($country['languages'] ?? []))) ?></p>
          </div>
        </div>

     <div class="borders">
        <p><span>Border Countries:</span></p>
        
        <div>
          <?php if (!empty($country['borders'])): ?>
              <?php foreach ($country['borders'] as $border): ?>
                  <span class="border-country">
                      <?= htmlspecialchars($border) ?>
                  </span>
              <?php endforeach; ?>
          <?php else: ?>
              <span>No borders</span>
          <?php endif; ?>
        </div>
      </div>

      </div>

    </div>

</div>

<?php require_once __DIR__ .'/../Views/partials/footer.php';?>


