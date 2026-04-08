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
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
          <img src="https://flagcdn.com/w320/gh.png" alt="Ghana">
          <div class="card-body">
            <div class="card-title">Ghana</div>
            <p class="card-text"><span>Population:</span> 31,000,000</p>
            <p class="card-text"><span>Region:</span> Africa</p>
            <p class="card-text"><span>Capital:</span> Accra</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
          <img src="https://flagcdn.com/w320/us.png" alt="USA">
          <div class="card-body">
            <div class="card-title">United States</div>
            <p class="card-text"><span>Population:</span> 331,000,000</p>
            <p class="card-text"><span>Region:</span> Americas</p>
            <p class="card-text"><span>Capital:</span> Washington, D.C.</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
          <img src="https://flagcdn.com/w320/jp.png" alt="Japan">
          <div class="card-body">
            <div class="card-title">Japan</div>
            <p class="card-text"><span>Population:</span> 125,000,000</p>
            <p class="card-text"><span>Region:</span> Asia</p>
            <p class="card-text"><span>Capital:</span> Tokyo</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
          <img src="https://flagcdn.com/w320/de.png" alt="Germany">
          <div class="card-body">
            <div class="card-title">Germany</div>
            <p class="card-text"><span>Population:</span> 83,000,000</p>
            <p class="card-text"><span>Region:</span> Europe</p>
            <p class="card-text"><span>Capital:</span> Berlin</p>
          </div>
        </div>
      </div>

    </div>


<?php require_once __DIR__ .'/../views/partials/footer.php';?>
