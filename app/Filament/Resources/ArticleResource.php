<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([

                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255),

                    Forms\Components\RichEditor::make('content')
                        ->extraAttributes([
                            'style' => 'text-align: justify;',
                        ])
                        ->required(),

                    // ✅ CLOUDINARY FILE UPLOAD
                    Forms\Components\FileUpload::make('image')
                        ->label('Image')
                        ->disk('cloudinary')
                        ->directory('articles')
                        ->image()
                        ->imageEditor()
                        ->imageEditorAspectRatios([
                            null,
                            '16:9',
                            '4:3',
                            '1:1',
                        ])
                        ->required(),

                    Forms\Components\Select::make('category_id')
                        ->relationship('category', 'name')
                        ->required(),

                    Forms\Components\TextInput::make('author')
                        ->label('Author')
                        ->nullable(),

                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->limit(15)
                    ->searchable(),

                Tables\Columns\TextColumn::make('category.name')
                    ->sortable(),

                Tables\Columns\TextColumn::make('author')
                    ->label('Author')
                    ->sortable(),

                // ✅ CLOUDINARY IMAGE COLUMN
                Tables\Columns\ImageColumn::make('image')
                    ->disk('cloudinary')
                    ->height(60),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d M Y - H:i')
                    ->timezone('Asia/Jakarta'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit'   => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
