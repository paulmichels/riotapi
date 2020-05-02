<?php

namespace App\Repository;

use App\Entity\LolMatch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\NonUniqueResultException;

/**
 * @method LolMatch|null find($id, $lockMode = null, $lockVersion = null)
 * @method LolMatch|null findOneBy(array $criteria, array $orderBy = null)
 * @method LolMatch[]    findAll()
 * @method LolMatch[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LolMatchRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LolMatch::class);
    }

    public function findMatch($region, $matchId): ?LolMatch
    {
        try {
            return $this->createQueryBuilder('match')
                ->andWhere('match.matchId = :matchId AND match.region = :region')
                ->setParameters(array(
                    'matchId' => $matchId,
                    'region' => $region
                ))
                ->getQuery()
                ->getOneOrNullResult();
        } catch (NonUniqueResultException $e) {
        }
        return null;
    }
}
