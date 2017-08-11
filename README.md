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
    $(selector).bind(event,data,function,map)
    $("p").bind("click",function(){
        alert("这个段落被点击了。");
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
(1)我们对div设置一个float浮动属性即可解决不并排显示，只要你的并排div盒子总宽度小于或等于最外层盒子宽度即可实现多个div对象并排显示。float:left
(2).我们加入display:inline即可解决实现同行并排显示div盒子对象。
    未设置display样式效果截图：display: inline
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




