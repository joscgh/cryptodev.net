<?php
namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class tokens extends Eloquent
{
//    use HybridRelations;

    protected $connection = 'mongodb';
}
