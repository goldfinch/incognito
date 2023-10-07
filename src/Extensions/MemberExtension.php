<?php

namespace Goldfinch\Incognito\Extensions;

use SilverStripe\Control\Cookie;
use SilverStripe\Core\Extension;
use SilverStripe\Core\Environment;

class MemberExtension extends Extension
{
    /**
     * Triggers before afterMemberLoggedIn
     *
     * FYI: the auth can be interrupted in this method
     */
    public function authenticationSucceeded()
    {
        //
    }

    /**
     * FYI: the auth can be interrupted in this method
     */
    public function afterMemberLoggedIn()
    {
        //
    }

    public function afterMemberLoggedOut($request)
    {
        // Cookie::set(Environment::getEnv('APP_SESSION_INCOGNITO'), false); // null
    }
}
