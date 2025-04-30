<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Date;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\UI\Field;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\Resources\ResourceContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;

/**
 * @extends ModelResource<Category>
 */
class CategoryResource extends ModelResource
{
    protected string $model = Category::class;

    protected string $title = 'Categories';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Name', 'name'),
            Text::make('Slug', 'slug'),
            Date::make('Created At', 'created_at')->format('Y-m-d H:i'),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make('Category Info', [
                ID::make(),
                Text::make('Name', 'name')->required(),
                Text::make('Slug', 'slug')->required(),
            ]),
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Name', 'name'),
            Text::make('Slug', 'slug'),
            Date::make('Created At', 'created_at')->format('Y-m-d H:i'),
        ];
    }

    /**
     * @param Category $item
     *
     * @return array<string, string[]|string>
     */
    protected function rules(mixed $item): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:categories,slug,' . $item->id],
        ];
    }
}
