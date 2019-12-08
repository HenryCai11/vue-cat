

var appid = '20181030000227249';
var key = 'oxQ_iLno1oh4hecYBWnX';
var salt = (new Date).getTime();

// 多个query可以用\n连接  如 query='apple\norange\nbanana\npear'
var from = 'zh';
var to = 'en';
var sign = MD5(str1);

function baiduMT(query){
    var str1 = appid + query + salt +key;
    $.ajax({
        url: 'http://api.fanyi.baidu.com/api/trans/vip/translate',
        type: 'get',
        dataType: 'jsonp',
        data: {
            q: query,
            appid: appid,
            salt: salt,
            from: from,
            to: to,
            sign: sign
        },
        success: function (data) {
            return (data.trans_result[0].dst);
        } 
    });
}