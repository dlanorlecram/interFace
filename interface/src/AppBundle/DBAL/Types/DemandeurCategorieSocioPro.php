<?php
namespace AppBundle\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class DemandeurCategorieSocioPro extends AbstractEnumType
{
    const OUVRIER           = 'O';
    const OUVRIER_QUALIFIE  = 'Oq';
    const EMPLOYE           = 'E';
    const EMPLOYE_QUALIFIE  = 'Eq';
    const AGENT_DE_MAITRISE = 'AM';
    const CADRE             = 'C';
    const CADRE_SUPERIEUR   = 'Cs';
    const ARTISANT          = 'A';
    const COMMERCANT        = 'Co';

    protected static $choices = [
        self::OUVRIER           => 'Ouvrier',
        self::OUVRIER_QUALIFIE  => 'Ouvrier qualifié',
        self::EMPLOYE           => 'Employé',
        self::EMPLOYE_QUALIFIE  => 'Employé qualifié',
        self::AGENT_DE_MAITRISE => 'Agent de maitrise',
        self::CADRE             => 'Cadre',
        self::CADRE_SUPERIEUR   => 'Cadre supérieur',
        self::ARTISANT          => 'Artisant',
        self::COMMERCANT        => 'Commercant'
    ];
}
