<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PageImageResource\Pages;
use App\Filament\Admin\Resources\PageImageResource\RelationManagers;
use App\Models\PageImage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageImageResource extends Resource
{
    protected static ?string $model = PageImage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('page_id')
                ->relationship('page', 'title')
                ->required(),
        
            Forms\Components\FileUpload::make('image')
                ->disk('public')
                ->directory('page-images')
                ->image()
                ->preserveFilenames()
                ->visibility('public')
                ->required(),
        ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page.title')
                    ->label('Page')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPageImages::route('/'),
            'create' => Pages\CreatePageImage::route('/create'),
            'edit' => Pages\EditPageImage::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Pages Images'; // <- ubah label menu di sidebar di sini
    }

    public static function getNavigationSort(): int
    {
        return 2; // Ubah angka sesuai urutan yang kamu inginkan
    }

}
