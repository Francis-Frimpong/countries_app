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

   public static function filterCountries($countries, $search = null, $region = null)
    {
      return array_values(array_filter($countries, function ($country) use ($search, $region)  {
            
            $name = strtolower($country['name']['common']);
            $countryRegion = $country['region'];

            $matchesSearch = empty($search) || str_contains($name, strtolower($search));
            $matchesRegion = empty($region) || strtolower($countryRegion === $region);

            return $matchesSearch && $matchesRegion;
        }));
    }
}
        