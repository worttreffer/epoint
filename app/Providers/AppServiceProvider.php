<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
	 /*
		Wenn eine Version von MySQL (älter als Version 5.7.7) oder 
		MariaDB (älter als Version 10.2.2) im Einsatz ist, 
		mussen die von Migrationen generierte Standard-Zeichenfolgenlänge 
		auf 191 konfigurieren, damit MySQL Indizes erstellt. 
	 */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
