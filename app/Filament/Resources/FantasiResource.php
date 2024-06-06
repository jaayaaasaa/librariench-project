<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FantasiResource\Pages;
use App\Filament\Resources\FantasiResource\RelationManagers;
use App\Models\Fantasi;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FantasiResource extends Resource
{
    protected static ?string $model = Fantasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Kategori';
    protected static ?string $navigationLabel = 'Fantasi';
    protected static ?string $slug = 'fantasi';
    protected static ?string $pluralLabel = 'fantasi';
    protected static ?string $pluraModellLabel = 'fantasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('judul_buku')
                    ->relationship('buku', 'judul'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Buku.judul'),
                TextColumn::make('id')
                    ->label('Urutan'),
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
            'index' => Pages\ManageFantasi::route('/'),
        ];
    }
}
