 
<?php if( ! defined('BASEPATH')) die('No Access');
 
/**
 * 分页类
 */
class Page_list {
 
    /**
     * 总数据
     * @var int
     */
    private $total;
    /**
     * 每页显示数据
     * @var int
     */
    private $size;
    /**
     * 当前页数
     * @var int
     */
    private $page;
    /**
     * 页数列表左右页数
     * @var int
     */
    private $len;
 
    /**
     * 总页数
     * @var int
     */
    private $page_total;
    /**
     * 页码列表
     * @var array
     */
    private $page_list;
 
    /**
     * 基准地址
     * @var string
     */
    private $base_url;
    /**
     * 替换标志
     * @var string
     */
    private $place;
    /**
     * 分页样式
     * @var string
     */
    private $style;
 
 
    /**
     * 构造函数
     *
     * @param array $config 配置数组
     */
    public function __construct($config = array()){
        // 初始化默认值
        $this->total = 0;	//总数据
        $this->size = 15;	//每页显示的页数
        $this->page = 1;	//当前的页数
        $this->len = 4;		//页数列表左右页数
        $this->page_total = 1;	//总页数
        $this->page_list = array();		//页码列表
        $this->base_url = '?page=-page-';
        $this->place = '-page-';
        $this->style = 1;
        $this->initialize($config);
    }
 
    /**
     * 初始化分页
     *
     * @param array $config 配置数组
     */
    public function initialize($config = array()){
        // 取得配置值
        if(is_array($config)){
            if(array_key_exists('total', $config)) $this->total = @intval($config['total']);
            if(array_key_exists('size', $config)) $this->size = @intval($config['size']);
            if(array_key_exists('page', $config)) $this->page = @intval($config['page']);
            if(array_key_exists('len', $config)) $this->len = @intval($config['len']);
            if(array_key_exists('base_url', $config)) $this->base_url = @strval($config['base_url']);
            if(array_key_exists('place', $config)) $this->place = @strval($config['place']);
            if(array_key_exists('style', $config)) $this->style = @strval($config['style']);
        }
        // 修正值
        if($this->total<0) $this->total = 0;
        if($this->size<=0) $this->size = 15;
        if($this->page<=0) $this->page = 1;
        if($this->len<=0) $this->len = 4;
        // 执行分页算法
        $this->page_total = ceil($this->total/$this->size);
        if($this->page_total<=0) $this->page_total = 1;
        if($this->page>$this->page_total) $this->page = $this->page_total;
        if($this->page-$this->len>=1){
            for($i=$this->len; $i>0; $i--){
                $this->page_list[] = $this->page - $i;
            }
        }else{
            for($i=1; $i<$this->page; $i++){
                $this->page_list[] = $i;
            }
        }
        $this->page_list[] = $this->page;
        if($this->page+$this->len<=$this->page_total){
            for($i=1; $i<=$this->len; $i++){
                $this->page_list[] = $this->page + $i;
            }
        }else{
            for($i=$this->page+1; $i<=$this->page_total; $i++){
                $this->page_list[] = $i;
            }
        }
    }
	
    /**
     * 是否是第一页
     *
     * @return bool
     */
    public function is_first_page(){
        return $this->page == 1;
    }
 
    /**
     * 获取第一页页码
     *
     * @return int
     */
    public function get_first_page(){
        return 1;
    }
 
    /**
     * 是否是最后一页
     *
     * @return bool
     */
    public function is_last_page(){
        return $this->page == $this->page_total;
    }
 
    /**
     * 获取最后一页页码
     *
     * @return int
     */
    public function get_last_page(){
        return $this->page_total;
    }
 
    /**
     * 是否存在上一页
     *
     * @return bool
     */
    public function has_prev_page(){
        return $this->page > 1;
    }
 
    /**
     * 是否存在下一页
     *
     * @return bool
     */
    public function has_next_page(){
        return $this->page < $this->page_total;
    }
 
