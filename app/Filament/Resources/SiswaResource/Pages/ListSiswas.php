<?php

namespace App\Filament\Resources\SiswaResource\Pages;

use App\Filament\Resources\SiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Models\Siswa;
class ListSiswas extends ListRecords
{
    protected static string $resource = SiswaResource::class;
    protected static ?string $title = 'Daftar Siswa SIJA';


    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('Jumlah Siswa')
            ->label('Jumlah Siswa: ' . Siswa::count())
            ->disabled()
            ->color('gray')
            //->icon('heroicon-o-users'), // opsional ikon
        ];
    }
}