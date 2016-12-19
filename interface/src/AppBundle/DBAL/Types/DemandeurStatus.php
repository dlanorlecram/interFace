<?php
namespace AppBundle\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class DemandeurStatus extends AbstractEnumType
{
    const ANNONCEUR_SENTINELLE = 'AS';
    const FLUX                 = 'F';
    const IRVIN                = 'I';
    const NUMERIQUE            = 'N';
    const SECURITE             = 'S';

    protected static $choices = [
        self::ANNONCEUR_SENTINELLE => 'Annonceur sentinelle',
        self::FLUX                 => 'Flux',
        self::IRVIN                => 'IRVIN',
        self::NUMERIQUE            => 'Numérique',
        self::SECURITE             => 'Sécurité'
    ];
}
