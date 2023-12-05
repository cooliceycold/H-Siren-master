### 主题前言

用 WordPress 来做博客程序完全是因为一款主题呢！  
嗯，就是博主现在用的，由 [蜜汁路易](https://www.cssplus.org/ "蜜汁路易") 二次修改发布的 Siren 主题！
它的前身就是由 [Fuzzz](http://fui.im/ "Fuzzz") 制作的 Akina 主题。

首先感谢他们的作品呢……

因为博主超喜欢单栏主题的设计，还有 PJAX 加载，所以博主一直就在打磨这款主题中……  
（当然是根据自己喜欢的口味来更改滴啦）  
学长是个细节控，代码洁癖，某些强迫症集一身的人啦……  
（才不是处女座呢，学长是风象天秤座的）  
所以在打磨这款主题在细节处纠结了 N 多遍后才能有决定的说……  

嗯，好作品感觉就是要分享出去才行呢……  
~~（自己封的好作品称号，2333）~~  
对比 Siren 最后更新版本的修改，就摘几条重要的地方来说下吧……  

### 主题修改

- 任何页面背景头图可以选择使用随机图片API显示，比如 [漫月API](https://random.ikmoe.com/ "漫月API")
- PC 端首页的博主描述，可以选择使用“一言”代替，由 [Hitokoto - 一言](http://hitokoto.cn/ "Hitokoto - 一言") 支持
- 修正菜单栏显示效果：PC 端清晰可见了，移动端文字加大和居中显示
- 主页文章列表修改图文风格为卡片式风格，新视觉！
- 集成 Live2D 看板娘，支持刷新换装
- 加深文章内容文字颜色和增大字体，阅读不费眼了
- 收窄 PC 端正文显示区域的最大宽度和评论列表的最大宽度
- 简化评论 UA 信息，显示效果修改为划过评论才显示
- 评论者的连接添加了页面跳转，不会在当前窗口加载了
- 评论框添加了表情，并支持实时预览；由 [小さな手は](http://www.littlehands.site/ "小さな手は") 实现，效果很好，谢谢他
- 原生编辑器添加载入主题样式，后台写文章可视化与前台显示效果一致
- 后台屏蔽 WordPress 更新与编辑器自动保存等……
- 添加鼠标点击特效
- 添加网页运行天数
- 添加 ICP 备案号选项
- 添加谷歌分析代码输入框
- 添加屏蔽鼠标右键
- 添加浏览器标签焦点判断
- 添加复制友情提示

**多数添加的功能均有开关可以自行选择是否启用！**

### 功能介绍

**背景图API**

网页背景图、文章列表、文章顶部特色图，均支持随机图片API，并使用 MD5 8 位随机数载入，大几率减少重复图片的现象；

**网页背景图显示顺序：**  
默认显示主题自带随机图，如果填写“背景图API”将显示“背景图API”的随机图。

**文章列表、文章或者页面的顶部图片显示顺序：**  
优先显示编辑文章时所设定的特色图，没有设置特色图的情况下的逻辑和上一条一样。

**注意：**  
不支持调用动态 URL 的随机图 API ，仅支持伪静态 URL ，因为本主题会在 URL 结尾添加动态随机数以防止随机图重复。

### 现有问题
> 某些屏蔽邮件发送的主机可能会导致评论后 AJAX 刷新严重超时的问题。  
某些主机上使用主题会导致个别界面错位。

### 获得主题
前往我的 [Github](https://github.com/galnetwen/H-Siren "Github") 去狠狠地 Star 吧！

### 注意事项

使用友链页面需要在链接中新建分类，并且把链接放到分类里面才能显示链接。  
比如说某个分类可以用于显示崩坏掉的却暂时不撤销的友链 ~

### 更新日志
**2018.01.08**
- 修复某些浏览器点击回复别人的评论时，页面滑动错误；点击回复不再需要下拉页面找输入框了
- 修复发布版本 Live2D 无法启动的问题

**2018.01.09**
- 修正友链模板中默认头像的图片路径
- 友链分类添加判断，没有友链时不显示友链分类元素

**2018.01.10**
- 添加管理员前台 AJAX 删除评论的功能
- 修改移动端评论列表评论时间的显示效果

**2018.01.14**
- 移除难看烦人的 ServerChan 微信推送
- 添加图片放大功能，在文章页设置中开启
- 修正 卡片式风格 在没有正文内容时的显示效果

**2018.03.21**
- 尝试修复评论表情框在某些主机无法加载的问题

**2018.04.07**
- 新增一个 “高斯模糊” 网页背景风格 样式，在基本设置中选择，效果仅限于 PC 端
- 修正主题样式部分小细节的参数，强迫症 OJ8K

**2018.04.10**
- 修复网页运行天数的 BUG ，需要在后台重新填写建站日期格式  

**2018.05.07**
- 修复评论中贴出代码时，翻页评论时 Prism 代码高亮失效的问题  

**2018.06.08**
- 更改友链页面代码，按照链接分类显示，支持自定义分类名称了  
- 友链页面新增一个“瀑布流”样式，在主题“其它”设置中可以找到并更改  

**2018.07.15**
- 移动端菜单的头像添加登录入口
- 用户头像支持调用第三方插件设置的本地头像
- 不同用户登录时首页显示的头像与名言各自读取
- 修复中文昵称用户的作者页 URL 404 的问题
- 移除失效的多说评论选项与代码
- 移除失效的用户注册模板与选项
- 移除失效的文章分享功能与 css
- 部分功能代码重构，纯属闲着没事
- 修改页面模板显示名称为中文名，可能页面需要重新选择模板编辑发布
- 修改自带随机图逻辑，移除原有的 5 个背景图上传设置，改为指定文件夹内随机读取  
随机图文件夹路径：
```html
H-Siren/images/custom/
```
在该文件夹下，支持多个文件夹、任意文件夹名、任意图片文件名称，删除原来的文件夹也行

**2018.07.31**
- 修复“一言”无法使用的问题  

**2018.08.01**
- 评论框表情候选板添加更多的表情包  

**2018.08.29**
- 修复自定义 CSS 无法覆盖默认 CSS 的问题
- 修复评论提交代码时，Prism 代码高亮不生效的问题  

**2018.10.03**
- 替换 Bootcss CDN 为 Jsdelivr CDN

**2018.10.22**
- 添加了评论框预置文字的修改功能，平滑更新主题必须到主题设置里保存一次设置，否则预置文字为空

**2018.11.17**
- 添加了图片懒加载功能，仅对首页文章列表和文章内的图片生效，减轻服务器加载压力
- 梳理主题设置的部分功能开关顺序，图片放大开关和懒加载开关放到了其它项

**2018.11.19**
- 修复图片懒加载在移动端失效的情况
- 修复多项 PJAX 重载插件函数报错停止运行的 BUG

**2018.11.30**
- 梳理去除部分代码
- 添加一个新的“说说”页面和功能，可自行开启或关闭

**2019.02.10**
- 添加“登录以回复”的按钮外观
- 社交选项更新，去除 QQ 、谷歌+ ，新增豆瓣选项

**2019.02.14**
- 纯英文数字回复拦截不再对博主生效
- 博主可以回复隐私评论了

**2019.03.15**
- 后台登录页支持调用随机图了

**2019.03.23**
- 管理后台新增“高斯”配色 —— 高斯模糊，与前台统一的风格，新视觉享受，在网页右上角的个人资料中选择，仅限 PC 端

**2019.03.28**
- 修复后台编辑器“下载按钮”不能使用的 BUG
- 净化去除图片插入、缩略图、正文中多余的图片标签元素
- 全局字体使用“微软正黑体”，更具逼格
- 整理了一个博主万年没有发现的东西 —— 主题居然自带（BAGUETTEBOX.JS）图片灯箱，只是使用条件苛刻，添加图片时需要把文件“链接到媒体文件”才能使用，也就是 IMG 标签需要 A 标签包裹，现在已写选项在后台与 ZOOMING.JS 二选一

**2019.03.29**
- 移除后台登陆页面的 JS 脚本，重写 CSS 代码

**2019.04.03**
- 添加代码高亮（HIGHLIGHT.JS）的 PJAX 重载功能
- 修复开启 PJAX 后，使用浏览器返回功能返回上一页时，N 个功能没有加载的问题

**2019.04.04**
- 替换评论头像服务器，更换为 V2EX
- 主题已支持 WordPress 5.1.1 ，修复该版本不能正常回复评论的问题

**2019.04.05**
- 更新“高斯”配色文件，匹配 WordPress 后台主题商店与插件商店的外观

**2019.04.14**
- 更新备案号的域名
- 添加一个新的页面滑动特效，在后台选择使用，仅限 PC 端

**2019.04.19**
- 修复评论翻页按钮在“白色简约”网页背景风格下不居中的问题
- 修复主页个人头像和评论头像变形的问题
- 说说页面跟文章页面一样可以点赞了，仅 PC 端可见
- 新增一个选择：移动端也可以开启高斯模糊了