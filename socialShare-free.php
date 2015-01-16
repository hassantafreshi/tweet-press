<?php
/*
Plugin Name: توییت پرس رایگان
Plugin URI: http://goo.gl/J717ug
Description: با افزونه توییت پرس دنبال کننده های  <small>(Fallower)</small> خود را در توییتر <small>(Twitter)</small>  از انتشار مطلب جدید آگاه کنید. روش کارافزونه توییت پرس به این ترتیب است که بعد از انتشار مطلب بصورت  <strong>خودکار</strong> توییتی به همراه <strong>لینک  کوتاه شده و عنوان مطلب </strong>در اکانت توییتر شما برای دنبال کننده های <small>(Fallower)</small> شما در توییتر به اشتراک می گذارد.
مطلب </strong>در اکانت توییتر شما برای دنبال کننده های شما در توییتر ارسال می شود
Author: <a href="http://www.webbro.ir" title="نمایش خانه‌ی نویسنده">Hassan Tafreshi</a>
Version: 0.16
Author URI: http://www.webbro.ir
 */




function funRbtweetOptionPage()
{
	// first...process form data?
	if (isset($_POST['submit-op']) &&  $_SERVER['REQUEST_METHOD'] == "POST")
	{
    if ( !empty($_POST['submit-op']) && check_admin_referer( 'myRbTPNonceAction', 'rbTPONonce' )){
		 // twitter Secret code
       update_option( 'rbTPOcKey', $_POST['rbTPOcKey']);
       update_option('rbTPOCSecret', $_POST['rbTPOCSecret']);
       update_option('rbTPOAToken', $_POST['rbTPOAToken']);
       update_option('rbTPOATSecret', $_POST['rbTPOATSecret']);

        echo '<div id="message" class="updated">تغییرات ذخیره شد</div>';
    }
    else{
             ?>
             <div id="message" class="error-message"><?php _e('خطا در زیره سازی', 'rb-tweetPress-plugin-lan'); ?> </div>
             <?php
    }
	}

?>
             
             <div class="update-nag"> <?php _e('در صورت عدم آشنایی با روش ساخت توکن های توییتر', 'rb-tweetPress-plugin-lan'); ?>  
                <a href="http://webbro.ir/Files/plugin/twitter-press/docs/create-app-twitter.htm?u=f" target="_blank">
                   <?php _e('اینجا را کلیک کنید', 'rb-tweetPress-plugin-lan'); ?>
                </a>.</div>
  <div id="icon-options-general" class="icon32"> </div>
       <h2><?php _e('افزونه توییت پرس', 'rb-tweetPress-plugin-lan'); ?></h2>
    
	<div class="wrap">
    

    

    <br><p>
       <?php _e('به افزونه توییت پرس خوش آمدید. با کمک این افزونه می توانید لینک آخرین مطلب منتشر شده را در توییتر به راحتی به اشتراک بگذارید . برای اطلاعات بیشتر در خصوص روش بدست آوردن توکن ها و روش استفاده از پلاگین به لینک های موجود در بالا مراجعه کنید', 'rb-tweetPress-plugin-lan'); ?> </p>
   
    <form action="" method="post" id="rb-twitter-options-form">
       <h3 class="title">تنظیمات اتصال به توییتر</h3>
        <table class="form-table">
            <tr valign="top">
             <th scope="row">
              <label for="rbTPOcKey">Consumer Key </label>
             </th>
             <td>
              <input
                        type="text" id="rbTPOcKey" name="rbTPOcKey" class="large-text code" 
                        value="<?php echo esc_attr( get_option('rbTPOcKey') ); ?>" />
              <p class="description"><?php _e('آموزش بدست آوردن توکن ها', 'rb-tweetPress-plugin-lan'); ?>
                 <a href="http://webbro.ir/Files/plugin/twitter-press/docs/create-app-twitter.htm?u=f" target="_blank">
                   <?php _e('اینجا را کلیک کنید', 'rb-tweetPress-plugin-lan'); ?></p>
             </td>
            </tr>
 
 
            <tr valign="top">
             <th scope="row">
              <label for="rbTPOCSecret">Consumer Secret </label>
             </th>
             <td>
               <input
                        type="text" id="rbTPOCSecret" name="rbTPOCSecret" class="large-text code"
                        value="<?php echo esc_attr( get_option('rbTPOCSecret') ); ?>" />
              <p class="description">
              <?php _e('آموزش بدست آوردن توکن ها', 'rb-tweetPress-plugin-lan'); ?>
                 <a href="http://webbro.ir/Files/plugin/twitter-press/docs/create-app-twitter.htm?u=f" target="_blank">
                   <?php _e('اینجا را کلیک کنید', 'rb-tweetPress-plugin-lan'); ?></p>
              </p>
             </td>
            </tr>
          
            <tr valign="top">
             <th scope="row">
              <label for="rbTPOAToken" style="">Access Token </label>
             </th>
             <td>
                  <input
                        type="text" id="rbTPOAToken" name="rbTPOAToken" class="large-text code"
                        value="<?php echo esc_attr( get_option('rbTPOAToken') ); ?>" />
              <p class="description">
              <?php _e('آموزش بدست آوردن توکن ها', 'rb-tweetPress-plugin-lan'); ?>
                 <a href="http://webbro.ir/Files/plugin/twitter-press/docs/create-app-twitter.htm?u=f" target="_blank">
                   <?php _e('اینجا را کلیک کنید', 'rb-tweetPress-plugin-lan'); ?></p>
              </p>
             </td>
            </tr>

            <tr valign="top">
             <th scope="row">
              <label for="rbTPOATSecret">Access Token Secret </label>
             </th>
             <td>
                  <input
                        type="text" id="rbTPOATSecret" name="rbTPOATSecret"  class="large-text code"
                        value="<?php echo esc_attr( get_option('rbTPOATSecret') ); ?>" />
                  <p class="description">
                     <?php _e('آموزش بدست آوردن توکن ها', 'rb-tweetPress-plugin-lan'); ?>
                 <a href="http://webbro.ir/Files/plugin/twitter-press/docs/create-app-twitter.htm?u=f" target="_blank">
                   <?php _e('اینجا را کلیک کنید', 'rb-tweetPress-plugin-lan'); ?></p>
                  </p>
             </td>
            </tr>
          </table>
          <table class="form-table">
            <h3 class="title"><?php _e('تنظیم محتوا توییت', 'rb-tweetPress-plugin-lan'); ?></h3>
            
            <tr valign="top">
               <th scope="row">
                <label for="rbTPOATText"> <?php _e('متن پیوستی به  توییت ها:', 'rb-tweetPress-plugin-lan'); ?></label>
                <P class="description"><?php _e('نکته: در نسخه رایگان این قسمت در دسترس قرار ندارد.', 'rb-tweetPress-plugin-lan'); ?></P> 
               </th>
               <td>
                    <input
                          type="text" id="rbTPOATSecret" name="rbTPOATText" 
                          value="" 
                          
                          title="در نسخه رایگان این قسمت در دسترس نمی باشد" 
                          disabled>
                
               <p class="description">
                <?php _e('متن پیوستی همراه با همه توییت ها ارسال می شود از کارکترهای نیز @ یا # می توانید استفاده کنید . حداکثر طول متن پیوستی 20 حرف می باشد. ', 'rb-tweetPress-plugin-lan'); ?>
                  <br>
                  
                  
                </p>
               </td>
            </tr>



        </h3>
        <tr valign="top">
         <th scope="row">
            <?php _e('در توییت ها کدام لینک قرار گیرد ؟ ', 'rb-tweetPress-plugin-lan'); ?>
            <P class="description"><?php _e('نکته: در نسخه رایگان این قسمت در دسترس قرار ندارد.', 'rb-tweetPress-plugin-lan'); ?></P> 
         </th>
         <td><fieldset>
          <legend class="screen-reader-text"><span>
              <?php _e('در توییت ها کدام لینک قرار گیرد ؟ ', 'rb-tweetPress-plugin-lan'); ?>
             </span></legend>

           <label><input type="radio" name="rbTPOATLink" id="home" value="home" 
                          title="در نسخه رایگان این قسمت در دسترس نمی باشد" 
                          
                          disabled> 
           <?php _e('لینک صفحه اصلی', 'rb-tweetPress-plugin-lan'); ?>
           </label><br>
           <label><input type="radio" name="rbTPOATLink" id="post" value="post"
                          title="در نسخه رایگان این قسمت در دسترس نمی باشد" 
                          
                          disabled> 
              <?php _e(' لینک مطلب', 'rb-tweetPress-plugin-lan'); ?>
           </label><br>
          </fieldset></td>
        </tr>
       

        
     <tr valign="top">
      <th scope="row"><?php _e('مطالبی که تصویر شاخص ندارند', 'rb-tweetPress-plugin-lan'); ?> 
       <P class="description">نکته: در نسخه رایگان این قسمت در دسترس قرار ندارد.</P>  </th>
      <td><fieldset>
       <legend class="screen-reader-text"><span><?php _e('مطالبی که تصویر شاخص ندارند', 'rb-tweetPress-plugin-lan'); ?> </span></legend>

        <label><input type="radio" name="rbTPOATimage" id="yes" value="1" 
                      title="در نسخه رایگان این قسمت در دسترس نمی باشد" 
                      
                      disabled> 
        <?php _e('بدون تصویر توییت شود', 'rb-tweetPress-plugin-lan'); ?> 
        </label><br>
        <label><input type="radio" name="rbTPOATimage" id="no" value="0"
                      title="در نسخه رایگان این قسمت در دسترس نمی باشد" 
                      
                      disabled> 
           <?php _e('توییت نشود!', 'rb-tweetPress-plugin-lan'); ?> 
        </label><br>
       </fieldset></td>
       
     </tr>
       
       <?php
        $radio=esc_attr( get_option('rbTPOTwtrUsrNm'));
       ?>
     
      <tr valign="top">
       <th scope="row"> 
         <?php _e('آیا تمایل دارید  در توییت مطالب نام توییتری نویسنده مطلب قرار گرید ؟ ', 'rb-tweetPress-plugin-lan'); ?> 
           <P class="description">نکته: در نسخه رایگان این قسمت در دسترس قرار ندارد.</P> 
       </th>
       <td><fieldset>
        <legend class="screen-reader-text"><span> آیا تمایل دارید  در توییت مطالب نام توییتری نویسنده مطلب قرار گرید ؟ </span></legend>

         <label><input type="radio" name="rbTPOTwtrUsrNm" id="yes" value="1" 
                      title="در نسخه رایگان این قسمت در دسترس نمی باشد" 
                      
                      disabled> 
         <?php _e('بله', 'rb-tweetPress-plugin-lan'); ?> 
         </label><br>
         <label><input type="radio" name="rbTPOTwtrUsrNm" id="no" value="0"
                      title="در نسخه رایگان این قسمت در دسترس نمی باشد" 
                      
                      disabled> 
         <?php _e('خیر!', 'rb-tweetPress-plugin-lan'); ?> 
         </label><br>
        </fieldset></td>
      </tr>
      
      
        <?php wp_nonce_field('myRbTPNonceAction','rbTPONonce'); ?>          
   
 </table>  
       <p><input type="submit" class="button button-primary button-large" name="submit-op" value="ذخیره تغییرات" />
    </form>
  
	<?php

}

