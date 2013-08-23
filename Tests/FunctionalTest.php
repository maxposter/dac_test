<?php
namespace Maxposter\DacTestBundle\Tests;

class FunctionalTest extends AppTestCase
{
    public function testLoadDacSettings()
    {
        $b1 = $this->helper->makeBusiness();

        /**
        $this->client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'user',
            'PHP_AUTH_PW'   => 'userpass',
        ));
        */

        $this->client->request('GET', '/', array(), array(), array(
            'PHP_AUTH_USER' => 'user',
            'PHP_AUTH_PW'   => 'userpass',
        ));

        /** @see http://stackoverflow.com/questions/10271570/how-to-check-if-an-user-is-logged-in-symfony2-inside-a-controller */
        $isGranted = $this->client->getContainer()->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED');
        //var_dump($this->client->getResponse()->getContent());

        //var_dump($this->client->getContainer()->get('security.context')->getToken());
    }
}