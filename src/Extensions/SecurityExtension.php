<?php

namespace Goldfinch\Incognito\Extensions;

use SilverStripe\Control\Cookie;
use SilverStripe\Core\Extension;
use SilverStripe\Core\Environment;
use SilverStripe\Security\Security;

class SecurityExtension extends Extension
{
    public function updateLink(&$link)
    {
        //
    }

    public function onBeforeSecurityLogin()
    {
        if (!Security::getCurrentUser()) {
            // Cookie::set(Environment::getEnv('APP_SESSION_INCOGNITO'), false); // null
        }
    }
}
