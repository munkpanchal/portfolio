function createBoxes() {
    const container = document.getElementById("fixed-bg");
    const windowWidth = window.innerWidth;
    const windowHeight = window.innerHeight;

    let boxCount = 10;

    if (window.innerWidth <= 600) {
        boxCount = 5;
    }

    const boxSize = windowWidth / boxCount; // Adjust box size as needed

    // const numBoxes = Math.floor(windowWidth / boxSize);

    const boxRow = Math.floor(windowHeight / boxSize) + 1;

    for (let i = 0; i < boxCount; i++) {
        for (let j = 0; j < boxRow; j++) {
            const box = document.createElement("div");
            box.classList.add("box");
            const innerText = document.createElement("span");
            innerText.textContent = "</>";
            box.appendChild(innerText);

            box.style.width = boxSize + "px";
            box.style.height = boxSize + "px";
            container.appendChild(box);
        }
    }
}

createBoxes();
window.addEventListener("onload", createBoxes); // Recalculate and create boxes on window resize

// Adding interactivity to hamburger

const hamburger = document.querySelector(".hamburger");
const header = document.querySelector(".header");
const dropdown = document.querySelector(".dropdown");

hamburger.addEventListener("click", () => {
    console.log(header.classList);
    if (header.classList.contains("active")) {
        header.classList.remove("active");
        dropdown.classList.remove("active");
    } else {
        header.classList.add("active");
        dropdown.classList.add("active");
    }
});

const cursorDot = document.querySelector("[data-cursor-dot]");
const cursorBox = document.querySelector("[data-cursor-box]");

window.addEventListener("mousemove", (e) => {
    const x = e.clientX;
    const y = e.clientY;

    cursorDot.style.left = x + "px";
    cursorDot.style.top = y + "px";

    cursorBox.animate(
        {
            left: x + "px",
            top: y + "px",
        },
        { duration: 400, fill: "forwards" }
    );
});
