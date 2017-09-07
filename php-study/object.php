<?php
//成员方法
//class SportObject{
//    function beatBasketball($name,$height,$avoirdupois,$age,$sex){				//声明成员方法
//        if($height>180 and $avoirdupois<=100){
//            return $name."，符合打篮球的要求!";			//方法实现的功能
//        }else{
//            return $name."，不符合打篮球的要求!";			//方法实现的功能
//        }
//    }
//}
//$sport=new SportObject();
//echo $sport->beatBasketball('明日','185','80','20周岁','男');

//成员变量
//class SportObject{
//    public $name;								//定义成员变量
//    public $height;								//定义成员变量
//    public $avoirdupois;						//定义成员变量
//
//    public function bootFootBall($name,$height,$avoirdupois){				//声明成员方法
//        $this->name=$name;
//        $this->height=$height;
//        $this->avoirdupois=$avoirdupois;
//        if($this->height<185 and $this->avoirdupois<85){
//            return $this->name."，符合踢足球的要求!";			//方法实现的功能
//        }else{
//            return $this->name."，不符合踢足球的要求!";			//方法实现的功能
//        }
//    }
//}
//$sport=new SportObject();			//实例化类，并传递参数
//echo $sport->bootFootBall('明日','185','80');								//执行类中的方法

//常量
//class SportObject{
//    const BOOK_TYPE = '计算机图书';
//    public $object_name;						//图书名称
//    function setObjectName($name){				//声明方法setObjectName()
//        $this -> object_name = $name;			//设置成员变量值
//    }
//    function getObjectName(){					//声明方法getObjectName()
//        return $this -> object_name;
//    }
//}
//$c_book = new SportObject();						//实例化对象
//$c_book -> setObjectName("PHP类");				//调用方法setObjectName
//echo SportObject::BOOK_TYPE."->";					//输出常量BOOK_TYPE
//echo $c_book -> getObjectName();				//调用方法getObjectName

//构造方法
//class SportObject{
//    public $name;								//定义成员变量
//    public $height;								//定义成员变量
//    public $avoirdupois;						//定义成员变量
//    public $age;								//定义成员变量
//    public $sex;								//定义成员变量
//    public function __construct($name,$height,$avoirdupois,$age,$sex){				//定义构造方法
//        $this->name=$name;						//为成员变量赋值
//        $this->height=$height;					//为成员变量赋值
//        $this->avoirdupois=$avoirdupois;		//为成员变量赋值
//        $this->age=$age;						//为成员变量赋值
//        $this->sex=$sex;						//为成员变量赋值
//    }
//    public function bootFootBall(){				//声明成员方法
//        if($this->height<185 and $this->avoirdupois<85){
//            return $this->name."，符合踢足球的要求!";			//方法实现的功能
//        }else{
//            return $this->name."，不符合踢足球的要求!";			//方法实现的功能
//        }
//    }
//}
//$sport=new SportObject('明日','185','80','20','男');			//实例化类，并传递参数
//echo $sport->bootFootBall();								//执行类中的方法

//析构方法
//class SportObject{
//    public $name;								//定义成员变量
//    public $height;								//定义成员变量
//    public $avoirdupois;						//定义成员变量
//    public $age;								//定义成员变量
//    public $sex;								//定义成员变量
//    public function __construct($name,$height,$avoirdupois,$age,$sex){				//定义构造方法
//        $this->name=$name;						//为成员变量赋值
//        $this->height=$height;					//为成员变量赋值
//        $this->avoirdupois=$avoirdupois;		//为成员变量赋值
//        $this->age=$age;						//为成员变量赋值
//        $this->sex=$sex;						//为成员变量赋值
//    }
//    public function bootFootBall(){				//声明成员方法
//        if($this->height<185 and $this->avoirdupois<85){
//            return $this->name."，符合踢足球的要求!";			//方法实现的功能
//        }else{
//            return $this->name."，不符合踢足球的要求!";			//方法实现的功能
//        }
//    }
//    function __destruct(){
//        echo "<p><b>对象被销毁，调用析构函数。</b></p>";
//    }
//}
//$sport=new SportObject('明日','185','80','20','男');			//实例化类，并传递参数

