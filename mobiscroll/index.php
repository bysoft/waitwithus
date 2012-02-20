<html><head><title>byWaiting.com</title><link rel="stylesheet" href="stylesheets/skeleton.css">
<link rel="stylesheet" href="stylesheets/app.css">
<script type="text/javascript" src=http://google.com/jsapi/></script>
<script type="text/javascript">google.load('jquery','1.7.1')</script>
<script type="text/javascript" src=https://raw.github.com/janl/mustache.js/master/mustache.js></script>
<script type="text/javascript" src=javascripts/common.js></script>
</head>
<body><div id="horizlogo"></div><div id="home-view"><div class="container">
<center><div id="horizlogo" class="sixteen columns">
<img src="images/logo_horiz.png"></div></center>
</div>
<div class="container">
<div id="todo-app">
<div><div class="container" id="sixteen-columns">
<div class="one-third column">
<input id="new-field1" placeholder="Party Size" type="number" maxlength="10">
</div>
<div class="one-third column">
<input id="new-name" column"="" placeholder="Name" type="text" maxlength="10">
</div>
<div class="one-third column">
<input id="new-phone" column"="" placeholder="Phone Number" type="number" maxlength="10">
</div>
<button id=add>add</button>
<div class="ui-tooltip-top">Press Enter to save this number</div>
</div></div><div id="todos-view"><div class="container">
<div id="sixteen-columns">
<li><div class="wait-wrap" style=display:none>
  <div class="display">
    <input class="check" type="checkbox">
  <div class="todo-content">
<span class='name'>name placeholder</span>
<span class=phone>212-121-1212</span>
<span class=field1>5</span>
</div>
    <span class="todo-destroy"></span>
  </div>
  <div class="edit">
    <input class="todo-input" type="text" value="Across The Stars (Love Theme from Star Wars: Episode II)">
  </div>
</div>
</li>
<ul id="persons-waiting">
<li><div class="wait-wrap" style=display:none>
  <div class="display">
    <input class="check" type="checkbox">
  <div class="todo-content">
<span class='name'>name placeholder</span>
<span class=phone>212-121-1212</span>
<span class=field1>5</span>
</div>
    <span class="todo-destroy"></span>
  </div>
  <div class="edit">
    <input class="todo-input" type="text" value="Across The Stars (Love Theme from Star Wars: Episode II)">
  </div>
</div>
</li>
<script id="wait-wrap" type="text/x-jquery-tmpl">
  var template = $('#persons-waiting>li').eq(0),
      data = 'http://byapp.co/v1/waiting'
  var html = Mustache().to_html(template,data)
  console.log(html)
</script>
</ul>
</div>
</div>
</div><div id="stats-view">
  <span class="todo-count">
    <span class="number">4</span>
    <span class="word">
      parties
    </span>
    in queue.
  </span>



</div></div>
</div>

</div><div id="holder"><div id="five-columns"></div></div><div id="buildings"></div>

<div id="footer"><p>Built at API Hackday NYC 2012</p></div>

</body></html>
