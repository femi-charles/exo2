<?php


function my_create_continent($continentNameToAdd, &$map) {
    if (is_array($map)) {
        if (isset($map[$continentNameToAdd])) {
            return $map; 
        }
        $map[$continentNameToAdd] = []; 
    } else {
        echo "Failure to get continent.\n";
        return null;
    }
    return $map;
}


function my_create_country($countryNameToAdd, $continentName, &$map) {
    if (isset($map[$continentName])) {
        if (isset($map[$continentName][$countryNameToAdd])) {
            return $map; 
        }
        $map[$continentName][$countryNameToAdd] = []; 
    } else {
        echo "Failure to get continent.\n";
        return null;
    }
    return $map;
}


function my_create_city($cityNameToAdd, $postalCodeOfCityToAdd, $countryName, $continentName, &$map) {
    if (isset($map[$continentName])) {
        if (isset($map[$continentName][$countryName])) {
            if (isset($map[$continentName][$countryName][$cityNameToAdd])) {
                return $map;
            }
            $map[$continentName][$countryName][$cityNameToAdd] = $postalCodeOfCityToAdd; 
        } else {
            echo "Failure to get country.\n";
            return null;
        }
    } else {
        echo "Failure to get continent.\n";
        return null;
    }
    return $map;
}


function my_get_countries_of_continent($continentName, $map) {
    if (isset($map[$continentName])) {
        return array_keys($map[$continentName]); 
    }
    echo "Failure to get continent.\n";
    return null;
}


function my_get_cities_of_country($countryName, $continentName, $map) {
    if (isset($map[$continentName])) {
        if (isset($map[$continentName][$countryName])) {
            return array_keys($map[$continentName][$countryName]); 
        }
        echo "Failure to get country.\n";
        return null;
    }
    echo "Failure to get continent.\n";
    return null;
}


function my_get_city_postal_code($cityName, $countryName, $continentName, $map) {
    if (isset($map[$continentName])) {
        if (isset($map[$continentName][$countryName])) {
            if (isset($map[$continentName][$countryName][$cityName])) {
                return $map[$continentName][$countryName][$cityName]; 
            }
            echo "Failure to get city.\n";
            return null;
        }
        echo "Failure to get country.\n";
        return null;
    }
    echo "Failure to get continent.\n";
    return null;
}


$map = array();
my_create_continent("Europe", $map);
my_create_country ("France", "Europe", $map);
my_create_city("Marseille", "13000", "France", "Europe", $map);
var_dump($map);