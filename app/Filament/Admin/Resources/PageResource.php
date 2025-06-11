<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PageResource\Pages;
use App\Filament\Admin\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Grid::make(2)
                ->schema([
                    Forms\Components\TextInput::make('title')->label('Judul Menu (ID)')->required()->maxLength(255),
                    Forms\Components\TextInput::make('slug')->label('Halaman Link')->required()->maxLength(255)->rule('not_regex:/\s/', 'Slug tidak boleh mengandung spasi'),
                ]),
                Forms\Components\Textarea::make('content')->label('Deskripsi Konten (ID)')->rows(10),

            Forms\Components\Grid::make(2)
                ->schema([
                    Forms\Components\TextInput::make('title_en')->label('Judul (EN)')->maxLength(255)->nullable(),
                    Forms\Components\Textarea::make('content_en')->label('Deskripsi Konten (EN)')->rows(5)->nullable(),
                ]),
        ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('updated_at')->dateTime(),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }

    public static function getNavigationSort(): int
    {
        return 1; // Ubah angka sesuai urutan yang kamu inginkan
    }
}
