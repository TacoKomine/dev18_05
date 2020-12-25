<?php
// POSTで送られてきた名前とアドレスのデータを受け取る
var_dump($_POST);

$item_1 = $_POST["item_1"];
$item_2 = $_POST["item_2"];
$item_3 = $_POST["item_3"];
$sum_value = $_POST["sum_value"];
$name = $_POST["name"];
$zipcode = $_POST["zip11"];
$pref = $_POST["pref01"];
$addr = $_POST["addr01"];
$phone = $_POST["phonenumber"];
$email = $_POST["emailadd"];
$etc = $_POST["etc"];
?>

<html>
<head>
<meta charset="utf-8">
    <style>
        h1{
        margin-top:50px;
        margin-bottom:20px;
        margin-left:auto;
        text-align: center;
        }
        h2{
        font-size: 25px;
        margin-top:100px;
        margin-bottom:10px;
        border-left: solid 7px #5bc8ac;
        color: #5bc8ac;
        padding: 0 0 0 14px;
        }
        .title{
        align-items:center;
        margin-left:auto;
        margin-right:auto;
        display:block;
        }
        ul {
        list-style: none;
        margin-left: auto;
        margin-right: auto;
        padding-left: 0px;
        width: 100%;
        }
        .ul_Form-Item{
        width: 80%;
        }
        li{
        margin-left: 0px;
        padding-left: 0px;
        padding-top: 1px;
        padding-bottom: 5px;
        }
        .Form {
        margin-top: 80px;
        margin-left: auto;
        margin-right: auto;
        max-width: 720px;
        }
        @media screen and (max-width: 480px) {
        .Form {
            margin-top: 40px;
        }
        }
        .Form-Item {
        border-top: 1px solid #ddd;
        padding-top: 24px;
        padding-bottom: 24px;
        width: 100%;
        display: flex;
        align-items: center;
        }
        @media screen and (max-width: 480px) {
        .Form-Item {
            padding-left: 14px;
            padding-right: 14px;
            padding-top: 16px;
            padding-bottom: 16px;
            flex-wrap: wrap;
        }
        }
        .Form-Item:nth-child(5) {
        border-bottom: 1px solid #ddd;
        }
        .Form-Item-Label {
        width: 80%;
        max-width: 248px;
        letter-spacing: 0.05em;
        font-size: 18px;
        color: gray;
        }
        .Form-Item-Label-Message {
        width: 80%;
        letter-spacing: 0.05em;
        font-size: 16px;
        }
        .Form-Item-Label-Name {
        width: 50%;
        letter-spacing: 0.05em;
        font-weight: bold;
        font-size: 20px;
        }
        .Form-Item-Label-Price {
        width: 30%;
        font-size: 16px;
        color: gray;
        }
        @media screen and (max-width: 480px) {
        .Form-Item-Label {
            max-width: inherit;
            display: flex;
            align-items: center;
            font-size: 15px;
        }
        }
        .Form-Item-Label.isMsg {
        margin-top: 8px;
        margin-bottom: auto;
        }
        @media screen and (max-width: 480px) {
        .Form-Item-Label.isMsg {
            margin-top: 0;
        }
        }
        #div_sum_value {
            font-size: 20px;   
            padding-right: 0px;
            text-align: right;
            display: block;
            border-top: 3px solid #ddd;
            border-bottom: none;

        }
        #sum_value{
            font-size: 25px;
            font-weight: bold;    
            margin-right:20px;
        }
        .item_num{
            font-size: 20px;
            font-weight: bold;
        }
        .submitted_font_style{
            font-size: 20px;
            font-weight: bold;
        }
    </style>
    <title>ご注文を承りました</title>
</head>

<body>
<div class="title">
    <h1>ご注文を承りました</h1>
</div>
<div class="Form">
    <div class="Item-List">
    <h2>ご注文内容</h2>
        <div class="Form-Item">
            <ul class="ul_Form-Item">
                <li><p class="Form-Item-Label-Name">商品１</p></li>
                <li><p class="Form-Item-Label-Price" id="price_item_1" value="100">￥100</p></li>
            </ul>
            <p class="item_num"><?=$item_1?>  個</p>
        </div>
        <div class="Form-Item">
            <ul class="ul_Form-Item">
                <li><p class="Form-Item-Label-Name">商品2</p></li>
                <li><p class="Form-Item-Label-Price" id="price_item_2" value="200">￥200</p></li>
            </ul>
            <p class="item_num"><?=$item_2?>  個</p>
        </div>
        <div class="Form-Item">
            <ul class="ul_Form-Item">
                <li><p class="Form-Item-Label-Name">商品3</p></li>
                <li><p class="Form-Item-Label-Price" id="price_item_3" value="100">￥300</p></li>
            </ul>
            <p class="item_num"><?=$item_3?>  個</p>
        </div>
        
        <div class="Form-Item item_num" id="div_sum_value">
            合計金額： <text><?=$sum_value?></text>円
        </div>
    </div>

    <div class="Customer-Info">
    <h2>お届け先</h2>
        <div class="Form-Item">
            <p class="Form-Item-Label">お名前</p>
            <p class="submitted_font_style"><?=$name?></p>
        </div>
        <div class="Form-Item">
            <p class="Form-Item-Label">ご住所</p>
            <ul>
                <li>
                郵便番号： <p class="submitted_font_style"><?=$zipcode?></p>
                </li>
                <li>
                <p class="submitted_font_style"><?=$pref?>  <?=$addr?></p>
                </li>
            </ul>
        </div>
        <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
            <p class="submitted_font_style"><?=$phone?></p>
        </div>
        <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
            <p class="submitted_font_style"><?=$email?></p>
        </div>
        <div class="Form-Item">
            <p class="Form-Item-Label isMsg">その他ご要望</p>
            <p class="submitted_font_style"><?=$etc?></p>
        </div>
    </div>
</div>
</body>

</html>
