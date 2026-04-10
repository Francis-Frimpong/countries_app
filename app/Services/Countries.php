<?php
namespace App\Services;

require_once __DIR__ ."/../Services/ApiService.php";

class Countries
{
    static public function getCountries($limit = null)
    {
        $data = ApiService::get( "https://restcountries.com/v3.1/all?fields=name,population,region,capital,flags,cca3");


    if ($limit) {
        return array_slice($data, 0, $limit);
    }

    return $data;
    }
}
        