<?php 
    function GetData(){
        return json_decode(file_get_contents(__DIR__.'/data.json'), true);
        // echo __DIR__;
    }

    function GetDataById($id){

        $data = json_decode(file_get_contents(__DIR__.'/data.json'), true);
        foreach($data as $d){
            if($d["id"] == $id){
                return $d;
            }
        }
        // echo __DIR__;
    }

    function PutData($data){
        file_put_contents(__DIR__.'/data.json', json_encode($data, JSON_PRETTY_PRINT));
    }

    function UpdateData($post_data, $id){
        $updated_user = [];
        $data = GetData();
        foreach($data as $i => $d){
            if($d["id"] == $id){
                $data[$i] = $updated_user = array_merge($d, $post_data);
                //var_dump($data[$i]);
            }
        }

        PutData($data);

        return $updated_user;
        //var_dump($data);
    }

    function CreateUser($d){
        $data = GetData();

        $d["id"] = rand(100, 200);

        $data[] = $d;

        PutData($data);
    }

    function DeleteData($id){
        
        $data = GetData();
        foreach($data as $i => $d){
            if($d["id"] == $id){
                array_splice($data, $i, 1);
                //var_dump($data[$i]);
            }
        }

        PutData($data);
    }

    

    /* $user = ["name" => "Patricia Lebsack"];
    UpdateData($user, '4'); */

    //var_dump(GetDataById('4'));

    // var_dump(GetDataById(8));
    // echo var_dump($_SERVER);
    

?>