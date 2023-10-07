<?php

namespace Goldfinch\Incognito\Extensions;

use SilverStripe\Control\Cookie;
use SilverStripe\Core\Extension;
use SilverStripe\Core\Environment;

class LogoutHandlerExtension extends Extension
{
    public function afterLogout()
    {
        $request = $this->owner->getRequest();

        // $request->offsetUnset('BackURL');
        // $request->addHeader('X-Backurl', '/');
        Cookie::set(Environment::getEnv('APP_SESSION_INCOGNITO'), false);
    }
}
