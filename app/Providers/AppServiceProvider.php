<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ProjectRepository;
use App\RemoteServices\ProjectRemoteService;
use App\Interfaces\Repositories\IProjectRepository;
use App\Interfaces\RemoteServices\IProjectRemoteService;
use Illuminate\Routing\UrlGenerator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (env('REDIRECT_HTTPS')) {
            $this->app['request']->server->set('HTTPS', true);
        }
        $this->app->bind(IProjectRepository::class, ProjectRepository::class);
        $this->app->bind(IProjectRemoteService::class, ProjectRemoteService::class);
        $this->app->when(ProjectRemoteService::class)
            ->needs('$baseUrlProjectApi')
            ->giveConfig('app.base_url_project_api');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
        if (env('REDIRECT_HTTPS')) {
            $url->formatScheme('https://');
        }
    }
}
