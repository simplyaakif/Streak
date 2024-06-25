<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

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
        Model::unguard();
        Builder::macro('search', function ($field, $string) {
            return $string ? $this->where($field, 'like', '%'.$string.'%') : $this;
        });

        Filament::serving(function () {
            Filament::registerNavigationGroups([
                                                   NavigationGroup::make()
                                                       ->label('Query Management')
                                                       ->icon('heroicon-s-shopping-cart'),
                                                   NavigationGroup::make()
                                                       ->label('Students Management')
                                                       ->icon('heroicon-s-pencil'),
                                                   NavigationGroup::make()
                                                       ->label('Academic Management')
                                                       ->icon('heroicon-s-cog')
                                                       ->collapsed(),

                                                   NavigationGroup::make()
                                                       ->label('Finance Management')
                                                       ->icon('heroicon-s-cash')
                                                       ->collapsed(),

                                                   NavigationGroup::make()
                                                       ->label('Users Management')
                                                       ->icon('heroicon-o-user-group'),
                                               ]);
        });


    }
}
