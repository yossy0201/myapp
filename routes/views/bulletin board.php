<?php
//var_dump($_POST);
//最初に変数を定義しておかないとエラーになる
$err_msg1 = "";
$err_msg2 = "";
$message ="";
$name = ( isset( $_POST["name"] ) === true ) ?$_POST["name"]: "";
$comment  = ( isset( $_POST["comment"] )  === true ) ?  trim($_POST["comment"])  : "";
 
//投稿がある場合のみ処理を行う
if (  isset($_POST["send"] ) ===  true ) {
    if ( $name   === "" ) $err_msg1 = "名前を入力してください"; 
 
    if ( $comment  === "" )  $err_msg2 = "コメントを入力してください";
 
    if( $err_msg1 === "" && $err_msg2 ==="" ){
        $fp = fopen( "data.txt" ,"a" );
        fwrite( $fp ,  $name."\t".$comment."\n");
        $message ="書き込みに成功しました。";
    }
 
}
 
$fp = fopen("data.txt","r");
 
$dataArr= array();
while( $res = fgets( $fp)){
    $tmp = explode("\t",$res);
    $arr = array(
        "name"=>$tmp[0],
        "comment"=>$tmp[1]
    );
    $dataArr[]= $arr;
} 
 
 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>掲示板</title>
    </head>
    <body>
        <?php echo $message; ?>
        <form method="post" action="">
        名前：<input type="text" name="name" value="<?php echo $name; ?>" >
            <?php echo $err_msg1; ?><br>
            コメント：<textarea  name="comment" rows="4" cols="40"><?php echo $comment; ?></textarea>
            <?php echo $err_msg2; ?><br>
<br>
          <input type="submit" name="send" value="投稿する">
        </form>
        <dl>
         <?php foreach( $dataArr as $data ):?>
         <p><span><?php echo $data["name"]; ?></span>:<span><?php echo $data["comment"]; ?></span></p>
        <?php endforeach;?>
</dl>
    </body>
</html>