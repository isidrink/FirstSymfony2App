<?php

namespace eCrowd\MainBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class eCrowdMainBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
