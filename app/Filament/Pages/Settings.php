<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Actions\Action;
use Filament\Support\Enums\ActionSize;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

    protected function getHeaderActions(): array
    {
        return [
            Action::make('Visit Home')->icon('heroicon-m-home')->size(ActionSize::Medium)->url('/'),
        ];
    }

}
