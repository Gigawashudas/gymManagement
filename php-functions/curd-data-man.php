<?php
include('db_connection.php');
include('php_query_functions.php');
session_start();

if (isset($_POST['action']) && $_POST['action'] == 'fetch-pk-data') {
    $response = array(
        'pk_name' => 'Basic'
    );
    $condition = array(
        'pk_id' => $_POST['id']
    );
    $result = PullData($con, 'packages', 'pk_name', $condition, '');
    $row = mysqli_fetch_array($result);
    $response['pk_name'] = $row['pk_name'];

    echo json_encode($response);
}
if (isset($_POST['action']) && $_POST['action'] == 'enroll') {
    $id = $_POST['id'];
    $columns = array('plan_id', 'member_id', 'instructor_id', 'plan_name', 'workout_time', 'workout_end_time');
    // $uid = $_SESSION['user_id'];
    $uid=$_SESSION['user_id'];
    $condition = array(
        'user_id' =>$uid
    );
    $result = PullData($con, 'members', '*', $condition, '');
    $result=mysqli_fetch_array($result);
    $memid=$result['member_id'];
    // $typename=$result['type_name'];
    $values=array(null,$memid,$id,'','2','8');
    PushData($con,'workoutplans',$columns,$values);
    

}
if (isset($_POST['action']) && $_POST['action'] == 'buy-product') {
    $id = $_POST['id'];
    // unset($_SESSION["cart"]);
    $invoice_id=$_SESSION['invoice_id'];
    $total=0.0;
    foreach ($_SESSION['cart'] as $key => $value) {
        $product_name=$value['product_name'];
        $price= $value['product_price'] ;
        $quantity= $value['quantity'];
        $columns=array('id', 'product_name', 'quantity', 'invoice_id', 'product_price');

        $values=array(null,$product_name,$quantity,$invoice_id,$price);
        // $query="INSERT INTO `ordered_products`(`id`, `product_name`, `quantity`, `invoice_id`, `product_price`)
        // VALUES ";
        PushData($con,'ordered_products',$columns,$values);
        $total = $total + $value['product_price'] * $value['quantity'];
        echo $con->error;
    }
    $invoice_type='1';
    $trxid='';

    if($_POST['trxid']!=1){
        $invoice_type='2';
        $trxid=$_POST['trxid'];
    }
    $columns=array('order_id', 'customer_id', 'order_date', 'invoice_id', 'total_price', 'trxid','order_type');
    $uid=$_SESSION['user_id'];
    $date=$date = date('Y-m-d H:i:s');
    $values=array(null,$uid,  $date,$invoice_id,$total,$trxid,$invoice_type);
    PushData($con,'orders',$columns,$values);
    unset($_SESSION["cart"]);
   


}