<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
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
        VerifyEmail::toMailUsing(function($notifiable,$url){
            return (new MailMessage)
            ->subject('Verificar Cuenta')
            ->line('Para completar la verificación debes abrir el enlace a continuación')
            ->action('Confirmar Cuenta',$url)
            ->line('Si no creaste esta cuenta, puedes ignorar este mensaje');
        });
    }
}
