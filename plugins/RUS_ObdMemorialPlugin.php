<?php

declare(strict_types=1);

namespace JustCarmen\Webtrees\Module\FancyResearchLinks\Plugin;

use Fisharebest\Webtrees\I18N;
use JustCarmen\Webtrees\Module\FancyResearchLinks\FancyResearchLinksModule;

class RUS_ObdMemorialPlugin extends FancyResearchLinksModule
{
    public function pluginLabel(): string
    {
        return 'ОБД Мемориал';
    }

    public function pluginName(): string
	{
		return strtolower(basename(__FILE__, 'Plugin.php'));
	}

    public function researchArea(): string
    {
        return 'RUS';
    }

    public function researchLink($attributes): string
    {
        $name = $attributes['NAME'];

		return 'https://obd-memorial.ru/html/search.htm?f=' . $name['surn'] . '&n=' . $name['givn'] . '&s=&y=&r=';
    }
}
