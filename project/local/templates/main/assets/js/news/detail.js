var button = document.getElementById("button");
var buttonText = document.getElementById("buttonText");
var buttonArrow = document.getElementById("buttonImg");

const iconSrc = buttonArrow.getAttribute('src');
const activeIconSrc = buttonArrow.getAttribute('data-active');

button.addEventListener("mouseover", function() {
    button.style.backgroundColor = "#841844";
    buttonText.style.color = "white";
    buttonArrow.src = activeIconSrc;
});

button.addEventListener("mouseout", function() {
    button.style.backgroundColor = "white";
    buttonText.style.color = "#9B407A";
    buttonArrow.src = iconSrc;
});