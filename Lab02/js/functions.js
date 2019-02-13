//Anthony Zerka
//CST 336 - Lab 02
      var randomNumber = Math.floor(Math.random() * 99) + 1;
      var guesses = document.querySelector('#guesses');
      var tries = document.querySelector('#tries');
      var lowHi = document.querySelector('#lowHi');
      var guessSubmit = document.querySelector('.guessSubmit');
      var guessfield = document.querySelector('.guessfield');
      var guessCount = 1;
      var resetButton = document.querySelector('#reset');
      resetButton.style.display = 'none';
      guessfield.focus();
      function checkGuess() {
            var userGuess = Number(guessfield.value);
            if (guessCount === 1) {
                guesses.innerHTML = 'Previous guesses: ';
            }
            guesses.innerHTML += userGuess + ' ';
              if (userGuess === randomNumber) {
                tries.innerHTML = 'Congratulations! You got it right! Go buy a lotto ticket!';
                tries.style.backgroundColor = 'green';
                lowHi.innerHTML = '';
                setGameOver();
              } else if (guessCount === 7) {
                tries.innerHTML = 'Looks like today isnt your day... Sorry, you lost!';
                setGameOver();
              } else {
                tries.innerHTML = 'WRONG!';
                tries.style.backgroundColor = 'red';
                if(userGuess < randomNumber) {
                  lowHi.innerHTML = 'Guess was too low!';
                } else if(userGuess > randomNumber) {
                  lowHi.innerHTML = 'Guess was too high!';
                }
              }
              guessCount++;
              guessfield.value = '';
              guessfield.focus();
      }
      guessSubmit.addEventListener('click', checkGuess);
      function setGameOver() {
        guessfield.disabled = true;
        guessSubmit.disabled = true;
        resetButton.style.display = 'inline';
        resetButton.addEventListener('click', resetGame);
      }
      function resetGame() {
        guessCount = 1;
        var resetParas = document.querySelectorAll('.resultParas p');
        for (var i = 0 ; i < resetParas.length ; i++) {
          resetParas[i].textContent = '';
        }
        resetButton.style.display = 'none';
        guessfield.disabled = false;
        guessSubmit.disabled = false;
        guessfield.value = '';
        guessfield.focus();
        tries.style.backgroundColor = 'white';
        randomNumber = Math.floor(Math.random() * 99) + 1;
      }