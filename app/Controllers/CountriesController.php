<?php
namespace App\Controllers;

use App\Services\Countries;

require_once __DIR__ ."/../Services/Countries.php";


class CountriesController
{
    public function countriesPage()
    {
        $page = $_GET['page'] ?? 1;
        $perPage = 12;

        $countries = Countries::getCountries();

        $search = $_GET['search'] ?? '';
        $region = $_GET['region'] ?? '';

        $filteredCountries = Countries::filterCountries($countries, $search, $region);

        $totalCountries = count($filteredCountries);
        $totalPages = ceil($totalCountries / $perPage);

        $offset = ($page - 1) * $perPage;

        $pagedCountries = array_slice($filteredCountries, $offset, $perPage);

        
        $pageTitle = 'Countries';
        require __DIR__ . '/../Views/countries.php';

    }
}