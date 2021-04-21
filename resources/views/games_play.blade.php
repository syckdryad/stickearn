<div id="game-container">
  <p>Score: <span id="score"><input type="text" id="point" value="{{$point}}" readonly></span></p>

  <div id="guess-container">
    <p id="scrambled-word"></p>
    <div id="scramble-div">
      <input type="text" id="scramble-words" value="{{ $scramble_words }}" readonly>
    </div>

    <input type="hidden" id="idx" value="{{$idx}}">
    <div id="answer-div">
      <input id="user-guess" type="text" placeholder="Enter your guess">
    </div>
    <button id="submit" onClick="submit()">Submit</button>
    <button id="reset-btn" onClick="reset()">Quit</button>
  </div>

</div>

<style>
  #scramble-div {
  display: block;
  width: 350px;
  height: 3em;
  margin: auto;
  border: 1px solid #000;
  outline-color: #e18a07;
  font-size: 2.5em;
  text-align: center; 
  font-weight: bold;
  border: none;
  border-color: transparent;
}

#answer-div {
  margin-top: 20px;
}

#point {
  font-size:20px;
  border: none;
  border-color: transparent;
}

#scramble-words {
  font-size: 1.5em;
  border: none;
  border-color: transparent;
}
</style>