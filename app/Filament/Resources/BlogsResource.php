<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogsResource\Pages;
use App\Filament\Resources\BlogsResource\RelationManagers;
use App\Models\Blogs;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogsResource extends Resource
{
    protected static ?string $model = Blogs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Select::make('department')
                //     ->options([
                //         'endocrinology' => 'Endocrinology',
                //         'gastroenterology' => 'Gastroenterology',
                //     ])
                //     ->required(),
                TextInput::make('title'),
                TextInput::make('short_description')
                    ->maxLength(255),
                FileUpload::make('image')
                    ->directory('blogs'),
                TextInput::make('image_alt_tag'),
                RichEditor::make('description')
                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'heading',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'table',
                        'undo',
                        'underline',
                    ])
                    ->columnSpan('full'),
                TextInput::make('slug'),
                TextInput::make('meta_title'),
                TextInput::make('meta_desc')
                    ->maxLength(255),
                TagsInput::make('tags')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('id'),
            // Tables\Columns\TextColumn::make('department'),
            Tables\Columns\TextColumn::make('title')->searchable(),
            // Tables\Columns\TextColumn::make('short_description'),
            Tables\Columns\ImageColumn::make('image')->disk('public'),
            Tables\Columns\ToggleColumn::make('status')
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlogs::route('/create'),
            'edit' => Pages\EditBlogs::route('/{record}/edit'),
        ];
    }
}
