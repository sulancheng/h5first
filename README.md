# [HTML5 Boilerplate](https://html5boilerplate.com)

[![Build Status](https://travis-ci.org/h5bp/html5-boilerplate.svg)](https://travis-ci.org/h5bp/html5-boilerplate)
[![devDependency Status](https://david-dm.org/h5bp/html5-boilerplate/dev-status.svg)](https://david-dm.org/h5bp/html5-boilerplate#info=devDependencies)

HTML5 Boilerplate is a professional front-end template for building
fast, robust, and adaptable web apps or sites.

This project is the product of many years of iterative development and
combined community knowledge. It does not impose a specific development
philosophy or framework, so you're free to architect your code in the
way that you want.

* Homepage: [https://html5boilerplate.com](https://html5boilerplate.com)
* Source: [https://github.com/h5bp/html5-boilerplate](https://github.com/h5bp/html5-boilerplate)
* Twitter: [@h5bp](https://twitter.com/h5bp)


## Quick start

Choose one of the following options:

1. Download the latest stable release from
   [html5boilerplate.com](https://html5boilerplate.com/) or create a
   custom build using [Initializr](http://www.initializr.com).
2. Clone the git repo — `git clone
   https://github.com/h5bp/html5-boilerplate.git` - and checkout the
   [tagged release](https://github.com/h5bp/html5-boilerplate/releases)
   you'd like to use.


## Features

* HTML5 ready. Use the new elements with confidence.
* Designed with progressive enhancement in mind.
* Includes:
  * [`Normalize.css`](https://necolas.github.com/normalize.css/)
    for CSS normalizations and common bug fixes
  * [`jQuery`](https://jquery.com/) via CDN, with a local fallback
  * A custom build of  [`Modernizr`](http://modernizr.com/) for feature
    detection
  * [`Apache Server Configs`](https://github.com/h5bp/server-configs-apache)
    that, among other, improve the web site's performance and security
* Placeholder CSS Media Queries.
* Useful CSS helper classes.
* Default print styles, performance optimized.
* An optimized version of the Google Universal Analytics snippet.
* Protection against any stray `console` statements causing JavaScript
  errors in older browsers.
* "Delete-key friendly." Easy to strip out parts you don't need.
* Extensive inline and accompanying documentation.


## Browser support

* Chrome *(latest 2)*
* Edge *(latest 2)*
* Firefox *(latest 2)*
* Internet Explorer 8+
* Opera *(latest 2)*
* Safari *(latest 2)*

*This doesn't mean that HTML5 Boilerplate cannot be used in older browsers,
just that we'll ensure compatibility with the ones mentioned above.*

If you need legacy browser support (IE 6+, Firefox 3.6+, Safari 4+) you
can use [HTML5 Boilerplate v4](https://github.com/h5bp/html5-boilerplate/tree/v4),
but is no longer actively developed.


## Documentation

Take a look at the [documentation table of contents](dist/doc/TOC.md).
This documentation is bundled with the project, which makes it readily
available for offline reading and provides a useful starting point for
any documentation you want to write about your project.


## Contributing

Hundreds of developers have helped make the HTML5 Boilerplate what it is
today. Anyone and everyone is welcome to [contribute](CONTRIBUTING.md),
however, if you decide to get involved, please take a moment to review
the [guidelines](CONTRIBUTING.md):

* [Bug reports](CONTRIBUTING.md#bugs)
* [Feature requests](CONTRIBUTING.md#features)
* [Pull requests](CONTRIBUTING.md#pull-requests)


## License

The code is available under the [MIT license](LICENSE.txt).

第一次写h5 ，点击事件都不熟悉：
1.妹子框架的点击事件：
   $('.js-demo-slider-btn').on('click', function() {
      var action = this.getAttribute('data-action');
      if (action === 'add') {
        $slider.flexslider('addSlide', getSlide());
      } else {
        var count = $slider.flexslider('count');
        count > 1 && $slider.flexslider('removeSlide', $slider.flexslider('count') - 1);
      }
    });
    
    jQuery  :
    语法
  $("p").click(function(){
      alert("段落被点击了。");
  });
 2.基本点击事件：
 <script>
 function changetext(id)
 {
 id.innerHTML="谢谢!";
 }
 </script>
 </head>
 <body>
 <h1 onclick="changetext(this)">请点击该文本</h1>
 <button type="button" onclick="loadXMLDoc()">获取我的 CD</button>
 </body>
 
 定义的一个方法：
 function loadXMLDoc()
 {
 	var xmlhttp;
 	if (window.XMLHttpRequest)
 	{
 		//  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
 		xmlhttp=new XMLHttpRequest();
 	}
 	else
 	{
 		// IE6, IE5 浏览器执行代码
 		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 	}
 	xmlhttp.onreadystatechange=function()
 	{
 		if (xmlhttp.readyState==4 && xmlhttp.status==200)
 		{
 			document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
 		}
 	}
 	xmlhttp.open("GET","/try/ajax/ajax_info.txt",true);
 	xmlhttp.send();
 }
 
 
<p>点击按钮就可以执行 <em>displayDate()</em> 函数。</p>
<button id="myBtn">点击这里</button>
<script>
document.getElementById("myBtn").onclick=function(){displayDate()};
function displayDate()
{
document.getElementById("demo").innerHTML=Date();
}
</script>
<p id="demo"></p>
</body>
2.关于横向布局 ：
(1)我们对div设置一个float浮动属性即可解决不并排显示，只要你的并排div盒子总宽度小于或等于最外层盒子宽度即可实现多个div对象并排显示。float:left  会随着屏幕宽度高度的变化 实现排版的变化。
(2).我们加入display:inline即可解决实现同行并排显示div盒子对象。
    未设置display样式效果截图：display: inline
    
    block元素的特点是：  块 有自动换行 <h> <p> <div>
    　　总是在新行上开始；
    　inline元素的特点是：  内联  排一排。 
    　　和其他元素都在一行上；
 （3）position:static  标签默认的就是这个   position:fixed 定位，窗口滚动它也不滚动
 position:relative 相对定位元素的定位是相对其正常位置
 position: absolute 定位
      绝对定位的元素的位置相对于最近的已定位父元素，如果元素没有已定位的父元素，那么它的位置相对于<html>:

3.关于大量的数据提交 可以考虑表单提交： 也可以FormData对象是html5的一个对象。
4.关于节点的操作：
<div id="test">
<div></div>
<div></div>
</div>
var a = docuemnt.getElementById("test").getElementsByTagName("div");  这样是没有问题的
var b =document.getElementById("test").childNodes;  

<div id="test">
<div></div>
<div></div>
</div>
<script>
function dom() {
var s= document.getElementById("test");
del_ff(s);    //清理空格
var chils= s.childNodes;  //得到s的全部子节点
var par=s.parentNode;   //得到s的父节点
var ns=s.nextSbiling;   //获得s的下一个兄弟节点
var ps=s.previousSbiling;  //得到s的上一个兄弟节点
var fc=s.firstChild;   //获得s的第一个子节点
var lc=s.lastChile;   //获得s的最后一个子节点

}

function del_ff(elem){
var elem_child = elem.childNodes;
for(var i=0; i<elem_child.length;i++){
if(elem_child[i].nodeName == "#text" && !/\s/.test(elem_child.nodeValue))
{elem.removeChild(elem_child)
}
}
}
</script>


对于json的解析：
不建议使用eval（）函数，因为eval（）接受任意的字符串，并当作JavaScript代码来处理,这个机制已经有安全隐患了
var str='{ "name": "John" }';
var obj = eval  ('(' + str + ')');
alert(obj.name);
  
$.parseJSON()和JSON.parse()函数用于将格式完好的JSON字符串转为与之对应的JavaScript对象。所谓"格式完好"，就是要求指定的字符串必须符合严格的JSON格式，
例如：属性名称必须加双引号、字符串值也必须用双引号。其次，JSON标准不允许字符串中出现"控制字符"，正确写法应该是使用两个反斜杠，以免被JS解析器直接转义。
  
1、JSON字符串转换为JSON对象
var str='{ "name": "John" ,"age": "24" }';
var obj = $.parseJSON(str);
alert(obj.name);  //John
  
var str = '{ "name": "John", "age": "24" }';
var obj = JSON.parse(str);
alert(obj.name);  //John
  
2、将JSON对象转换为字符串
var obj={name: "John", age: "24"};
var last=JSON.stringify(obj);
alert(last);  //'{name: "John", age: "24"}'
  
var obj={name: "John", age: "24"};
var last=obj.toJSONString();
alert(last);  //'{name: "John", age: "24"}'
  
3、解析读取json对象
var str={
  "result":{
    "age":"33",
    "id":"2server",
    "name":"mady"
  }
};
alert(str.result.age);  //33
  
var result = $.parseJSON( '[ 1, true, "CodePlayer" ]' );
alert( result[1] );  // CodePlayer
  
var result = $.parseJSON( "\"专注于编程开发技术分享\"" );
alert(result);  //专注于编程开发技术分享


4.表单提交的多种方式：
（1）
 <body>
    <form action="" id="myform">
        用户名<input type="text" name="username"/>
        密码<input type="password" name="password"/>
        性别<input type="radio" name="sex" value="男人">man
           <input type="radio" name="sex" value="女人">woman
    </form>

    <a href="#" style="text-decoration: none;">使用ajax提交表单数据</a>
  </body>
<script type="text/javascript">
        $(document).ready(function(){
            $("a").click(function(){
                 $.ajax({    
                    type:'post',        
                    url:'FormServlet',    
                    data:$("#myform").serialize(),    
                    cache:false,    
                    dataType:'json',    
                    success:function(data){   
                        alert("请求成功");
                    }    
                });    
            });
        });
    </script>

（2）
$.ajax({
                cache: true,
                type: "POST",
                url:ajaxCallUrl,
                data:$('#yourformid').serialize(),// 你的formid
                async: false,
                error: function(request) {
                    alert("Connection error");
                },
                success: function(data) {
                    $("#commonLayout_appcreshi").parent().html(data);
                }
            });
（3）使用formdata上传表单 包含 文件图片上传。
var fd = new FormData(document.getElementById("myformid"));
//var fd = new FormData($("#myformid"));
fd.append("CustomField", "This is some extra data");
$.ajax({
  url: "stash.php",
  type: "POST",
  data: fd,
  processData: false,  // 告诉jQuery不要去处理发送的数据
  contentType: false   // 告诉jQuery不要去设置Content-Type请求头
   success: function(msg){
       alert( "Data Saved: " + msg );
    }
});




