<?php

declare(strict_types=1);

namespace Tpetry\PostgresqlEnhanced\Types;

class CidrType extends BaseType
{
    /**
     * Gets the name of this type.
     */
    public function getName()
    {
        return 'cidr';
    }
}