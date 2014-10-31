<?php

namespace Rheck\DatatableBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Rheck\DatatableBundle\DependencyInjection\RheckDatatableExtension;

class RheckDatatableBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new RheckDatatableExtension();
    }
}
