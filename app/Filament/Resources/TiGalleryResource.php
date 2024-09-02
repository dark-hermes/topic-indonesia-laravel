<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\TiGallery;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\CreateAction;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TiGalleryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TiGalleryResource\RelationManagers;

class TiGalleryResource extends Resource
{
    protected static ?string $model = TiGallery::class;

    // protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Topic Indonesia';

    public static function getModelLabel(): string
    {
        return __('model.single.gallery');
    }

    public static function getPluralModelLabel(): string
    {
        return  __('model.plural.gallery');
    }

    public static function getSection(): string
    {
        return 'Topic Indonesia';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image_urls')
                    ->label('Images')
                    ->image()
                    ->directory('galleries')
                    ->imageEditor()
                    ->multiple()
                    ->panelLayout('grid')
                    ->reorderable()
                    ->appendFiles()
                    ->required()
                    ->openable()
                    ->previewable()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_url')
                    ->label('')
                    ->height(320),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d/m/Y H:i'),
                Tables\Columns\TextColumn::make('createdBy.name')
                    ->label('Uploaded By')
                    ->toggleable(isToggledHiddenByDefault: true)
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->headerActions([
                CreateAction::make()
                    ->using(function (array $data, string $model) {
                        $models = [];
                        foreach ($data['image_urls'] as $image) {
                            $models[] = $model::create([
                                'image_url' => $image,
                            ]);
                        }
                        return $models[0];
                    })
                    ->createAnother(false)
                    ->label('Upload')
                    ->modalSubmitActionLabel('Upload')
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageTiGalleries::route('/'),
        ];
    }
}
