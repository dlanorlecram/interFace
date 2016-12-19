<?php
namespace AppBundle\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class DemandeurNiveauEtude extends AbstractEnumType
{
    const SANS_DIPLOME = 'SD';
    const CAP          = 'CAP';
    const BEP          = 'BEP';
    const BAC          = 'Bac';
    const BP           = 'BP';
    const BAC_2        = 'Bac2';
    const BAC_3        = 'Bac3';
    const BAC_4        = 'Bac4';

    protected static $choices = [
        self::SANS_DIPLOME => 'Sans Diplome',
        self::CAP          => 'CAP',
        self::BEP          => 'BEP',
        self::BAC          => 'Bac',
        self::BP           => 'Bac Pro',
        self::BAC_2        => 'Bac +2',
        self::BAC_3        => 'Bac +3',
        self::BAC_4        => 'Bac +4'
    ];
}
