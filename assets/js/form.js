const signUpPanelBtn = document.querySelector(".signUpPanelBtn");
const logInPanelBtn = document.querySelector(".logInPanelBtn");
const form_wrapper = document.querySelector(".form_wrapper");

signUpPanelBtn.addEventListener("click", ()=>{
    form_wrapper.classList.add("right_panel_active");
})

logInPanelBtn.addEventListener("click", ()=>{
    form_wrapper.classList.remove("right_panel_active");
})