<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Article;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Intervention\Image\Facades\Image;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ArticleResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ArticleResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Artikel';
    protected static ?string $navigationLabel = 'Artikel';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(3)
            ->schema([
                Section::make()
                    ->columnSpan(2)
                    ->schema([
                        TextInput::make('title')
                            ->label(Str::title(__('judul')))
                            ->live(onBlur: true)
                            ->maxLength(255)
                            ->afterStateUpdated(function (Set $set, ?string $state) {
                                $set('slug', Str::slug($state));
                            })
                            ->required(),
                        TextInput::make('slug')
                            ->disabled()
                            ->maxLength(255)
                            ->dehydrated()
                            ->helperText('Slug akan otomatis dihasilkan dari judul.')
                            ->required(),
                        RichEditor::make('content')
                            ->label(Str::title(__('isi')))
                            ->required(),
                    ]),
                Section::make()
                    ->columnSpan(1)
                    ->schema([
                        Toggle::make('is_active')
                            ->label(Str::title(__('status')))
                            ->default(true),
                        Select::make('category_id')
                            ->label(Str::title(__('kategori')))
                            ->required()
                            ->forceSearchCaseInsensitive()
                            ->searchable()
                            ->relationship(
                                name: 'category',
                                titleAttribute: 'title',
                                modifyQueryUsing: fn(Builder $query) => $query
                                    ->orderBy('title')
                                    ->where('is_active', true)
                            )
                            ->createOptionForm([
                                TextInput::make('title')
                                    ->label(Str::title(__('judul')))
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
                                TextInput::make('slug')
                                    ->label(Str::title(__('slug')))
                                    ->required()
                                    ->maxLength(255)
                                    ->disabled()
                                    ->dehydrated(),
                            ])
                            ->editOptionForm([
                                TextInput::make('title')
                                    ->label(Str::title(__('judul')))
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
                                TextInput::make('slug')
                                    ->label(Str::title(__('slug')))
                                    ->required()
                                    ->maxLength(255)
                                    ->disabled()
                                    ->dehydrated(),
                            ])
                            ->helperText('Anda bisa membuat Kategori baru jika tidak tersedia.'),
                        FileUpload::make('file')
                            ->label(Str::title(__('gambar')))
                            ->directory('article-image/' . date('Y/m'))
                            ->optimize('webp')
                            ->image()
                            ->imageEditor()
                            ->resize(60)
                            ->openable()
                            ->downloadable()
                            ->maxSize(20480),
                        FileUpload::make('attachment')
                            ->label(Str::title(__('lampiran')))
                            ->directory('article-attachment/' . date('Y/m'))
                            ->optimize('webp')
                            ->multiple()
                            ->image()
                            ->imageEditor()
                            ->resize(60)
                            ->openable()
                            ->downloadable()
                            ->maxSize(20480),
                    ]),
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
                ImageColumn::make('file')
                    ->label(Str::headline(__('file')))
                    ->defaultImageUrl(asset('/image/default-img.svg'))
                    ->circular()
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('title')
                    ->sortable()
                    ->label(Str::title(__('judul')))
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('category.title')
                    ->label(Str::title(__('kategori')))
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'view' => Pages\ViewArticle::route('/{record}'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
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
