<?php
include('method.php');
?>


<h3>list all product</h3>
    <table style="width: 50%;" border="3">
    <tr>
        <th>slno.</th>
        <th>name</th>
        <th>gender</th>
        <th>stream</th>
        <th>image</th>
        <th>action</th>
    </tr>
    <?php
    $res=displayall();
    $rec= mysqli_num_rows($res);
    if($rec > 0)
    {
        $slno=1;
        while($data=mysqli_fetch_assoc($res))
        {
            echo'
                <tr>
                       <th>'.$slno.' </th>
                       <th>'.$data['name'].' </th>
                       <th>'.$data['gender'].' </th>
                       <th> '.$data['stream'].'</th>
                       <th><img src=" '.$data['image'].'" width="30%"></th>
                        <th>
                        <a onclick=deletepro('.$data['pid'].')>delete</a>
                        </th>
                        <th>
                        <a href="edit.php?pid='.$data['pid'].'">edit</a>
                        </th>








                </tr>
            
            
            
            
            
            
            
            ';
        }
    }
    else{
        echo "sorry no more data available!!";
    }
    ?>

    </table>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
     <script>
        function deletepro(pid)
        {
            if(confirm("are u sure delete records?"))
            {
                $.ajax({
                    url:"delete.php",
                    method:"get",
                    data:{"pid":pid},
                    success:function(response)
                    {
                        alert(response);
                        window.location.href="";
                    }
                })
            }
        }
     </script>
</body>
</html>