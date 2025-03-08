<?php

namespace App\Providers;

use App\Models\Course;
use App\Models\Schedule;
use App\Policies\CoursePolicy;
use App\Policies\SchedulePolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

        Gate::policy(Schedule::class, SchedulePolicy::class);
        Gate::policy(Course::class, CoursePolicy::class);
    }
}
