<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengembalianResource\Pages;
use App\Filament\Resources\PengembalianResource\RelationManagers;
use App\Models\Anggota;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\User;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Stringable;

class PengembalianResource extends Resource
{
    protected static ?string $model = Pengembalian::class;
    protected static ?string $navigationIcon = 'heroicon-o-arrow-down-tray';
    protected static ?string $navigationGroup = 'Perpustakaan';
    protected static ?string $navigationLabel = 'Pengembalian';
    protected static ?string $slug = 'pengembalian';
    protected static ?string $pluralLabel = 'Pengembalian';
    protected static ?string $pluraModellLabel = 'Pengembalian';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('peminjaman_id')
                    ->relationship('peminjaman', 'id')
                    ->label('Id Peminjaman')
                    ->reactive()
                    ->afterStateUpdated(function ($state, Forms\Set $set) {
                        $peminjaman = Peminjaman::find($state);
                        $userId = $peminjaman ? $peminjaman->users_id : null;
                        $userNama = User::find($userId)->name ?? '';
                        $set('users_id', $userId);
                        $set('nama', $userNama);
                    }),
                TextInput::make('users_id')
                    ->readOnly(),
                TextInput::make('nama')
                    ->readOnly()
                    ->columnSpanFull(),
                DatePicker::make('tanggal_pengembalian')
                    ->required()
                    ->native(false)
                    ->live()
                    ->closeOnDateSelection(),
                    // ->afterStateUpdated(function ($state, Forms\Set $set) {
                    //     $tanggalKembali = Carbon::parse($state);
                    //     // Atur tanggal pengembalian yang diharapkan dari database atau konfigurasi lainnya
                    //     $tanggalHarusKembali = Carbon::parse('2024-05-01'); // Ganti dengan tanggal yang sesuai
                    //     $denda = 0;
    
                    //     if ($tanggalKembali->greaterThan($tanggalHarusKembali)) {
                    //         // Hitung denda di sini berdasarkan perbedaan tanggal
                    //         $perbedaanHari = $tanggalKembali->diffInDays($tanggalHarusKembali);
                    //         // Misalnya, hitung denda per hari adalah Rp 1000
                    //         $denda = $perbedaanHari * 5000;
                    //     }
    
                    //     $set('denda', $denda);
                    // }),
                TextInput::make('denda'),
                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tanggal_pengembalian')
                    ->searchable()
                    ->date('d F Y'),
                TextColumn::make('denda')
                    ->searchable(),
                TextColumn::make('Peminjaman.id')
                    ->label('Id Peminjaman')
                    ->searchable(),
                TextColumn::make('User.name')
                    ->label('Nama Peminjam')
                    ->searchable(),
                
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
            'index' => Pages\ManagePengembalian::route('/'),
        ];
    }
    

}
