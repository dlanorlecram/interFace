<?php
namespace AppBundle\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class DemandeurGenre extends AbstractEnumType
{
    const HOMME = 'H';
    const FEMME = 'F';
    const AUTRE = 'A';

    protected static $choices = [
        self::HOMME => 'Homme',
        self::FEMME => 'Femme',
        self::AUTRE => 'Autre'
    ];
}
