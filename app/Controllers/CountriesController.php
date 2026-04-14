<?php
namespace App\Controllers;

use App\Services\Countries;

require_once __DIR__ ."/../Services/Countries.php";


class CountriesController
{
    public function countriesPage()
    {
        
        $countries = Countries::getCountries();
        
        $search = $_GET['search'] ?? '';
        $region = $_GET['region'] ?? '';

        $filteredCountries = Countries::filterCountries($countries, $search, $region);
        
        $pageTitle = 'Countries';
        require __DIR__ . '/../Views/countries.php';

    }
}