<?php
declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->extends();
    }

    /**
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * @return void
     */
    private function extends(): void
    {
        /**
         * @param string|array $env
         * @return bool
         */
//         Blade::if('env', function ($env) {
//             return app()->environment($env);
//         });

        /**
         * @param string $arg
         * @return string
         */
        Blade::directive('set', function (string $arg): string {
            list($key, $value) = explode(',', $arg);
            return "<?php $key = $value; ?>";
        });
    }
}
