<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenerbitResource\Pages;
use App\Filament\Resources\PenerbitResource\RelationManagers;
use App\Models\Penerbit;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenerbitResource extends Resource
{
    protected static ?string $model = Penerbit::class;

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';
    protected static ?string $navigationGroup = 'Perpustakaan';
    protected static ?string $navigationLabel = 'Penerbit';
    protected static ?string $slug = 'penerbit';
    protected static ?string $pluralLabel = 'penerbit';
    protected static ?string $pluraModellLabel = 'penerbit';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_penerbit'),
                TextInput::make('alamat_penerbit'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_penerbit'),
                Tables\Columns\TextColumn::make('alamat_penerbit'),                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePenerbit::route('/'),
        ];
    }
}