//继承的实现
///*  父类  */
//class SportObject{
//    public $name;								//定义姓名成员变量
//    public $age;								//定义年龄成员变量
//    public $avoirdupois;						//定义体重成员变量
//    public $sex;								//定义性别成员变量
//    public function __construct($name,$age,$avoirdupois,$sex){				//定义构造方法
//        $this->name=$name;						//为成员变量赋值
//        $this->age=$age;						//为成员变量赋值
//        $this->avoirdupois=$avoirdupois;		//为成员变量赋值
//        $this->sex=$sex;						//为成员变量赋值
//    }
//    function showMe(){							//定义方法
//        echo '这句话不会显示。';
//    }
//}
///*  子类BeatBasketBall  */
//class BeatBasketBall extends SportObject{				//定义子类，继承父类
//    public $height;										//定义身高成员变量
//    function __construct($name,$height){				//定义构造方法
//        $this -> height = $height;						//为成员变量赋值
//        $this -> name = $name;							//为成员变量赋值
//    }
//    function showMe(){									//定义方法
//        if($this->height>185){
//            return $this->name."，符合打篮球的要求!";			//方法实现的功能
//        }else{
//            return $this->name."，不符合打篮球的要求!";			//方法实现的功能
//        }
//    }
//}
///*  子类WeightLifting  */
//class WeightLifting extends SportObject{						//继承父类
//    function showMe(){											//定义方法
//        if($this->avoirdupois<85){
//            return $this->name."，符合举重的要求!";				//方法实现的功能
//        }else{
//            return $this->name."，不符合举重的要求!";			//方法实现的功能
//        }
//    }
//}
////实例化对象
//$beatbasketball = new BeatBasketBall('科技','190');				//实例化子类
//$weightlifting = new WeightLifting('明日','185','80','20','男');
//echo $beatbasketball->showMe()."<br>";							//输出结果
//echo $weightlifting->showMe()."<br>";

//“::”操作符
//class Book{
//    const NAME = 'computer';							//常量NAME
//    function __construct(){								//构造方法
//        echo '本月图书类冠军为：'.Book::NAME.' ';		//输出默认值
//    }
//}
//class l_book extends Book{								//Book类的子类
//    const NAME = 'foreign language';					//声明常量
//    function __construct(){								//子类的构造方法
//        parent::__construct();							//调用父类的构造方法
//        echo '本月图书类冠军为：'.self::NAME.' ';		//输出本类中的默认值
//    }
//}
//$obj = new l_book();									//实例化对象

//private关键字
//class Book{
//    private $name = 'computer';							//声明私有变量$name
//    public function setName($name){						//设置私有变量
//        $this -> name = $name;
//    }
//    public function getName(){							//读取私有变量
//        return $this -> name;
//    }
//}
//class LBook extends Book{								//Book类的子类
//}
//$lbook = new LBook();									//实例化对象
//echo '正确操作私有变量的方法：';
//$lbook -> setName("PHP从入门到精通");					//对私有变量进行操作
//echo $lbook -> getName();
//echo '<br>直接操作私有变量的结果：';					//对私有变量进行操作
//echo Book::$name;

//protected关键字
//class Book{
//    protected $name = 'computer';						//声明保护变量$name
//}
//class LBook extends Book{								//Book类的子类
//    public function showMe(){
//        echo '对于protected修饰的变量，在子类中是可以直接调用的。如：$name = '.$this -> name;
//    }
//}
//$lbook = new LBook();									//实例化对象
//$lbook -> showMe();
//echo '<p>但在其他的地方是不可以调用的，否则：';			//对私有变量进行操作
//$lbook -> name = 'history';

//静态变量的使用
//class Book{										//Book类
//    static $num = 0;							//声明一个静态变量$num，初值为0
//    public function showMe(){					//申明一个方法
//        echo '您是第'.self::$num.'位访客';		//输出静态变量
//        self::$num++;							//将静态变量加1
//    }
//}
//$book1 = new Book();							//实例化对象$book1
//$book1 -> showMe();								//调用showMe()方法
//echo "<br>";
//$book2 = new Book();							//实例化对象$book2;
//$book2 -> showMe();								//再次调用showMe()方法
//echo "<br>";
//echo '您是第'.Book::$num.'为访客';				//直接使用类名调用静态变量

//抽象类
//abstract class CommodityObject{							//定义抽象类
//    abstract function service($getName,$price,$num);	//定义抽象方法
//}
//class MyBook extends CommodityObject{				//定义子类，继承抽象类
//    function service($getName,$price,$num){		//定义方法
//        echo '您购买的商品是'.$getName.'，该商品的价格是：'.$price.' 元。';
//        echo '您购买的数量为：'.$num.' 本。';
//        echo '如发现缺页，损坏请在3日内更换。';
//    }
//}
//class MyComputer extends CommodityObject{			//定义子类继承父类
//    function service($getName,$price,$num){			//定义方法
//        echo '您购买的商品是'.$getName.'，该商品的价格是：'.$price.' 元。';
//        echo '您购买的数量为：'.$num.' 台。';
//        echo '如发生非人为质量问题，请在3个月内更换。';
//    }
//}
//$book = new MyBook();					//实例化子类
//$computer = new MyComputer();			//实例化子类
//$book -> service('《PHP从入门到精通》',85,3);	//调用方法
//echo '<p>';
//$computer -> service('XX笔记本',8500,1);		//调用方法

