# TianMao
这是一个模仿天猫淘宝这一类购物网站做成的一个购物商店
### 文件夹介绍
* admin文件夹主要是用来存放后台管理的一些页面和其他文件
* config文件夹主要是用来配置数据库信息
* core文件夹是这个项目的核心文件，封装了整个网站操作过程中的增删改查的函数
* lib文件夹主要是封装特定功能的函数比如分页等
* src文件夹主要是存放前台页面和css和js等资源
* store文件夹主要存放卖家的相关的页面
* upload是卖家上传商品图片后存放的地方
### 使用
* 下载一个php+mysql+apache的继承环境工具（appserv）[下载地址](https://www.appserv.org/download/)
* 将czx这个数据库表文件放到mysql/data文件夹里面
* 将shop项目文件夹复制到www文件夹里面
* 修改shop/configs/config.php文件，将里面的数据库名字和数据库密码以及账号改成自己安装appserv时设置的数据库账号和密码
* 启动apache就ok了
* 访问http://localhost/shop/src/index2.php 就可以了
* 登录账号和密码chen/chen
