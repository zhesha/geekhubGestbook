<?php
namespace Geekhub\GestbookBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Geekhub\GestbookBundle\Entity\record;

class LoadrecordData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $record = new record();
        $record->setName('gary');
        $record->setEmail('gary@mail.com');
        $record->setBody('lorem');

        $manager->persist($record);
        $manager->flush();
    }
}