function funrbTwitterPluginMenu()
{
   $dir =  plugin_dir_url( __FILE__ ) ;
 // 	add_options_page('Tweet Post','Tweet Post', 'manage_options', 'rb-tweet-post-plugin', 'funRbtweetOptionPage');
 // در منو لود می کند و مشخصات به نمایش می گذارد
       
	add_menu_page('توییت پرس', 'توییت پرس', 'manage_options', 'rb-tweet-post-demo-plugin', 'funRbtweetOptionPage', 
				$dir.'img.png',99);
  //			
 add_submenu_page('rb-tweet-post-demo-plugin','گزارش', 'گزارش', 'manage_options',
                  'rb-tweet-post-report-demo-plugin', 'funRbtweetOptionPageReport');
}


function funRbtweetOptionPageReport()
{ ?>
    <!-- new code -->
 <div class="wrap">
   	<h2><?php _e('صفحه آنالیز', 'rb-tweetPress-plugin-lan'); ?> </h2>
    
    <table class="form-table">  
    <?php 
	     $lastTweet=esc_attr( get_option('RbcheckValue'));
		 if ($lastTweet<>null)
		 {
			echo '<tr valign="top">	<th scope="row">			<p class="pressthis"><a onclick="return false;" '
			. 'oncontextmenu="if(window.navigator.userAgent.indexOf(\'WebKit\')!=-1'
			. '||window.navigator.userAgent.indexOf(\'MSIE\')!=-1){jQuery(\'.pressthis-code\').show()'
			. '.find(\'textarea\').focus().select();return false;}" href="javascript:var d=document,w=window,'
			. 'e=w.getSelection,k=d.getSelection,x=d.selection,s=(e?e():(k)?k():(x?x.createRange().text:0)),'
			. 'f=\'http://127.0.0.1/wp-test/wp-admin/press-this.php\',l=d.location,e=encodeURIComponent,'
			. 'u=f+\'?u=\'+e(l.href)+\'&t=\'+e(d.title)+\'&s=\'+e(s)+\'&v=4\';a=function(){if(!w.open(u,\'t\''
			. ',\'toolbar=0,resizable=1,scrollbars=1,status=1,width=720,height=570\'))l.href=u;};if (/Firefox/'
			. '.test(navigator.userAgent)) setTimeout(a, 0); else a();void(0)"><span>محتوا آخرین توییت</span>'
			. '</a></p>	</th>	<td><textarea name="tweet_con" rows="4" cols="50" id="tweet_con" class="tweet_con">'
			. ''. $lastTweet .'</textarea>	</td></tr>';
		 }
     ?>
    </table> 
    <?php
      $result=  funRbReturnQueryTableShrtlnk();
    ?>
    



	<h2>
	   <?php _e('لیست لینک های کوتاه شده', 'rb-tweetPress-plugin-lan'); ?> 
	</h2>
	<form id="posts-filter" action="" method="get">
		
			<table class="wp-list widefat fixed posts" cellspacing="0">
					<thead>
						<tr>
							<th scope="col" id="title" class="manage-column column-name manage-column " style="">
							 <?php _e('لینک کوتاه', 'rb-tweetPress-plugin-lan'); ?> 
						   </th>
						   <th scope="col" id="categories" class="column-title sortable desc" style="">
							 <?php _e('لینک بلند', 'rb-tweetPress-plugin-lan'); ?> 
						   </th>
						   <th scope="col" id="date" class="manage-column column-date sortable asc" style="">
							 <?php _e('تاریخ اشتراک ', 'rb-tweetPress-plugin-lan'); ?> 
						   </th>	
						</tr>
					</thead>

					<tfoot>
							<tr>
								<th scope="col" id="title" class="manage-column column-name manage-column " style="">
									<?php _e('لینک کوتاه', 'rb-tweetPress-plugin-lan'); ?> 
								</th>
								<th scope="col" id="categories" class="column-title sortable desc" style="">
								 <?php _e('لینک بلند', 'rb-tweetPress-plugin-lan'); ?> 
								</th>
								<th scope="col" id="date" class="manage-column column-date sortable asc" style="">
								 <?php _e('تاریخ اشتراک ', 'rb-tweetPress-plugin-lan'); ?> 
								</th>	
							</tr>
					</tfoot>

					<tbody id="the-list">
						<tr id="post-216" class="post-216 type-post status-publish format-standard hentry category-- alternate iedit author-self" valign="top">
								
						<?php
							foreach ( $result as $result ) 
								{
									echo  
									' 
									<td class="post-title page-title column-title">
									<strong><a class="row-title" href="http://goo.gl/#analytics/'.$result->url.'/all_time" title="کلیک برای دیدن جزییات" target="_blank">'.$result->url.'</a></strong> </td>
									<div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>

									<td class="categories column-categories"><a href="'.get_permalink( $result->pId ).'" target="_blank">'.$title=get_the_title( $result->pId ).'</a></td>			
									<td class="date column-date"><abbr title="'.$result->date.'">'.$result->date.'</abbr></td>		</tr>  
									';
								}        
						?>
					</tbody>
			</table>

	</form>
</div>
    

<!-- new code -->  

     <?php
     
     
     
}
add_action('admin_menu', 'funrbTwitterPluginMenu');



