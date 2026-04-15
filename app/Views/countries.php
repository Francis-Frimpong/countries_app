<?php require_once __DIR__ .'/../Views/partials/header.php';?>

<?php $region = $region ?? ''; 

$page = $page ?? 1;
$totalPages = $totalPages ?? 1;
$search = $search ?? '';
$region = $region ?? '';
?>


    <form method="GET" class="search-filter">

      <div class="search-box-wrapper">
        <input 
          type="text" 
          class="form-control search-box" 
          placeholder="Search for a country..." 
          name="search"
          value="<?= htmlspecialchars($_GET['search'] ?? '') ?>"
          onkeyup="this.form.submit()"
        >
      </div>

      <div class="filter-box-wrapper">
       <select class="form-select filter-box" name="region"  onchange="this.form.submit()">

          <option value="">Filter by Region</option>

          <option value="Africa" <?= ($region === 'Africa') ? 'selected' : '' ?>>
            Africa
          </option>

          <option value="Americas" <?= ($region === 'Americas') ? 'selected' : '' ?>>
            Americas
          </option>

          <option value="Asia" <?= ($region === 'Asia') ? 'selected' : '' ?>>
            Asia
          </option>

          <option value="Europe" <?= ($region === 'Europe') ? 'selected' : '' ?>>
            Europe
          </option>

          <option value="Oceania" <?= ($region === 'Oceania') ? 'selected' : '' ?>>
            Oceania
          </option>

        </select>
      </div>

    </form>

    <div class="row g-4">

      <?php if(empty($filteredCountries)): ?>
        <p class="text-center mt-4">No countries found.</p>
      <?php endif; ?>
      <!-- Country Card -->
       <?php foreach($pagedCountries as $country): 
       
          $flag = htmlspecialchars($country['flags']['png']);
          $countryName =  htmlspecialchars($country['name']['common']) ;
          $population =  htmlspecialchars($country['population']); 
          $countryRegion =  htmlspecialchars( $country['region']);
          $capital = htmlspecialchars( $country['capital'][0] ?? 'N/A')
        
        ?>
        <!-- Card Grid -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a class="text-decoration-none" href="/countries_app/country_detail?code=<?= $country['cca3'] ?>">

          <!-- Cards -->
            <div class="card">
              <img src="<?= $flag ?>" alt="Flag of <?= $countryName ?>">
              <div class="card-body">
                <div class="card-title"><?= $countryName ?></div>
                <p class="card-text"><span>Population:</span> <?= $population ?></p>
                <p class="card-text"><span>Region:</span> <?= $countryRegion?></p>
                <p class="card-text"><span>Capital:</span> <?= $capital?></p>
              </div>
            </div>
          </a>
        </div>
        <?php endforeach ?>

        <!-- Pagination -->
        <div class="pagination mt-4 d-flex justify-content-center gap-2">
          <?php if ($page > 1): ?>
          <a class="btn btn-dark" href="?page=<?= $page - 1 ?>&search=<?= $search ?>&region=<?= $region ?>">
            Prev
          </a>
          <?php endif; ?>
          <?php for ($i = 1; $i <= $totalPages; $i++): ?>
          <a 
            class="btn <?= $i == $page ? 'btn-success' : 'btn-dark' ?>" 
            href="?page=<?= $i ?>&search=<?= $search ?>&region=<?= $region ?>"
          >
            <?= $i ?>
          </a>
          
        <?php endfor; ?>
        <?php if ($page < $totalPages): ?>
        <a class="btn btn-dark" href="?page=<?= $page + 1 ?>&search=<?= $search ?>&region=<?= $region ?>">
          Next
        </a>
      <?php endif; ?>
        </div>


<?php require_once __DIR__ .'/../views/partials/footer.php';?>
