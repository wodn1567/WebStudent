<?php
    header("Content-Type:text/html; charset=utf-8");
    $no=(int)$_GET['no'];
    $name=$_GET['name'];
    $message=$_GET['message'];
    //db연결작업
    $db=mysqli_connect('localhost','wodn1567','wodn1215!','wodn1567');

    // INSERT QUERY문 작성 테이블명 컬럼명
    $sql="INSERT INTO bord(no,name,message,date) VALUES('$no','$name','$message',NOW())";

    //최종 결과값 sql쿼리문 파라미터로 db연결작업과 sql문의 문법이 올바른지 if문으로 검증
    $result=mysqli_query($db,$sql);
    echo $result;
    if($result){
        echo "응답성공";
    }else{
        echo "응답실패";
    }
    //db닫기
    mysqli_close($db);
?>