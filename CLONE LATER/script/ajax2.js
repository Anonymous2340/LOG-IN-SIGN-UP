import { invalid, valid, profile_logo, check_logo, create_username, create_password, create_form, create_username_alert, access_radio} from "./module.js";

access_radio.addEventListener("click", () => {
    if (check_radio_icon.classList.contains("fa-circle-check")){
        check_radio_icon.classList.remove("fa-circle-check");
        check_radio_icon.classList.add("fa-circle");
    } else {
        check_radio_icon.classList.remove("fa-circle");
        check_radio_icon.classList.add("fa-circle-check");
    }
});

// use ajax for creating account
create_form.addEventListener("submit", (e) => {
    e.preventDefault();
    const formdata = new FormData(create_form);
    fetch("../includes/formhandler.php", {
        method: "POST",
        body: formdata
    })
    .then(response => response.json())
    .then(parse => {
        if (parse.SUCCESS && parse.AVAILABLE){
            valid();
        } else if (parse.ERROR) {
            invalid();
        }
        console.log(parse);
    })
    .catch(error => console.log(error.message))
})