<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
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
use Filament\Tables\Table;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;
use STS\FilamentImpersonate\Tables\Actions\Impersonate;

use function Laravel\Prompts\text;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Setting';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Username')
                    ->required(),
                TextInput::make('email')
                    ->email()
                    ->required(),
                TextInput::make('password')
                    ->password()
                    ->required(),
                TextInput::make('telpon')
                    ->label('Nomor Telepon')
                    ->required(),
                Textarea::make('alamat')
                    ->columnSpanFull()
                    ->required(),
                Select::make('roles')
                    ->required()
                    ->multiple()
                    ->preload()
                    ->relationship('roles', 'name')
                    ->visibleOn('edit')
                    ->columnSpanfull(),
                FileUpload::make('avatar')
                    ->label('Foto Profil')
                    ->image()
                    ->previewable()
                    ->openable()
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
                        Split::make([
                            Tables\Columns\ImageColumn::make('avatar')
                                ->circular()
                                ->grow(false)
                                ->height(70),
                            Stack::make([
                                Tables\Columns\TextColumn::make('name')
                                    ->searchable()
                                    ->weight('bold'),
                                Tables\Columns\TextColumn::make('roles.name')
                                    ->searchable()
                                    ->colors(['gray']),
                            ]),
                        ])->columnSpan(2),
                        Stack::make([
                            Tables\Columns\TextColumn::make('telpon')
                                ->icon('heroicon-o-phone')
                                ->searchable()
                                ->iconPosition('before'),
                            Tables\Columns\TextColumn::make('email')
                                ->icon('heroicon-o-envelope')
                                ->searchable()
                                ->iconPosition('before'),
                            Tables\Columns\TextColumn::make('alamat')
                                ->icon('heroicon-o-home')
                                ->searchable()
                                ->columnSpanFull()
                                ->iconPosition('before'),
                        ])->columnSpan(1),
                    ]),
                ]),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Impersonate::make()
                ->guard('web')
                ->redirectTo(route('filament.librarian.pages.dashboard')),
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
            'index' => Pages\ManageUser::route('/'),
        ];
    }

   
}
