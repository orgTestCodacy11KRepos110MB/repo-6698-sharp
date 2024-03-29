<?php

namespace Code16\Sharp\View\Components\Menu;

use Code16\Sharp\Utils\Menu\SharpMenuItem;
use Code16\Sharp\Utils\Menu\SharpMenuItemSection;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class MenuSection extends Component
{
    public function __construct(
        public SharpMenuItemSection $item,
        public ?string $currentEntityKey = null,
    ) {
    }

    public function hasCurrentItem(): bool
    {
        return $this->getItems()->some(fn (SharpMenuItem $item) => $item->isEntity() && $item->getEntityKey() === $this->currentEntityKey
        );
    }

    public function getItems(): Collection
    {
        return collect($this->item->getItems())
            ->filter(fn ($item) => $item->isAllowed())
            ->pipe(fn ($items) => $this->sanitizeSeparators($items));
    }

    public function sanitizeSeparators(Collection $items): Collection
    {
        $filtered = collect();

        foreach ($items->reverse() as $item) {
            if ($item->isSeparator()) {
                // Prevent separators in last position or stacked
                if (count($filtered) === 0 || $filtered->last()?->isSeparator()) {
                    continue;
                }
            }
            $filtered->push($item);
        }

        return $filtered->reverse();
    }

    public function render()
    {
        return view('sharp::components.menu.menu-section', [
            'self' => $this,
        ]);
    }
}
