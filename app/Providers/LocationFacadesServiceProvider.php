<?php

namespace App\Providers;

use App;
use Illuminate\Support\ServiceProvider;

class LocationFacadesServiceProvider extends ServiceProvider {
   public function boot() {
      //
   }
   public function register() {
      App::bind('location',function() {
         return new \App\MyFacades\LocationFacades;
      });
   }
}