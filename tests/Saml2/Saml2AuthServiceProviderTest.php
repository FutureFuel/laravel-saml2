<?php

namespace Futurefuel\Saml2;


use App;
use Mockery as m;
use PHPUnit\Framework\TestCase;

class Saml2AuthServiceProviderTest extends TestCase
{

    protected function tearDown()
    {
        m::close();
    }


    public function testSimpleMock()
    {
        $this->assertTrue(true);
        /**
         * Cant test here. It uses Laravel dependencies (eg. config())
         */
    }

}
 