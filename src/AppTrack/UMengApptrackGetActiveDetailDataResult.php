<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\AppTrack;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\APIParam;

class UMengApptrackGetActiveDetailDataResult extends APIParam
{
    /**
     * @var array 激活数据明细
     */
    #[Param]
    public array $data;

    /**
     * @var int 总数
     */
    #[Param]
    public int $total;
}
