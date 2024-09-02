<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\TiTeam;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TiTeamResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TiTeamResource\RelationManagers;

class TiTeamResource extends Resource
{
    protected static ?string $model = TiTeam::class;

    // protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Topic Indonesia';

    public static function getModelLabel(): string
    {
        return __('model.single.team');
    }

    public static function getPluralModelLabel(): string
    {
        return  __('model.plural.team');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->placeholder('Enter the team member name')
                    ->columnSpanFull(),
                TextInput::make('position')
                    ->label('Position')
                    ->required()
                    ->placeholder('Enter the team member position')
                    ->columnSpanFull(),
                FileUpload::make('image_url')
                    ->label('Image')
                    ->image()
                    ->directory('teams')
                    ->imageEditor()
                    ->imageEditorViewportWidth(517)
                    ->imageEditorViewportHeight(734)
                    ->nullable()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('order')
            ->defaultSort('order', 'asc')
            ->columns([
                ImageColumn::make('image_url')
                    ->label('')
                    ->circular()
                    ->size(56),
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable(),
                TextColumn::make('position')
                    ->label('Position')
                    ->searchable(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageTiTeams::route('/'),
        ];
    }
}
