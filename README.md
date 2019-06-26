https://packagist.org/packages/crazephper/baidu-express

基于百度查询快递信息

```php
use Express\BDExpress;

$number = 'xxxxxxxxxxxx';

$res = BDExpress::searchExpress($number);

Array
(
    [status] => 1
    [com] => yunda
    [state] => 3
    [send_time] => 
    [departure_city] => 
    [arrival_city] => 
    [latest_progress] => 
    [context] => Array
        (
            [0] => Array
                (
                    [time] => 1558745289
                    [desc] => 【合肥市】快件已被 ***（合作驿站） 代签收。如有问题请电联业务员：***【138***617】。相逢是缘,如果您对我的服务感到满意,给个五星好不好？【请在评价小件员处给予五星好评】
                )

            [1] => Array
                (
                    [time] => 1558742679
                    [desc] => 【合肥市】安徽合肥政务区公司绿怡居寄存点 派件员 *** 138***617 正在为您派件
                )

            [2] => Array
                (
                    [time] => 1558716786
                    [desc] => 【合肥市】已离开 安徽合肥分拨中心；发往 安徽合肥政务区公司
                )

            [3] => Array
                (
                    [time] => 1558716768
                    [desc] => 【合肥市】已到达 安徽合肥分拨中心
                )

            [4] => Array
                (
                    [time] => 1558715428
                    [desc] => 【合肥市】已到达 安徽合肥分拨中心
                )

            [5] => Array
                (
                    [time] => 1558642569
                    [desc] => 【泉州市】已离开 福建晋江分拨中心；发往 安徽合肥分拨中心
                )

            [6] => Array
                (
                    [time] => 1558642466
                    [desc] => 【泉州市】已到达 福建晋江分拨中心
                )

            [7] => Array
                (
                    [time] => 1558620838
                    [desc] => 【漳州市】已离开 福建漳州公司；发往 安徽合肥网点包
                )

            [8] => Array
                (
                    [time] => 1558614043
                    [desc] => 【漳州市】福建漳州公司 已揽收
                )

        )

    [_source_com] => yunda
    [_support_from] => partner
)
```