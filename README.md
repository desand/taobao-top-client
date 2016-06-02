TaobaoTopClient
===============

抽取淘宝TopSdk的核心部分


安装
----

    "require": {
        ...
        "elvis-bi/taobao-top-client": "*"
        ...
    }
    
    php composer.phar update
    
    
使用
----

    $config = array(
        'appkey' => '...',
        'secretKey' => '...'
    );
    
    $topClient = new \TaobaoTopClient\TopClient($config);
    
    $shopGetRequest = $topClient->get('ShopGetRequest');
    $shopGetRequest->setNick('abc');
    $shopGetRequest->setFields('sid,cid,...');
    
    $shopData = $topClient->execute($shopGetRequest, $sessionKey);
