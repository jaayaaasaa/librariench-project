<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PeminjamanResource\Pages;
use App\Filament\Resources\PeminjamanResource\RelationManagers;
use App\Models\Peminjaman;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\Layout\Grid;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PeminjamanResource extends Resource
{
    protected static ?string $model = Peminjaman::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-up-tray';
    protected static ?string $navigationGroup = 'Perpustakaan';
    protected static ?string $navigationLabel = 'Peminjaman';
    protected static ?string $slug = 'peminjaman';
    protected static ?string $pluralLabel = 'Peminjaman';
    protected static ?string $pluraModellLabel = 'Peminjaman';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('tanggal_pinjam')
                    ->required()
                    ->native(false)
                    ->closeOnDateSelection(),
                DatePicker::make('tanggal_kembali')
                    ->required()
                    ->native(false)
                    ->closeOnDateSelection(),
                Select::make('buku_id')
                    ->required()
                    ->label('Judul Buku')
                    ->relationship('buku', 'judul')
                    ->columnSpanFull() 
                    ->multiple()
                    ->preload(),  
                Select::make('users_id')
                    ->required()
                    ->relationship('user', 'name')
                    ->default(auth()->user()->id)
                    ->disabled()
                    ->dehydrated()
                    ->columnSpanFull()
                    ->label('Nama Peminjam'), 
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Split::make([
                    Grid::make([
                        'lg' => 3,
                    ])
                    ->schema([
                        Stack::make([
                            Tables\Columns\TextColumn::make('tanggal_pinjam')
                                ->date('d F Y')
                                ->searchable()
                                ->sortable()
                                ->description('Tgl Dipinjam', 'above')
                                ->color('success'),
                            Tables\Columns\TextColumn::make('tanggal_kembali')
                                ->date('d F Y')
                                ->searchable()
                                ->sortable()
                                ->description('Tgl Dikembalikan', 'above')
                                ->color('success'),                   
                        ]),
                        Stack::make([
                            Tables\Columns\TextColumn::make('Buku.judul')
                            ->badge()
                            ->searchable()
                            ->description('Judul Buku Yang Dipinjam', 'above'),
                        ]),  
                        Stack::make([
                            Tables\Columns\TextColumn::make('User.name')
                                ->label('Nama Peminjam')
                                ->searchable()
                                ->description('Nama Peminjam', 'above'),
                            Tables\Columns\TextColumn::make('id')
                                ->label('ID Peminjaman')
                                ->description('ID Peminjaman', 'above'),
                        ]),                      
                ])
            ]),
                

                    
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\ViewAction::make(),
                ]),
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
            'index' => Pages\ManagePeminjaman::route('/'),
        ];
    }
}
