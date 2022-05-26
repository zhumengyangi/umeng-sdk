<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UApp;

use KY\UMeng\Client\Annotation\ParamArray;
use KY\UMeng\Client\APIParam;

class UmengUappGetVersionDataResult extends APIParam
{
    /**
     * @var UmengUappVersionInfo[]
     */
    #[ParamArray(class: UmengUappVersionInfo::class)]
    public array $versionInfos = [];
}
