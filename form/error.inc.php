<style type="text/css">
* {
  margin: 0;
  padding: 0;
  border: 0;
}

/* =============================================

Navigation Styling

===============================================*/

header {
  padding: 1% 10%;
  background-color: #8B1F41;
  position: relative;
}

header img {
  margin: 5px 0 0;
}

header nav {
  float: right;
  position: absolute;
  top: 40%;
  right: 10%;
}

header nav ul li {
  display: inline-block;
  list-style: none;
}

header nav ul li a {
  text-decoration: none;
  color: white;
  margin: 0 30px;
  transition: .3s;
  font-size: 14pt;
}

/* =============================================

Univeresal

===============================================*/

main {
  min-height: calc(100vh - 157px);
  width: 75%;
  margin: 0 auto;
}

h1,
h2,
h3,
h4 {
  font-family: 'Source Code Pro',monospace;
}

h1,
h2,
h3,
p {
  color: #200d13;
}

h1 {
margin: 20px 0;
  font-size: 36pt;
  font-weight: bold;
}

main p {
  margin: 5% 0;
  font-size: 12pt;
}

p,
a,
li,
.label_input_wrap {
  font-family: 'Lato', sans-serif;
}

main a {
  text-decoration: none;
  color: #200d13;
  transition: .3s;
}

a:hover {
  border-bottom: solid 2pt #0021A5;
  transition: .3s;
}

a:active {
  border-bottom: solid 2pt #E87722;
  transition: .3s;
}

/* =============================================

Footer Styling

===============================================*/

footer {
  background-color: #8B1F41;
}

footer ul {
  text-align: center;
}

footer ul li {
  display: inline-block;
  list-style: none;
  color: white;
  margin: 1% 10%;
}

footer ul li a {
  color: white;
  text-decoration: none;
  transition: .3s;
}

</style>

</head>
<body>
  <header>
    <a href="index.html"><img src="images/logo.png" alt="kg logo" width="75" /></a>
    <nav>
      <ul>
        <li><a href="work.html">Work</a></li>
        <li><a href="resume.html">R&eacute;sum&eacute;</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
  </header>

<main>
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
</main>

<footer>
  <ul>
    <li><a href="mailto:georgi.kayce@ufl.edu">georgi.kayce@ufl.edu</a></li>
    <li><a href="tel:2405294709">(240) 529-4709</a></li>
    <li>Washington, DC</li>
  </ul>
</footer>
