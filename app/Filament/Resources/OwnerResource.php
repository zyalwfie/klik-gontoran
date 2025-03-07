<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OwnerResource\Pages;
use App\Filament\Resources\OwnerResource\RelationManagers;
use App\Gender;
use App\Models\Owner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OwnerResource extends Resource
{
    protected static ?string $title = 'All Owner';

    protected static ?string $model = Owner::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationGroup = 'Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Name')
                    ->required(),
                Forms\Components\Radio::make('gender')
                    ->label('Gender')
                    ->options(Gender::class)
                    ->inline()
                    ->inlineLabel(false)
                    ->required(),
                Forms\Components\TextInput::make('phone')
                    ->label('Phone')
                    ->prefix('+62')
                    ->tel()
                    ->telRegex('/^8\d{9,12}$/')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->label('Avatar')
                    ->avatar(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('number')
                    ->label('No.')
                    ->rowIndex(),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Avatar')
                    ->defaultImageUrl(function ($record) {
                        return $record->gender->value === 'male'
                            ? asset('img/default-male-avatar.svg')
                            : asset('img/default-female-avatar.svg');
                    })
                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Name'),
                Tables\Columns\TextColumn::make('gender')
                    ->label('Gender')
                    ->icon(fn(Gender $state): string => $state->getIcon())
                    ->color(fn(Gender $state): string => $state->getColor())
                    ->badge(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Phone'),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOwners::route('/'),
            'create' => Pages\CreateOwner::route('/create'),
            'edit' => Pages\EditOwner::route('/{record}/edit'),
        ];
    }
}
