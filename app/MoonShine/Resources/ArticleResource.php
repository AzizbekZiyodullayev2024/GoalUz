<?php

declare(strict_types=1);
namespace App\MoonShine\Resources;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use App\Models\Category;

use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Date;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\Resources\ResourceContract;
use MoonShine\Contracts\UI\ComponentContract;

/**
 * @extends ModelResource<Article>
 */
class ArticleResource extends ModelResource
{
    protected string $model = Article::class;

    protected string $title = 'Articles';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Title', 'title'),
            Text::make('Slug', 'slug'),
            BelongsTo::make('Category', 'category', fn() => Category::pluck('name', 'id')),
            Number::make('Views', 'views'),
            Date::make('Published At', 'published_at'),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make('Article Info', [
                ID::make(),
                BelongsTo::make('Category', 'category', fn() => Category::class)->required(),
                Text::make('Title', 'title')->required(),
                Text::make('Slug', 'slug'),
                Textarea::make('Content', 'content'),
                Image::make('Image', 'image_url')
                ->dir('images') // storage/app/public/images ichiga saqlanadi
                ->disk('public') // "public" disk orqali
                ->keepOriginalFileName()
                ->removable(),
                Text::make('Author', 'author'),
                Date::make('Published At', 'published_at'),
                Number::make('Views', 'views')->default(500),
            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            BelongsTo::make('Category', 'category', fn() => Category::class),
            Text::make('Title', 'title'),
            Text::make('Slug', 'slug'),
            Textarea::make('Content', 'content'),
            Text::make('Image URL', 'image_url'),
            Text::make('Author', 'author'),
            Date::make('Published At', 'published_at'),
            Number::make('Views', 'views'),
        ];
    }
    /**
     * @param Article $item
     * @return array<string, string[]|string>
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:articles,slug,' . $item->id],
            'category_id' => ['required', 'exists:categories,id'],
            'content' => ['nullable', 'string'],
            'image_url' => ['nullable', 'string', 'max:255'],
            'author' => ['nullable', 'string', 'max:100'],
            'published_at' => ['nullable', 'date'],
            'views' => ['nullable', 'integer'],
        ];
    }
}