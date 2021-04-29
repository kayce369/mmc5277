<style type="text/css">
* {
  margin: 0;
  padding: 0;
  border: 0;
}

body {
  height: 100vh;
  background: #F1F1F1;
}

h1 {
  font-family: 'Source Code Pro', monospace;
  font-size: 36pt;
  padding: 20px 0;
}

p,
li {
  font-family: 'Lato', sans-serif;
  font-size: 14pt;
  line-height: 2;
}

a {
  color: #0021A5;
  text-decoration: none;
  transition: .3s;
}

a:hover {
  text-decoration: underline 2;
  text-decoration-color: #0021A5;
  transition: .3s;
}

a:active {
  text-decoration: underline 2;
  text-decoration-color: #E87722;
  transition: .3s;
}

.container {
  width: 75%;
  margin: auto;
}

</style>

<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>
