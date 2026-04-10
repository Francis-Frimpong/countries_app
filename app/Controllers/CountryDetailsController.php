<?php
namespace App\Controllers;

// use App\Services\Countries;

require_once __DIR__ ."/../Services/CountryDetails.php";


class CountryDetailsController
{
    public function countryDetailPage()
    {
        // $countries = Countries::getCountries(10);
        $pageTitle = 'Country Detail';
        require __DIR__ . '/../Views/country_detail.php';

    }
}