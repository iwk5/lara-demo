<?php

namespace App\Providers;
use View;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Blade::directive('age', function ($exp){
            $data=json_decode($exp);
            $year=$data[0];
            $month=$data[1];
            $date=$data[2];
            $age=Carbon::createFromDate($year,$month,$date)->age;
           return "<?php echo $age; ?>" ;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        View::share('myname','Waqas');
    }
}
