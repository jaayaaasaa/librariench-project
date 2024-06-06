<?php


namespace App\Enum;
use Filament\Support\Contracts\HasLabel;

enum jenisKelamin: string implements HasLabel
{
    case LakiLaki = 'L';
    case Perempuan = 'P';
    
    public function getLabel(): ?string
    {
        return $this->name;
        
        // or
    
        return match ($this) {
            self::LakiLaki => 'Laki-Laki',
            self::Perempuan => 'Perempuan',
            // default

        };
    }
}


