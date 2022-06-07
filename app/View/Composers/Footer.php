<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Footer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.footer'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'site_info' => $this->site_info()
        ];
    }

    public function site_info(){
        $site_info = sprintf('&copy; %1$s %2$s', date('Y'), get_bloginfo('name'));
        return $site_info;
    }
}
