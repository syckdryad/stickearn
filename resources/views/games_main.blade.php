  <nav>
    <h1>Scrambled Words</h1>
    <div id="rules">
      <p class="lead">Unscamble the words.</p>
      <p>Test your skills, get the biggest point</p>
      <p>Click Submit to submit your answer</p>
      <p>Click Quit to quit the game</p>
      <p>Good luck!</p>
      <button id="play-btn" onClick="play()">Let's Play</button>
    </div>
  </nav>

<style>
html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
menu,
nav,
output,
ruby,
section,
summary,
time,
mark,
audio,
video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
  display: block;
}

body {
  line-height: 1;
}

ol,
ul {
  list-style: none;
}

blockquote,
q {
  quotes: none;
}

blockquote:before,
blockquote:after,
q:before,
q:after {
  content: "";
  content: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

html,
body {
  font-size: 16px;
  width: 100%;
  font-family: "Quicksand", sans-serif;
  overflow-x: hidden;
  overflow-y: hidden;
}

nav {
  border-bottom: #303f9f 2px solid;
  width: 100%;
  padding: 0.625em;
  display: block;
  height: 2em;
}

h1 {
  font-size: 2em;
  display: inline-block;
  float: left;
  padding-left: 1em;
}

#rules {
  position: absolute;
  z-index: 999;
  width: 31.25em;
  height: 31.25em;
  text-align: center;
  left: 50%;
  margin-left: -200px;
  top: 50%;
  margin-top: -200px;
}

#rules p {
  margin-bottom: 1.25em;
}

#game-container {
  text-align: center;
  margin: 2em auto;
  width: 100vh;
  height: 80vh;
}

#game-container p {
  display: inline-block;
  margin-right: 1em;
  margin-bottom: 3em;
  font-weight: 500;
  font-size: 1.5em;
}

#game-container p span {
  font-weight: 300;
}

#game-container p#info {
  display: block;
  text-align: center;
  font-size: 2em !important;
  height: 2em;
  margin-bottom: 1em;
}

#scrambled-word {
  font-size: 3em !important;
  font-family: "Anton", sans-serif;
  text-transform: uppercase;
  display: block;
  margin-left: 48px;
  margin-bottom: 1em !important;
}

#scrambled-word p {
  display: block;
  width: 100%;
}

#user-guess {
  display: block;
  width: 20em;
  height: 3em;
  padding-left: 1em;
  margin: 0 auto 1.25em;
  border: 1px solid #000;
  outline-color: #303f9f;
  font-size: 1.1em;
}

small {
  font-size: 0.8em;
}

.lead {
  font-size: 1.2em;
  font-weight: 700;
}

.correct,
.incorrect {
  font-size: 1.5em;
  font-weight: 700;
}

.correct {
  color: green;
  display: block;
}

.incorrect {
  color: red;
  display: block;
}

.hidden {
  visibility: hidden;
}

button {
  cursor: pointer;
  width: 12em;
  height: 3em;
  outline: none;
  text-transform: uppercase;
  font-weight: 400;
  font-size: 1.1em;
}

#submit,
#play-btn {
  background: #fff;
  border: 2px solid #303f9f;
}

#submit:hover,
#play-btn:hover {
  background: #303f9f;
  color: #fff;
  transition: 0.2s background;
}

#reset-btn {
  background: #fff;
  border: none;
  box-shadow: 1px 1px 1px #999;
}

#reset-btn:hover {
  box-shadow: 1px 1px 1px #000;
  transition: 0.2s box-shadow;
}

button:active {
  position: relative;
  top: 1px;
}

</style>