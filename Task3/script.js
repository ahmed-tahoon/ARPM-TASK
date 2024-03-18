document.addEventListener("DOMContentLoaded", function () {
  var button = document.getElementById("myButton");

  button.addEventListener("click", function () {
    var text = document.getElementById("div1").textContent.trim();
    var oddCharacters = "";
    var evenCharacters = "";

    for (var i = 0; i < text.length; i++) {
      if (i % 2 === 0) {
        evenCharacters += text[i];
      } else {
        oddCharacters += text[i];
      }
    }

    moveCharacters(oddCharacters, "odd-char", 1000);
    setTimeout(function () {
      moveCharacters(evenCharacters, "even-char", 1000);
    }, oddCharacters.length * 1000 + 1000);
  });

  function moveCharacters(characters, className, delay) {
    var div1 = document.getElementById("div1");
    var div2 = document.getElementById("div2");

    for (var i = 0; i < characters.length; i++) {
      setTimeout(
        (function (char, className) {
          return function () {
            var span = document.createElement("span");
            span.textContent = char;
            span.classList.add("char-move", className);
            div2.appendChild(span);
            div1.textContent = div1.textContent.substring(1);
          };
        })(characters[i], className),
        delay + i * 100
      );
    }
  }
});
