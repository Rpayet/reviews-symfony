<?php

namespace App\DataFixtures;

use App\Entity\Review;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory as FakerFactory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setName('Billy');
        $user->setEmail('billyjean@prout.com');
        $user->setPassword($this->hasher->hashPassword($user, 'password'));
        $user->setRoles(['ROLE_ADMIN']);
        $manager->persist($user);

        
        $faker = FakerFactory::create('fr_FR');
        
        for ($i=0; $i < 10; $i++) {

            $review= new Review();
            $review->setContent($faker->text());
            $review->setCreatedAt(\DateTimeImmutable::createFromMutable($faker->dateTime()));
            $review->setUser($user);
            $manager->persist($review);
          
        }

        $manager->flush();

    }
}
