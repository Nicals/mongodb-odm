<?php

declare(strict_types=1);

namespace Doctrine\ODM\MongoDB\Aggregation\Stage;

use Doctrine\ODM\MongoDB\Aggregation\Stage;

/**
 * Fluent interface for adding a $indexStats stage to an aggregation pipeline.
 *
 */
class IndexStats extends Stage
{
    /**
     * {@inheritdoc}
     */
    public function getExpression()
    {
        return [
            '$indexStats' => new \stdClass(),
        ];
    }
}
