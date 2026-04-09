<?php require_once __DIR__ .'/../Views/partials/header.php';?>

 <div class="search-filter">
      <input type="text" class="form-control search-box" placeholder="Search for a country...">

      <select class="form-select filter-box mt-3 mt-md-0">
        <option selected disabled>Filter by Region</option>
        <option>Africa</option>
        <option>Americas</option>
        <option>Asia</option>
        <option>Europe</option>
        <option>Oceania</option>
      </select>
    </div>

    <div class="row g-4">

      <!-- Country Card -->
       <?php foreach($countries as $country): ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card">
            <img src="<?= htmlspecialchars($country['flags']['png']) ?>" alt="Flag of <?= htmlspecialchars($country['name']['common']) ?>">
            <div class="card-body">
              <div class="card-title"><?= htmlspecialchars($country['name']['common']) ?></div>
              <p class="card-text"><span>Population:</span> <?= htmlspecialchars($country['population']) ?></p>
              <p class="card-text"><span>Region:</span> <?= htmlspecialchars( $country['region']) ?></p>
              <p class="card-text"><span>Capital:</span> <?= htmlspecialchars( $country['capital'][0] ?? 'N/A') ?></p>
            </div>
          </div>
        </div>
      <?php endforeach ?>


<?php require_once __DIR__ .'/../views/partials/footer.php';?>
