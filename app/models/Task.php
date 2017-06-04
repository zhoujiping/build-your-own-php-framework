<?php 

namespace App\Models;

class Task 
{
    // 任务的描述,暂且用public,这里自行修改
    public $description;

    // 该任务是否完成
    protected $completed;
    
    // 获取 $completed 的值
    public  function isComplete()
    {
        return $this->completed;
    }

    // 设置任务已完成 
    public function complete()
    {
        $this->completed = true;
    }
}