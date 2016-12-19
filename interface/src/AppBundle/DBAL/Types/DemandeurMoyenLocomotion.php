<?php
namespace AppBundle\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class DemandeurMoyenLocomotion extends AbstractEnumType
{
    const VOITURE      = 'V';
    const MOTOCYCLETTE = 'M';
    const SCOOTER      = 'S';
    const VELO         = 'V';
    const BUS          = 'B';
    const AUTRE        = 'Au';
    const AUCUN        = 'Ac';

    protected static $choices = [
        self::VOITURE      => 'Voiture',
        self::MOTOCYCLETTE => 'Motocyclette',
        self::SCOOTER      => 'Scooter',
        self::VELO         => 'Vélo',
        self::BUS          => 'Bus',
        self::AUTRE        => 'Autre',
        self::AUCUN        => 'Aucun'
    ];
}
