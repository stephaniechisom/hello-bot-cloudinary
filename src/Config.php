<?php


namespace App;

Class Config {

   
  static $facebookCredentials = [

    'verifyToken' => 'example',

    'accessToken' => 'EAADSzOfQaZBwBABdLlEbTzVd3XY8BJIrQWrg5ntZAP2PH6bP1NGn83wE6bhcC1n6COZCO8nFNFUe3XxmFL2QvwtOn1jyYtJZCnV2dmwfb2tAN4IJCIkMZBVCqbPwv0ZAWz4ufNnBpEqA1oDJwwTvZCLpOqtiX5YKaNZBE4AZA3x3flokllpdB3vyz'

  ];

   
  static function getVerifyToken() {

    return  Config::$facebookCredentials['verifyToken'];

  }

  static function getAccessToken() {

    return  Config::$facebookCredentials['accessToken'];

  }

  

}
