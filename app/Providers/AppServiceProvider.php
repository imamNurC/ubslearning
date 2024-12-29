<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\ServiceProvider;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\MentorMiddleware;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

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
        Route::aliasMiddleware('admin', AdminMiddleware::class);
        Route::aliasMiddleware('user', UserMiddleware::class);
        Route::aliasMiddleware('mentor', MentorMiddleware::class);
        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
            $imageUrl = 'https://raw.githubusercontent.com/imamNurC/ubslearning/refs/heads/main/public/image/Logo.png';

            return (new MailMessage)
                ->from('support@domain.com', 'Malaz Solutions')
                ->subject('Verifikasi email address')
                ->view('emails.verify', ['url' => $url, 'imageUrl' => $imageUrl]);
        });
    }
}
