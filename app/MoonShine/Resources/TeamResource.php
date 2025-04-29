<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Contracts\Fields\Field;
use MoonShine\Contracts\Resources\ResourceContract;

/**
 * @extends ModelResource<Team>
 */
class TeamResource extends ModelResource
{
    protected string $model = Team::class;

    protected string $title = 'Teams';

    /**
     * @return list<Field>
     */
    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Name'),
            Image::make('Team Logo', 'team_logo')->dir('teams'),
            Date::make('Founded At'),
            Text::make('Country'),
        ];
    }

    /**
     * @return list<Field>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Name'),
            Image::make('Team Logo', 'team_logo')->dir('teams'),
            Text::make('Country'),
        ];
    }

    /**
     * @return list<Field|Box>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make()->sortable(),
                Text::make('Name'),
                Image::make('Team Logo', 'team_logo')->dir('teams'),
                Date::make('Founded At'),
                Text::make('Country'),
            ])
        ];
    }

    /**
     * @return list<Field>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Name'),
            Image::make('Team Logo', 'team_logo')->dir('teams'),
            Date::make('Founded At'),
            Text::make('Country'),
        ];
    }

    /**
     * @param Team $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'team_logo' => ['nullable', 'image'],
            'founded_at' => ['nullable', 'date'],
            'country' => ['required', 'string', 'max:255'],
        ];
    }
}
