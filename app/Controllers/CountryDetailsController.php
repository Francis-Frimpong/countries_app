<?php
namespace App\Controllers;

use App\Services\CountryDetails;

require_once __DIR__ ."/../Services/CountryDetails.php";


class CountryDetailsController
{
    public function countryDetailPage()
    {
        $code = $_GET['code'] ?? null;

        if (!$code) {
            die("No country selected");
        }

        $country = CountryDetails::getCountryByCode($code);

        // API returns array → take first item
        $country = $country[0] ?? null;

        if (!$country) {
            die("Country not found");
        }

        $pageTitle = 'Country Detail';

        require __DIR__ . '/../Views/country_detail.php';

    }
}