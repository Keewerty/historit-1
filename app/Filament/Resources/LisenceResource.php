<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Lisences;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\LisenceResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LisenceResource\RelationManagers;
use Faker\Provider\ar_EG\Text;

class LisenceResource extends Resource
{
    protected static ?string $model = Lisences::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('Name'),
                TextInput::make('Product Key'),
                TextInput::make('Email'),
                TextInput::make('License Name')
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Name'),
                TextColumn::make('Product Key'),
                TextColumn::make('Email'),
                TextColumn::make('License Name'),
                TextColumn::make('created_at')
                ->dateTime()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListLisences::route('/'),
            'create' => Pages\CreateLisence::route('/create'),
            'edit' => Pages\EditLisence::route('/{record}/edit'),
        ];
    }
}
