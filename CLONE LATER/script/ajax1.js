'use strict';


import { access_username, access_password, access_radio, access_submit, check_radio_icon, access_form, create_form, access_alert_user, access_alert_pwd, invalid, valid} from "./module.js";


access_radio.addEventListener("click", () => {
    if (check_radio_icon.classList.contains("fa-circle-check")){
        check_radio_icon.classList.remove("fa-circle-check");
        check_radio_icon.classList.add("fa-circle");
    } else {
        check_radio_icon.classList.remove("fa-circle");
        check_radio_icon.classList.add("fa-circle-check");
    }
});

// user ajax for accesssing user
access_form.addEventListener("submit", function (e) {
    e.preventDefault();
    const data = new FormData(this);
    fetch("../includes/formhandler.php", {
        method: "POST",
        body: data
    })
    .then(response => {
        if (response.ok){
            return response.json()
        } else {
            throw new err("FAILED TO CONNECT!");
        }
    })
    .then(parse => {
        if (parse.GRANTED){
            window.alert(parse.GRANTED)
            valid();
        } else if (parse.ERROR) {
            console.log(parse.ERROR);
            invalid();
        }
    })
    .catch (err => console.log(err));
})