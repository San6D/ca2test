<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder) {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setUsername('clerk');
        $user1->setRoles(['ROLE_CLERK']);
        $plainTextPassword = 'clerk';
        $encodedPassword = $this->passwordEncoder->encodePassword($user1, $plainTextPassword);
        $user1->setPassword($encodedPassword);
        $manager->persist($user1); $manager->flush();

        $user2 = new User();
        $user2->setUsername('manager');
        $user2->setRoles(['ROLE_MANAGER']);
        $plainTextPassword = 'manager';
        $encodedPassword = $this->passwordEncoder->encodePassword($user2, $plainTextPassword);
        $user2->setPassword($encodedPassword);
        $manager->persist($user2); $manager->flush();

        $user3 = new User();
        $user3->setUsername('director');
        $user3->setRoles(['ROLE_DIRECTOR']);
        $plainTextPassword = 'director';
        $encodedPassword = $this->passwordEncoder->encodePassword($user3, $plainTextPassword);
        $user3->setPassword($encodedPassword);
        $manager->persist($user3); $manager->flush();
    }
}
