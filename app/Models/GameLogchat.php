<?php

namespace App\Models;

use App\Http\Scopes\ExcludeEmpty;
use Illuminate\Database\Eloquent\Model;

class GameLogchat extends Model
{

    protected $connection = '';
    protected $table = 'logchat';

    public function __construct()
    {
        parent::__construct();
        $rbac = new Rbac();
        $this->connection = $rbac->selectProject();
    }

    /**
     * 模型加载全局过滤
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ExcludeEmpty);
    }


    /**
     * @param $currentPage
     * @param int $pageNum
     * @param array $where
     * @return array
     * 返回分页的数据和数据的总数
     */
//    public function clauseData($currentPage,$pageNum=20,$where=[]){
//        $action = new Action();
//        list($data,$total) = $action->handlePageData($this,$currentPage,$pageNum,$where);
//        return compact('data','total');
//    }



}
