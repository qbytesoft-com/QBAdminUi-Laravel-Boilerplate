// Script for adding ripple efect to the button element
let buttonWithRippleClass = document.querySelectorAll(".btn-ripple");
buttonWithRippleClass.forEach(btn => {
    btn.addEventListener("mousedown", function(e) {
        // let x = e.clientX - e.target.offsetLeft;
        // let y = e.clientY - e.target.offsetTop;
        
        let rippleElement = document.createElement("span");
        // rippleElement.style.left = x + "px";
        // rippleElement.style.top = y + "px";

        this.appendChild(rippleElement);

        setTimeout(() => {
            rippleElement.remove();
        },500)
    })
})

