<html><head><title>byWaiting.com</title><link rel="stylesheet" href="stylesheets/skeleton.css">
<link rel="stylesheet" href="stylesheets/app.css">
<script type="text/javascript" src=http://google.com/jsapi/></script>
<script type="text/javascript">google.load('jquery','1.7.1')</script>
<script type="text/javascript" src=http://ajax.cdnjs.com/ajax/libs/mustache.js/0.3.0/mustache.min.js></script>
<script type="text/javascript" src="/javascripts/common.js"></script>

</head>
<body><div id="horizlogo"></div><div id="home-view"><div class="container">
<center><div id="horizlogo" class="sixteen columns">
<img src="images/logo_horiz.png"></div></center>
</div>
<div class="container">
<div id="todo-app">
<div id="new-todo-view"><div class="container" div="" id="sixteen-columns">
<div class="one-third column">
<input id="new-field1" placeholder="Party Size" type="number" maxlength="10">
</div>
<div class="one-third column">
<input id="new-name" placeholder="Name" type="text" maxlength="10">
</div>
<div class="one-third column">
<input id="new-phone" placeholder="Phone Number" type="number" maxlength="10">
</div>
<div class="ui-tooltip-top">Press Enter to save this number</div>
<button id=add>add</button>
</div></div><div id="todos-view"><div class="container">
<div id="sixteen-columns">
<li style=display:none><div class="todo">
  <div class="display">
    <input class="check" type="checkbox">
  <div class="todo-content">212-222-0000</div>
    <span class="todo-destroy"></span>
  </div>
  <div class="edit">
    <input class="todo-input" type="text" value="Across The Stars (Love Theme from Star Wars: Episode II)">
  </div>
</div>
</li>
<ul id="persons-waiting">

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
