<?php
namespace App\DataFixtures;

use App\Entity\Role;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager as PersistenceObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    public $encode;
    
    public function __construct(UserPasswordEncoderInterface $encode)
    {
        $this->encode= $encode;
        
    }
    public function load(PersistenceObjectManager $manager)
    {
        $role= new Role();
        $role->setlibelle("ROLE_ADMIN_SYSTEME");
        $manager->persist($role);
        //
        $role1= new Role();
        $role1->setlibelle("ROLE_Responsable");
        $manager->persist($role1);
        //
        $role2= new Role();
        $role2->setlibelle("ROLE_Livreur");
        $manager->persist($role2);
        //
        $role3= new Role();
        $role3->setlibelle("ROLE_Serveur");
        $manager->persist($role3);
        //
       

        $admin1= new User();
        $admin1->setUsername("supAdmin");
        $admin1->setPassword($this->encode->encodePassword($admin1, "passer"));
      
       
        $admin1->setRole($role);
        $manager->persist($admin1);

        $admin2= new User();
        $admin2->setUsername("Admin");
        $admin2->setPassword($this->encode->encodePassword($admin2, "passer"));
     
      
     
        $manager->persist($admin2);


        $manager->flush();
    }
}
