function displayPostVar($post_arr)
{
    $response_arr=array();

    foreach ($post_arr as $param_key => $param_val)
    {
        $response_arr[$param_key]=$param_val;
    }

    return $response_arr;
}

if(isset($_POST) && !empty($_POST)){
  $output=displayPostVar($_POST);
    $output=displayPostVar($arr);
    print_r(json_encode($output));
}
