<?php

/**
 * Animate.css Resource Pack
 * -------------------------
 *
 * @noinspection PhpClassNamingConventionInspection    - Long class names are ok.
 * @noinspection PhpPropertyNamingConventionInspection - Property names with underscores are ok.
 */


declare(strict_types=1);

namespace PithFront\PithPackAnimateCss;

use Pith\Workflow\PithPack;

/**
 * Class AnimateCssResourcePack
 */
class AnimateCssResourcePack extends PithPack
{
    public string $access_level = 'world';
    public string $pack_type    = 'resource-pack';
}