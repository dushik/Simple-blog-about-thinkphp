<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	//添加数据
	public function insert() {
/*		$_POST['hobby'] = implode(',',$_POST['hobby']);      //使复选框中选中的内容也写入数据库，这里需单独操作！
		$model = new DushikangModel();
		$data = $model->create();
		$model->add($data);
		$this->success("添加成功", __APP__."?m=Index&a=message");*/
		$_POST['hobby'] = implode(',',$_POST['hobby']);
        $model = new DushikangModel;
        $data = $model->create();
        if(!$model->create())
        {                
            $this->error("留言失败！请检查姓名，邮箱，留言内容格式是否正确，是否为空！", __APP__."?m=Index&a=message");
        }
        else
        {
			$model->add($data);
			$this->success("留言成功", __APP__."?m=Index&a=message");    
        }
	}

	//添加页面
	public function add() {	
		$this->display();
	}	
	//查询现有数据
    public function message() {
		$model = new DushikangModel();
		$blog = $model->order('create_time desc,time desc')->select();   //将查询出来的数据按照更新时间排序并传入数组
	//将查询出来的数据显示在对应模板  
		$this->assign("blog", $blog);		
		$this->display();
    }
	//搜索数据
	public function search(){
		//获取post的数据，根据数据组装查询的条件，根据条件从数据库中获取数据，返回给页面中遍历
		$where['name']=array('like',"%{$_POST['name']}%");
		$model=M('Dushikang');					//这儿有问题！
		$arr=$model->order('create_time desc,time desc')->where($where)->select();
		$this->assign('blog',$arr);
		$this->display('message');
	}
	//删除数据
	public function delete() {
		$id = $_REQUEST['id'];
		$model = new DushikangModel();
		$model->where("id = '".$id."'")->delete();
		$this->success("删除成功", __APP__."?m=Index&a=message");
		//保持id连续
	}
	//修改页面
	public function edit() {
		$id = $_REQUEST["id"];
		$model = new DushikangModel();
		$edita = $model->where("id= '".$id."'")->find();   //select 
		//dump($edita);                     //测试是否查询出来内容
		$data['a'] = '篮球';
		$data['b'] = '足球';
		$data['c'] = '羽毛球';
		$data['d'] = '网球';				//同理给把查询出来的单选框的内容也给定变量
		$data['e'] ='男性';
		$data['f'] ='女性';
		$this->assign("edita", $edita);
		$this->assign("data",$data);
		$this->display();
	}
	
	//修改数据
	public function update() {
		$id = $_REQUEST["id"];
		//dump($id);
		$_POST['hobby'] = implode(',',$_REQUEST['hobby']);
		$model= new DushikangModel();
		$data = $model->create();
		$model->where("id = '".$id."'")->save($data);
				//$this->success("修改成功", __APP__."?m=Index&a=message");
		$result = $model->where("id = '".$id."'")->save($data);  //判断是否更新
		if(false !==$result)
		{
			$this->success("修改成功", __APP__."?m=Index&a=message");
		}
		else
		{
			$this->error("修改失败", __APP__."?m=Index&a=message");
		}
	}
}