<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($pageTitle) ? $pageTitle : "Countries App" ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
     body {
      background-color: #0d1117;
      color: #e6edf3;
      font-family: Arial, sans-serif;
    }

    .navbar {
      background-color: #161b22;
      padding: 15px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.5);
    }

    .search-filter {
      margin: 20px 0;
    }
    .form-control, .form-select {
      background-color: #161b22;
      border: none;
      color: #e6edf3;
      padding: 12px;
    }

    .form-control::placeholder {
      color: #8b949e;
    }

    .card {
      background-color: #161b22;
      border: none;
      border-radius: 12px;
      overflow: hidden;
      transition: transform 0.2s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card img {
      height: 160px;
      object-fit: cover;
    }

    .card-body {
      padding: 15px;
    }

    .card-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #8b949e;
    }

    .card-text{
       color: #8b949e;
    }

    .card-text span {
      color: #8b949e;
    }

      .btn-back {
      background-color: #161b22;
      color: #e6edf3;
      border: none;
      padding: 10px 20px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.5);
    }

    .btn-back:hover {
      background-color: #21262d;
    }

    .details-container {
      margin-top: 40px;
    }

    .flag {
      width: 100%;
      border-radius: 10px;
    }

    .details-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .details p {
      margin-bottom: 8px;
    }

    .details span {
      color: #8b949e;
    }

    .borders {
      margin-top: 20px;
    }

    .border-country {
      background-color: #161b22;
      padding: 6px 12px;
      border-radius: 6px;
      margin-right: 5px;
      margin-bottom: 5px;
      display: inline-block;
      font-size: 12px;
    }

    .search-filter {
      display: flex;
      flex-direction: column;
      gap: 15px;
      margin: 20px 0;
    }

    @media(min-width: 768px) {
      .details-container {
        display: flex;
        align-items: center;
        gap: 50px;
      }
    }

    @media(min-width: 768px) {
      .search-filter {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .search-box {
        width: 40%;
      }

      .filter-box {
        width: 200px;
      }
    }

    @media (min-width: 768px) {
    .search-filter {
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
    }

    .search-box-wrapper {
      width: 60%;
    }

    .filter-box-wrapper {
      width: 30%;
    }
}
  </style>
</head>
<body>

  <nav class="navbar">
    <div class="container d-flex justify-content-between">
      <h5 class="mb-0">Where in the world?</h5>
      <button class="btn btn-outline-light btn-sm">🌙 Dark Mode</button>
    </div>
  </nav>

  <div class="container">