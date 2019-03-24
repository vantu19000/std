<?php

class BMIPaymentNoidia {

    private $urlPayment;
    private $merchantID;
    private $accessCode;
    private $securityCode;
    private $sandBox;
    private $currency;
    private $local;
    private $return_url;

    public function __construct()
    {
        $this->sandBox = true;
        $this->currency = 'VND';
        $this->local = 'vi';
        $this->urlPayment = 'https://mtf.onepay.vn/onecomm-pay/vpc.op';
        $this->merchantID = 'ONEPAY';
        $this->accessCode = 'D67342C2';
        $this->securityCode = 'A3EFDFABA8653DF2342E8DAC29B51AF0';
        $this->return_url = null;
    }


    public function getPaymentUrl ($data){

        $params = array('vpc_Merchant'=>$this->merchantID,
            'vpc_AccessCode'=>$this->accessCode,
            'vpc_OrderInfo'=>$data['order_number'],
            'vpc_Amount'=> $data['total'] * 100,
            'vpc_ReturnURL'=> $this->return_url,
            'vpc_Version'=>'2',
            'vpc_Command'=>'pay',
            'vpc_Locale'=>$this->local,
            'vpc_MerchTxnRef'=>date('YmdHis').rand(),
            'vpc_TicketNo' => $_SERVER['REMOTE_ADDR'],
            'Title' => 'Quangbinhtravel',
            'vpc_Currency' => $this->currency
        );

        $vpcURL = $this->urlPayment."?";
        $params['AgainLink']=urlencode($_SERVER['HTTP_REFERER']);
        $md5HashData = "";
        ksort ($params);
        $appendAmp = 0;
        foreach($params as $key => $value) {

            if (strlen($value) > 0) {

                if ($appendAmp == 0) {
                    $vpcURL .= urlencode($key) . '=' . urlencode($value);
                    $appendAmp = 1;
                } else {
                    $vpcURL .= '&' . urlencode($key) . "=" . urlencode($value);
                }
                //$md5HashData .= $value; sử dụng cả tên và giá trị tham số để mã hóa
                if ((strlen($value) > 0) && ((substr($key, 0,4)=="vpc_") || (substr($key,0,5) =="user_"))) {
                    $md5HashData .= $key . "=" . $value . "&";
                }
            }
        }

        $md5HashData = rtrim($md5HashData, "&");
        if (strlen($this->securityCode) > 0) {
            $vpcURL .= "&vpc_SecureHash=" . strtoupper(hash_hmac('SHA256', $md5HashData, pack('H*',$this->securityCode)));
        }else{
            return array('status'=>'0','message'=>'Không thể khởi tạo thanh toán, Tai khoan onepay chua duoc cau hinh');
        }

        return array('status'=>'1','url'=>$vpcURL);

    }

}