function funRbReturnQueryTableShrtlnk($max , $min)
{
   //FROM $table_name WHERE id < $max  && id >$min
   global $wpdb;
   $table_name = $wpdb->prefix . "rbtblshrtlnk";
   $resutl = $wpdb->get_results( 
      "
      SELECT url, date,pId 
      FROM $table_name
      "
   );
   return $resutl;
}





add_action( 'publish_post', 'funRbMainSharePost' );
register_activation_hook(__FILE__,'funrbCreateTableShrtlnk');

//create table 
function funrbCreateTableShrtlnk()
{
	global $wpdb;
	
	$table_name = $wpdb->prefix . "rbtblshrtlnk";
	
	// will return NULL if there isn't one
	if ( $wpdb->get_var('SHOW TABLES LIKE ' . $table_name) != $table_name )
	{
		$sql = 'CREATE TABLE ' . $table_name . '( 
				id INTEGER(10) UNSIGNED AUTO_INCREMENT,
				date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
				url VARCHAR (25),
    pId INTEGER(10),
				PRIMARY KEY  (id) )';
		
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
		
		add_option('rbtblshrtlnk_database_version','1.0');
	}
}

// function Insert in to shortlink table
function funInsertTableShrtlnk($link ,$postID)
{
  global $wpdb;
	
	$rbtableName = $wpdb->prefix . 'rbtblshrtlnk';
	
	$wpdb->insert($rbtableName,array(
                                    'date' => current_time( 'mysql' ), 
                                    'url' => $link,
                                    'pId' => $postID
     
                                 )
                                 ,array('%s','%s','%d' )
               );
       
       

   
}


