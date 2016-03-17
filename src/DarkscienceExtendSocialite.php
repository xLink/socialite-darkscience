<?php

namespace SocialiteProviders\Darkscience;

use SocialiteProviders\Manager\SocialiteWasCalled;

class DarkscienceExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'darkscience', __NAMESPACE__.'\Provider'
        );
    }
}
