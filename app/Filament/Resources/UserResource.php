<?php

namespace App\Filament\Resources;

use App\Models\User;
use Filament\Tables;
use App\Enums\RoleEnum;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Enums\GenderEnum;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationGroup = 'Pengaturan';
    protected static ?string $modelLabel = 'User';
    protected static ?string $navigationLabel = 'User';
    protected static ?string $slug = 'user';
    protected static ?int $navigationSort = 3;
    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(2)
            ->schema([
                Section::make(Str::title(__('account')))
                    ->icon('heroicon-o-user')
                    ->columnSpan(1)
                    ->schema([
                        TextInput::make('name')
                            ->label(Str::title(__('nama')))
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (Set $set, ?string $state) {
                                $set('username', $state);
                                $set('email', Str::lower(Str::replace(' ', '', $state)) . '@gmail.com');
                            })
                            ->maxLength(255),
                        TextInput::make('username')
                            ->label(Str::title(__('username')))
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),
                        TextInput::make('email')
                            ->label(Str::title(__('email')))
                            ->email()
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),
                        TextInput::make('password')
                            ->label(Str::title(__('password')))
                            ->password()
                            ->revealable()
                            ->maxLength(255)
                            ->dehydrated(fn(?string $state): bool => filled($state))
                            ->required(fn(string $operation): bool => $operation === 'create')
                            ->live(onBlur: true),
                        TextInput::make('confirmation')
                            ->label(Str::title(__('konfirmasi password')))
                            ->same('password')
                            ->revealable()
                            ->password()
                            ->required(fn(string $operation): bool => $operation === 'create')
                            ->visible(fn(Get $get): bool => filled($get('password')))
                            ->maxLength(255),
                        Select::make('roles')
                            ->label(Str::title(__('level')))
                            ->required()
                            ->native(false)
                            ->preload()
                            ->relationship(
                                name: 'roles',
                                titleAttribute: 'name',
                                modifyQueryUsing: static function (Builder $query) {
                                    return $query
                                        ->when(
                                            auth()->user()->hasAnyRole(RoleEnum::SuperAdmin),
                                            function ($query) {
                                                return $query;
                                            }
                                        )
                                        ->when(
                                            auth()->user()->hasAnyRole(RoleEnum::Admin),
                                            function ($query) {
                                                return $query->where('name', RoleEnum::User);
                                            }
                                        )
                                        ->when(
                                            auth()->user()->hasAnyRole(RoleEnum::User),
                                            function ($query) {
                                                return $query->where('name', RoleEnum::User);
                                            }
                                        );
                                },
                            ),
                    ]),
                Section::make(Str::title(__('Profil')))
                    ->icon('heroicon-o-user-circle')
                    ->relationship('profile')
                    ->columnSpan(1)
                    ->schema([
                        Radio::make('gender')
                            ->label(Str::title(__('jenis kelamin')))
                            ->required()
                            ->inline()
                            ->inlineLabel(false)
                            ->default(GenderEnum::Male->value)
                            ->options(GenderEnum::class),
                        DatePicker::make('birth_date')
                            ->label(Str::title(__('tanggal lahir')))
                            ->required()
                            ->default(now()),
                        TextInput::make('phone')
                            ->label(Str::title(__('nomor hp/wa')))
                            ->helperText(Str::title(__('masukkan nomor hp/wa aktif Anda, contoh: 81234567890.')))
                            ->unique(ignoreRecord: true)
                            ->required()
                            ->tel()
                            ->prefix('+62')
                            ->regex('/^[0-9]{1,20}$/')
                            ->minLength(8)
                            ->maxLength(20),
                        FileUpload::make('file')
                            ->label(Str::title(__('file')))
                            ->helperText(Str::title(__('ukuran maksimal: 1 MB. rasio: 1:1')))
                            ->directory('user/' . date('Y/m'))
                            ->optimize('webp')
                            ->image()
                            ->imageEditor()
                            ->downloadable()
                            ->openable()
                            ->maxSize(1024),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('id', 'desc')
            ->columns([
                TextColumn::make('index')
                    ->label(Str::title(__('no.')))
                    ->rowIndex(isFromZero: false),
                ImageColumn::make('profile.file')
                    ->label(Str::title(__('file')))
                    ->defaultImageUrl(asset('/image/default-user.svg'))
                    ->circular()
                    ->toggleable(),
                TextColumn::make('name')
                    ->label(Str::title(__('nama')))
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('username')
                    ->label(Str::title(__('username')))
                    ->copyable()
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('email')
                    ->label(Str::title(__('email')))
                    ->copyable()
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('roles.name')
                    ->label(Str::title(__('peran')))
                    ->default('-')
                    ->badge()
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make()->color('secondary'),
                    Tables\Actions\EditAction::make()->color('success'),
                    Tables\Actions\DeleteAction::make()->color('danger'),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
