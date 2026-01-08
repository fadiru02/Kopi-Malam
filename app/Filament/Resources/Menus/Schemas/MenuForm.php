<?php

namespace App\Filament\Resources\Menus\Schemas;

use Directory;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class MenuForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->label('Nama Menu')
                    ->live(onBlur:true)
                    ->afterStateUpdated(fn(string $state, $set)=> $set('slug',\Illuminate\Support\str::slug($state)))
                    ->required(),
                TextInput::make('slug')
                    ->disabled()
                    ->dehydrated()
                    ->unique(ignoreRecord:true)
                    ->required(),
                Select::make('type')
                    ->options(['Pagi' => 'Kopag Pagi', 'Malam' => 'Kopag Malam', 'ALL' => 'Tersedia Selalu'])
                    ->required(),
                TextInput::make('harga')
                    ->label('harga')
                    ->prefix('Rp')
                    ->required()
                    ->numeric(),
                FileUpload::make('image')
                    ->label('gambar')
                    ->image()
                    ->disk('public')
                    ->Directory('produk-kopi'),
                Textarea::make('deskripsi')
                    ->label('deskripsi')
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->label('status')
                    ->default(true)
                    ->required(),
            ]);
    }
}
