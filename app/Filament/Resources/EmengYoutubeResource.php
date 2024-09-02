<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmengYoutubeResource\Pages;
use App\Filament\Resources\EmengYoutubeResource\RelationManagers;
use App\Models\EmengYoutube;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmengYoutubeResource extends Resource
{
    protected static ?string $model = EmengYoutube::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Emeng Indonesia';

    public static function getSection(): string
    {
        return 'Emeng Indonesia';
    }

    public static function getModelLabel(): string
    {
        return __('model.single.emeng_youtube');
    }

    public static function getPluralModelLabel(): string
    {
        return  __('model.plural.emeng_youtube');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('description')
                    ->label('Description')
                    ->nullable()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('video_url')
                    ->label('Youtube Video URL')
                    ->required()
                    ->maxLength(255)
                    ->activeUrl()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('thumbnail_url')
                    ->label('Thumbnail')
                    ->image()
                    ->directory('emeng-youtubes')
                    ->imageEditor()
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
                Tables\Columns\ImageColumn::make('thumbnail_url')
                    ->label('Thumbnail'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->wrap()
                    ->limit(50),
                Tables\Columns\TextColumn::make('description')
                    ->label('Description')
                    ->searchable()
                    ->wrap()
                    ->limit(50)
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('video_url')
                    ->label('Youtube Video URL')
                    ->searchable()
                    ->wrap(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ManageEmengYoutubes::route('/'),
        ];
    }
}
