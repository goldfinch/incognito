<?php

namespace Goldfinch\Incognito\Extensions;

use SilverStripe\Control\Cookie;
use SilverStripe\Core\Extension;
use SilverStripe\Core\Environment;
use SilverStripe\Admin\AdminRootController;

class DirectorExtension extends Extension
{
    public function updateRules(&$rules)
    {
        $sessionName = Environment::getEnv('APP_SESSION_INCOGNITO');
        $path = AdminRootController::config()->get('url_base');

        unset($rules['admin']);

        // $rules = [Environment::getEnv('SS_ADMIN_INCOGNITO') => 'SilverStripe\Admin\AdminRootController'] + $rules;

        if (($_SERVER['REQUEST_URI'] == '/' . $path) && !isset($_COOKIE[$sessionName]))
        {
            Cookie::set($sessionName, 11);
        }

        if (!isset($_COOKIE[$sessionName]) || $_COOKIE[$sessionName] != 11)
        {
            unset(
                $rules['admin/graphql'],
                $rules['Security//$Action/$ID/$OtherID'],
                $rules['CMSSecurity//$Action/$ID/$OtherID'],
                $rules['admin'],
                $rules['dev'],
                $rules['__decrypt'],
                $rules['dev/cron/$Action'],
                $rules['admin/cms'],
                $rules['admin/campaigns'],
                $rules['admin/reports'],
            );
        }
    }
}
