<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentColor;
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

        FilamentColor::register([
            'primary' => Color::Cyan,
        ]);

        Filament::serving(function () {
            Filament::registerNavigationGroups([
                                                   NavigationGroup::make()
                                                       ->label('Query Management'),
                                                   NavigationGroup::make()
                                                       ->label('Students Management'),
                                                   NavigationGroup::make()
                                                       ->label('Academic Management')
                                                       ->collapsed(),

                                                   NavigationGroup::make()
                                                       ->label('Finance Management')
                                                       ->collapsed(),

                                                   NavigationGroup::make()
                                                       ->label('Users Management')
                                               ]);
        });


    }
}
