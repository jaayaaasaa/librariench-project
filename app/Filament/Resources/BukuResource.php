<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BukuResource\Pages;
use App\Filament\Resources\BukuResource\RelationManagers;
use App\Models\Buku;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Grid;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextInputColumn;
use Filament\Tables\Table;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use PhpParser\Node\Expr\Cast\String_;
use SebastianBergmann\Type\VoidType;

class BukuResource extends Resource
{
    
    protected static ?string $model = Buku::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationGroup = 'Perpustakaan';
    protected static ?string $navigationLabel = 'Buku';
    protected static ?string $slug = 'buku';
    protected static ?string $pluralLabel = 'Buku';
    protected static ?string $pluraModellLabel = 'Buku';
   
    // public function mount(string $record) : void
    // {
    //     $this->record = Buku::find($record);

    //     $book = $this->record->buku;
    // }

    // public function getRecord()
    // {
    //     return $this->record;
    // }
    public static function form(Form $form): Form
    { 
        
        return $form
            ->schema([
                Textarea::make('judul')->required()
                    ->columnSpanFull(),
                TextArea::make('deskripsi')
                    ->columnSpanFull(),
                TextInput::make('kode_buku')->required(),
                Select::make('kategori')
                    ->relationship('kategori', 'nama_kategori')
                    ->multiple()
                    ->preload(),
                DatePicker::make('tahun_terbit')
                    ->required()
                    ->native(false)
                    ->closeOnDateSelection()
                    ->columnSpanFull(),
                Select::make('pengarang')
                    ->relationship('pengarang', 'nama_pengarang'),
                Select::make('penerbit')
                    ->relationship('penerbit', 'nama_penerbit'),
                FileUpload::make('cover')
                    ->image()
                    ->directory('cover')
                    ->columnSpanFull(),
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
                            TextColumn::make('judul')
                                ->searchable()
                                ->weight('bold')
                                ->color('primary')
                                ->size('lg')
                                ->sortable(),
                            TextColumn::make('Pengarang.nama_pengarang')
                                ->searchable()
                                ->color('gray')
                                ->icon('heroicon-o-pencil')
                                ->sortable(),
                            TextColumn::make('Penerbit.nama_penerbit')
                                ->searchable()
                                ->color('gray')
                                ->icon('heroicon-o-home-modern')
                                ->sortable(),
                            TextColumn::make('Kategori.nama_kategori')
                                ->searchable()
                                ->color('gray')
                                ->icon('heroicon-o-tag')
                                ->sortable(),
                            TextColumn::make('tahun_terbit')
                                ->searchable()
                                ->date('d F Y')
                                ->description('Tahun Terbit', 'above')
                                ->icon('heroicon-o-calendar')
                                ->color('success')
                                ->size('lg')
                                ->badge()
                                ->sortable(),
                        ])->columnSpan(2),
                        Stack::make([
                            ImageColumn::make('cover')
                                ->square()
                                ->height(150)
                                ->width(100),
                            TextColumn::make('kode_buku')
                                ->searchable()
                                ->badge()
                                ->color('success')
                                ->sortable(),
                            TextInputColumn::make('status')
                                ->disabled()
                                ->searchable(),
                            
                        ])->columnSpan(1),
                    ])
                // Tables\Columns\TextColumn::make('judul')
                //     ->searchable()
                //     ->description('Judul Buku', 'above')
                //     ->color('primary'),         
                // Tables\Columns\TextColumn::make('tahun_terbit')
                //     ->searchable()
                //     ->date('d F Y') ,        
                // Tables\Columns\TextColumn::make('Pengarang.nama_pengarang')
                //     ->searchable(),       
                // Tables\Columns\TextColumn::make('Penerbit.nama_penerbit')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('kode_buku')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('Kategori.nama')
                //     ->searchable(),
                // Tables\Columns\TextInputColumn::make('status')
                //     ->disabled(),
                ])
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
            'index' => Pages\ManageBuku::route('/'),
        ];
    }
}
