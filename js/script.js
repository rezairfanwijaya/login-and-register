// make dark mode
//select element with attribute id="mode" in index.html
let mode = document.getElementById("mode")

//select element with attribute id="logo" in index.html
let logo = document.getElementById("logo")

//select element with attribute id="github" in index.html
let github = document.getElementById("github")

// behavior if element with attribute id="mode" onClick
mode.onclick = () => {
        // give class dark tp body
        document.body.classList.toggle("dark")

        // give class ActiveLogo tp logo
        logo.classList.toggle("ActiveLogo")

        // give class ActiveMode to mode (sun/moon)
        mode.classList.toggle("ActiveMode")

        // give class ActiveGithub to github logo
        github.classList.toggle("ActiveGithub")
    }
    // make dark mode



//see password
//select element with attribute id="visibitityPassword" in index.html
let seePassword = document.getElementById("visibitityPassword")

//select element with attribute id="password" in index.html
let password = document.getElementById("password")

//select element with attribute id="visible" in index.html
let text = document.getElementById("visible")

// behavior if element with attribute id="visibitityPassword" onClick
seePassword.onclick = () => {
    // check type of input for password 
    if (password.type == "password") {
        // change type from "password" to "text"
        password.type = "text"

        // change color
        text.style.color = "#59c714"
    } else {
        // change type from "text" to "password"
        password.type = "password"

        // change color
        text.style.color = "#525252"
    }

}