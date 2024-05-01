<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Component;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\ComponentResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ComponentResource\RelationManagers;
use App\Filament\Resources\ComponentResource\Pages\EditComponent;
use App\Filament\Resources\ComponentResource\Pages\ListComponents;
use App\Filament\Resources\ComponentResource\Pages\CreateComponent;
use Faker\Provider\ar_EG\Text;
use Illuminate\Support\Facades\Date;

class ComponentResource extends Resource
{
    protected static ?string $model = Component::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('Name'),
                TextInput::make('Serial'),
                Select::make('Category')
                    ->options([
                        'RAM' => 'RAM',
                        'Processor'=> 'Processor',
                        'VGA'=> 'VGA',
                        "SSD"=> 'SSD'
                    ])
                    ->label('Category'),
                TextInput::make('Total')
                    ->columns(3),
                TextInput::make('Location'),
                TextInput::make('Order Number'),
                TextInput::make('Purchase Cost')
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListComponents::route('/'),
            'create' => Pages\CreateComponent::route('/create'),
            'edit' => Pages\EditComponent::route('/{record}/edit'),
        ];
    }
}
