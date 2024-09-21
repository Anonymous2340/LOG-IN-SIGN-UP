'use strict';

// export elements
export const access_username = document.getElementById("username");
export const access_password = document.getElementById("password");
export const access_radio = document.getElementById("radio-elem");
export const access_alert_user = document.getElementById("user-dont-exist"); 
export const access_alert_pwd = document.getElementById("password-not-match");
export const create_username_alert = document.getElementById("create_username_alert");
export const access_submit = document.getElementById("submit");
export const check_radio_icon = document.querySelector(".checker");
export const create_username = document.getElementById("create-username");
export const create_password = document.getElementById("create-password");
export const access_form = document.getElementById("login-form");
export const create_form = document.getElementById("signup-form");
export const profile_logo = document.getElementById("profile-symbol");
export const check_logo = document.getElementById("check-symbol");

export function valid() {
    if (profile_logo.classList.contains("active")) {
        profile_logo.classList.remove("active");
        check_logo.classList.add("active");
    } else {
        check_logo.classList.remove("active");
        profile_logo.classList.add("active");
    }
};
export function invalid() {
    if (!profile_logo.classList.contains("error")){
        profile_logo.classList.add("error");
        profile_logo.setAttribute("fill", '#EA3323');
    } else {
        profile_logo.classList.remove("error");
        profile_logo.setAttribute("fill", '#75FBFD');
    }
}