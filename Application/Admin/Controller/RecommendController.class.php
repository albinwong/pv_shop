<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;
class RecommendController extends CommonController {
	/**
	 * 推荐添加
	 */
	public function add(){
		$cate = M('cates');
		$res = $cate->where('pid=0')->select();
		$this->assign('cate',$res);
		$this->display();
	}

	/**
	 * 推荐添加验证
	 */
	public function insert(){
		$Views = M("recommend"); 
		$data = $_POST;
		// 图片处理
		$upload = new \Think\Upload();//实例化上传类
 		$upload->maxSize = 3145728;//设置附件上传大小
 		$upload->exts = array('jpg','gif','png','jpeg');//设置附件上传类型
 		$upload->rootPath = './Public/Uploads/recommend/';//设置附件上传目录
 		$upload->autoSub = false;//拒绝子目录创建
 		// 上传文件
 		$info = $upload->upload();
		$data['pic'] = $info['pic']['savename'];
		$res = $Views->data($data)->add(); 
		if($res){
 			//成功跳转
 			$this->success('添加成功',U('admin/recommend/index'),5);
		}else{
 			//失败跳转
 			$this->error('添加失败');
		}
	}

	/**
	 * 推荐列表页面
	 */
    public function index(){
		$Recommend = M("recommend"); 
    	// 实例化分页对象
   		$count = $Recommend->count();//获取表中数据条数
   		$size = C('PAGE_SIZE');//获取分页的大小
   		$page = new Page($count,$size);
   		// 设置分页样式
   		$page->setConfig('prev','上一页');
   		$page->setConfig('next','下一页');
   		$res = $Recommend->limit($page->firstRow,$page->listRows)->select();
   		// 分配变量
   		$this->assign('res',$res);
   		// 输出分页连接
   		$this->assign('page',$page->show());
        $this->display();
    }

    /**
     * 推荐修改
     */
    public function edit($id){
 		$Views = M('recommend');
 		$res = $Views->find($id);
		$cate = M('cates');
		$cate_id = $cate->where('pid=0')->select();
		$this->assign('cate',$cate_id);
 		$this->assign('vo',$res);
 		$this->display();
 	}

 	/**
     * 轮播修改验证
     */
 	public function update(){
 		$Views = M('recommend');
		$data = $_POST;
		// 轮播图处理
		$upload = new \Think\Upload();//实例化上传类
 		$upload->maxSize = 3145728;//设置附件上传大小
 		$upload->exts = array('jpg','gif','png','jpeg');//设置附件上传类型
 		$upload->rootPath = './Public/Uploads/recommend/';//设置附件上传目录
 		$upload->autoSub = false;//拒绝子目录创建
 		// 上传文件
 		$info = $upload->upload();
 		if($info){
 			//有修改图片时
 			$data['pic'] = $info['pic']['savename'];
 		}
		$res = $Views->save($data); 
		if($res){
 			//成功跳转
 			$this->success('修改成功',U('admin/recommend/index'),5);
		}else{
 			//失败跳转
 			$this->error('修改失败');
		}
 		
 	}

 	/**
 	 * 轮播删除
 	 */
 	public function delete(){
 		$Views = M('recommend');
 		$res = $Views->where($_GET)->delete();
 		if($res){
 			// 删除成功
 			$this->success('删除成功',U('admin/recommend/index'),5);
 		}else{
 			//修改失败
 			$this->error('删除失败');
 		}
 	}
}