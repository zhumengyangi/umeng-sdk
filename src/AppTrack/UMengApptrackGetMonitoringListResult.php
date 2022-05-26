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

class UMengApptrackGetMonitoringListResult extends APIParam
{
    /**
     * @var array
     */
    #[Param]
    public array $data;

    /**
     * @var int 总记录数
     */
    #[Param]
    public int $total;
}
