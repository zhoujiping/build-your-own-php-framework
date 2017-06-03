<?php 

class Task 
{
    // 任务的描述
    protected $description;

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