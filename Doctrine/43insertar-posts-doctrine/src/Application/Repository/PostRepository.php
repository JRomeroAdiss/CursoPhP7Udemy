<?php

namespace Application\Repository;

use Application\Entities\Post;
use Doctrine\ORM\EntityRepository;

/**
 * @method Post|null find($id, $lockMode = null, $lockVersion = null)
 * @method Post|null findOneBy(array $criteria, array $orderBy = null)
 * @method Post[] findAll()
 * @method Post[] findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostRepository extends EntityRepository
{
}
