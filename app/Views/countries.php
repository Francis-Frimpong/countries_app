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
       <?php foreach($countries as $country): 
       
          $flag = htmlspecialchars($country['flags']['png']);
          $countryName =  htmlspecialchars($country['name']['common']) ;
          $population =  htmlspecialchars($country['population']); 
          $region =  htmlspecialchars( $country['region']);
          $capital = htmlspecialchars( $country['capital'][0] ?? 'N/A')
        
        ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a class="text-decoration-none" href="/countries_app/country_detail?code=<?= $country['cca3'] ?>">

            <div class="card">
              <img src="<?= $flag ?>" alt="Flag of <?= $countryName ?>">
              <div class="card-body">
                <div class="card-title"><?= $countryName ?></div>
                <p class="card-text"><span>Population:</span> <?= $population ?></p>
                <p class="card-text"><span>Region:</span> <?= $region?></p>
                <p class="card-text"><span>Capital:</span> <?= $capital?></p>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach ?>


<?php require_once __DIR__ .'/../views/partials/footer.php';?>
