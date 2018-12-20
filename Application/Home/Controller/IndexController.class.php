<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index(){
		if ($_SESSION['username']!=null) {
            $User=M('Users');
            $username = session('username');//调用登录保存的 session('username',$username);
            $select=$User->query("select * from lc_users where username='$username' ");
            $this->assign('username',$select[0][username]);
             //判断头像是否为空
            if ($select[0][userphoto]=='') {
                $null='null.jpg';
                $this->userphoto = $null;
            }else{
                $this->assign('userphoto',$select[0][userphoto]);}
            //END
            $this->display();
        } else {
            $this->display('login');
        }
	}
	public function login(){
		$this->display();
	}
	public function yzm(){
		$config =    array(
        'fontSize'    =>    19,    // 验证码字体大小
        'length'      =>    4,     // 验证码位数
        'useNoise'    =>    false, // 关闭验证码杂点
    );
        $Verify =     new \Think\Verify($config);
        $Verify->codeSet = '0123456789';// 设置验证码字符为纯数字
        $Verify->entry();
	}
    public function Clicklogin(){
    	$username=$_POST['username'];
    	$userpwd=$_POST['userpwd'];
    	$yzm=$_POST['yzm'];
    	$login=$_POST['login'];
    	$zc=$_POST['zc'];
    	if($zc=='注册'){
    		$this->display(zc);die;
    	}
    	$verify = new \Think\Verify();
   		$yzmyz=$verify->check($yzm);
    	if(!$yzmyz){
    		$this->error('验证码不对头！');
    	}
    	$User=M("Users");
    	$data['username']=$username;
        $data['userpwd']=$userpwd;
    	$arr=$User->where($data) -> find();
    	if($arr){
            session('username',$username);
           
    		$this->success('登陆成功！',index,2);
        }
    	else{
    		$this->error("登录失败！用户或密码错误！")
        ;}
    }
    public function upload(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Public/txphoto/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        // 上传文件 
        $info   =   $upload->upload();
        if($info) {// 上传成功 获取上传文件信息
           return $info['myfile']['savepath'].$info['myfile']['savename'];
        }else{ // 上传错误提示错误信息
           $this->error($upload->getError());     
        }
    }
    public function Clickzc(){
        $dl=$_POST['login'];
        if($dl=='登陆'){
            $this->display('login');die;
        }
        $yzm=$_POST['yzm'];
        $verify = new \Think\Verify();
        $yzmyz=$verify->check($yzm);
        //上传头像
        if ($_FILES["myfile"]["name"]) {
            $photo=$this->upload();   //$photo为图片路径
        } else {
            $photo="";
        }

        //dump($photo);die;
        $username=$_POST['username'];
        if ($username==null) {
            $this->error("用户名不为空！",zc);
        }
        $yhm["username"]=$username;
        $temp=M("Users");
        $pdyhm=$temp->where($yhm)->find();
        if ($pdyhm) {
            $this->error("用户名已存在，不能注册！");die;
        }
        $userpwd=$_POST['userpwd'];
        $userpwd1=$_POST['userpwd1'];
        if ($userpwd!==$userpwd1 ||$userpwd=null or$userpwd1=null) {
            $this->error("两次密码输入不相同！",zc);
        } 
        if(!$yzmyz){
            $this->error('验证码不对头！');
        }
        $tel=$_POST['tel'];
        $usersex=$_POST['usersex'];
        $userpwd=$_POST['userpwd'];
        $User=M("Users");
        $this->name=$var["username"];
        $data['username']=$username;
        $data['userpwd']=$userpwd;
        $data['tel']=$tel;
        // $data['usersex']=$usersex;
        $data['userphoto']=$photo;
        $tg=$User->add($data,$replace=false);
        if ($tg) {
            $this->success("恭喜您注册成功",index);
        } else {
            $this->error("对不起注册失败，请您稍后再试！",login);
        }
       // echo "<pre>";
       //  var_dump($_POST['u']);
       //   echo "</pre>";
    }
    public function logout(){
        session('[destroy]');
        $this->redirect("index");
    }
    public function userdata(){
        if ($_SESSION['username']!=null) {
            $User=M('Users');
            $username = session('username');//调用登录保存的 session('username',$username);
            $select=$User->query("select * from lc_users where username='$username' ");
            $this->assign('username',$select[0][username]);//模板赋值
            $this->assign('userpwd',$select[0][userpwd]);
            $this->assign('usersex',$select[0][usersex]);
            $this->assign('usertel',$select[0][usertel]);
            $this->assign('useraihao',$select[0][useraihao]);
            //判断头像是否为空
            if ($select[0][userphoto]=='') {
                $null='null.jpg';
                $this->userphoto = $null;
            }else{
                $this->assign('userphoto',$select[0][userphoto]);}
            //END
            $this->display();
        }else {
            $this->error("对不起您未登录，快去登录吧！",'login');};die;
    }
    public function xguserdata(){
        if ($_SESSION['username']!=null || $_POST['xg']!=null) {
            /*--模板变量复制--*/
            $User=M('Users');
            $username = session('username');//调用登录保存的 session('username',$username);
            $select=$User->query("select * from lc_users where username='$username' ");
            $this->assign('username',$select[0][username]);
            $this->assign('userpwd',$select[0][userpwd]);
            $this->assign('usersex',$select[0][usersex]);
            $this->assign('usertel',$select[0][usertel]);
            $this->assign('useraihao',$select[0][useraihao]);
            $this->assign('userphoto',$select[0][userphoto]);
             //判断头像是否为空
            if ($select[0][userphoto]=='') {
                $null='null.jpg';
                $this->userphoto = $null;
            }else{
                $this->assign('userphoto',$select[0][userphoto]);}
            //END
            /*--/模板变量复制--*/
            // ifelse判断性别并显示
            if($select[0][usersex]!=="男"){
                 $sex[1]='checked';
                $this->assign('sex2',$sex[1]);
            }else{
               $sex[0]='checked'; 
                $this->assign('sex1',$sex[0]);
            }// ifelse判断性别并显示--EDN--
            $this->display();
        }else {
             $this->error("对不起您未登录，快去登录吧！",'login');}
    }
    public function xguserdata_exe(){
        $photo=$_FILES["myfile"]["name"];
        $pwd['userppwd'] = $_POST['userpwd'];
        $pwd['userppwd1'] = $_POST['userpwd1'];
         if ($userpwd!==$userpwd1 ||$userpwd=null or $userpwd1=null) {
            $this->error("两次密码输入不相同！",xguserdata);
        } 
        $username = session('username');//调用登录保存的 session('username',$username);
        $User = M("Users"); // 实例化User对象
         if ($photo) {
            $photo=$this->upload();   //$photo为图片路径
        } else {
            $photo=$_POST['myfile'];
        }
        $xgdata['usersex'] = $_POST['usersex'];
        $xgdata['usertel'] = $_POST['usertel'];
        $xgdata['useraihao'] = $_POST['useraihao'];
        $xgdata['userpwd'] = $_POST['userpwd'];
        $xgdata['userphoto'] = $photo;
        $xg=$User->where("username='$username'")->save($xgdata);
         if ($xg) {
            $this->success("恭喜您修改成功",userdata);
        } else {
            $this->error("对不起修改失败，请您稍后再试！",xguserdata);
        };

    }
    public function sys(){
        $User = M("Users"); // 实例化User对象
        $username = session('username');
        $select=$User->query("select * from lc_users where username='$username' ");
            $this->assign('username',$select[0][username]);
            $this->assign('userphoto',$select[0][userphoto]);
        $this->display();
    }
        public function books(){
        $User=M('Users');
        $username = session('username');//调用登录保存的 session('username',$username);
        $select=$User->query("select * from lc_users where username='$username' ");
        $this->assign('username',$select[0][username]);
        $this->assign('userphoto',$select[0][userphoto]);
        $books=M("Books");
        $count      = $books->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page->setConfig('first', '首页');
        $Page->setConfig('prev', '<上一页');
        $Page->setConfig('next', '下一页>');
        $Page->setConfig('end', '最后一页');
        $Page->setConfig('theme',"<ul class='pagination'>
                                    <li>%FIRST%</li>
                                    <li>%UP_PAGE%</li>
                                    <li>%LINK_PAGE%</li>
                                    <li>%DOWN_PAGE%</li>
                                    <li>%END%</li>
                                    <li> %HEADER%  <a>%NOW_PAGE%/%TOTAL_PAGE% 页</a></li>
                                 </ul>");
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $books->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();  

    }
    // 增加图书信息
    public function addbooks(){
          $User=M('Users');
          $username = session('username');//调用登录保存的 session('username',$username);
          $select=$User->query("select * from lc_users where username='$username' ");
          $this->assign('username',$select[0][username]);
          $this->assign('userphoto',$select[0][userphoto]);
        $this->display();
    }
    public function addbooks_exe(){
         //上传头像
        // if ($_FILES["myfile"]["name"]) {
        //     $photo=$this->upload();   //$photo为图片路径
        // } else {
        //     $photo="";
        // }


        $yhm["bookname"]=$bookname;
        $temp=M("Books");
        $pdyhm=$temp->where($yhm)->find();
        if ($pdyhm) {
            $this->error("此图书已存在，不能添加！");die;
        }
        $data['bookname']=$_POST['bookname'];
        $data['author']=$_POST['author'];
        $data['publisher']=$_POST['publisher'];
        $data['booktype']=$_POST['booktype'];
        $data['price']=$_POST['price'];
        $data['cover']=$_POST['cover'];
        $data['synopsis']=$_POST['synopsis'];
        $books=M("Books");
        // dump($data);die;
        $tg=$books->data($data)->filter('strip_tags')->add();
        if ($tg) {
            $this->success("恭喜您注册成功",books);
        } else {
            $this->error("对不起注册失败，请您稍后再试！",'javascript:history.back(-1);');
        }

    }
    /*搜索*/
    public function books_search(){
      $bookname=$_POST['bookname'];
      $User=M('Users');
      $username = session('username');//调用登录保存的 session('username',$username);
      $select=$User->query("select * from lc_users where username='$username' ");
      $this->assign('username',$select[0][username]);
      $this->assign('userphoto',$select[0][userphoto]);
      $books=M("Books");
       // $count      = $books->count();// 查询满足要求的总记录数
       $count = $books->where("bookname like '%$bookname%'")->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page->setConfig('theme',"<ul class='pagination'>
                                    <li>%FIRST%</li>
                                    <li>%UP_PAGE%</li>
                                    <li>%LINK_PAGE%</li>
                                    <li>%DOWN_PAGE%</li>
                                    <li>%END%</li>
                                    <li>%HEADER% <a>  %NOW_PAGE%/%TOTAL_PAGE% 页</a>
                                 </ul>");
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('end', '最后一页');
        $Page->setConfig('current', '当前页');
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $books->limit($Page->firstRow.','.$Page->listRows)->where("bookname like '%$bookname%'")->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display('books'); 
    }
    public function books_exe(){
      $User=M('Users');
      $username = session('username');//调用登录保存的 session('username',$username);
      $select=$User->query("select * from lc_users where username='$username' ");
      $this->assign('username',$select[0][username]);
      $this->assign('userphoto',$select[0][userphoto]);
      $xqid=$_POST['xq'];
      $xgid=$_POST['xg'];
      $scid=$_POST['sc'];
      $xqid1=$_REQUEST['id'];
      $books = M("Books"); // 实例化User对象
      if ($xqid) {
         $data = $books->where("id='$xqid'")->find();
            $this->assign('id',$data[id]);// 赋值数据集
             $this->assign('bookname',$data[bookname]);
              $this->assign('author',$data[author]);
               $this->assign('publisher',$data[publisher]);
                $this->assign('booktype',$data[booktype]);
                 $this->assign('price',$data[price]);
                  $this->assign('cover',$data[cover]);
                   $this->assign('synopsis',$data[synopsis]);
                   $this->display('booksdata');
      } 
       if ($xqid1) {
         $data = $books->where("id='$xqid1'")->find();
            $this->assign('id',$data[id]);// 赋值数据集
             $this->assign('bookname',$data[bookname]);
              $this->assign('author',$data[author]);
               $this->assign('publisher',$data[publisher]);
                $this->assign('booktype',$data[booktype]);
                 $this->assign('price',$data[price]);
                  $this->assign('cover',$data[cover]);
                   $this->assign('synopsis',$data[synopsis]);
                   $this->display('booksdata1');
      } 
      if($scid){
          $ok=$books->where("id='$scid'")->delete();
          if($ok){
          $this->success('删除成功', 'javascript:history.back(-1);');
            }else{
          $this->error('删除失败，稍后重试', 'javascript:history.back(-1);');      
            }
       }
       if ($xgid) {
           $data = $books->where("id='$xgid'")->find();
            $this->assign('id',$data[id]);// 赋值数据集
             $this->assign('bookname',$data[bookname]);
              $this->assign('author',$data[author]);
               $this->assign('publisher',$data[publisher]);
                $this->assign('booktype',$data[booktype]);
                 $this->assign('price',$data[price]);
                  $this->assign('cover',$data[cover]);
                   $this->assign('synopsis',$data[synopsis]);
                    $this->display('xgbooksdata');
       }
    }
    public function goxg(){
      $User=M('Users');
      $username = session('username');//调用登录保存的 session('username',$username);
      $select=$User->query("select * from lc_users where username='$username' ");
      $this->assign('username',$select[0][username]);
      $this->assign('userphoto',$select[0][userphoto]);
      $books = M("Books"); // 实例化User对象
        $goxg=$_POST['goxg'];
         if ($goxg) {
          $data = $books->where("id='$goxg'")->find();
           $this->assign('id',$data[id]);// 赋值数据集
             $this->assign('bookname',$data[bookname]);
              $this->assign('author',$data[author]);
               $this->assign('publisher',$data[publisher]);
                $this->assign('booktype',$data[booktype]);
                 $this->assign('price',$data[price]);
                  $this->assign('cover',$data[cover]);
                   $this->assign('synopsis',$data[synopsis]);
                    $this->display('xgbooksdata');
       }
    }
    public function xgbooksdata_exe(){
        $books = M("Books"); // 实例化User对象
        $id=$_POST['id'];
        $data['bookname']=$_POST['bookname'];
        $data['author']=$_POST['author'];
        $data['publisher']=$_POST['publisher'];
        $data['booktype']=$_POST['booktype'];
        $data['cover']=$_POST['cover'];
        $data['synopsis']=$_POST['synopsis'];
        $data['price']=$_POST['price'];
        // $xgdata['usersex'] = $_POST['usersex'];
        // $xgdata['usertel'] = $_POST['usertel'];
        // $xgdata['useraihao'] = $_POST['useraihao'];
        // $xgdata['userpwd'] = $_POST['userpwd'];
        // $xgdata['userphoto'] = $photo;
        $xg=$books->where("id='$id'")->save($data);
         if ($xg) {
            $this->success("恭喜您修改成功",'javascript:history.back(-1);');
        } else {
            $this->error("对不起修改失败，请您稍后再试！",books);
        };

    }
    
}
