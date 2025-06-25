console.log(document.getElementById("test").innerText);

let tags = document.querySelector(".nav-links").children;
for (let i = 0; i < tags.length; i++) {
    tags[i].addEventListener("click", function (event) {
        alert(event.target.innerText);
    });
}

document.querySelectorAll(".title").forEach((abc) => {
    abc.onclick = function () {
        this.innerHTML = `
            <h3><a href="#">This is by JS</a></h3>
            <p>This is assigned dynamically</p>
        `;
        this.style.color = "yellow";
        this.style.backgroundColor = "#000000";
        this.style.borderRadius = "10px";
        this.style.padding = "20px";
    };
});