// Main FUnction
function funRbMainSharePost()
{
   // get last  post info
   $last = wp_get_recent_posts( '1');
   // get last post id 
   $ID = $last['0']['ID'];
   
     
   //get blog title
    $title=get_bloginfo('name');
    $title=$title .' '. 'به روز شد' ;
    //select url function;
    $url=  funRbGooGlUrl($ID);
   // this function check string lenght of tweet content
   $re=funRbLenTweetCon($title,$url);
   $r=funRbTweetPost($re);
   // 
   
   // if tweet done the shortlink url be insert into table by function  funInsertTableShrtlnk
   if ($r=='done')
   {
      funInsertTableShrtlnk(substr($url, 7),$ID);
      update_option( 'RbcheckValue', $re);
   }
      
}
//end function Main


function funRbLenTweetCon($var,$url)
{
   $lVar = strlen ($var);
   $lUrl = strlen ($url);
   $tweetLen=93;
   //23 per link
  if ($lVar>$tweetLen)
  {
  $var=substr($var, 0,$tweetLen-3); 
  $var.='...';
  }
  $re=$var .' ' . $url;
  return   $re;
  //return    
}



//start function getTwittername
function funRbGetTwittername($ID)
{
    //get username of twitter
   $author_id = get_post_field( 'post_author', $ID );
   $twtrUsrNm=  get_the_author_meta( 'rb_twittername' ,$author_id);
   return $twtrUsrNm;
}
//end function getTwittername

