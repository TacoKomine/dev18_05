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
        font-weight: bold;
        font-size: 18px;
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
        .Form-Item-Label-Required {
        border-radius: 6px;
        margin-right: 8px;
        padding-top: 8px;
        padding-bottom: 8px;
        width: 48px;
        display: inline-block;
        text-align: center;
        background: #5bc8ac;
        color: #fff;
        font-size: 14px;
        }
        @media screen and (max-width: 480px) {
        .Form-Item-Label-Required {
            border-radius: 4px;
            padding-top: 4px;
            padding-bottom: 4px;
            width: 32px;
            font-size: 10px;
        }
        }
        .Form-Item-Input-Select {
        border: 1px solid #ddd;
        border-radius: 6px;
        margin-left: 40px;
        margin-right: 10px;
        padding-left: 1em;
        padding-right: 1em;
        height: 48px;
        flex: 1;
        width: 50px;
        background: #eaedf2;
        font-size: 16px;
        }
        .Form-Item-Input {
        border: 1px solid #ddd;
        border-radius: 6px;
        margin-left: 40px;
        padding-left: 1em;
        padding-right: 1em;
        height: 48px;
        flex: 1;
        width: 100%;
        max-width: 410px;
        background: #eaedf2;
        font-size: 18px;
        }
        @media screen and (max-width: 480px) {
        .Form-Item-Input {
            margin-left: 0;
            margin-top: 18px;
            height: 40px;
            flex: inherit;
            font-size: 15px;
        }
        }
        .Form-Item-Textarea {
        border: 1px solid #ddd;
        border-radius: 6px;
        margin-left: 40px;
        padding-left: 1em;
        padding-right: 1em;
        height: 216px;
        flex: 1;
        width: 100%;
        max-width: 410px;
        background: #eaedf2;
        font-size: 18px;
        }
        @media screen and (max-width: 480px) {
        .Form-Item-Textarea {
            margin-top: 18px;
            margin-left: 0;
            height: 200px;
            flex: inherit;
            font-size: 15px;
        }
        }
        .Form-Btn {
        border-radius: 6px;
        margin-top: 32px;
        margin-left: auto;
        margin-right: auto;
        padding-top: 20px;
        padding-bottom: 20px;
        width: 280px;
        display: block;
        letter-spacing: 0.05em;
        background: #5bc8ac;
        color: #fff;
        font-weight: bold;
        font-size: 20px;
        }
        @media screen and (max-width: 480px) {
        .Form-Btn {
            margin-top: 24px;
            padding-top: 8px;
            padding-bottom: 8px;
            width: 160px;
            font-size: 16px;
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
            font-size: 35px;
            font-weight: bold;    
            margin-right:1px;
            border:none;
            text-align:right;
            width:100px
        }
    </style>
    <title>オーダーフォーム</title>
</head>

<body>
<div class="title">
    <h1>オーダーフォーム</h1>
</div>
<div class="Form">
    <form action="write.php" method="post">
        <!-- 購入商品 -->
        <div class="Item-List">
        <h2>ご注文内容</h2>
            <div class="Form-Item">
                <ul class="ul_Form-Item">
                    <li><p class="Form-Item-Label-Name">商品１</p></li>
                    <li><p class="Form-Item-Label-Message">良い商品だから買ってね！</p></li>
                    <li><p class="Form-Item-Label-Price" id="price_item_1" value="100">￥100</p></li>
                </ul>
                <select class="Form-Item-Input-Select" width=150px required id="num_item_1" name="item_1">
                    <option value=0>0</option>
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                    <option value=5>5</option>
                </select>個
            </div>
            <div class="Form-Item">
                <ul class="ul_Form-Item">
                    <li><p class="Form-Item-Label-Name">商品2</p></li>
                    <li><p class="Form-Item-Label-Message">良い商品だから買ってね！</p></li>
                    <li><p class="Form-Item-Label-Price" id="price_item_2" value="200">￥200</p></li>
                </ul>
                <select class="Form-Item-Input-Select" width=150px id="num_item_2" name="item_2">
                    <option value=0>0</option>
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                    <option value=5>5</option>
                </select>個
            </div>
            <div class="Form-Item">
                <ul class="ul_Form-Item">
                    <li><p class="Form-Item-Label-Name">商品3</p></li>
                    <li><p class="Form-Item-Label-Message">良い商品だから買ってね！</p></li>
                    <li><p class="Form-Item-Label-Price" id="price_item_3" value="300">￥300</p></li>
                </ul>
                <select class="Form-Item-Input-Select" width=150px id="num_item_3" name="item_3">
                    <option value=0>0</option>
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                    <option value=5>5</option>
                </select>個
            </div>
            <div class="Form-Item" id="div_sum_value">
                合計金額： <text id="sum_value" name="sum_value"></text>円
            </div>
        </div>
        <!-- お客様情報 -->
        
        <div class="Customer-Info">
        <h2>お届け先</h2>
            <div class="Form-Item">
                <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>お名前</p>
                <input type="text" name="name" class="Form-Item-Input" placeholder="例）山田太郎">
            </div>
            <div class="Form-Item">
                <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>ご住所</p>
                <ul>
                    <li>
                    <!-- ▼郵便番号入力フィールド(7桁) -->
                    <input type="text"  class="Form-Item-Input" placeholder="例）1070061" name="zip11" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','pref01','addr01');">
                    </li>
                    <li>
                    <!-- ▼住所入力フィールド(都道府県) -->
                    <input type="text"  class="Form-Item-Input" placeholder="例）東京都" name="pref01">
                    </li>
                    <li>
                    <!-- ▼住所入力フィールド(都道府県以降の住所) -->
                    <input type="text"  class="Form-Item-Input" placeholder="例）港区北青山3-5-6" name="addr01">
                    </li>
                </ul>
            </div>

            <div class="Form-Item">
                <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
                <input type="text" name="phonenumber" class="Form-Item-Input" placeholder="例）000-0000-0000">
            </div>
            <div class="Form-Item">
                <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
                <input type="email" name="emailadd" class="Form-Item-Input" placeholder="例）example@gmail.com">
            </div>
            <div class="Form-Item">
                <p class="Form-Item-Label isMsg">その他ご要望</p>
                <textarea class="Form-Item-Textarea" name="etc"></textarea>
            </div>
        </div>
    <input type="submit" class="Form-Btn" value="送信する">
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script>
    $(function() {
        //セレクトボックスが切り替わったら発動
        $('.Form-Item-Input-Select').change(function() {

            var val = $("#num_item_1").val() * $("#price_item_1").html().replace("￥","")
                    + $("#num_item_2").val() * $("#price_item_2").html().replace("￥","")
                    + $("#num_item_3").val() * $("#price_item_3").html().replace("￥","");
        
            //合計金額を id="sum_value"に出力
            //$('#sum_value').text(val);
            $('#sum_value').html('<input type="text" value='
                                    + val 
                                    +' name="sum_value" id="sum_value" '
                                    +' border=none '
                                    +' text-align=right '
                                    +' margin-right=1px ' 
                                    +'></input>');
        });
    });
</script>
</body>

</html>