//应用接口
//interface MPopedom{
//    function popedom();
//}
//interface MPurview{
//    function purview();
//}
//class Member implements MPurview{
//    function purview(){
//        echo '会员拥有的权限。';
//    }
//}
//class Manager implements MPurview,MPopedom{
//    function purview(){
//        echo '管理员拥有会员的全部权限。';
//    }
//    function popedom(){
//        echo '管理员还有会员没有的权限';
//    }
//}
//$member = new Member();
//$manager = new Manager();
//$member -> purview();
//echo '<p>';
//$manager -> purview();
//$manager ->popedom();

//对象的引用
//class SportObject{									//类SportObject
//    private $object_type = 'book';				//声明私有变量$object_type，并赋初值等于“book”
//    public function setType($type){				//声明成员方法setType，为变量$object_type赋值
//        $this -> object_type = $type;
//    }
//    public function getType(){					//声明成员方法getType，返回变量$object_type的值
//        return $this -> object_type;
//    }
//}
//$book1 = new SportObject();						//实例化对象$book1
//$book2 = $book1;								//使用普通数据类型的方法给对象$book2赋值
//$book2 -> setType('computer');					//改变对象$book2的值
//echo '对象$book1的值为：'.$book1 -> getType();	//输出对象$book1的值

//__clone()方法
//class SportObject{									//类SportObject
//    private $object_type = 'book';				//声明私有变量$object_type，并赋初值等于“book”
//    public function setType($type){				//声明成员方法setType，为变量$object_type赋值
//        $this -> object_type = $type;
//    }
//    public function getType(){					//声明成员方法getType，返回变量$object_type的值
//        return $this -> object_type;
//    }
//    public function __clone(){					//声明__clone()方法
//        $this ->object_type = 'computer';		//将变量$object_type的值修改为computer
//    }
//}
//$book1 = new SportObject();						//实例化对象$book1
//$book2 = clone $book1;							//使用普通数据类型的方法给对象$book2赋值
//echo '对象$book1的变量值为：'.$book1 -> getType();//输出对象$book1的值
//echo '<br>';
//echo '对象$book2的变量值为：'.$book2 -> getType();

//对象的比较
//class SportObject{
//    private $name;
//    function __construct($name){
//        $this -> name = $name;
//    }
//}
//$book = new SportObject('book');
//$cloneBook = clone $book;
//$referBook = $book;
//if($cloneBook == $book){
//    echo '两个对象的内容相等<br>';
//}
//if($referBook === $book){
//    echo '两个对象的引用地址相等<br>';
//}

//对象类型检测
//class SportObject{}
//class MyBook extends SportObject{
//    private $type;
//}
//$cBook = new MyBook();
//if($cBook instanceof MyBook)
//    echo '对象$cBook属于MyBook类<br>';
//if($cBook instanceof SportObject)
//    echo '对象$cBook属于SportObject类<br>';

//__set()和__get()方法
//class SportObject
//{
//    private $type = ' ';
//    public function getType(){
//        return $this -> type;
//    }
//    private function __get($name){
//        if(isset($this ->$name)){
//            echo '变量'.$name.'的值为：'.$this -> $name.'<br>';
//        }
//        else{
//            echo '变量'.$name.'未定义，初始化为0<br>';
//            $this -> $name = 0;
//        }
//    }
//    private function __set($name, $value){
//        if(isset($this -> $name)){
//            $this -> $name = $value;
//            echo '变量'.$name.'赋值为：'.$value.'<br>';
//        }else{
//            $this -> $name = $value;
//            echo '变量'.$name.'被初始化为：'.$value.'<br>';
//        }
//    }
//}
//$MyComputer = new SportObject();
//$MyComputer -> type = 'DIY';
//$MyComputer -> type;
//$MyComputer -> name;

//__call()方法
//class SportObject
//{
//    public function myDream(){
//        echo '调用的方法存在，直接执行此方法。<p>';
//    }
//    public function __call($method, $parameter)
//    {
//        echo '如果方法不存在，则执行__call()方法。<br>';
//        echo '方法名为：'.$method.'<br>';
//        echo '参数有：';
//        var_dump($parameter);
//    }
//}
//$MyLife = new SportObject();
//$MyLife -> myDream();
//$MyLife -> mDream('how','what','why');

//__toString()
//class SportObject{
//    private $type = 'DIY';
//    public function __toString(){
//        return $this -> type;
//    }
//}
//$myComputer = new SportObject();
//echo 'toString';
//echo  $myComputer;

//__autoload()方法自动实例化需要使用的类
//class SportObject{
//    private $cont;
//    public function __construct($cont){
//        $this -> cont = $cont;
//    }
//    public function __toString(){
//        return $this -> cont;
//    }
//}
//function __autoload($class_name){
//    $class_path = $class_name.'.class.php';
//    if(file_exists($class_path)){
//        include_once($class_path);
//    }else
//        echo '类路径错误。';
//}
//$myBook = new SportObject("江山代有人才出　各领风骚数百年");
//echo $myBook;








?>