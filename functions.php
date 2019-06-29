<?php
/*メニュー設定*/
add_theme_support('menus');
//ナビリンクの設定
register_nav_menu( 'header-navi', 'ヘッダーナビ' );
// 記事の自動整形を無効化
remove_filter('the_content', 'wpautop');
// 抜粋の自動整形を無効化
remove_filter('the_excerpt', 'wpautop');

/**************************
ウィジェットエリアを設定
****************************/
add_action(
	'widgets_init',
	function(){
		register_sidebar(array(
			'id' => 'widget_id001',
			'name' => 'サイトバー０１',
			'description' => 'ウィジェットエリアについての説明を書きます',
		));

		register_sidebar(array(
			'id' => 'second_widget',
			'name' => 'セカンドエリア',
			'description' => '2つ目のウィジェットエリアです',
		));
	}
);

/**************************
自作ウィジェット「こんにちは！」を表示するだけのウィジェット
****************************/
class HelloWidget extends WP_Widget{
	//コンストラクタでウィジェットを登録
	function __construct(){
		parent::__construct(
			'my_sample_widget_id001',	//ウィジェットID
			'Helloウィジェット',		//ウィジェット名
			array(
        'description' => '「こんにちは！」を表示するだけのウィジェットです。'

      )
		);
	}
	//ウィジェットの表示
	public function widget($args, $instance){
		echo $args['before_widget'];
		//-- ここにウィジェットの内容 --//
		echo $args['before_title'] . 'こんにちは！' . $args['after_title'];
		echo $args['after_widget'];
	}
}
add_action(
	'widgets_init',
	function(){
		register_widget('HelloWidget'); //ウィジェットのクラス名を記述
	}
);

/**************************
自作ウィジェット画像表示付きの最近の投稿を表示する
****************************/
class SAmpleWidget extends WP_Widget{
  //コンストラクタ
  function __construct(){
      parent::__construct(
          'my_sample_widget_id002',	//ウィジェットID
    			'画像表示付きの最近の投稿を表示する',		//ウィジェット名
    			array(
            'description' => '画像表示付きの最近の投稿を表示する'

          )
      );
  }
  //ウィジェットの表示
	public function widget($args, $instance){
		echo $args['before_widget'];
		//-- ここにウィジェットの内容 --//
		echo $args['before_title'] . 'こんにちは！' . $args['after_title'];
		echo $args['after_widget'];
	}
}
add_action(
	'widgets_init',
	function(){
		register_widget('SAmpleWidget'); //ウィジェットのクラス名を記述
	}
);

/**************************
パラメータありのウィジェットの作成
****************************/
class MySampleWidgetParam extends WP_Widget{
	//コンストラクタでウィジェットを登録
	function __construct(){
		parent::__construct(
			'my_sample_widget_id002',	//ウィジェットID
			'パラメータありのサンプル',	//ウィジェット名
			array(
        'description' => '入力したテキストを赤色で表示します。'
      )
		);
	}
	//ウィジェットの表示
	public function widget($args, $instance){
		echo $args['before_widget'];
		//-- ここにウィジェットの内容 --//
		$dest_text = !empty($instance['setting_text']) ? $instance['setting_text'] : '';
		echo $args['before_title'] . '<span style="color:red;">' . $dest_text . '</span>' . $args['after_title'];
		echo $args['after_widget'];
	}
	//ウィジェットフォームの作成
	public function form($instance){
		$dest_text = !empty($instance['setting_text']) ? $instance['setting_text'] : '';
		?>
		<p>
		<label for="<?php echo $this->get_field_id('setting_text'); ?>">表示したい文字</label>
		<input id="<?php echo $this->get_field_id('setting_text'); ?>" name="<?php echo $this->get_field_name('setting_text'); ?>" type="text" value="<?php echo esc_attr($dest_text); ?>">
		</p>
		<?php
	}
	//入力されたデータの更新処理
	//	new_instance：更新後の値
	//	old_instance：更新前の値
	public function update($new_instance, $old_instance){
		$instance = array();
		$instance['setting_text'] = !empty($new_instance['setting_text']) ? $new_instance['setting_text'] : '';
		return $instance;	//更新されたデータが入った配列を戻り値として返す
	}
}
add_action(
	'widgets_init',
	function(){
		register_widget('HelloWidget');	//パラメータなし
		register_widget('MySampleWidgetParam');	//パラメータあり
	}
);
?>
