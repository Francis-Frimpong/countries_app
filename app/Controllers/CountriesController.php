<?php
namespace App\Controllers;

use App\Services\Countries;

require_once __DIR__ ."/../Services/Countries.php";


class CountriesController
{
    public function countriesPage()
    {
        $countries = Countries::getCountries(10);
        $pageTitle = 'Countries';
        require __DIR__ . '/../Views/countries.php';

    }
}