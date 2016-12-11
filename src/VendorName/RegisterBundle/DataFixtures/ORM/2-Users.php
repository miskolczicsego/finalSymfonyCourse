<?php

namespace VendorName\RegisterBundle\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use VendorName\RegisterBundle\Entity\User;

/**
 * Created by PhpStorm.
 * User: Csegő
 * Date: 2016. 12. 11.
 * Time: 16:09
 */
class Users extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $u1 = new User();
        $u1->setUsername('csego');
        $u1->setEmail('csego@example.com');
        $u1->setPassword('csego');
        $u1->setName('Csegő');

        $manager->persist($u1);

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 2;
    }
}