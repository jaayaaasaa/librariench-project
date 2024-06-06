<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengarangResource\Pages;
use App\Filament\Resources\PengarangResource\RelationManagers;
use App\Models\Pengarang;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengarangResource extends Resource
{
    protected static ?string $model = Pengarang::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil';
    protected static ?string $navigationGroup = 'Perpustakaan';
    protected static ?string $navigationLabel = 'Pengarang';
    protected static ?string $slug = 'pengarang';
    protected static ?string $pluralLabel = 'pengarang';
    protected static ?string $pluraModellLabel = 'pengarang';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_pengarang'),
                DatePicker::make('tanggal_lahir')
                    ->native(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_pengarang'),
                TextColumn::make('tanggal_lahir'),
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
            'index' => Pages\ManagePengarang::route('/'),
        ];
    }
}
