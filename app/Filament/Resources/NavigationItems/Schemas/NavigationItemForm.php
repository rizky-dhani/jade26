<?php

namespace App\Filament\Resources\NavigationItems\Schemas;

use App\Models\NavigationItem;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class NavigationItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('label')
                    ->required()
                    ->maxLength(255),
                TextInput::make('url')
                    ->required()
                    ->maxLength(255),
                Select::make('parent_id')
                    ->label('Parent Item')
                    ->options(NavigationItem::whereNull('parent_id')->pluck('label', 'id'))
                    ->searchable()
                    ->placeholder('Select a parent item'),
                TextInput::make('order')
                    ->numeric()
                    ->default(0),
                Select::make('type')
                    ->options([
                        'url' => 'URL',
                        'file' => 'File',
                        'route' => 'Route',
                    ])
                    ->default('url')
                    ->required(),
                Toggle::make('open_new_tab')
                    ->default(false),
                Toggle::make('is_active')
                    ->default(true),
            ]);
    }
}
