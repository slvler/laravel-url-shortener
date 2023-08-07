<?php


namespace Slvler\Cuttly\Tests\Feature;

use Illuminate\Support\Facades\Config;
use Slvler\Cuttly\Facades\Cuttly;
use Slvler\Cuttly\Tests\Unit\TestCase;

class CuttlyTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        Config::set([
                'cuttly.base_uri' => 'https://cutt.ly/api/api.php',
                'cuttly.api_key' => 'b4fa4f9976b41cbc0c9880c444fce27a28984',
            ]);
    }

    /**
     * @test
     */
    public function test_short()
    {
        $data = [
            'short' => 'google.com'
        ];
        $this->assertIsString(Cuttly::short($data));
    }
    /**
     * @test
     */
    public function test_edit()
    {
        $data = [
            'edit' => 'cutt.ly/LwdCoBmo'
        ];
        $this->assertIsString(Cuttly::edit($data));
    }
    /**
     * @test
     */
    public function test_stast()
    {
        $data = [
            'stats' => 'cutt.ly/ewdVijlY'
        ];
        $this->assertIsString(Cuttly::stats($data));
    }
}
