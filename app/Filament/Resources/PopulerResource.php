<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PopulerResource\Pages;
use App\Filament\Resources\PopulerResource\RelationManagers;
use App\Models\Populer;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Repeater;


class PopulerResource extends Resource
{
    protected static ?string $model = Populer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Kategori';
    protected static ?string $navigationLabel = 'Populer';
    protected static ?string $slug = 'populer';
    protected static ?string $pluralLabel = 'Populer';
    protected static ?string $pluraModellLabel = 'Populer';

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
            'index' => Pages\ManagePopuler::route('/'),
        ];
    }
}
