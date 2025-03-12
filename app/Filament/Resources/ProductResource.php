<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ProductResource extends Resource
{
    protected static ?string $title = 'All Products';

    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    protected static ?string $navigationGroup = 'Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->required(),
                TextInput::make('address')
                    ->label('Address')
                    ->required(),
                TextInput::make('title')
                    ->label('Title')
                    ->required(),
                Select::make('owner_id')
                    ->label('Owner')
                    ->relationship('owner', 'name')
                    ->required(),
                FileUpload::make('image')
                    ->disk('public')
                    ->directory('public/storage')
                    ->label('Image')
                    ->image()
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('1:1')
                    ->imageResizeTargetWidth('500')
                    ->imageResizeTargetHeight('500')
                    ->multiple()
                    ->minFiles(2)
                    ->maxFiles(2)
                    ->maxParallelUploads(2),
                RichEditor::make('content')
                    ->label('Content')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('number')
                    ->label('No.')
                    ->rowIndex(),
                ImageColumn::make('image')
                    ->circular()
                    ->label('Image'),
                TextColumn::make('category.name')
                    ->label('Category')
                    ->sortable(),
                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('owner.name')
                    ->label('Owner')
                    ->searchable(),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->label('Category')
                    ->options(fn() => \App\Models\Category::pluck('name', 'slug')),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
