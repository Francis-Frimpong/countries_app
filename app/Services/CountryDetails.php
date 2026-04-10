<?php
namespace App\Services;

require_once __DIR__ ."/../Services/ApiService.php";

class CountryDetails
{
    static public function getCountryByCode($code = null)
    {
        $data = ApiService::get( "https://restcountries.com/v3.1/alpha/{$code}");
        return $data;
    }
}
        