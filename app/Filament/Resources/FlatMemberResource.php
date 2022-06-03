<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FlatMemberResource\Pages;
use App\Filament\Resources\FlatMemberResource\RelationManagers;
use App\Models\FlatMember;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class FlatMemberResource extends Resource
{
    protected static ?string $model = FlatMember::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(
                Card::make()->columns(2)->schema([
                // Form Input Column/Area
                Forms\Components\TextInput::make('first_name')->required(),
                Forms\Components\TextInput::make('last_name')->required(),
                Forms\Components\TextInput::make('phone_number')->required(),
                Forms\Components\TextInput::make('email')->email()->required(),
                Forms\Components\TextInput::make('nid_number')->required(),
                Forms\Components\RichEditor::make('permanent_address')->required(),
            ]));
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('first_name'),
                Tables\Columns\TextColumn::make('last_name'),
                Tables\Columns\TextColumn::make('phone_number'),
                Tables\Columns\TextColumn::make('nid_number'),
                Tables\Columns\TextColumn::make('permanent_address')->html(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListFlatMembers::route('/'),
            'create' => Pages\CreateFlatMember::route('/create'),
            'edit' => Pages\EditFlatMember::route('/{record}/edit'),
        ];
    }
}