    /**
     * 获取上一页页码
     *
     * @return int
     */
    public function get_prev_page(){
        return $this->has_prev_page() ? $this->page - 1 : $this->page;
    }
 
    /**
     * 获取下一页页码
     *
     * @return int
     */
    public function get_next_page(){
        return $this->has_next_page() ? $this->page + 1 : $this->page;
    }
 
    /**
     * 获取当前页页码
     *
     * @return int
     */
    public function get_curr_page(){
        return $this->page;
    }
 
    /**
     * 获取总数据数
     *
     * @return int
     */
    public function get_total(){
        return $this->total;
    }
 
    /**
     * 获取每页显示数据数
     *
     * @return int
     */
    public function get_size(){
        return $this->size;
    }
 
    /**
     * 获取总页数
     *
     * @return int
     */
    public function get_total_page(){
        return $this->page_total;
    }
 
    /**
     * 构建并返回分页代码
     *
     * @param string $base_url 基准地址
     * @param string $place 替换标志
     * @param string $style 分页样式
     * @return string 分页HTML代码
     */
    public function display($base_url = '', $place = ''){
        if($base_url==='') $base_url = $this->base_url;
        if($place==='') $place = $this->place;
        if($this->style == 1){
        	$str = $this->get_defualt_page($base_url, $place);
		}else{
			$str = $this->get_video_page($base_url, $place);
		}
        return $str;
    }
    
	/**
	 * <li><a class="current" href="#">1</a></li>
 <li><a href="#">2</a></li>
 <li><a href="#">3</a></li>
 <li><a href="#">4</a></li>
 <li><a href="#">5</a></li>
 <li><a href="#">6</a></li>
 <li><a href="#">next</a></li>
	 */
	
	
	public function get_video_page($base_url, $place){
		// if( ! $this->is_first_page()){
        // $str .= '<a class="page_list_act" href="'.str_replace($place, $this->get_first_page(), $base_url).'">首页</a>';
        // }
        $str = "";
        if($this->has_prev_page()){
            $str .= '<li><a href="'.str_replace($place, $this->get_prev_page(), $base_url).'">prev</a></li>';
        }
        
        foreach($this->page_list as $v){
            if($v==$this->page){
                $str .= '<li><a class="current">'.$v.'</a></li>';
            }else{
                $str .= '<li><a href="'.str_replace($place, $v, $base_url).'">'.$v.'</a></li>';
            }
        }
        if($this->has_next_page()){
            $str .= '<li><a href="'.str_replace($place, $this->get_next_page(), $base_url).'">next</a></li>';
        }
        // if( ! $this->is_last_page()){
            // $str .= '<a class="page_list_act" href="'.str_replace($place, $this->get_last_page(), $base_url).'">尾页</a>';
        // }
        // $str .= '</div>';
        return $str;
	}
	
    public function get_defualt_page($base_url, $place){
    	// if( ! $this->is_first_page()){
            // $str .= '<a class="page_list_act" href="'.str_replace($place, $this->get_first_page(), $base_url).'">首页</a>';
        // }
        $str = "";
        if($this->has_prev_page()){
            $str .= '<li><a class="" href="'.str_replace($place, $this->get_prev_page(), $base_url).'">&laquo;</a></li>';
        }
        
        foreach($this->page_list as $v){
            if($v==$this->page){
            	
                $str .= '<li><a class="stayed">'.$v.'</a></li>';
            }else{
                $str .= '<li><a class="" href="'.str_replace($place, $v, $base_url).'">'.$v.'</a></li>';
            }
        }
        if($this->has_next_page()){
            $str .= '<li><a class="" href="'.str_replace($place, $this->get_next_page(), $base_url).'">&raquo;</a></li>';
        }
        // if( ! $this->is_last_page()){
            // $str .= '<a class="page_list_act" href="'.str_replace($place, $this->get_last_page(), $base_url).'">尾页</a>';
        // }
        // $str .= '</div>';
        return $str;
    }
 
}
?>
 
 