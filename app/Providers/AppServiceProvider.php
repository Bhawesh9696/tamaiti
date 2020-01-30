<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
        view()->composer('*', function($view)
        {            
            $books = DB::table('books')->get();
            
            $columns = DB::getSchemaBuilder()->getColumnListing('books');
            if(!empty($columns))
            {
                if (($key = array_search('id', $columns)) !== false) {
                    unset($columns[$key]);
                }
                
                if (($key = array_search('isbn', $columns)) !== false) {
                    unset($columns[$key]);
                }
                
                if (($key = array_search('created_at', $columns)) !== false) {
                    unset($columns[$key]);
                }
                
                if (($key = array_search('updated_at', $columns)) !== false) {
                    unset($columns[$key]);
                }
            }
            
            $view->with([
                'books'=>$books,
                'columns'=>$columns                
            ]);
        });
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
