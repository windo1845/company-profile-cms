<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SocialMediaResource\Pages;
use App\Filament\Admin\Resources\SocialMediaResource\RelationManagers;
use App\Models\SocialMedia;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SocialMediaResource extends Resource
{
    protected static ?string $model = SocialMedia::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')
                ->label('Nama Sosial Media')
                ->required(),
    
            TextInput::make('url')
                ->label('Link URL Sosial Media')
                ->required()
                ->url(),
    
            Select::make('icon_class')
                ->label('Logo Icon Sosial Media')
                ->options([
                    'fa fa-facebook' => 'Facebook',
                    'fa fa-twitter' => 'Twitter',
                    'fa fa-instagram' => 'Instagram',
                    'fa fa-youtube' => 'YouTube',
                    'fa fa-tiktok' => 'TikTok',
                    'fa fa-whatsapp' => 'WhatsApp',
                ])
                ->required(),
            
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Platform')
                    ->sortable()
                    ->searchable(),
            
                Tables\Columns\TextColumn::make('url')
                    ->label('URL')
                    ->url('url') 
                    ->copyable()
                    ->limit(30),
            
                Tables\Columns\TextColumn::make('icon_class')
                    ->label('Ikon')
                    ->formatStateUsing(fn ($state) => "<i class='$state'></i> $state")
                    ->html(),
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
            'index' => Pages\ListSocialMedia::route('/'),
            'create' => Pages\CreateSocialMedia::route('/create'),
            'edit' => Pages\EditSocialMedia::route('/{record}/edit'),
        ];
    }

    public static function getNavigationSort(): int
    {
        return 4; // Ubah angka sesuai urutan yang kamu inginkan
    }

}
