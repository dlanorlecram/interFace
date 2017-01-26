<?php
namespace AppBundle\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class DemandeurAllocation extends AbstractEnumType
{
    const ARE        = 'ARE';
    const ASS        = 'ASS';
    const RSA_ACTIVE = 'RSAa';
    const RSA_SOCLE  = 'RSAs';
    const AUTRE      = 'Au';
    const AUCUN      = 'Ac';

    protected static $choices = [
        self::ARE        => 'ARE',
        self::ASS        => 'ASS',
        self::RSA_ACTIVE => 'RSA Activité',
        self::RSA_SOCLE  => 'RSA Socle',
        self::AUTRE      => 'Autre',
        self::AUCUN      => 'Aucun'
    ];
}
