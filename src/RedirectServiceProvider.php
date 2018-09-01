<?php
namespace MDooley47\Redirect;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\ServiceProvider;

use MDooley47\UrlValidator\UrlValidator;

class RedirectServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return string
     */
    public function boot()
    {
        RedirectResponse::macro('defaultTarget', function($url, $options = null) {
            if (($target = $this->getTargetUrl() == null) || (! UrlValidator::match($target,
                    $options)))
            {
                $this->setTargetUrl($url);
            }
        });
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}