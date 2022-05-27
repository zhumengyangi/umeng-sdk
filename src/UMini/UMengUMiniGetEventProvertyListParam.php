<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\APIParam;

class UMengUMiniGetEventProvertyListParam extends APIParam
{
    /**
     * @var string 事件名
     */
    #[Param]
    public string $eventName;

    /**
     * @var string 数据源Id（AppKey）
     */
    #[Param]
    public string $dataSourceId;
}
