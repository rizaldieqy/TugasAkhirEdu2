<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Users\Alamat;
use DB;
use View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $contact = Alamat::all();
        View::composer(['includes.users.footer','user.contact.contact-us'],function($data)
        use($contact)
        {
            $data->with('contact',$contact);
        });
    }
}
