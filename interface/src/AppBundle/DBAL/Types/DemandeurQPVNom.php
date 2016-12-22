<?php
namespace AppBundle\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class DemandeurQPVNom extends AbstractEnumType
{
    const CLEUNAY           = 'C';
    const LE_BLOSNE         = 'LB';
    const CLOTEAUX_MANCEAUX = 'CM';
    const MAUREPAS          = 'M';
    const VILLEJEAN         = 'V';

    protected static $choices = [
        self::CLEUNAY           => 'Cleunay',
        self::LE_BLOSNE         => 'Le Blosne',
        self::CLOTEAUX_MANCEAUX => 'Les Cloteaux/Champs Manceaux',
        self::MAUREPAS          => 'Maurepas',
        self::VILLEJEAN         => 'Villejean'
    ];
}
