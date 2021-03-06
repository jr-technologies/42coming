<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost/p42Temp/public';
    protected $apiPath = 'api/v1';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }

    public function apiRoute($route = "")
    {
        return $this->apiPath."/".$route;
    }

    public function webRoute($route = "")
    {
        return $this->baseUrl.'/'.$route;
    }
}
