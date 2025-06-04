<?php

namespace App\Filament\Resources\GuruResource\Pages;

use App\Filament\Resources\GuruResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Models\Guru;

class ListGurus extends ListRecords
{
    protected static string $resource = GuruResource::class;
    protected static ?string $title = 'Daftar Guru SIJA';


    

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),

            Actions\Action::make('Jumlah Guru')
            ->label('Jumlah Guru: ' . Guru::count())
            ->disabled()
            ->color('gray')
            //->icon('heroicon-o-user-group'), // opsional ikon
        ];
    }
}