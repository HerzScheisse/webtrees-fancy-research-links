<?php

declare(strict_types=1);

namespace JustCarmen\Webtrees\Module\FancyResearchLinks\Plugin;

use Fisharebest\Webtrees\I18N;
use JustCarmen\Webtrees\Module\FancyResearchLinks\FancyResearchLinksModule;

class UKR_RidniPlugin extends FancyResearchLinksModule
{
    public function pluginLabel(): string
    {
        return 'Рідні';
    }

    public function pluginName(): string
	{
		return strtolower(basename(__FILE__, 'Plugin.php'));
	}

    public function researchArea(): string
    {
        return 'UKR';
    }

    public function researchLink($attributes): string
    {
        $name = $attributes['NAME'];

		return 'https://ridni.org/karta/' . $name['surn'];
    }
}
