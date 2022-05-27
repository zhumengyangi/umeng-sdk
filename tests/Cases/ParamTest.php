<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace HyperfTest\Cases;

use KY\UMeng\AppTrack\UMengAppTrackAppDownload;
use KY\UMeng\Client\APIId;
use KY\UMeng\Client\APIRequest;
use KY\UMeng\Client\Policy\ClientPolicy;
use KY\UMeng\Client\Policy\RequestPolicy;
use KY\UMeng\Client\SyncAPIClient;
use KY\UMeng\UApp\UMengUAppGetDailyDataParam;
use KY\UMeng\UApp\UMengUAppGetDailyDataResult;

/**
 * @internal
 * @coversNothing
 */
class ParamTest extends AbstractTestCase
{
    public function testMakeFromArray()
    {
        $param = UMengAppTrackAppDownload::makeFromArray([
            'unitId' => 1,
        ]);

        $this->assertSame(1, $param->unitId);
    }

    public function testGetUAppAllData()
    {
        $this->markTestSkipped();

        $syncAPIClient = new SyncAPIClient(new ClientPolicy(
            '123',
            'xxx',
            'gateway.open.umeng.com'
        ));

        $reqPolicy = new RequestPolicy(useHttps: true);

        $param = new UMengUAppGetDailyDataParam();
        $param->key = 'xxx';
        $param->date = '2022-05-01';

        $request = new APIRequest(
            new APIId('com.umeng.uapp', 'umeng.uapp.getDailyData', 1),
            $param
        );

        $res = $syncAPIClient->send($request, UMengUAppGetDailyDataResult::class, $reqPolicy);
    }
}
