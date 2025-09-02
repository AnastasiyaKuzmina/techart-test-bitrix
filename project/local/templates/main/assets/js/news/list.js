const newsItems = document.querySelectorAll(".news__item");
const newsTitles = document.querySelectorAll(".news__title");
const buttons = document.querySelectorAll(".news__button");
const buttonsText = document.querySelectorAll(".news__button-content > p");
const buttonsArrow = document.querySelectorAll(".news__button-content > img");

for (let i = 0; i < buttons.length; i++) {
    const iconSrc = buttonsArrow[i].getAttribute('src');
    const activeIconSrc = buttonsArrow[i].getAttribute('data-active');

    newsItems[i].addEventListener("mouseover", function() {
        newsTitles[i].style.color = "#841844";
        buttons[i].style.backgroundColor = "#841844";
        buttonsText[i].style.color = "white";
        buttonsArrow[i].src = activeIconSrc;
    });

    newsItems[i].addEventListener("mouseout", function() {
        newsTitles[i].style.color = "black";
        buttons[i].style.backgroundColor = "white";
        buttonsText[i].style.color = "#9B407A";
        buttonsArrow[i].src = iconSrc;
    });
}