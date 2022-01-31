<?php 
//-----------------------请修改以下配置------------------------------------

//防盗链域名，多个用|隔开，（不设置盗链请留空，请填写授权是顶级域名的二级域名）
define('REFERER_URL', ''); //如：define('REFERER_URL', 'api.iztyy.com|api.iztyy.com.com|iztyy.com');
//此处设置防盗信息及错误提示
define('ERROR', '<html><meta name="robots" content="noarchive"><head><title>全网视频在线解析服务</title></head><style>h1{color:#C7636C; text-align:center; font-family: Microsoft Jhenghei;}p{color:#f90; font-size: 1.2rem;text-align:center;font-family: Microsoft Jhenghei;}</style><body bgcolor="#000000"><table width="100%" height="100%" align="center"><td align="center"><h1>本站接口不对外开放</h1><p>如需使用，请联系本站管理员进行授权</p></table></body></html>');
//此处进行用户相关配置
$user = array(

        'uid' => '*******', //这里填写你的UID信息,用户授权UID，无需修改！

        'token' => '**********************', //这里填写你的用户密匙信息,用户授权TOKEN，无需修改！
        
        'path' => '/ceshi', //一般不用修改,除非你放置在二级目录，修改格式 '/iztyy' （修改二级目录一定看好格式）
  
        'fd' => 'https://jx.iztyy.com/fd.mp4', //这里填写你的防盗视频

        'domain' => 'voicixwine.cn', //请设置您的解析域名，防止客户端被二开盗用数据（注意：此处不要添加 http:// 或 https://）
  
        'domain1' => '', //请设置您的解析域名，防止客户端被二开盗用数据（注意：此处不要添加 http:// 或 https://）

        'key' => '1234567890',//自定义KEY
        
        'tiaodomain' => 'https://api.iztyy.com', //请设置客户端被二开盗用后跳转的域名地址，被盗用后直接跳转到您设置的地址。

        'hdd' => '3', //视频默认清晰度，1标清，2高清，3超清，4原画，如果没有高清会自动下降一级（请保持默认，无需修改）
  
          'p2p' => '0', //是否显示P2P加速信息 默认开启 1:开启,0:关闭 （关闭显示不影响加速效果）

        'autoplay' => '1', //电脑端autoplay是否自动播放：参数设置为：1,表示自动播放;参数设置为：0,表示不自动播放

        'h5' => '0', //手机端h5是否自动播放：参数设置为：1,表示自动播放;参数设置为：0,表示不自动播放

        'online' => '1', //当前无法解析的地址是否启动备用解析接口  默认开启,1:开启,0:关闭  开启时要在下面填入备用解析接口
  
        'ather' => '', //备用接口设置  //填写实例：'ather' => 'https://jx.iztyy.com/?url=',

        'dplayer' => '猪蹄影院解析,https://v.iztyy.com', //用户设置dplayer播放器右键,不设置请留空。填写实例:'dplayer' => '百度,https:/api.iztyy.com'
        
        'title' => '解析接口', //设置解析页面title名称   例如：'title' => '猪蹄视频解析接口',

        'tongji' => '', //用户统计代码.  例如:s4.cnzz.com/z_stat.php?id=xxxxx&web_id=xxxxx,百度统计与之类似
        
        'lotime' => '600', //防盗验证时间,lotime参数单位：秒,数值为大于0的整数.设置多少秒后跳转设置:lolink参数  填写实例:'lotime' => '600', 

        'lolink' => 'https://v.iztyy.com', //用户设置防盗跳转,设置防盗验证时间lotime参数后才生效  //填写实例:'lolink' => 'https://api.iztyy.com', 

        'cklogo' => '', //ckplayer播放器右上角logo标志,请填写完整地址.例如:https://api.iztyy.com.com/logo.png ,不用请留空
        
        'ckfont' => '', //ckplayer播放器设置控制栏上方漂浮字体，不需要请留空
        
        'ckhref' => '', //ckplayer播放器设置控制栏上方漂浮字体的点击跳转地址,需设置ckfont参数后才生效，不需要请留空

        'skin' => '4', //ckplayer播放器样式共4种,修改参数后更换播放器样式. 参数说明：1,2,3,4

        'hand' => '猪蹄影院解析,https://v.iztyy.com', //ckplayer播放器右键,例如:'hand'=>'云解析系统,https://api.iztyy.com'     

        'ad' => '', //用户设置广告代码,例如:xxx.com/xxx.js,无需添加http,多个广告请用逗号分开	(适合小图标点击）	
)             
//-----------------------修改区域结束---------------------------------------
?>