//start function funRbGooGlUrl
function funRbGooGlUrl($ID)
{
      // get last post url
   $url=get_permalink( $ID );
   $url=funRbShortlinkGen($url);  
   return $url; 
}
//end function funRbGooGlUrl

// this function check lenght of $var string if variable $var is lenght longer then $len varible
// it return 0 if shorter then return 1
function funRbCheckLen($var ,$len)
{
   if (strlen ($var)<=$len)
   {$r=1;}
    else {$r=0;}
return $r;
}


//start function shortlnik
function funRbShortlinkGen($url)
{ 

      // short link start   
       define( 'MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
      require_once( MY_PLUGIN_PATH . 'lib/googl.php' );

      $type = 'short';
      $gooGl = new GooGl();
      $gooGl->setURL($url);
      if ($type == 'short') {
       $shortURL = $gooGl->getShortURL();
      }
      return $shortURL;

 }
 //end functio funRbShortlinkGen
 
 
 // start function funImagePath
 function  funRbImagepath($ID)
 {
       $post_tumb=get_post_thumbnail_id($ID);
      if (!empty($post_tumb))
      {
         $imageUrl = wp_get_attachment_image_src($post_tumb  , 'large');
         $imagePath=parse_url($imageUrl[0], PHP_URL_PATH);
         $imagePath=$_SERVER["DOCUMENT_ROOT"].$imagePath;
      }
      else {
         $imagePath=NULL; 
      }
      return $imagePath;
 }
 // end function funImagePath
 
 
 
 
 
 
 //start function tweet
 function funRbTweetPost($contentTweet)
 { 
    
    //tweet start
    define('MY_PLUGIN_PATH', plugin_dir_path(__FILE__)); 
    require_once( MY_PLUGIN_PATH . 'lib/oauth.php' );
    require_once( MY_PLUGIN_PATH . 'lib/twitter.php' );

    
  $consumerKey=esc_attr( get_option('rbTPOcKey') );
  $consumerSecret=esc_attr( get_option('rbTPOCSecret') );
  $accessToken=esc_attr( get_option('rbTPOAToken') );
  $accessTokenSecret=esc_attr( get_option('rbTPOATSecret') );

  // debug sction start
   update_option( 'consumerKeyA',$consumerKey);
   update_option( 'consumerSecretA',$consumerSecret);
   update_option( 'accessTokenA',$accessToken);
    update_option( 'accessTokenSecretA',$accessTokenSecret);
  // debug section end
  
  
   $twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
   
   try {
      
         $tweet = $twitter->send($contentTweet);
         $r='done';
      }

      catch (TwitterException $e) {
       $r= 'Error: ' . $e->getMessage();}

  return $r; 
 }
 //end function tweet
 
 
 //start of twitter acount section
  //This section use for completed plugin it's not use-able in demo version

 //This section create a option for twitter acount of users.

//add_action( 'show_user_profile', 'rb_extra_user_profile_fields' );
//add_action( 'edit_user_profile', 'rb_extra_user_profile_fields' );
//add_action( 'personal_options_update', 'rb_save_extra_user_profile_fields' );
//add_action( 'edit_user_profile_update', 'rb_save_extra_user_profile_fields' );

function rb_save_extra_user_profile_fields( $user_id )
	{
	if ( !current_user_can( 'edit_user', $user_id ) ) { return false; }
	update_user_meta( $user_id, 'rb_twittername', $_POST['rb_twittername'] );
	}

function rb_extra_user_profile_fields( $user ) 
	{ ?>
  
	<h3> اطلاعات شبکه اجتماعی</h3>
	 
	<table class="form-table">
		<tr>
			<th><label for="oneTarek_twitter">اکانت توییتر</label></th>
			<td>
			<input type="text" id="oneTarek_twitter" name="rb_twittername" size="20" value="<?php echo esc_attr( get_the_author_meta( 'rb_twittername', $user->ID )); ?>">
   
   <span class="description">لطفا نام کاربری توییتر خود را وارد کنید. برای نمونه:  <small>hassanTafreshi</small></span>
			</td>
		</tr>
	</table>
 
<?php

 }
 // end of twitter acount section

 
 // Unistall section.
register_uninstall_hook(__FILE__,'funRbTSUnistall');

function funRbTSUnistall()
{
	
 
 
 delete_option('rbTPOcKey');
 delete_option('rbTPOCSecret');
 delete_option('rbTPOATSecret');
 delete_option('rbTPOAToken');
}

// Language Section
load_plugin_textdomain('rb-tweetPress-plugin-lan', false,'rb-tweetPress-plugin-demo/lan');


?>
