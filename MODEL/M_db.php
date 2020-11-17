<?php 

    function connect() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $databaseName = "user";
        

        $conn = mysqli_connect($servername,$username,$password,$databaseName);
        if (!$conn) {
            echo "cc";
        }
        return $conn;

    }
    function get($table,$condition = array()) {
        #lay ket noi
        $conn = connect();
        #cau lenh lay gia tri tu databse
        $sql = "SELECT * FROM $table ";
        #neu co gia tri nhap vao $condition
        if (!empty($condition)) {
            #noi them WHERE
            $sql .= "WHERE ";
            #them gia tri tim kiam sau WHERE (them AND)
            foreach ($condition as $key => $value) {
                $sql.= " $key = '$value' AND"; 
            }
            #neu khong co gia tri thu 2 thi bo AND di
            $sql = trim($sql,'AND');
        }
        // echo $sql;
        #truy van toi $conn va cau lenh tu $sql
        $query = mysqli_query($conn,$sql);
        $result = array();
            if ($query) {
                while ($row = mysqli_fetch_assoc($query)) {
                    $result[] = $row;
                }
            }
        return $result;
    }
    // $get = get('product',array(
    // ));
    // echo "<pre>";
    // var_dump($get);
    // echo "</pre>";

    function insert($table,$data = array()) {
        #lay ket noi
        $conn = connect();
        #xu ly chuoi cua key
        $key = array_keys($data);
        $fields = implode(",",$key);
        #xu ly chuoi cua value
        $value_str = "";
        foreach ($data as $key => $value) {
            $value_str.="'$value',";
        }
        $value_str=trim($value_str,",");
        #xu ly cau lenh
        $sql = "INSERT INTO $table ($fields) VALUES ($value_str)";
        #chay cau lenh
        $query = mysqli_query($conn,$sql);
        #tra ve gia tri
        return $query;
    }
    // $insert = insert('catalog',array(
    //     """"""
    // ));
    // echo"<pre>";
    // var_dump($insert);
    // echo"</pre>";

    function update($table,$data = array(),$condition = array()) {
        #ket noi toi $conn
        $conn = connect();
        
        $str = '';
        foreach ($data as $key => $value) {
            $str .= "$key = '$value',";
        }
        $str = trim($str,",");
        #cau lenh sql
        $sql = "UPDATE $table SET $str WHERE ";
        foreach ($condition as $key => $value) {
            $sql.= " $key = '$value' AND";
        }
        $sql = trim($sql,'AND');
        echo"<pre>";
        var_dump($sql);
        $query = mysqli_query($conn,$sql);
        return $query;
    }

    // $update = update('account',array(
    //     "username" => "1214asda14",
    //     "pass" => "1414",
    //     "name" => "hai"
    // ),array(
    //     "id" => "2",
    //     // "pass" => "14142"
    // ));

    function delete($table,$condition = array()) {
        $conn = connect();
        $sql = " DELETE FROM $table WHERE ";
        foreach ($condition as $key => $value) {
            $sql .= "$key = '$value' AND";
        }
        $sql = trim($sql,'AND');
        $query = mysqli_query($conn,$sql);
        return $query;
    }

// $delete = delete('catalog',array(
//         "id" => "2"
//     ));

//     echo($delete);
//     echo "<pre>";
//     var_dump($delete);
//     echo"</pre>";
?>