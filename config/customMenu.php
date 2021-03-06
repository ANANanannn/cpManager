<?php
/**
 * Created by PhpStorm.
 * User: 47143
 * Date: 2019/1/4
 * Time: 14:49
 */
return [
    /**
     * 用户界面菜单栏
     *
     * 如果上级允许，下即则继续判断。
     * 如果上级拒绝，直接返回false。
     */
    'menu' =>  [
        [
            'alias'=>'营运数据',
            'name'=>'gameData',         // 前端的元素唯一识别号，后端的控制器名称前缀
            'icon'=>'ios-apps-outline', // 前端界面图标，为空则不显示
            'subMeun'=>[                // 子菜单按钮,addr是唯一的，可以识别用户地址 ,interface, 为页面中返回的全部请求地址
                ['alias'=>'数据图表','addr'=>'/data/form','interface'=>
                    [
                        [['post','get'],'/main','contlydata'],     // 可以使用的方法，接口地址，和addr进行拼接，控制器下面的方法 。
                        [['post','get'],'/lev','contlylev'],
                    ]
                ],
                ['alias'=>'统计数据','addr'=>'/data/countUp','interface' =>
                    [
                        [['post','get'],'/data','countUpData'],
                        [['post','get'],'/options','countUpDataOptions'],
                    ]
                ],
                ['alias'=>'注册付费','addr'=>'/data/game','interface' => []],
                ['alias'=>'平台数据','addr'=>'/data/plat','interface' => []],
                ['alias'=>'渠道数据','addr'=>'/data/channel','interface' => []],
                ['alias'=>'登录ARPU','addr'=>'/data/login','interface' => []],
                ['alias'=>'营收数据','addr'=>'/data/takein','interface' => []],
                ['alias'=>'在线人数','addr'=>'/data/online','interface' => []],
                ['alias'=>'留存分析','addr'=>'/data/level','interface' => []],
                ['alias'=>'激活分析','addr'=>'/data/activite','interface' => []],
            ]
        ],
        [
            'alias'=>'玩家分析',
            'name'=>'palyerParse',
            'icon'=>'md-contact',
            'subMeun'=>[
                ['alias'=>'登录等级','addr'=>'/player/form','interface' =>
                    [
                        [['post'],'/login','conlyLogin']
                    ]
                ],
                ['alias'=>'注册等级','addr'=>'/player/countUp','interface' => []],
                ['alias'=>'在线分析','addr'=>'/player/registerPay','interface' => []],
                ['alias'=>'在线时长','addr'=>'/player/registerPay','interface' => []],
                ['alias'=>'流失分析','addr'=>'/player/registerPay','interface' => []],
                ['alias'=>'任务退出','addr'=>'/player/registerPay','interface' => []],
            ]

        ],
        [
            'alias'=>'充值分析',
            'name'=>'payParse',
            'icon'=>'logo-yen',
            'subMeun'=>[
                ['alias'=>'充值总览','addr'=>'/recharge/form','interface' => []],
                ['alias'=>'付费率','addr'=>'/recharge/countUp','interface' => []],
                ['alias'=>'充值分布','addr'=>'/recharge/registerPay','interface' => []],
                ['alias'=>'登录ARPU','addr'=>'/recharge/registerPay','interface' => []],
                ['alias'=>'首充分析','addr'=>'/recharge/registerPay','interface' => []],
                ['alias'=>'单笔充值','addr'=>'/recharge/registerPay','interface' => []],
                ['alias'=>'充值区间','addr'=>'/recharge/registerPay','interface' => []],
                ['alias'=>'玩家流失','addr'=>'/recharge/registerPay','interface' => []],
            ]
        ],
        [
            'alias'=>'物品货币',
            'name'=>'itemParse',
            'icon'=>'ios-basketball',
            'subMeun'=>[
                ['alias'=>'商城分析','addr'=>'/item/form','interface' => []],
                ['alias'=>'物品统计','addr'=>'/item/countUp','interface' => []],
                ['alias'=>'货币消耗','addr'=>'/item/registerPay','interface' => []],
            ]
        ],
        [
            'alias'=>'详细日志',
            'name'=>'logDetail',
            'icon'=>'ios-list-box-outline',
            'subMeun'=>[
                ['alias'=>'充值日志','addr'=>'/detail/recharge','interface' => [
                    [['post'],'/logs','rechargeLogs'],
                    [['post'],'/options','rechargeLogsOptions'],
                ]],

                ['alias'=>'登录日志','addr'=>'/detail/login','interface' => [
                    [['post'],'/logs','loginLogs'],
                    [['post'],'/options','loginLogsOptions'],
                ]],

                ['alias'=>'会话日志','addr'=>'/detail/session','interface' => [
                    [['post'],'/logs','sessionLogs'],
                    [['post'],'/options','sessionLogsOptions'],
                ]],

                ['alias'=>'商城日志','addr'=>'/detail/shop','interface' => [
                    [['post'],'/logs','shopLogs'],
                    [['post'],'/options','shopLogsOptions'],
                ]],

                ['alias'=>'邮件日志','addr'=>'/detail/mail','interface' => [
                    [['post'],'/logs','mailLogs'],
                    [['post'],'/options','mailLogsOptions'],
                ]],
                // 以下数据量太大了，mysql目前无法胜任

//                ['alias'=>'升级日志','addr'=>'/detail/levelup','interface' => [
//                    [['post'],'/logs','levelupLogs'],
//                    [['post'],'/options','levelupLogsOptions'],
//                ]],
//
//                ['alias'=>'排行榜日志','addr'=>'/detail/rank','interface' => [
//                    [['post'],'/logs','rankLogs'],
//                    [['post'],'/options','rankLogsOptions'],
//                ]],
//
//                ['alias'=>'任务日志','addr'=>'/detail/task','interface' => [
//                    [['post'],'/logs','taskLogs'],
//                    [['post'],'/options','taskLogsOptions'],
//                ]],
//
//                ['alias'=>'掉落日志','addr'=>'/detail/drop','interface' => [
//                    [['post'],'/logs','dropLogs'],
//                    [['post'],'/options','dropLogsOptions'],
//                ]],
//
//                ['alias'=>'在线日志','addr'=>'/detail/online','interface' => [
//                    [['post'],'/logs','onlineLogs'],
//                    [['post'],'/options','onlineLogsOptions'],
//                ]],
//
//                ['alias'=>'物品日志','addr'=>'/detail/virtualitems','interface' => [
//                    [['post'],'/logs','virtualitemsLogs'],
//                    [['post'],'/options','virtualitemsLogsOptions'],
//                ]],

//                ['alias'=>'物品日志','addr'=>'/detail/item','interface' => [
//                    [['post'],'/logs','itemLogs'],
//                    [['post'],'/options','itemLogsOptions'],
//                ]],

            // 5百万数据量数据库已经不行了

//                ['alias'=>'货币日志','addr'=>'/detail/currencyLogs','interface' => [
//                    [['post'],'/logs','currencyLogs'],
//                    [['post'],'/options','currencyLogsOptions'],
//                ]],

                ['alias'=>'聊天日志','addr'=>'/detail/chatLogs','interface' => [
                    [['post'],'/logs','chatLogs'],
                    [['post'],'/options','chatOptions'],
                ]],
            ]
        ],
        [
            'alias'=>'系统设置',
            'name'=>'systemSet',
            'icon'=>'ios-cog-outline',
            'subMeun'=>[
                // TODO 需要在授权中检查addr是否存在？
//                ['alias'=>'项目授权','addr'=>'/sys/userProject','interface' =>
//                    [
//                        [['post'],'/commitUserProject','commitUserProject'],  // 提交用户项目授权
//                        [['post'],'/projectUserList','projectUserList'],      // 返回用户授权列表
//                        [['post'],'/platChannelList','platChannelList'],      // 返回授权项目中的平台和渠道，授权情况列表
//                        [['post'],'/commitChangePlat','commitChangePlat'],      // 提交授权项目中的平台和渠道
//
//                    ]
//                ],
                ['alias'=>'角色管理','addr'=>'/sys/userManage','interface' =>
                    [
                        [['post'],'/roleUserInfo','roleUserInfo'],
                        [['post'],'/useradd','userAdd'],
                        [['post'],'/userdel','userDel'],
                        [['post'],'/roleadd','roleAdd'],
                        [['post'],'/roledel','roleDel'],
                        [['post'],'/modifyOtherPasswd','modifyOtherPasswd'],
                        [['post'],'/modifyRolePermission','modifyRolePermission'],
                        [['post'],'/modifyUserOwnerRoles','modifyUserOwnerRoles'],
                    ]
                ],
                ['alias'=>'渠道授权','addr'=>'/sys/plat','interface' =>
                    [
                        [['post'],'/allPlat','allPlat'],      // 返回渠道的授权列表
                        [['post'],'/commitAuthorization','commitAuthorization'],    // 提交渠道的授权列表
                    ]
                ],
                ['alias'=>'日志翻译','addr'=>'/sys/render','interface' =>
                    [
                        [['post'],'/index','languageRender'],
                    ]
                ],
            ]
        ],
        [
            'alias'=>'测试数据',
            'name'=>'testdata',
            'icon'=>'ios-cog-outline',
            'subMeun'=>[
                ['alias'=>'测试1','addr'=>'/test/one','interface' =>
                    [
                        [['post','get'],'/set','one1'],
                    ]
                ],
                ['alias'=>'测试2','addr'=>'/test/two','interface' => []],
                ['alias'=>'测试3','addr'=>'/test/three','interface' => []],
                ['alias'=>'测试4','addr'=>'/test/four','interface' => []],
                ['alias'=>'接口预览','addr'=>'/test/interface','interface' => []],
                ['alias'=>'test5','addr'=>'/test/five','interface' => []],
                ['alias'=>'six','addr'=>'/test/six','interface' => [
                    [['post'],'/allPermission','allPermission'],
                    [['post'],'/test','test'],
                ]],
            ]
        ],
    ]


];
